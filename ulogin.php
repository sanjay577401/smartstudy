
<?php include 'header.php';?>
<link rel="stylesheet" href="style.css"/>

 <center><h3>LOGIN</h3></center>
 <form action="ulogindb.php" method="POST">
      Phno:<input type="tel"name="phno" placeholder="Enter Your Phno"/>
          
           Password:<input type="password"name="password" placeholder="Enter Your Password" required/>
      <input type="submit" name="login" value="LOGIN"/>
 </form>
  <center> <a href="register.php">click here</a> to register click has to register</center>
           
<?php include 'footer.php';?>




