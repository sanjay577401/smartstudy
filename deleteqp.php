<?php
include 'dbconfig.php';

$id=$_GET['id'];

$r=mysqli_fetch_assoc(mysqli_query($conn,"SELECT file FROM questionpaper WHERE qpid=$id"));
unlink($r['file']);

mysqli_query($conn,"DELETE FROM questionpaper WHERE qpid=$id");

header("Location:viewqp.php");
?>
