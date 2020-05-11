<?php

    class Product {
        public $judul, 
               $penulis, 
               $penerbit, 
               $harga;
        
        public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0 ) {
            $this->judul = $judul;
            $this->penulis = $penulis;
            $this->penerbit = $penerbit;
            $this->harga = $harga;
        }

        public function getLabel() {
            return "$this->penulis, $this->penerbit";
        }
    }

    $product1 = new Product("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000);
    $product2 = new Product("UNcharted", "Neil Druckmann", "Sony Computer", 250000);
    $product3 = new Product("Dragon Ball");

    echo "Komik : " . $product1->getLabel();
    echo "<br>";
    echo "Game : " . $product2->getLabel();
    echo "<br>";
    var_dump($product3);

?>