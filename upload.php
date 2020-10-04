<?php
// Upload File
$file = $_FILES["file"];

//Saving file in uploads folder

move_uploaded_file($file["tmp_name"], "uploads/" .$file["name"]);

header("Location: tasspmasuk.php")

?>