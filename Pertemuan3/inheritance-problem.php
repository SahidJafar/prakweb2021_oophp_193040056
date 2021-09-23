<?php
// Jualan Produk
// Komik
// Game

class Produk{
    public $judul,
           $penulis, 
           $penerbit, 
           $harga,
           $jmlHalaman,
           $waktuMain,
           $tipe;
    
    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0, $waktuMain = 0, $tipe ){
       $this->judul = $judul;
       $this->penulis = $penulis;
       $this->penerbit = $penerbit;
       $this->harga = $harga;
       $this->jmlHalaman = $jmlHalaman;
       $this->waktuMain = $waktuMain;
       $this->tipe = $tipe;
    }

    public function sayHello() {
        return "Hello World!";
    }

    public function getLabel(){
        return "$this->penulis, $this->penerbit";
    }

    public function getInfoLengkap(){
       // Komik : Naruto | Mashashi Kishimoto, Shonen Jump (Rp.30000) - 100 Halaman.
       // Game : Uncharted | Neil Druckmann, Sony Computer (Rp.250000) - 50 Jam.
 
        $str = "{$this->tipe} : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
        if($this->tipe == "Komik"){
            $str .= " - {$this->jmlHalaman} halaman.";
        }else if($this->tipe == "Game"){
            $str .= " ~ {$this->waktuMain} Jam.";
        }
        return $str;
    }
}

class CetakInfoProduk{
    public function cetak(Produk $produk){
        $str = "{$produk->judul} | {$produk->getLabel()} {$produk->getLabel()} (Rp. {$produk->harga})";
        return $str;
    }
}



$produk1 = new Produk("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 100, 0, "Komik");
$produk2 = new Produk("Uncharted", "Neil Druckman", "Sony Computer", 250000, 0, 50, "Game");



// Komik : Masashi Kishimoto, Shonen Jump
// Game: Neil Druckman, Sony Computer
// Naruto | Masashi Kishimoto, Shonen Jump Masashi Kishimoto, Shonen Jump (Rp. 30000)

echo $produk1->getInfoLengkap();
echo "<br>";
echo $produk2->getInfoLengkap();