<?php
include 'dbconfig.php';

if (isset($_GET['id'])) {

    $id = intval($_GET['id']);

    // Get file path
    $fileQry = mysqli_query($conn, "SELECT file FROM notes WHERE notesid = $id");
    if ($fileRow = mysqli_fetch_assoc($fileQry)) {
        $filePath = $fileRow['file'];

        // Delete file from folder
        if (file_exists($filePath)) {
            unlink($filePath);
        }
    }

    // Delete record
    $delQry = mysqli_query($conn, "DELETE FROM notes WHERE notesid = $id");

    if ($delQry) {
        echo "<script>
            alert('Note deleted successfully');
            window.location.href='viewnotes.php';
        </script>";
    } else {
        echo "<script>
            alert('Delete failed');
            window.location.href='viewnotes.php';
        </script>";
    }

} else {
    header("Location: viewnotes.php");
}
?>
