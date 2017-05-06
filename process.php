<?php

if(!isset($_SESSION))
{
    session_start();
}

if(!empty($_SESSION['PersonInfo'])) $_SESSION['PersonInfo'] .= "[$]";

if(!isset($_SESSION['PersonInfo'])) $_SESSION['PersonInfo'] = "";

$_SESSION['PersonInfo'] .= $_POST['firstName'] . "$#$" . $_POST['lastName'] . "$#$" . $_POST['ID'] . "$#$" . $_POST['bloodGroup'];

//echo "<pre>";
//var_dump($_SESSION['PersonInfo']);
//echo "<pre>";
    $personWiseInfoArray = explode("[$]", $_SESSION['PersonInfo']);


?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="resources/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="resources/bootstrap/3.3.7/js/jquery-3.2.1.min.js"></script>
    <script src="resources/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="#">BITM-B57</a>
        </div>
        <ul class="nav navbar-nav">
            <li class="active"><a href="destroy_session.php">Destroy This Session Data</a></li>
            <li><a href="myForm.php">Add Person Info</a></li>
        </ul>
    </div>
</nav>
    <table class="table table-striped table-bordered">
        <tr>
            <td colspan="4" class="text-center">
                <h1> List of Person Information</h1>
            </td>
        </tr>

        <tr>
            <th> First Name </th>
            <th> Last Name </th>
            <th> ID </th>
            <th> Blood Group </th>
        </tr>

        <?php
        foreach($personWiseInfoArray as $singlePersonInfoString){

            $singlePersonInfoArray = explode("$#$", $singlePersonInfoString);

            echo "<tr>";
                echo "<td> $singlePersonInfoArray[0] </td>";
                echo "<td> $singlePersonInfoArray[1] </td>";
                echo "<td> $singlePersonInfoArray[2] </td>";
                echo "<td> $singlePersonInfoArray[3] </td>";
            echo "</tr>";


        }
        ?>

    </table>
</body>
</html>
