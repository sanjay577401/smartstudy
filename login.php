
        <?php include 'header.php';?>
<link rel="stylesheet" href="style.css"/>
            <h2>LOGIN</h2>
            <form method="POST" action="logindb.php">
                Admin Name<input type="text" name="uname" placeholder="Enter Your  Name" required/><br>
                Password<input type="password" name="password" placeholder="Enter Your Password" required/><br>
                <input type="submit" name="login" value="Login"/>
                
            </form>
     
           
            
        <?php include 'footer.php';?>