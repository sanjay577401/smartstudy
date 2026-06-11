    <?php

if(isset($_POST['login']))
{
    $uname=$_POST['phno'];
    $password=$_POST['password'];
   
    include 'dbconfig.php';
    $sql="SELECT * FROM `user` WHERE `phno`='$uname' AND `password`='$password'";
    //echo $sql;
    $result=$conn->query($sql);
    if($result->num_rows>0)
    {
      session_start();  
      $_SESSION['uname']=$uname;
      $_SESSION['upassword']=$password;
       echo"<meta http-equiv='refresh' content='0;userview.php'/>";
      
      
    }
    else{
        echo"<script>alert('uname or password Mismatch')</script>";
       echo"<meta http-equiv='refresh' content='0;index.php'/>";

    }
}
 else {
    
 
     header("location.:login.php");
 }
     
 ?>
