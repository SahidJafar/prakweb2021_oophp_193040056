<!-- Constant -->
<!-- Nilainya tidak dapat berubah -->
<!-- Define(NAME, Value) tidak bisa disimpan diclass -->
<!-- const NAME = value bisa di class -->
<?php

// define('NAMA', 'Sahid Jafar');

// echo NAMA;
// echo"<br>";

// const UMUR = 32;
// echo UMUR;


// class Coba {
//     const NAMA = 'Sahid';
// }

// echo Coba::NAMA;

// echo __FILE__;

// function coba(){
//     return __FUNCTION__;
// }
// echo coba();

class Coba{
    public $kelas = __CLASS__;
}
$obj = new Coba;
echo $obj->kelas;
?>