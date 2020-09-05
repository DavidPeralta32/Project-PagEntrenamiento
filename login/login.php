<?php
$name=$_POST["name"];
$password=$_POST["pass"];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <label for="">Name: </label> <?php echo $name; ?><br>
    <label for="">Correo: </label> <?php echo $password; ?><br>
</body>
</html>