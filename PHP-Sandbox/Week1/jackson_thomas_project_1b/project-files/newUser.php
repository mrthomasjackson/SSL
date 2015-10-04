<?php
/*
 * Created by IntelliJ IDEA.
 * User: Thomas F. Jackson
 * Date: 10/3/15
 * Time: 10:29 PM
 * Class: SSL October 2015
 */

// Create function to read form data
function readFormData(){
    $firstName = $_POST['firstname'];
    $lastName = $_POST['lastname'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    // salt and encrypt password
    $encryptedPassword = md5('salted'.$password);
    // store form values into array
    return array('First Name' => $firstName, 'Last Name' => $lastName, 'Username' => $username, 'Password' => $encryptedPassword);
}

// function to upload the avatar to images directory
function uploadAvatar(){
    // replace "image/" with "." for the uploaded file
    $imageType = str_replace("image/", ".", $_FILES['file']['type']);
// determine if file is a JPEG OR PNG
    if ($imageType == ".jpeg" || $imageType == ".png"){
        $imageDirectory = "./images/images";
        $imageName = $_FILES['file']['name'];
        $tempFile = $_FILES['file']['tmp_name'];
        $imagePath = $imageDirectory.$imageName;
        move_uploaded_file($tempFile,$imagePath);
        return $imagePath;
    } else {
        // run if file is neither JPEG OR PNG
        return "/images/error.jpeg";
    }

}
?>
<!-- BEgin HTML COde -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Please Register</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-theme.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<div class="container" style="margin-top: 45px">
    <?php
    // run php script is form was submitted and posted
    if(isset($_POST['submit'])){
        //return result of readformdata function into array
        $registrationArray = readFormData();
        // write the php results into HTML
        echo "
<div class='panel panel-default'>
<div class='panel-heading'>
    <h1>Hello, ". $registrationArray['First Name'] . " " . $registrationArray['Last Name']."</h1>
    <p class='lead'>Thank you for registering!</p>
</div>
<div class='panel-body'>
<ul class='list-group'>
";
        // run for each loop to print array to browser
        foreach ($registrationArray as $item => $data){
            echo "<li class='list-group-item lead'>{$item} : {$data}</li>";
        }
        echo "</ul></div><div class='panel-footer'>";
        // return the result of the uploadAvatar function as an image file path
        echo "<img class='img-responsive' src='". uploadAvatar() ."'/></div></div>";


    }
    ?>
    <div class="col-xs-12">
        <a href="index.html" class="pull-right" title="Register Again">Register Again</a>
    </div>
</div>


<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
</body>
</html>
