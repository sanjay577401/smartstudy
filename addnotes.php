<?php include 'adminheader.php'; ?>
<link rel="stylesheet" href="style.css"/>

<center><h3>Add Notes</h3></center>

<form method="POST" enctype="multipart/form-data">

    Notes Title
    <input type="text" name="notestitle" required>
    <br><br>

    Semester
    <select name="semester" onchange="this.form.submit()" required>
        <option value="">Select Semester</option>
        <?php
        for ($i = 1; $i <= 6; $i++) {
            $selected = (isset($_POST['semester']) && $_POST['semester'] == $i) ? 'selected' : '';
            echo "<option value='$i' $selected>$i</option>";
        }
        ?>
    </select>

    <br><br>

    Subject
    <select name="subject" required>
        <option value="">Select Subject</option>

        <?php
        include 'dbconfig.php';

        if (isset($_POST['semester'])) {
            $semester = $_POST['semester'];
            $qry = "SELECT id, subject FROM subject WHERE semester='$semester'";
            $res = mysqli_query($conn, $qry);

            while ($row = mysqli_fetch_assoc($res)) {
                echo "<option value='{$row['id']}'>{$row['subject']}</option>";
            }
        }
        ?>
    </select>

    <br><br>

    Upload File (PDF / Word)
    <input type="file" name="notesfile" accept=".pdf,.doc,.docx" required>

    <br><br>

    <input type="submit" name="add" value="Add Notes">
</form>
<?php
if (isset($_POST['add'])) {

    include 'dbconfig.php';

    $notestitle = $_POST['notestitle'];
    $semester   = $_POST['semester'];
    $subject    = $_POST['subject'];

    $uploadby   = "Admin";
    $uploaddate = date("Y-m-d H:i:s");

    // File handling
    $filename   = $_FILES['notesfile']['name'];
    $tmpname    = $_FILES['notesfile']['tmp_name'];
    $folder     = "uploads/" . time() . "_" . $filename;

    $file_ext = strtolower(pathinfo($filename, PATHINFO_EXTENSION));
    $allowed  = array("pdf", "doc", "docx");

    if (in_array($file_ext, $allowed)) {

        if (move_uploaded_file($tmpname, $folder)) {

            $qry = "INSERT INTO notes 
                    (notestitle, uplodby, uploddate, sem, subject, file) 
                    VALUES 
                    ('$notestitle', '$uploadby', '$uploaddate', '$semester', '$subject', '$folder')";

            if (mysqli_query($conn, $qry)) {
                echo "<script>alert('Notes uploaded successfully');</script>";
            } else {
                echo "<script>alert('Database error');</script>";
            }

        } else {
            echo "<script>alert('File upload failed');</script>";
        }

    } else {
        echo "<script>alert('Only PDF & Word files allowed');</script>";
    }
}
?>

<?php include 'footer.php'; ?>
