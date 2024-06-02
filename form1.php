<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap.css">
    <script src="bootstrap.js"></script>
    <style>
        input[type=submit] {
            width: 70%;
            background-color: rgb(38, 38, 117);
            border: 0;
            padding: 8px;
            color: white;
            border-radius: 50px;
            margin: 15px 0 10px 0;
        }
        .container{
            text-align: center;
            width: 350px;
            padding-top: 50px;
        }
        .form-label{
            font-size: large;
            margin: 10px;
        }
        .form-select, .form-control{
            margin-bottom: 15px;
        }
    </style>
</head>

<body>
    <div class="container">
    <form action="ex1.php" method="post">
        <label for="fname" class="form-label">First Name:</label>
        <input type="text" name="first_name" id="fname" class="form-control" placeholder="First Name" >
        <label for="lname" class="form-label">Last Name:</label>
        <input type="text" name="last_name" id="lname" class="form-control" placeholder="Last Name" >
        <label for="pet" class="form-label">Favorite Pet:</label>
        <select id="pet" class="form-select" name="pet_s">
            <option value="None">None</option>
            <option value="Dog">Dog</option>
            <option value="Cat">Cat</option>
            <option value="Bird">Bird</option>
        </select>
        <input type="submit">
    </form>
    </div>


<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $first_name = htmlspecialchars($_POST["first_name"]);
    $last_name = htmlspecialchars($_POST["last_name"]);
    $pet = htmlspecialchars($_POST["pet_s"]);

    echo '<div style="height: fit-content; background-color: #f0f0f0; color: purple; padding: 20px; padding-left: 70px; margin-top: 30px; font-family:Consolas">';
    echo "<p style='font-size: 20px;'>First name: $first_name </p>";
    echo "<p style='font-size: 20px;'>Last name: $last_name </p>";
    echo "<p style='font-size: 20px;'>Favorite pet: $pet </p>";
    echo '</div>';
}
?>


</body>
</html>
