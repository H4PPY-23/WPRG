<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>zad1</title>
</head>
<body>
    <?php
            ini_set('display_errors', 1);
            ini_set('display_startup_errors', 1);
            error_reporting(E_ALL);
        class NoweAuto{
            public $model_auta = "";
            public $cena_w_euro = 0;
            public $aktualny_kurs_euro_pln = 4.24;
            public function ObliczCene():float{
                return $this->cena_w_euro*$this->aktualny_kurs_euro_pln;
            }
        }
        class AutoZDodatkami extends NoweAuto{
            public $model_auta = "";
            public $cena_w_euro = 0;
            public $aktualny_kurs_euro_pln = 4.24;
            public $alarm=0;
            public $radio=0;
            public $klimatyzacja =0;
            public function ObliczCene():float{
                $suma = $this->cena_w_euro+$this->alarm+$this->radio+$this->klimatyzacja;
                return $suma*$this->aktualny_kurs_euro_pln;
            }
        }
        class Ubezpieczenie extends AutoZDodatkami{
            public $wartosc_samochodu_z_dodatkami=0;
            public $procentowa_wartosc_ubezpieczenia=0.0;
            public $liczba_lat_posiadania;
            function ObliczCene(): float{
                return $this->procentowa_wartosc_ubezpieczenia*($this->wartosc_samochodu_z_dodatkami*((100-$this->liczba_lat_posiadania)/100));
            }
        }
        $toyota_gt86 = new NoweAuto();
        $toyota_gt86->cena_w_euro = 10000;
        echo $toyota_gt86->ObliczCene().'<br>';
        $ubezpieczenie = new Ubezpieczenie();
        $ubezpieczenie->wartosc_samochodu_z_dodatkami = $toyota_gt86->cena_w_euro;
        $ubezpieczenie->liczba_lat_posiadania = 10;
        $ubezpieczenie->procentowa_wartosc_ubezpieczenia=1.5;
        echo $ubezpieczenie->ObliczCene();
    ?>
</body>
</html>