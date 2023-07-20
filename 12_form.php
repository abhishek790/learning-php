<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SQl</title>
</head>
<body>
<?php
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $desc = $_POST['desc'];

        $servername = 'localhost';
        $name = "root";
        $password = "";
        $database = "contacts";

        $conn = mysqli_connect($servername,$name,$password,$database);
        if (!$conn){
            die("Sorry we failed to connect".mysqli_connect_error());
        }else{
            echo "db connection successful<br>";

            $sql = "INSERT INTO `contactus`(`sno`,`name`,`email`,`concern`,`dt`) VALUES ('1','$name','$email','$desc',current_timestamp())";
            $result = mysqli_query($conn,$sql);

            if($result){
                echo "your entry has been submitted successfully <br>";
            }else{
                echo "the record was not inserted<br>";
                mysqli_error($conn);
            }
        }
    }


?>

<form action="/phpl/12_form.php" method = "post">
        <label for = "name">Name</label>
        <input type = "text" name ="name" id ="name">
        <br>
        <label for = "email">Email Address</label>
        <input type = "email"  name = "email" id = "email">
        <br>
        <label for = "desc">Description</label>
        <textarea name="desc" id="desc" cols="30" rows="10"></textarea>
        <br>
        <input type = "submit" value = "submit">
    </form>
</body>
</html>