<?php
if (isset($_POST['upload'])) {

    $file_name = $_FILES['pdf']['name'];
    $file_tmp  = $_FILES['pdf']['tmp_name'];
    $file_size = $_FILES['pdf']['size'];
    $file_ext  = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));

    // Allow only PDF
    if ($file_ext != "pdf") {
        echo "Only PDF files are allowed!";
        exit;
    }

    // Size limit (5MB)
    if ($file_size > 5 * 1024 * 1024) {
        echo "File size must be less than 5MB!";
        exit;
    }

    $new_name = time() . "_" . $file_name;
    $upload_path = "pdfs/" . $new_name;

    if (move_uploaded_file($file_tmp, $upload_path)) {
        echo "PDF uploaded successfully!";
    } else {
        echo "Upload failed!";
    }
}
?>
