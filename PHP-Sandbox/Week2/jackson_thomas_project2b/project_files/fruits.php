<?php
$username="ssl";
$password="ssl";
$database = new PDO('mysql:host=localhost;dbname=ssl;port=8889', $username, $password);
if ($_SERVER['REQUEST_METHOD']=='POST') {
    //echo "post";
    $fruitname=$_POST['fruitname']; //get POST values
    $fruitcolor=$_POST['fruitcolor'];
    $stmt=$database->prepare("INSERT INTO fruits (fruitname, fruitcolor) VALUES (:fruitname, :fruitcolor);");
    $stmt->bindParam(':fruitname', $fruitname);
    $stmt->bindParam(':fruitcolor', $fruitcolor);
    $stmt->execute();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
        #heroContainer {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            width: 100%;
            height: 100%;
            background-color: #3498DB;
        }

        .centered {
            position: fixed;
            top: 50%;
            left: 50%;
            /* bring your own prefixes */
            transform: translate(-50%, -50%);
        }

        .center-form {
            position: fixed;
            top: 50%;
            left: 50%;
            /* bring your own prefixes */
            transform: translate(-50%, -50%);
            -webkit-animation-delay: .5s;
            animation-delay: .5s;
            transition: 1.5s;
            -webkit-transition: 1.5s;
        }

        .top-left {
            position: fixed;
            top: 20%;
            left: 10%;
            /* bring your own prefixes */
            transform: translate(-50%, -50%);
            -webkit-transition: .5s; /* For Safari 3.1 to 6.0 */
            transition: .5s;
        }

        .white {
            color: white;
        }

        #start {
            margin-top: 15px;
            color: white;
            background-color: transparent;
            border: 5px solid white;
            -webkit-transition: .5s; /* For Safari 3.1 to 6.0 */
            transition: .5s;
        }

        #start:hover {
            color: #3498DB;
            background-color: white;
            border: 5px solid white;
        }

        #form-list-container {
            position: fixed;
            top: 50%;
            left: 50%;
            /* bring your own prefixes */
            transform: translate(-50%, -50%);
        }

        .hide {
            display: none;
            transition: 1.5s;
            -webkit-transition: 1.5s;
        }

        .show {
            display: block;
            transition: 1.5s;
            -webkit-transition: 1.5s;
        }

        input {
            height: 50px !important;
            margin-right: 25px !important;
            color: white !important;
            background-color: transparent !important;
            border: 5px solid white !important;
        }

        ::-webkit-input-placeholder {
            color: white !important;
        }

        :-moz-placeholder {
            /* Firefox 18- */
            color: white !important;
        }

        ::-moz-placeholder {
            /* Firefox 19+ */
            color: white !important;
        }

        :-ms-input-placeholder {
            color: white !important;
        }

        #submit {
            height: 50px !important;
            background-color: white !important;
            color: #3498DB !important;
            font-weight: bold !important;
        }
        table {
            color: white;

        }
        a {
            color: #e7584c;
            font-weight: bolder;
        }
    </style>
</head>
<body>
<div id="heroContainer">


    <div id="welcome" class="top-left">
        <div class="col-xs-12">
            <i class="white fa fa-apple fa-5x"> Fruits</i>
        </div>
    </div>
    <div id="form-list-container">
        <div id="form-container">
            <div class="col-xs-12">
                <form class="form-inline" action="fruits.php" method="POST">
                    <div class="form-group">
                        <label class="sr-only" for="fruitname">Fruit Name</label>
                        <input type="text" class="form-control" name="fruitname" id="fruitname" placeholder="Fruit Name" required>
                    </div>
                    <div class="form-group">
                        <label class="sr-only" for="fruitcolor">Fruit Color</label>
                        <input type="text" class="form-control" name="fruitcolor" id="fruitcolor" placeholder="Fruit Color" required>
                    </div>
                    <input id="submit" name="submit" value="Submit" type="submit" class="btn btn-default"/>
                </form>
            </div>
        </div>
        <div id="list-container">
            <div class="col-xs-12" style="margin-top: 50px !important;">
                <table class="table">
                    <thead>
                    <tr>
                        <th>Fruit ID</th>
                        <th>Fruit Name</th>
                        <th>Fruit Color</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    $stmt = $database->prepare('SELECT * FROM fruits ORDER BY fruitname ASC');
                    $stmt->execute();
                    $result = $stmt->fetchall(PDO::FETCH_ASSOC);
                    //The parameter means it will return an indexed array with each index containing an associative array of each row – do a var_dump($result); to see the array results
                    //var_dump($result);
                    foreach  ($result as $row) {
                        echo '<tr><td>'.$row['id'].'</td><td>'.$row['fruitname'].'</td><td>'.$row['fruitcolor'].'</td><td> <a href="deletefruit.php?id='.$row['id'].'">Delete</a></td></tr>';
                    }
                    ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>


</div>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery-1.11.3.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>

</body>
</html>