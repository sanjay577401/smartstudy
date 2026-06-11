<?php
include 'adminheader.php';
if(isset($_POST['add']))
{
    
    $subject=$_POST['subject'];
    $semester=$_POST['semester'];
     include 'dbconfig.php';
       $sql="insert into subject(subject,semester)value('$subject','$semester');";
       if($conn->query($sql))
        {
            echo"<script>alert('Data Inserted Succesfully')</script>";
           echo"<meta http-equiv='refresh' content='0;viewsubject.php'/>";

        }
        else{
            echo $sql;
            echo"<script>alert('Failes to Insert Data')</script>";
           // echo"<meta http-equiv='refresh' content='0;ulogin.php'/>";

         }
}

    else {
   header("location:subject.php");
}

?>

