<?php
include 'dbconfig.php';

$title = $_POST['title'];
$sem = $_POST['sem'];
$subject = $_POST['subject'];
$uploadedby = $_POST['uploadedby'];

$folder = "uploads/questionpapers/";
if(!is_dir($folder)){
    mkdir($folder,0777,true);
}

$file_name = time()."_".$_FILES['file']['name'];
$file_path = $folder.$file_name;

move_uploaded_file($_FILES['file']['tmp_name'], $file_path);

$qry = "INSERT INTO questionpaper
(title, sem, subject, uploadedby, file)
VALUES
('$title','$sem','$subject','$uploadedby','$file_path')";

mysqli_query($conn,$qry);

echo "<script>
alert('Question Paper Uploaded Successfully');
window.location='viewqp.php';
</script>";
?>
