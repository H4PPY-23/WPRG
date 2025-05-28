<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UwU</title>
    <style>
        *{
            text-align: center;
        }
    </style>
</head>
<body>
    <h1>Manage MySQL Table</h1>
    <form method="GET">
    <input type="submit" value="delete" name="delete">
    </form>
    <?php
        ini_set('display_errors', 1);
        ini_set('display_startup_errors', 1);
        error_reporting(E_ALL);
        $mysql = mysqli_connect("localhost", "root","","test");
        
        if(isset($_GET['delete'])){
            try{
                mysqli_query($mysql, "DROP TABLE Student");
                echo 'table dropped';
            }catch(Exception $e){
                echo $e -> getMessage();
            }
        }else{
            try {
                mysqli_query($mysql,"CREATE TABLE Student(
                    StudentID int PRIMARY KEY NOT NULL,
                    Firstname varchar(255),
                    Secondname varchar(255),
                    Salary int,
                    DateOfBirth date
                )");
            }catch(Exception $e){
                echo $e->getMessage();
            }
        }
        mysqli_close($mysql);

    ?>
</body>
</html>