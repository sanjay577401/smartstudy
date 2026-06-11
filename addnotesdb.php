<?php
include 'adminheader.php';
if(isset($_POST['add']))
{
    
    $sino=$_POST['sino'];
    $subject=$_POST['subject'];
    $sem=$_POST['sem'];
     $course=$_POST['course'];
     include 'dbconfig.php';
       $sql="insert into view(sino,subject,sem,course)value('$sino','$subject','$sem','$course');";
       if($conn->query($sql))
        {
            echo"<script>alert('Data Inserted Succesfully')</script>";
            echo"<meta http-equiv='refresh' content='0;addnotes.php'/>";

        }
        else{
           echo"<script>alert('Failes to Insert Data')</script>";
            echo"<meta http-equiv='refresh' content='0;view.php'/>";
         }
}

    else {
   header("location:addnotes.php");
}

?>

