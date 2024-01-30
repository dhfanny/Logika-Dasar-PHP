<?php

// terdapat satu variable yang memiliki value -5, tentukan apakah variable tersebut masuk kedalam bilangan bulat positif, bilangan bulat negatif, atau bilangan cacah dan apakah variable tersebut merupakan variable kelipatan 3

$a = -5;

if ( $a > 0) {
    echo "termasuk bilangan bulat positif dan "; 
} elseif( $a < 0) {
    echo "termasuk bilangan bulat negatif dan "; 
}else{
    echo "termasuk bilangan cacah dan ";
}
 
if ( $a % 3 == 0 ) {
    echo "merupakan variable kelipatan 3"; 
} else{
    echo "bukan variable kelipatan 3"; 
}
?>