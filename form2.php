<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap.css">
    <script src="bootstrap.js"></script>
    <style>
        .form-check-label{
            margin-right: 20px;
        }
        
        .btn {
            width: 100%;
        }

        body {
            display: flex;
        }

    </style>
</head>
<body>
   <div class="container" style="width: 500px; margin:40px 100px 0 40px">
    <form action="" method="POST">
        <label for="name" class="form-label">Last Name:</label>
        <input type="text" class="form-control" id="name" name="name">
        <br>
        <label for="first_name" class="form-label">First Name:</label>
        <input type="text" class="form-control" id="first_name" name="first_name">
        <br>
        <label for="gender" style="margin-right: 15px;">Gender: </label>
        <input type="radio" class="form-check-input" id="male" name="gender" value="Male">
        <label class="form-check-label" for="male">Male</label>
        <input type="radio" class="form-check-input" id="female" name="gender" value="Female">
        <label class="form-check-label" for="female">Female</label>
        <br>
        <br>
        <label for="course" class="form-label">Course:</label>
        <select class="form-select" id="course" name="course">
            <option>simple</option>
            <option>medium</option>
            <option>difficult</option>
          </select>
          <br>
          <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    </div>

<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = htmlspecialchars($_POST["name"]);
        $first_name = htmlspecialchars($_POST["first_name"]);
        $gender = htmlspecialchars($_POST["gender"]);
        $course = htmlspecialchars($_POST["course"]);

        echo '<div style="height: fit-content; color: blue; padding: 30px; margin-top: 100px; font-family:Consolas; box-shadow: 1px 1px 15px 1px">';
        echo "<p style='font-size: 20px;'>Last name: $name </p>";
        echo "<p style='font-size: 20px;'>First name: $first_name </p>";
        echo "<p style='font-size: 20px;'>Gender: $gender </p>";
        echo "<p style='font-size: 20px;'>Course: $course</p>";
        echo '</div>';
    }
?>
</body>
</html>
