<!DOCTYPE html>
<html lang="pl-PL">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>zad2</title>
    </head>
    <body>
        <?php 
            ini_set('display_errors', 1);
            ini_set('display_startup_errors', 1);
            error_reporting(E_ALL);
            function rozpychanie($tablica, $n): array{
                if(!is_int($n)){
                    echo 'błąd';
                    return $tablica;
                }else{
                    array_splice($tablica,$n,0,"$");
                    return $tablica;
                }
            }

            $tablica = [1,2,3,4,5,6,7,8,9,10];
            $n = 3;
            print_r(rozpychanie($tablica, $n));
        ?>
    </body>
</html>