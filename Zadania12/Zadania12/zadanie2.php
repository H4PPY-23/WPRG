<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UwU</title>
    <style>
        div{
            text-align: center;
        }
        td, table{
            border: 1px solid black;
            border-collapse: collapse;
            
        }
        *{
            margin:3px;
            padding: 5px;
        }
    </style>
</head>
<body>
    <?php
        ini_set('display_errors', 1);
        ini_set('display_startup_errors', 1);
        error_reporting(E_ALL);
        $mysqli = new mysqli("localhost","root","","test");
        try{
            $mysqli -> query("CREATE TABLE Persons(
                Person_id int PRIMARY KEY AUTO_INCREMENT NOT NULL,
                Person_firstname varchar(255),
                Person_secondname varchar(255),
                Person_email varchar(255)
            )");
            $mysqli -> query("CREATE TABLE Cars(
                Car_id int PRIMARY KEY AUTO_INCREMENT NOT NULL,
                Car_model varchar(255),
                Car_price float,
                Car_day_of_purchase datetime,
                Person_id int,
                FOREIGN KEY (person_id) REFERENCES Persons(Person_id)
            )");
        }catch(Exception $e){
            // echo $e->getMessage();
        }
    ?>
    <div>
    <h1>Manage MySQL Table</h1>
    </div>

    <form method="POST">
        <h3>Add Person</h3>
        <input type="text" name="fname" placeholder="fname"><br>
        <input type="text" name="lname" placeholder="lname"><br>
        <input type="text" name="email" placeholder="email"><br>
        <input type="submit" value="Add Person" name="person">
    </form>
    <form method="POST">
        <h3>Add Car</h3>
        <input type="text" name="model" placeholder="model"><br>
        <input type="number" name="price" placeholder="price"><br>
        <input type="date" name="year"placeholder="year"><br>
        <select name="id">
            <?php
                ini_set('display_errors', 1);
                ini_set('display_startup_errors', 1);
                error_reporting(E_ALL);
                $result = $mysqli ->query("SELECT Person_id FROM Persons");
                while(($rows = $result->fetch_row())!=null){
                    echo "<option>".$rows[0]."</option>";
                }
            ?>
        </select><br>
        <input type="submit" value="Add Car" name="car"><br>
    </form>
    <?php
        ini_set('display_errors', 1);
        ini_set('display_startup_errors', 1);
        error_reporting(E_ALL);
        if(isset($_POST['person'])){
            if(isset($_POST['fname'])&&isset($_POST['lname'])&&isset($_POST['email'])){
                $fname = $_POST['fname'];
                $lname = $_POST['lname'];
                $email = $_POST['email'];
                $mysqli ->query("INSERT INTO Persons VALUES (NULL,'$fname', '$lname', '$email');");
            }
            
        }
        if(isset($_POST['car'])){
            if(isset($_POST['model'])&& !empty($_POST['price']) &&isset($_POST['year'])&&isset($_POST['id'])){
                $model = $_POST['model'];
                $price = $_POST['price'];
                $year = $_POST['year'];
                $id = $_POST['id'];
                $mysqli ->query("INSERT INTO Cars VALUES (NULL,'$model','$price', '$year', '$id');");
            }
            
        }  
    ?>
    <div>
        <table>
            <tr>
                <td>ID</td><td>First Name</td><td>Last Name</td><td>Email</td><td>Action</td>
            </tr>
            <?php
                $result = $mysqli ->query("SELECT * FROM Persons");
                while(($rows = $result->fetch_row())!=null){
                    echo "<tr>";
                    foreach($rows as $cell){
                        echo "<td>$cell</td>";
                    }
                    echo "<td><form method='POST'><input type='submit' name='person_delete_$rows[0]' value='delete'></form></td></tr>";
                    if(isset($_POST["person_delete_$rows[0]"])){
                        try{
                            $mysqli->query("DELETE FROM Persons WHERE Person_id=$rows[0]");
                        }catch(Exception $e){

                        }
                    }
                }
            ?>
        </table>
        <table>
            <tr>
                <td>ID</td><td>Model</td><td>Price</td><td>Date</td><td>Person ID</td><td>Action</td>
            </tr>
            <?php
                $result = $mysqli ->query("SELECT * FROM Cars");
                while(($rows = $result->fetch_row())!=null){
                    echo "<tr>";
                    foreach($rows as $cell){
                        echo "<td>$cell</td>";
                    }
                    echo "<td><form method='POST'><input type='submit' name='car_delete_$rows[0]' value='delete'></form></td></tr>";
                    if(isset($_POST["car_delete_$rows[0]"])){
                        try{
                            $mysqli->query("DELETE FROM Cars WHERE Car_id=$rows[0]");
                        }catch(Exception $e){
                            
                        }
                    }
                }
            ?>
        </table>
    </div>
</body>
</html>