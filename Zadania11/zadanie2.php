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
        class Product{
            private $name;
            private $price;
            private $quantity;
            public function __construct($name, $price, $quantity) {
                $this->name = $name;
                $this->price = $price;
                $this->quantity = $quantity;
            }
            public function getName():string{
                return $this->name;
            }
            public function getPrice():float{
                return $this->price;
            }
            public function getQuantity():int{
                return $this->quantity;
            }

            public function setName($name){
                $this->name = $name;
            }
            public function setPrice($price){
                $this->price = $price;
            }
            public function setQuantity($quantity){
                $this->quantity = $quantity;
            }

            public function __toString():string{
                return $this->name.$this->price.$this->quantity;
            }
        }
        class Cart{
            private $products = [];
            public function __construct(){
                $this->products = [];
            }
            public function addProduct(Product $product){
                array_push($this->products,$product);
            }
            public function removeProduct(Product $product){
                $indeks = array_search($product,$this->products);
                array_splice($this->products,$indeks,1);
            }
            public function getTotal():float{
                $suma = 0;
                foreach ($this->products as $product) {
                    $suma += $product->getPrice()*$product->getQuantity();
                }
                return $suma;
            }
            public function __toString():string{
                $output = "Prodkuty w koszyku:<br>";
                foreach ($this->products as $product) {
                    $output.=$product->getName()." ";
                    $output.=$product->getPrice()." ";
                    $output.=$product->getQuantity()."<br>";
                }
                $output.="Suma: ";
                $output.=$this->getTotal();
                return $output;
            }
        }
        $cart = new Cart();
        $cart->addProduct(new Product("Chleb", 3.5, 2));
        $cart->addProduct(new Product("Mleko", 2.8, 1));
        $cart->addProduct(new Product("Masło", 7.2, 1));
        echo $cart->__toString();
    ?>
</body>
</html>


