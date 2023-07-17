

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get and Post</title>
</head>
<body>

<?php
 if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $email= $_POST['email'];
    $password = $_POST['pass'];
    echo " form has been received with email: $email and password: $password";
 }


?>
    <form action="/phpl/7_get_post.php" method = "post">
        <label for = "email">Email address</label>
        <input type = "email" name ="email" id ="email">
        <br>
        <label for = "password">Password</label>
        <input type = "password"  name = "pass" id = "password">
        <br>
        <input type = "submit" value = "submit">
    </form>
</body>
</html>