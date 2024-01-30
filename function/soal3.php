<?php
//buatlah sebuah fungsi yang akan membandingkan dua buah string nama. lalu, menampilkan jumlah karakter dari dua nama tersebut, dan menampilkan nama yang memiliki jumlah karakter lebih banyak serta selisihnya

function pembandingNama($nama1, $nama2)
{
    $karakter1 = strlen(str_replace(' ', '', $nama1));
    $karakter2 = strlen(str_replace(' ', '', $nama2));

        if ($karakter1 > $karakter2) {
            $karakterBanyak = $nama1;
            $selisih = $karakter1 - $karakter2;
            echo $karakterBanyak." memiliki karakter terbanyak dari pada ". $nama2 ." dengan selisih : " .$selisih;

        }elseif ($karakter2 > $karakter1) {
            $karakterBanyak = $nama2;
            $selisih = $karakter2 - $karakter1;
            echo $karakterBanyak." memiliki karakter terbanyak dari pada ". $nama1 ." dengan selisih : " .$selisih;

        }else{
            echo "keduanya memiliki jumlah karakter yang sama, sehingga selisihnya 0";
        }
}
pembandingNama("bintang aja", "mayra ");