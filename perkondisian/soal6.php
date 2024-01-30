<?php
//terdapat 2 var yg menyimpan data angka
//apabila hasil perhitungn bagi antara angka1 & 2 merupakan desimal, maka hasil akan dibulatkan tertampil seperti berikut :
//10 : 3 = 3,3333 jika dibulatkan menjadi 3
// apabila hasil perhitungan bukan desimal : 10 : 5 = 2

$angka1 = 10;
$angka2 = 3;

//is_float -> untuk kondisi angka yang bernilai desimal
//round -> untuk membulatkan hasil angka yang desimal
if (is_float( $hasil = $angka1 / $angka2)) {
    echo "hasil dari $angka1 : $angka2 = $hasil, jika dibulatkan menjadi " .round($hasil); 
} else{
    echo "hasil dari $angka1 : $angka2 = $hasil"; 
}
?>