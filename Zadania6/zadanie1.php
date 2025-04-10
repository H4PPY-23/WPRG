<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>zadanie1</title>
</head>
<body>

    <form method="POST">
        <input type="number" name="poczatek"><br>
        <input type="number" name="koniec"><br>
        <input type="submit">
    </form>
    <div></div>
    <?php
        ini_set('display_errors', 1);
        ini_set('display_startup_errors', 1);
        error_reporting(E_ALL);
        function print_primes($poczatek1, $koniec1) : void {
            $prime_numbers = [];
            for($i=$poczatek1;$i<=$koniec1;$i++){
                $is_prime=true;
                for($j=2;$j<$i;$j++){
                    if($i%$j==0){
                        $is_prime=false;
                    }
                }
                if($is_prime){
                    array_push($prime_numbers, $i);
                }
            }
            for($i=0;$i<count($prime_numbers);$i++){
                echo' '.$prime_numbers[$i].' ';
            }
        }
        if(!empty($_POST["poczatek"]) && !empty($_POST["koniec"])){
            $poczatek = $_POST["poczatek"];
            $koniec = $_POST["koniec"];

            print_primes($poczatek, $koniec);
        }
    ?>
</body>
</html>