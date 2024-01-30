<?php
// mini market eko menjual berbagai kebutuhan. setiap pelanggan yg berbelanja lebih dari 100.000 akan mendapatkan voucher potongan harga
// sebesar 10.000
// jika andi berbelanja sebesar 180.000 apa yang akan didapatkan andi

$total = 180000;
$dis = 10000 ;
$harga_bayar = $total - $dis;

if ($harga_bayar > 100000) {
    echo "Total yang harus dibayar adalah $harga_bayar dan mendapatakan diskon sebesar $dis "; 
} else {
    echo "Total yang harus dibayar adalah $total dan tidak mendapatakan diskon"; 
}

?>