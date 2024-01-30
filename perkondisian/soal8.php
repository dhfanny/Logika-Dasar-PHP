<?php
// syarat untuk mendaftar denga syarat selanjutnya:
// nilai minimum mata pelajaran sebaga berikut:

// matematik 87
// BAHAS AINGGRIS 85
// bahas aindonesia 87
//minium rata rata adalah 85

// dengan minimum mata pelajaran dan minimum rata rata terpenuhi maka peserta dinyatakan diterima.

$mtk = 85;
$bingg = 87;
$bindo = 85;
$rata = ($mtk + $bingg + $bindo) / 3;

// number_format -> untuk menentukan jumlah angka di belakang koma yang diinginkan 
if ($rata >= 85 ) {
    echo "peserta dinyatakan diterima dengan rata-rata yang di dapatkan adalah ".number_format($rata,2); 
} else {
    echo "peserta dinyatakan tidak diterima dengan rata-rata yang di dapatkan adalah " .number_format($rata,2); 
}
?>