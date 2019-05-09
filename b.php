<?php
// Start the session
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>b</title>
</head>
<body>
    <div class="main">
        <h1>Hola, soy <?php echo $_SESSION["name"];?>!</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita soluta natus eligendi fugit sunt, ratione veniam. Expedita et, sunt sequi ratione commodi inventore sed harum illum a obcaecati, suscipit tempora!</p>
        <a href="submitLogout.php">Logout</a>
    </div>
</body>
</html>