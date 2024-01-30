<?php
//terdapat sebuah variable yang menyimpan data tahun
// $year=2023
//untuk tahun yang merupakan kelipatan 4, pada bulan febuari terdapat tanggal 29
// buatlah perkondisian jika tahun kelipatan 4, maka akan menampilkan 
// tahhun 2024, bulan febuari sampai dengan tanggal 29
// selain dari itu hanya menampilkan
// tahun 2023, bulan febuari hanya sampai tanggal 28

$year = 2023;

if ($year % 4 == 0) {
    echo "tahun $year, bulan febuari sampai dengan tanggal 29"; 
} else {
    echo "tahun $year, bulan febuari hanya sampai tanggal 28"; 
}

?>