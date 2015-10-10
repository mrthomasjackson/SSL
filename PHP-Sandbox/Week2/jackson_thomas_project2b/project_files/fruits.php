<?php
if ($_SERVER['REQUEST_METHOD']=='POST') {
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
            top: 10%;
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
            display: none;
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


    <div id="welcome" class="centered">
        <div class="col-xs-12">
            <i class="white fa fa-apple fa-5x"> Fruits</i>
            <button type="button" id="start" class="btn btn-block btn-lg">Start</button>
        </div>
    </div>
    <div id="form-list-container">
        <div id="form-container">
            <div class="col-xs-12">
                <form class="form-inline">
                    <div class="form-group">
                        <label class="sr-only" for="fruitName">Fruit Name</label>
                        <input type="text" class="form-control" id="fruitName" placeholder="Fruit Name" required>
                    </div>
                    <div class="form-group">
                        <label class="sr-only" for="fruitColor">Fruit Color</label>
                        <input type="text" class="form-control" id="fruitColor" placeholder="Fruit Color" required>
                    </div>
                    <button id="submit" type="submit" class="btn btn-default">Fruitify!</button>
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
                    <tr>
                        <td>1</td>
                        <td>Apple</td>
                        <td>Red</td>
                        <td><a href="">Delete</a></td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Banana</td>
                        <td>Yellow</td>
                        <td><a href="">Delete</a></td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Orange</td>
                        <td>Orange</td>
                        <td><a href="">Delete</a></td>
                    </tr>
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
<script>
    $(document).ready(function () {
        $('#start').click(function () {
            $("#welcome").addClass('top-left');
            $('#welcome').removeClass('centered');
            $('#start').hide("fast");
            $("#form-list-container").show("slow");
        })
    })
</script>
</body>
</html>