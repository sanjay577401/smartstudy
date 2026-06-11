<?php
include 'userheader.php';
include 'dbconfig.php';
?>

<link rel="stylesheet" href="style.css"/>

<center><h3>View Question Papers</h3></center>

<table border="1" width="100%" cellpadding="10" cellspacing="0">
    <tr>
        <th>Sl No</th>
        <th>Question Paper Title</th>
        <th>Semester</th>
        <th>Subject</th>
        <th>Uploaded By</th>
        <th>Uploaded Date</th>
        <th>File</th>
        
    </tr>

<?php
$qry = "
    SELECT 
        q.id,
        q.qptitle,
        q.sem,
        q.uploadby,
        q.uploaddate,
        q.file,
        s.subject
    FROM question_paper q
    JOIN subject s ON q.subject = s.id
    ORDER BY q.id DESC
";

$res = mysqli_query($conn, $qry);
$i = 1;

while ($row = mysqli_fetch_assoc($res)) {
?>
    <tr>
        <td><?php echo $i++; ?></td>
        <td><?php echo $row['qptitle']; ?></td>
        <td><?php echo $row['sem']; ?></td>
        <td><?php echo $row['subject']; ?></td>
        <td><?php echo $row['uploadby']; ?></td>
        <td><?php echo date("d-m-Y h:i A", strtotime($row['uploaddate'])); ?></td>
        <td>
            <a href="<?php echo $row['file']; ?>" target="_blank" class="btn btn-view">
                View / Download
            </a>
        </td>
      
           
            
        
    </tr>
<?php } ?>
</table>

<?php include 'footer.php'; ?>
