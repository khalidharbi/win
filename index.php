<?php
include './inc/db.php';
include './inc/form.php';

$sql = 'SELECT * FROM users';
$result = mysqli_query($conn, $sql);
$users = mysqli_fetch_all($result, MYSQLI_ASSOC);

echo '<pre>';
print_r($users);
echo '</pre>';

mysqli_free_result($result);
mysqli_close($conn);

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