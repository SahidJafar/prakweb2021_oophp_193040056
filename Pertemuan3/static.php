<!-- Static Keyword -->
<!-- Member yang terikat dengan class,bukan dengan object -->
<!-- Nilai static akan selalu tetap meskipun object di intansiasi berulang kali -->
<!-- Membuat Kode menjadi 'Procedural' -->
<!-- Biasanya digunakan untuk membuat fungsi bantuan/helper -->
<!-- atau digunakan di class utillity framework-->
<?php

// class ContohStatic{
//     public static $angka = 1;

//     public static function halo(){
//         return "Halo " . self::$angka++ . " kali.";
//     }
// }

// echo ContohStatic::$angka;
// echo "<br>";
// echo ContohStatic::halo();
// echo "<hr>";
// echo ContohStatic::halo();

class Contoh{
    public static $angka = 1;

    public function halo(){
        return "Halo " . self::$angka++ . " kali. <br>";
    }
}

$obj = new Contoh;
echo $obj->halo();
echo $obj->halo();
echo $obj->halo();

echo"<hr>";

$obj2 = new Contoh;
echo $obj2->halo();
echo $obj2->halo();
echo $obj2->halo();