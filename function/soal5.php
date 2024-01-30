<?php
// buatlah sebuah fungsi yang akan menghitung lembah uang rupiah
// contoh : 140500
// lembar rupiah :
// Rp. 100.000 : 1
// Rp. 20.000 : 2
// Rp.500 : 1

// function rupiah($number){
//     $nilaiUang = [100000, 20000, 500];

// }

// rupiah(140500);

function hitungLembarRupiah($jumlahUang) {
    // Daftar nilai uang Rupiah dan jumlah lembar masing-masing
    $nilaiUang = [100000, 50000, 20000, 10000, 5000, 2000, 1000, 500];
    $lembarRupiah = [];

    // Loop untuk menghitung jumlah lembar uang Rupiah
    foreach ($nilaiUang as $value) {
        $jumlahLembar = floor($jumlahUang / $value);
        if ($jumlahLembar > 0) {
            $lembarRupiah["$value"] = $jumlahLembar;
            $jumlahUang -= $jumlahLembar * $value;
        }
    }

    // Menampilkan hasil jumlah lembar uang Rupiah
    echo "Lembar Rupiah: <br>" ;
    foreach ($lembarRupiah as $value => $jumlahLembar) {
        echo "Rp. $value : $jumlahLembar <br>";
    }
}

// Contoh penggunaan
hitungLembarRupiah(30000);
?>
