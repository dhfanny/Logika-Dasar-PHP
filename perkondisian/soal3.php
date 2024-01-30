<?php

// terdapat sebauh variable yang menyimpan data tahun kelahiran 
// $tahun = 2004;
// apabila tahun skrng dri tahun kelahiran tersebut berselesih 17 lebih, maka akan menampilkan teks berikut
// tahun kelahiran 2004 sudah dapat memiliki ktp, usia sekarang = 20
// apabila selisih kurang dari 17 maka menampilkan:
// tahun kelahiran 2008 belum memiliki ktp

$tahun = 1990;

if (($usia = 2024 - $tahun) >= 17) {
    echo "tahun kelahiran $tahun sudah memiliki KTP, usia sekarang = $usia"; 
} else {
    echo "tahun kelahiran $tahun belum memiliki KTP"; 
}

?>