<?php
// Jualan Produk
// Komik
// Game

class Produk{
    private $judul,
           $penulis, 
           $penerbit,
           $harga,
           $diskon = 0;       
           
     public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0){
       $this->judul = $judul;
       $this->penulis = $penulis;
       $this->penerbit = $penerbit;
       $this->harga = $harga;
 
    }
    public function setJudul($judul){
        $this->judul = $judul;
    }
    public function getJudul(){
        return $this->judul;
    }
    public function setPenulis($penulis){
        $this->penulis = $penulis;
    }
    public function getPenulis(){
        return $this->penulis;
    }

    public function sayHello() {
        return "Hello World!";
    }
    public function setPenerbit($penerbit){
        $this->penerbit = $penerbit;
    }
    public function getPenerbit(){
        return $this->penerbit;
    }
    public function setHarga($harga){
        $this->harga = $harga;
    }
    public function setDiskon($diskon){
        $this->diskon = $diskon;
    }
    public function getDiskon($diskon){
        return $this->diskon = $diskon;
    }

    public function getLabel(){
        return "$this->penulis, $this->penerbit";
    }
    
    public function getInfoProduk(){
       // Komik : Naruto | Mashashi Kishimoto, Shonen Jump (Rp.30000) - 100 Halaman.
       // Game : Uncharted | Neil Druckmann, Sony Computer (Rp.250000) - 50 Jam.
 
        $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";

        return $str;
    }
   
    public function getHarga(){
        return $this->harga - ($this->harga * $this->diskon / 100 );
    }
}

class Komik extends Produk {
    public $jmlHalaman;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0){
        parent::__construct($judul, $penulis, $penerbit, $harga);
        
        $this->jmlHalaman = $jmlHalaman;
    }
    public function getInfoProduk(){
        $str = "Komik  : ". parent::getInfoProduk() ." - {$this->jmlHalaman} Halaman.";
        return $str;
    }
}

class Game extends Produk {
    public $waktuMain;
    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $waktuMain = 0){
        parent::__construct($judul, $penulis, $penerbit, $harga);
        
        $this->waktuMain = $waktuMain;
    }

    public function getInfoProduk(){
        $str = "Game  : ". parent::getInfoProduk() ." ~ {$this->waktuMain} Jam.";
        return $str;
    }
}


class CetakInfoProduk{
    public function cetak(Produk $produk){
        $str = "{$produk->judul} | {$produk->getLabel()} {$produk->getLabel()} (Rp. {$produk->harga})";
        return $str;
    }
}



$produk1 = new Komik("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 100);
$produk2 = new Game("Uncharted", "Neil Druckman", "Sony Computer", 250000, 50);



// Komik : Masashi Kishimoto, Shonen Jump
// Game: Neil Druckman, Sony Computer
// Naruto | Masashi Kishimoto, Shonen Jump Masashi Kishimoto, Shonen Jump (Rp. 30000)

echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();
echo "<hr>";

$produk2->setDiskon(50);
echo $produk2->getharga();
echo "<hr>";

// Setter Getter
$produk1->setPenulis("Sahid Jafar");
echo $produk1->getPenulis();