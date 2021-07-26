<?php
/**
 * looping (perulangan)
 * 
 * type of looping  -> for, while, do..while
 * 
 * Konsep looping :
 * 1. titik awal
 * 2. titik akhir 
 * 3. perubahan nilai
 * 
 * selama kondisinya benar, looping akan berlanjut
 * saat kondisi salah, looping akan berhenti
 */

//case 1 : menampilkan bilangan kelipatan 7 mulai -70 sampai 100
$start = -70;
for ($i=$start; $i < 100 ; $i+=7){
    echo "$i" ;
}

//case 2
?>