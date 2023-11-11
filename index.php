<?php
include './inc/db.php';

$firstName =  $_POST['firstName'];
$lastName =   $_POST['lastName'];
$email   =    $_POST['email'];

if (isset($_POST['submit'])){
    //echo $firstName . ' ' . $lastName . ' ' . $email;

    $sql = "INSERT INTO users(firstName, lastName, email) 
            VALUES ('$firstName', '$lastName', '$email')";

    if(empty($firstName)){
        echo 'Enter first name';
    }elseif(empty($lastName)){
        echo 'Enter last name';
    }elseif(empty($email)){
        echo 'Enter email';
    }elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
      echo 'Enter a right email';
    }else{
      if(mysqli_query($conn, $sql)){
        header('Location: index.php');
      }else{
      echo 'Error: ' . mysqli_error($conn);
      }
    }

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