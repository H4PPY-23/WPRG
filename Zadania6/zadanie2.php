<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>zadanie2</title>
</head>
<body>
  <?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
    function numbers($ciag) {
        if(!is_string($ciag)){
            $ciag = strval($ciag);
            $suma = 0;
            for($i=0;$i<strlen($ciag);$i++){
                $suma+=intval($ciag[$i]);
            }
            if($suma>=10){
                numbers($suma);
            }else{
                echo $suma.'<br>';
            }
        }else{
            echo 'błąd';
        }

    }

    numbers(5210);
    numbers(-5210);
    numbers(5210.5);
    numbers("numbers");
  ?>
</body>
</html>