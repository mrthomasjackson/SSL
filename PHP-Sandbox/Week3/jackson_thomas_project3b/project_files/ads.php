<?php
/**
 * Created by IntelliJ IDEA.
 * User: Thomas Jackson
 * Date: 10/13/15
 * Time: 11:33 PM
 */
$username = "ssl";
$password = "ssl";
$database = new PDO('mysql:host=localhost;dbname=ssl;port=8889', $username, $password);
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    //echo "post";
    $fruitname = $_POST['fruitname']; //get POST values
    $fruitcolor = $_POST['fruitcolor'];
    $fruitimage = $_POST['fruitimage'];
    $stmt = $database->prepare("INSERT INTO fruits (fruitname, fruitcolor, fruitimage) VALUES (:fruitname, :fruitcolor, :fruitimage);");
    $stmt->bindParam(':fruitname', $fruitname);
    $stmt->bindParam(':fruitcolor', $fruitcolor);
    $stmt->bindParam(':fruitimage', $fruitimage);
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


        .white {
            color: white;
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
        .top {
            margin-bottom: 50px;
            margin-top: 10px;
        }
    </style>
</head>
<body>
<div id="heroContainer" class="container-fluid">


    <div class="col-xs-12 top">
        <i class="white fa fa-apple fa-5x"> Fruits</i>
    </div>

    <div class="col-xs-12">
        <div id="form-list-container">
            <div id="form-container">
                <div class="col-xs-12" style="margin-bottom: 25px">
                    <?php
                    $content = file_get_contents("http://localhost:8888/fruitget.php");


                    $encoded = json_decode($content);
                    foreach ($encoded as $fruit) {

                        $fruitname = $fruit->fruitname;
                        $fruitcolor = $fruit->fruitcolor;
                        $fruitimage = $fruit->fruitimage;
                        echo "<div class='media'>

  <div class='media-body'>
    <h1 class='media-heading' style='color: white'>The " . $fruitname . " is the fruit of the day!</h1>
  </div>
  <div class='media-right'>
    <a href='#'>
                    <img class='media-object' style='height: 100px' src='" . $fruitimage . "'>
    </a>
  </div>
</div>";

                    }
                    ?>
                </div>
                <div class="col-xs-12">
                    <form class="form-inline" action="ads.php" method="POST">
                        <div class="form-group">
                            <label class="sr-only" for="fruitname">Fruit Name</label>
                            <input type="text" class="form-control" name="fruitname" id="fruitname"
                                   placeholder="Fruit Name"
                                   required>
                        </div>
                        <div class="form-group">
                            <label class="sr-only" for="fruitcolor">Fruit Color</label>
                            <input type="text" class="form-control" name="fruitcolor" id="fruitcolor"
                                   placeholder="Fruit Color" required>
                        </div>
                        <div class="form-group">
                            <label class="sr-only" for="fruitimage">Fruit Image</label>
                            <input type="text" class="form-control" name="fruitimage" id="fruitimage"
                                   placeholder="Fruit Image" required>
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
                        foreach ($result as $row) {
                            echo '<tr><td>' . $row['id'] . '</td><td>' . $row['fruitname'] . '</td><td>' . $row['fruitcolor'] . '</td><td> <a href="deletefruit.php?id=' . $row['id'] . '">Delete</a></td></tr>';
                        }
                        ?>
                        </tbody>
                    </table>
                </div>
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