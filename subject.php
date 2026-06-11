
        <?php include 'adminheader.php';?>
        <link rel="stylesheet" href="style.css"/>
            <h2>Subject</h2>
            <form action="subjectdb.php" method="POST">
                Subject<input type="subject" name="subject" placeholder="Enter subject" required/><br>
                Semester
                <select name="semester">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                    <option>6</option>
                </select>
                <input type="submit" name="add" value="AddSubject"/>
            
            </form>
     
           
            
        <?php include 'footer.php';?>