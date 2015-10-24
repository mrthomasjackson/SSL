<?php
// Thomas Jackson
// SSL
// October 2015

// start session
session_start();

//display session message if exists
if (isset($_SESSION['message'])) {
    echo $_SESSION['message'];
    //unset message
    unset ($_SESSION['message']);
}

//mysql login info
$username = "tfjcontacts";
$password = "Welcome1!";
$sql = 'mysql:host=97.74.31.63;dbname=tfjcontacts;port=3306';
$database = new PDO($sql, $username, $password);

// if server has posted a form (the add contact form)
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    //validate email
    if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        // the alert message for unvalidated email
        echo "<div class='uk-alert uk-alert-danger' data-uk-alert>
    <a href='' class='uk-alert-close uk-close'></a>
    <p>The email you entered is not valid.</p>
</div>";
        // if no validation issues, proceed to add contact to database
    } else {
        $_SESSION['message'] = "<script>UIkit.notify('You have successfully added a contact.');</script>";
        $database = new PDO($sql, $username, $password);
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $website = $_POST['website'];

        //prepare the insert statement for new contact
        $statement = $database->prepare('INSERT INTO contacts (firstname, lastname, phone, email, website) VALUES (:firstname, :lastname, :phone, :email, :website)');

        // bing php variables to PDO
        $statement->bindParam(':firstname', $firstname);
        $statement->bindParam(':lastname', $lastname);
        $statement->bindParam(':phone', $phone);
        $statement->bindParam(':email', $email);
        $statement->bindParam(':website', $website);
        // execute sql statement
        $statement->execute();

        // update the session message "new contact"
        $_SESSION['message'] = "<div class='uk-alert uk-alert-success' data-uk-alert>
    <a href='' class='uk-alert-close uk-close'></a>
    <p>You have added a NEW contact.</p>
</div>";
        echo $_SESSION['message'];
    }
}

?>
<!-- HTML DOCUMENT -->
<!DOCTYPE html>
<html>
<head>
    <title>Contacts Manager</title>
    <link rel="stylesheet" href="css/uikit.min.css"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0">
    <script src="js/jquery.js"></script>
    <script src="js/uikit.min.js"></script>
    <meta name="format-detection" content="telephone=no">
    <style>
        .uk-alert {
            margin: 0;
        }
    </style>
</head>
<body style="background-color: #222; position: absolute;top: 0;bottom: 0;left: 0;right: 0;">
<nav class="uk-navbar">
    <div class="uk-navbar-content uk-navbar-center">
        <span>Contacts Manager</span>
    </div>
</nav>
<div>
    <div class="uk-block uk-block-primary uk-contrast">

        <div class="uk-container uk-align-center">

            <form class="uk-form" action="index.php" method="post">

                <fieldset data-uk-margin="">
                    <legend>Add Contact</legend>
                    <input type="text" id="firstname" name="firstname" placeholder="First Name"
                           class="uk-margin-small-top" required>
                    <input type="text" id="lastname" name="lastname" placeholder="Last Name" class="uk-margin-small-top"
                           required>
                    <input type="text" id="phone" name="phone" placeholder="Phone" class="uk-margin-small-top" required>
                    <input type="text" id="email" name="email" placeholder="Email" class="uk-margin-small-top" required>
                    <input type="text" id="website" name="website" placeholder="Website" class="uk-margin-small-top"
                           required>
                    <button name="submit" value="Submit" class="uk-button uk-margin-small-top">Add Contact</button>
                </fieldset>

            </form>

        </div>

    </div>
    <div class="uk-block uk-block-secondary uk-contrast uk-block-large">

        <div class="uk-container uk-align-center">

            <h3>Manage Contacts</h3>

            <div class="uk-grid uk-grid-match uk-grid-divider" data-uk-grid-margin
                 data-uk-grid-match="{target:'.uk-panel'}">
                <?php
                $statement= $database->prepare("SELECT * FROM contacts ORDER BY id");
                $statement->execute();
                $result = $statement->fetchAll(PDO::FETCH_ASSOC);
                foreach ($result as $row) {
                    echo "<div class='uk-width-medium-1-3'>";
                    echo "<div class='uk-panel uk-panel-box uk-panel-box-secondary'>";
                    echo "<a href='delete.php?id=". $row['id'] ."' class='delete uk-close uk-float-right'></a><a href='edit.php?id=". $row['id'] ."' class='uk-float-right'>edit&nbsp;&nbsp;&nbsp;</a>";
                    echo "<h3 class='uk-panel-title uk-text-bold'>". $row['firstname'] ." " . $row['lastname'] . "</h3>";
                    echo "<p>";
                    echo "<a href='mailto:" . $row['email'] . "' class='uk-text-primary'>" . $row['email'] . "</a>";
                    echo "<br>";
                    echo "<a target='_new' href='http://" . $row['website'] . "' class='uk-text-primary'>" . $row['website'] . "</a>";
                    echo "</p>";
                    echo "<p style='color: #256657'>";
                    echo $row['phone'];
                    echo "</p>";
                    echo "</div>";
                    echo "</div>";
                }
                ?>

            </div>

        </div>

    </div>
</div>
</body>
<script>
    $(document).ready(function(){
        $('.delete').click(function(){
            return window.confirm(this.title || "Please confirm deletion")
        });
        $('.uk')
    })
</script>
</html>