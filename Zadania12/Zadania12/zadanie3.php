<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UwU</title>
    <style>
        *{
            text-align: center;
            margin:3px;
            padding:5px;
        }
    </style>
</head>
<body>
    <h1>Registration Form</h1>
    <form method="POST">
        First Name:<br>
        <input type="text" name="fname"><br>
        Last Name:<br>
        <input type="text" name="lname"><br>
        Email:<br>
        <input type="email" name="email"><br>
        Username:<br>
        <input type="text" name="uname"><br>
        Password:<br>
        <input type="password" name="password"><br>
        <input type="submit" value="register">
    </form>
    <?php
        ini_set('display_errors', 1);
        ini_set('display_startup_errors', 1);
        error_reporting(E_ALL);
        $mysql = mysqli_connect("localhost", "root","","test");
        if(isset($_POST['fname']) && isset($_POST['lname']) && isset($_POST['email']) && isset($_POST['uname']) && isset($_POST['password'])){
            $fname = $_POST['fname'];
            $lname = $_POST['lname'];
            $email = $_POST['email'];
            $uname = $_POST['uname'];
            $password = $_POST['password'];
            $hash = password_hash($password, PASSWORD_DEFAULT);
            $mysql->query("INSERT INTO Users VALUES(NULL, '$fname', '$lname', '$email', '$uname', '$hash')");
        }
    ?>
    <?php
        $result = $mysql->query("SELECT COUNT(*) FROM Users; ");
        echo 'zarejestrowani użytkownicy: '.$result->fetch_row()[0];
    ?>
</body>
</html>