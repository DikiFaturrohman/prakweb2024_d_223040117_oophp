<?php
// define('NAMA', 'Diki Faturrohman');

// echo NAMA;

// echo "<br>";

// const UMUR = 20;

// echo UMUR;

// class Coba {
//     const NAMA = 'Diki';


// }

// echo Coba::NAMA;


// echo __DIR__;

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