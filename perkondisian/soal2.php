<?php

$nilai = 6;

if ($nilai >= 75) {
    echo "nilai $nilai dinyatakan <span class=kom> KOMPOTEN </span>"; 
} else {
    echo " nilai $nilai dinyatakan <span class=komp> TIDAK KOMPOTEN </span> "; 
}

?>

<style>
    .kom {
        color: green;
    }

    .komp{
        color: red;
    }
</style>