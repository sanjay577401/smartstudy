<?php
include 'dbconfig.php';

$id = $_GET['id'];

$sql = "DELETE FROM subject WHERE id='$id'";
$conn->query($sql);

echo "
<script>
    alert('Subject deleted successfully');
    window.location.href = 'viewsubject.php';
</script>
";
?>
