<?php
/** second case
 * buat fungsi untuk menghitung bilangan faktorial
 * faktorial(5) -> 5 * 4 * 3 * 2 * 1 = 120 
 */
function faktorial($number)
{
    $result = 1;
    for ($i=$number; $i >= 1; $i--){
        $result = $result * $i;
    }
    return $result;
}
echo "Faktorial of 5 is ". faktorial(5);

/**
 * fungsi -> void dan non-void
 * void -> void yg tidak mengembalikan value
 * non-void -> fungsi yg mengembalikan value (return value) 
 */
?>