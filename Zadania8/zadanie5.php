<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>zad5</title>
</head>
<body>
    <form method="post">
        <input type="text" name="tekst"><input type="submit">
    </form>
    <?php 
        ini_set('display_errors', 1);
        ini_set('display_startup_errors', 1);
        error_reporting(E_ALL);

        if(isset($_POST["tekst"])){
            $tekst = $_POST["tekst"];
            $tekst_po_przecinku =  explode(",",$tekst)[1];
            echo strlen($tekst_po_przecinku);
        }
    ?>
</body>
</html>