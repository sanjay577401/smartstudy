<?php
include 'userheader.php';?>

<p>View</p>


 <table width="100%" border="1">
    <tr>
        <th>Slno</th>
           <th>Subject</th>
              <th>Sem</th>
        <th>course</th>
         
        <th></th>
    </tr>
    <?php
       include 'dbconfig.php';
    $sql="select * from `view`";
    $result=$conn->query($sql);
     if($result->num_rows>0)
     {
         while($row=$result->fetch_assoc())
         {
             
             $sino=$row['sino'];
             $subject=$row['subject'];
              $sem=$row['sem'];
               $course=$row['course'];
              
             echo "<tr><td>$sino</td><td>$subject</td><td>$sem</td><td>$course</td></tr>";
         }
         
     }
     ?>