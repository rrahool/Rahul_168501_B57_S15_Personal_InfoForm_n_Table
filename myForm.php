<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>myForm</title>
    <link rel="stylesheet" href="resources/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="resources/bootstrap/3.3.7/js/jquery-3.2.1.min.js"></script>
    <script src="resources/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

    <div class="col-md-3"></div>

    <div class="container col-sm-6">
        <form action="process.php" method="post" >
            <div class="form-group">
                <label for="firstName">First Name:</label>
                <input type="text" name="firstName" class="form-control" id="firstName">
                <br>
            </div>

            <div class="form-group">
                <label for="lastName">Last Name:</label>
                <input type="text" name="lastName" class="form-control" id="lastName">
                <br>
            </div>

            <div class="form-group">
                <label for="ID">ID:</label>
                <input type="text" name="ID" class="form-control" id="ID">
                <br>
            </div>

            <div class="form-group">
                <label for="bloodGroup">Blood Group:&nbsp;&nbsp;&nbsp;&nbsp;</label>

                <select name="bloodGroup">
                    <option value="A+">A+</option>
                    <option value="AB+">AB+</option>
                    <option value="A-">A-</option>
                    <option value="AB-">AB-</option>
                    <option value="B+">B+</option>
                    <option value="B-">B-</option>
                    <option value="O+">O+</option>
                    <option value="O-">O-</option>
                </select>
                <br>
            </div>

            <input type="submit" class="btn btn-success" value="Submit">
        </form>
    </div>


</body>
</html>