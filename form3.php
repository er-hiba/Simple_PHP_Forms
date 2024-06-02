<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap.css">
    <script src="bootstrap.js"></script>
    <style>
        fieldset{
            border: solid 2px blue;
            padding: 30px;
            width: 500px;
            text-align: center;
        }

        body{
            display: flex;
        }
    </style>
</head>
<body>
    <div class="container" style="width: 450px; margin: 50px 100px 0 30px">
        <form action="" method="post">
        <fieldset>
            <label for="lastname" class="form-label">Last Name:</label>
            <input type="text" id="lastname" name="lastname" class="form-control">
            <label for="firstname" class="form-label">First Name:</label>
            <input type="text" id="firstname" name="firstname" class="form-control">
            <label for="address" class="form-label">Address:</label>
            <input type="text" id="address" name="address" class="form-control">
            <label for="city" class="form-label">City:</label>
            <input type="text" id="city" name="city" class="form-control">
            <label for="postcode" class="form-label">Postal Code:</label>
            <input type="number" id="postcode" name="postcode" class="form-control">
            <br>
            <button type="submit" class="btn btn-primary">Submit</button>
        </fieldset>
        </form>

    </div>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    ?>
    <div class="container" style="margin:150px 80px 0 0;">
        <table class="table table-bordered">
            <tr>
                <td>Last Name</td>
                <td><?php echo $_POST["lastname"]; ?></td>
            </tr>
            <tr>
                <td>First Name</td>
                <td><?php echo $_POST["firstname"]; ?></td>
            </tr>
            <tr>
                <td>Address</td>
                <td><?php echo $_POST["address"]; ?></td>
            </tr>
            <tr>
                <td>City</td>
                <td><?php echo $_POST["city"]; ?></td>
            </tr>
            <tr>
                <td>Postal Code</td>
                <td><?php echo $_POST["postcode"]; ?></td>
            </tr>
        </table>
    </div>
    <?php
    }
    ?>
</body>
</html>
