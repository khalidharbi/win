<?php
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
