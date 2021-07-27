<?php
/** second case
 * buat fungsi untuk menghitung bilangan faktorial
 * faktorial(5) -> 5 * 4 * 3 * 2 * 1 = 120 
 */
$i = 1;
$hasil = $i;
$n = 5;
while( $i <= $n){
$hasil = $hasil * $i; $i++;
}
echo "Faktorial(5) =";
echo $hasil;
?>