<!DOCTYPE html>
<html lang="pl-PL">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>zad5</title>
    </head>
    <body>
        <h1>Kalkulator</h1>
        <hr>
        <h2>Prosty</h2>
        <form method="POST">
            <input type="number" name="a" required> 
            <select name="dzialanie">
                <option value="dodawanie">dodawanie</option>
                <option value="odejmowanie">odejmowanie</option>
                <option value="mnozenie">mnozenie</option>
                <option value="dzielenie">dzielenie</option>
            </select>
            <input type="number" name="b" required><br>
            <input type="submit" name="oblicz" value="Oblicz">
        </form>
        <hr>
        <h2>Zaawansowany</h2>
        <form method="POST">
            <input type="text" name="c" required>
            <select name="dzialanie1">
                <option value="sin">sin</option>
                <option value="cos">cos</option>
                <option value="tan">tan</option>
                <option value="bindec">bin to dec</option>
                <option value="decbin">dec to bin</option>
                <option value="dechex">dec to hexadec</option>
                <option value="hexdec">hexadec to dec</option>
            </select><br>
            <input type="submit" name="oblicz1" value="Oblicz">
        </form>
        <hr>

        <?php
            if (isset($_POST['oblicz'])) {
                $a = $_POST['a'];
                $b = $_POST['b'];
                $dzialanie = $_POST['dzialanie'];
                $wynik;

                switch ($dzialanie) {
                    case "dodawanie":
                        $wynik = $a + $b;
                        break;
                    case "odejmowanie":
                        $wynik = $a - $b;
                        break;
                    case "mnozenie":
                        $wynik = $a * $b;
                        break;
                    case "dzielenie":
                        if ($b == 0) {
                            $wynik = "Błąd a/0";
                        } else {
                            $wynik = $a / $b;
                        }
                        break;
                }
                echo $wynik;
            }

            if (isset($_POST['oblicz1'])) {
                $c = $_POST['c'];
                $dzialanie1 = $_POST['dzialanie1'];
                $wynik1;

                switch ($dzialanie1) {
                    case "sin":
                        $wynik1 = sin(deg2rad($c));
                        break;
                    case "cos":
                        $wynik1 = cos(deg2rad($c));
                        break;
                    case "tan":
                        $wynik1 = tan(deg2rad($c));
                        break;
                    case "bindec":
                        if (preg_match('/[01]/', $c)) {
                            $wynik1 = bindec($c);
                        } else {
                            $wynik1 = "Błąd !bin";
                        }
                        break;
                    case "decbin":
                        if (is_numeric($c)) {
                            $wynik1 = decbin((int)$c);
                        }
                        break;
                    case "dechex":
                        if (is_numeric($c)) {
                            $wynik1 = dechex((int)$c);
                        }
                        break;
                    case "hexdec":
                        if (preg_match('/[a-f]*[A-F]*[01]*/', $c)) {
                            $wynik1 = hexdec($c);
                        } else {
                            $wynik1 = "Błąd !hex";
                        }
                        break;
                }
                echo $wynik1;
            }
        ?>
    </body>
</html>