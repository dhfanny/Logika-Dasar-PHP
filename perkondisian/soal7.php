<?php
// terdapat variabl, dengan isi "wikrama" ambil huruf akhhir dari string tersebut

$nama = "wikrama";
$last = substr($nama, -1);
// substr => untuk mengakses karakter terakhir tanpa menggunakan fungsi

echo "kata terakhir dari $nama adalah $last";
?>
