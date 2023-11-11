<?php

$firstName =  $_POST['firstName'];
$lastName =   $_POST['lastName'];
$email   =    $_POST['email'];

$errors = [
    'firstNameError' => '',
    'lastNameError' => '',
    'emailError' => ''
];

if (isset($_POST['submit'])){

    // first name validation
    if(empty($firstName)){
        $errors['firstNameError'] = 'يرجى ادخال الاسم الاول';
    }
    
    // last name validatoin
    if(empty($lastName)){
        $errors['lastNameError'] = 'يرجى ادخال الاسم الاخير';
    }
    
    // email validation
    if(empty($email)){
        $errors['emailError'] = 'يرجى ادخال الايميل';
    }elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $errors['emailError'] = 'يرجى ادخال ايميل صحيح';
    }

    // no error validatoin
    if(!array_filter($errors)){
        $firstName =  mysqli_real_escape_string($conn, $_POST['firstName']);
        $lastName =   mysqli_real_escape_string($conn, $_POST['lastName']);
        $email   =    mysqli_real_escape_string($conn, $_POST['email']);

        $sql = "INSERT INTO users(firstName, lastName, email) 
        VALUES ('$firstName', '$lastName', '$email')";

        if(mysqli_query($conn, $sql)){
        header('Location: ' . $_SERVER['PHP-SELF']);
        }else{
          echo 'Error: ' . mysqli_error($conn);
          }
    }
}


