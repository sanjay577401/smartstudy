<?php
include 'userheader.php';
include 'dbconfig.php';
?>

<link rel="stylesheet" href="style.css"/>

<center><h3>View Notes</h3></center>

<table border="1" width="100%" cellpadding="10" cellspacing="0">
    <tr>
        <th>Sl No</th>
        <th>Notes Title</th>
        <th>Semester</th>
        <th>Subject</th>
        <th>Uploaded By</th>
        <th>Uploaded Date</th>
        <th>File</th>
        
    </tr>

<?php
$qry = "
    SELECT 
        n.notesid,
        n.notestitle,
        n.sem,
        n.uplodby,
        n.uploddate,
        n.file,
        s.subject
    FROM notes n
    JOIN subject s ON n.subject = s.id
    ORDER BY n.notesid DESC
";

$res = mysqli_query($conn, $qry);
$i = 1;

while ($row = mysqli_fetch_assoc($res)) {
?>
    <tr>
        <td><?php echo $i++; ?></td>
        <td><?php echo $row['notestitle']; ?></td>
        <td><?php echo $row['sem']; ?></td>
        <td><?php echo $row['subject']; ?></td>
        <td><?php echo $row['uplodby']; ?></td>
        <td><?php echo date("d-m-Y h:i A", strtotime($row['uploddate'])); ?></td>
        <td>
            <a href="<?php echo $row['file']; ?>" target="_blank" class="btn btn-view">
                View / Download
            </a>
        </td>
       
    </tr>
<?php } ?>
</table>

<?php include 'footer.php'; ?>
