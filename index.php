<?php

$conn = mysqli_connect('localhost', 'root', 'root', 'win');

if(!$conn){
    echo 'Eroor: '. mysqli_connect_error();
}


$firstName =  $_POST['firstName'];
$lastName =   $_POST['lastName'];
$email   =    $_POST['email'];

if (isset($_POST['submit'])){
    echo $firstName . ' ' . $lastName . ' ' . $email;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>Document</title>
</head>
<body>

  <form action="index.php" method="POST">
    <input type="text" name="firstName" id="firstName" placeholder="first name">
    <input type="text" name="lastName" id="lastName" placeholder="last name">
    <input type="text" name="email" id="email" placeholder="email">
    <input type="submit" name="submit" value="send">
  </form>
    

    <script src="./js/script.js"></script>
</body>
</html>