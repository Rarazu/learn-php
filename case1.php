<?php
$product = [
    ["name" => "Lenava", "qty" => 4, "price" => 1000000],
    ["name" => "Aser", "qty" => 2, "price" => 1500000],
    ["name" => "Toyiba", "qty" => 6, "price" => 2000000],
    ["name" => "Doll", "qty" => 1, "price" => 1200000],
    ["name" => "Susa", "qty" => 3, "price" => 1700000],
];
/** buat code untuk menghitung total jumlah yang dibeli */

$pembelian = [
    [
        'name' =>  "Lenava",
        'qty'  => 4,
        'price' => 1000000
    ],
    [
        'name' =>  "Aser",
        'qty'  => 2,
        'price' => 1500000
    ],
    [
        'name' =>  "Tayiba",
        'qty'  => 6,
        'price' => 2000000
    ],
    [
        'name' =>  "Doll",
        'qty'  => 1,
        'price' => 1200000
    ],
    [
        'name' =>  "Susa",
        'qty'  => 3,
        'price' => 1700000
    ],
];

$jumlahBarang = array_sum(array_column($pembelian, 'qty'));
$jumlahTotal = array_sum(array_column($pembelian, 'price'));

echo "Total jumlah yang dibeli : $jumlahBarang \n";
echo "Jumlah yang harus dibayar : $jumlahTotal";

?>