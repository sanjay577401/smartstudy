<?php include 'adminheader.php'; ?>
<link rel="stylesheet" href="style.css"/>

<center><h1>View Subject</h1></center>

<center>
<table border="2">
    <tr>
        <th>Semester</th>
        <th>Subject</th>
        <th>Action</th>
    </tr>

<?php
include 'dbconfig.php';

$sql = "SELECT * FROM subject ORDER BY semester";
$result = $conn->query($sql);

$current_sem = "";

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {

        $id = $row['id'];
        $subject = $row['subject'];
        $semester = $row['semester'];

        if ($current_sem != $semester) {
            $current_sem = $semester;
            echo "<tr>
                    <td><b>Semester $semester</b></td>
                    <td>$subject</td>
                    <td>
                        <a class='btn btn-delete' href='deletesubject.php?id=$id' 
                           class='delete-btn'
                           onclick=\"return confirm('Are you sure you want to delete?');\">
                           Delete
                        </a>
                    </td>
                  </tr>";
        } else {
            echo "<tr>
                    <td></td>
                    <td>$subject</td>
                    <td>
                        <a class='btn btn-delete' href='deletesubject.php?id=$id' 
                           class='delete-btn'
                           onclick=\"return confirm('Are you sure you want to delete?');\">
                           Delete
                        </a>
                    </td>
                  </tr>";
        }
    }
}
?>
</table>
</center>

<?php include 'footer.php'; ?>
