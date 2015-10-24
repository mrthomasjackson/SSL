<?php
// Thomas Jackson
// SSL
// October 2015

session_start();

$username = "ssl";
$password = "ssl";
$sql = 'mysql:host=localhost;dbname=contacts;port=8889';
$database = new PDO($sql, $username, $password);

$contactid = $_GET['id'];
$statement = $database->prepare("SELECT * FROM contacts WHERE id = :id");
$statement->bindParam(':id', $contactid);
$statement->execute();
$result = $statement->fetchAll(PDO::FETCH_ASSOC);

if (isset($_POST['submit'])) {
    if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        echo "<div class='uk-alert uk-alert-danger' data-uk-alert>
    <a href='' class='uk-alert-close uk-close'></a>
    <p>The email you entered is not valid.</p>
</div>";
    } else {
        $contactid = $_GET['id'];
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $website = $_POST['website'];

        $statement = $database->prepare("UPDATE contacts SET firstname='" . $firstname . "', lastname='" . $lastname . "', phone='" . $phone . "', email='" . $email . "', website='" . $website . "' WHERE id='" . $contactid . "'");
        $statement->execute();
        $_SESSION['message'] = "<div class='uk-alert uk-alert-success' data-uk-alert>
    <a href='' class='uk-alert-close uk-close'></a>
    <p>You have edited a contact.</p>
</div>";
        header('Location: index.php');
    }
}

?>
<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" href="css/uikit.min.css"/>
    <script src="js/jquery.js"></script>
    <script src="js/uikit.min.js"></script>
</head>
<body style="background-color: #00a8e6; position: absolute; top: 0; bottom: 0; left: 0; right:0;">
<nav class="uk-navbar">
    <div class="uk-navbar-content uk-navbar-center">
        <span>Contacts Manager</span>
    </div>
</nav>
<div>
    <div class="uk-block uk-block-primary uk-contrast">

        <div class="uk-container uk-align-center">

            <form class="uk-form uk-form-stacked" action="" method="post">

                <fieldset data-uk-margin="">
                    <legend>Edit Contact</legend>
                    <div class="uk-form-row">
                        <label class="uk-form-label" for="firstname">First Name</label>
                        <input type="text" id="firstname" name="firstname" value="<?php echo $result[0]['firstname']; ?>"
                               class="uk-form-large uk-form-width-large" required>
                    </div>
                    <div class="uk-form-row">
                        <label class="uk-form-label" for="lastname">Last Name</label>
                        <input type="text" id="lastname" name="lastname" value="<?php echo $result[0]['lastname']; ?>"
                               class="uk-form-large uk-form-width-large"
                               required>
                    </div>
                    <div class="uk-form-row">
                        <label class="uk-form-label" for="phone">Phone</label>
                        <input type="text" id="phone" name="phone" value="<?php echo $result[0]['phone']; ?>" class="uk-form-large uk-form-width-large"
                               required>
                    </div>
                    <div class="uk-form-row">
                        <label class="uk-form-label" for="email">Email</label>
                        <input type="text" id="email" name="email" value="<?php echo $result[0]['email']; ?>" class="uk-form-large uk-form-width-large"
                               required>
                    </div>
                    <div class="uk-form-row">
                        <label class="uk-form-label" for="website">Website</label>
                        <input type="text" id="website" name="website" value="<?php echo $result[0]['website']; ?>" class="uk-form-large uk-form-width-large"
                               required>
                    </div>
                    <button name="submit" value="Submit" class="uk-button uk-form-large uk-form-width-large">Update Contact</button>
                    <a href="index.php" class="uk-button uk-form-large uk-form-width-large">Cancel</a>
                </fieldset>

            </form>

        </div>

    </div>
</div>
</body>
</html>
