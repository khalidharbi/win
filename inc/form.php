<?php

$firstName =  $_POST['firstName'];
$lastName =   $_POST['lastName'];
$email   =    $_POST['email'];

$errors = [
    'firstNameError' => '',
    'lastNameError' => '',
    'emailError' => '',
];

if (isset($_POST['submit'])){

    $firstName =  mysqli_real_escape_string($conn, $_POST['firstName']);
    $lastName =   mysqli_real_escape_string($conn, $_POST['lastName']);
    $email   =    mysqli_real_escape_string($conn, $_POST['email']);

    $sql = "INSERT INTO users(firstName, lastName, email) 
            VALUES ('$firstName', '$lastName', '$email')";

    if(empty($firstName)){
        $errors['firstNameError'] = 'يرجى ادخال الاسم الاول';
    }elseif(empty($lastName)){
        $errors['lastNameError'] = 'يرجى ادخال الاسم الاخير';
    }elseif(empty($email)){
        $errors['emailError'] = 'يرجى ادخال الايميل';
    }elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $errors['emailError'] = 'يرجى ادخال ايميل صحيح';
    }else{
      if(mysqli_query($conn, $sql)){
        header('Location: index.php');
      }else{
      echo 'Error: ' . mysqli_error($conn);
      }
    }

}
