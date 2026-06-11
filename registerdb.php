<?php
if(isset($_POST['register']))
{
   $name=$_POST['name'];
   $password=$_POST['password'] ;
   
   $repass=$_POST['repass'];
  
   $phno=$_POST['phno'] ;
   $collage=$_POST['collage'] ;
   $address=$_POST['address'] ;
   $email=$_POST['email'] ;
  // echo "Name: $uname<br>: $phno<br>Password: $password<be>Repass: $repass<br>";
   //echo"Email: $email<br>Address: $address<br>Dob: $dob";
   if ($password==$repass)
   {
       include 'dbconfig.php';
       $sql="insert into user(name,password,phno,collage,address,email)values('$name','$password','$phno','$collage','$address','$email')";
   
        if($conn->query($sql))
        {
            echo"<script>alert('Data Inserted succesfully')</script>";
            echo"<meta http-equiv='refresh' content='0;ulogin.php'/>";

        }
        else{
            echo $sql;
            echo"<script>alert('Failes to Insert Data')</script>";
            //echo"<meta http-equiv='refresh' content='0;register.php'/>";

         }
    
   }

   else{
       echo"<script>alert('password Mismatch')</script>";
       echo"<meta http-equiv='refresh' content='0;register.php'/>";
       
       
   }
}
 else {
   header("location:register.php");
}
?>

