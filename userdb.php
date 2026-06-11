`<?php
include 'userheader.php';
if(isset($_POST['login']))
{
    
    $phno=$_POST['uphno'];
    $password=$_POST['password'];
    
    $password=$_POST['upassword'];
     include 'dbconfig.php';
       $sql="insert into user(phno,name,password)value('$name','$cphno','$password');";
       if($conn->query($sql))
        {
           // echo"<script>alert('Data Inserted Succesfully')</script>";
            echo"<meta http-equiv='refresh' content='0;usernotes.php'/>";

        }
        else{
            echo"<script>alert('Failes to Insert Data')</script>";
            echo"<meta http-equiv='refresh' content='0;ulogin.php'/>";

         }
}

    else {
   header("location:ulogin.php");
}

?>

