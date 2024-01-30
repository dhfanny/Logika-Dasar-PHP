<?php
// buatlah sebuah fungsi yang akan menghasilakn sebuah array dari banyak data yang diterima. data yang dikirim berbentuk string nama-nama jurusan. jika nama jurusan ada yang di panggil duplikat, maka yang dimasukkan ke array hanya salah satu saja (capslook).
// contoh pemnggilan argumennya : namfunc ("PPLG", "HTL", "KLN", "PMN", "pplg"), maka akan menghasilkan array ["PPLG", "HTL", "KLN", "PMN"]

function createArray(...$jurusan){
    $uniqueJurusan = array_unique(array_map('strtoupper', $jurusan));
    return $uniqueJurusan;
}

print_r( createArray("PPLG", "HTL", "KLN", "PMN", "pplg"));
// print_r(implode(", ", $result)