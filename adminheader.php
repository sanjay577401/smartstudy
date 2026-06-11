
<?php
session_start();
if(isset($_SESSION['aname']) && isset($_SESSION['apassword']))
{
    $phno=$_SESSION['aname'];
    $password=$_SESSION['apassword'];
    
}
else{
    header("location:logout.php");
}
?>
<html>
    <head>
        <title></title>
   
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css"/>
    </head>
    <body>
    <center>  <div class='header'>SMART STUDY</div></center>
        <div class="menu">
            <a href='addnotes.php'>Add Notes</a>
            <a href='viewnotes.php'>View Notes</a>
             <a href='addqp.php'>Add Question Paper</a>
             <a href='viewqp.php'>View Question Paper</a>
          <a href="subject.php">Subject</a>
          <a href="viewsubject.php">View Subject</a>
             <a href="logout.php">logout</a>
              </div>









