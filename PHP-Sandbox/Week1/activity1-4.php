<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>activity1-1</title>
</head>
<body>
<?php
if((!empty($_FILES["uploaded_jpeg"])) && ($_FILES['uploaded_jpeg']['error'] == 0)) {
    $uploaddir = './uploads/';
    $filename = $uploaddir . basename($_FILES['uploaded_jpeg']['name']);;
    if ($_FILES["uploaded_jpeg"]["type"] == "image/jpeg") {
        echo "file uploaded";
        $newname = dirname(__FILE__)."/".$filename;
    } else {
        echo "Error: Only .jpg images under 350Kb are accepted for upload";
    }
} else {
    echo "Error: No file uploaded";
}
echo "<img src='$filename'/>";
?>

</body>
</html>
