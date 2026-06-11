    <?php

if(isset($_POST['login']))
{
    $uname=$_POST['uname'];
    $password=$_POST['password'];
   
    include 'dbconfig.php';
    $sql="select * from admin where uname='$uname' and password='$password';";
    //echo $sql;
    $result=$conn->query($sql);
    if($result->num_rows>0)
    {
      session_start();  
      $_SESSION['aname']=$uname;
      $_SESSION['apassword']=$password;
       echo"<meta http-equiv='refresh' content='0;viewnotes.php'/>";
      
      
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
