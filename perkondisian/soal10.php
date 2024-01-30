<?php
// variable a = 5, variable b = 10
// jika dua variable sama maka munculkan angka a,jika tidak munculkan angka terbesar

$a = 5;
$b = 5;

if ($a == $b) {
    echo" hasil dari persamaan kedua nilai adalah $a"; 
} else {
     echo "nilai terbesarnya adalah " . Max($a,$b);
}

?>