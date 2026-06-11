<?php include 'userheader.php';?>



 <h2>Register</h2>
    <link rel="stylesheet" href="style.css"/>
            <form method="POST" action="registerdb.php">
                USERNAME<input type="text" name="name" placeholder="Enter username" required/><br>
                PASSWORD<input type="password" name="password" placeholder="Enter password" required/><br>
                REPASSWORD<input type="repass" name="repass" placeholder="Enter repassword" required/><br>
                PHONE NUMBER<input type="phno" name="phno" placeholder="Enter phone number" required/><br>
                COLLAGE<input type="collage" name="collage" placeholder="Enter collage" required/><br>
                ADDRESS<textarea name="address" placeholder="Enter address" required/></textarea><br>
                EMAIL<input type="email" name="email" placeholder="Enter email" required/><br>
                
                <input type="submit" name="register" value="register"/>
                Already Have Account <a href="ulogin.php">Click Here</a>to login
                
            </form>
            
           <?php include 'footer.php';?>
            
        