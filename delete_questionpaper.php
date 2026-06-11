<?php
include 'dbconfig.php';

if (isset($_GET['id'])) {

    $id = $_GET['id'];

    // Get file path
    $qry = "SELECT file FROM question_paper WHERE id='$id'";
    $res = mysqli_query($conn, $qry);
    $row = mysqli_fetch_assoc($res);

    if ($row) {
        unlink($row['file']); // delete file from folder
    }

    // Delete record
    mysqli_query($conn, "DELETE FROM question_paper WHERE id='$id'");

    echo "<script>
            alert('Question paper deleted successfully');
            window.location.href='viewqp.php';
          </script>";
}
?>
