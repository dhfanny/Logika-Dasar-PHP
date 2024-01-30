<?php
// rumah makan beni mengadakan program diskon sebesar 5% tiap pembelian hari selasa. dan seiap pembelian di atas 100.000
// mendapat diskon sebesar 7%.
// Hitunglah uang yang harus di bayar jika total pembelian 130.000 di hari ini

//dik:
$uang = 130000;
$hari = date("D");
$disSelasa = 0.05;
$disPembelianDiatas100 = 0.07;
$disSeluruh = 0.12;

//jawab
if($uang >= 100000){

    if($hari == "Tue"){
        $bayar = $uang - ($uang * $disSeluruh);
    } else {
        $bayar = $uang - ($uang * $disPembelianDiatas100);
    }

    echo "Uang yang harus dibayar jika total pembelian $uang di hari itu adalah $bayar ";
} else{
    echo "uang yang harus di bayar adalah $uang dan tidak mendapatkan diskon";
}
?>