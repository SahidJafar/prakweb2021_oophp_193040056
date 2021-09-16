<!-- Membuat Properti dan Methode 

- Properti adalah merepresentasikan data dari object
- Methode adalah merepresentasikan perilaku dari object


-->


<?php
// Jualan Produk
// Komik
// Game

class Produk{
    public $judul = "judul",
           $penulis = "penulis",
           $penerbit = "penerbit",
           $harga = 0;

    public function sayHello() {
        return "Hello World!";
    }

    public function getLabel(){
        return "$this->penulis, $this->penerbit";
    }
}

// Memanggil Properti

// $produk1= new Produk();
// $produk1->judul = "Naruto";
// var_dump($produk1);

// $produk2= new Produk();
// $produk2->judul = "Uncharted";
// $produk2->tambahProperty = "hahaha";
// var_dump($produk2);

$produk3 = new Produk();
$produk3->judul = "Naruto";
$produk3->penulis = "Masashi Kishimoto";
$produk3->penerbit = "Shonen Jump";
$produk3->harga = "30000";

$produk4 = new Produk();
$produk4->judul = "Uncharted";
$produk4->penulis = "Neil Druckman";
$produk4->penerbit = "Sony Computer";
$produk4->harga = "250000";

// Produk 3
echo "Komik : $produk3->penulis, $produk3->penerbit";
echo "<br>";

// Memanggil Methode
echo $produk3->sayHello();
echo "<br>";
echo $produk3->getLabel();
echo"<br>";

// Produk 4
echo "Komik : " . $produk3->getLabel();
echo"<br>";
echo"Game: " . $produk4->getLabel();

?>