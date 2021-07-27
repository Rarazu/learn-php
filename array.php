<?php
/**
 * array adalah kumpulan nilai yang berjenis sama
 * setiap data punya posisi yg disebut indeks
 * 
 * variabel -> individu
 * array -> populasi 
 */

// $studennt = "Bill Gates";
 //$siswa = ["John Cena", "The Rock","Batista","Rey Mysterio"];
 //echo $siswa[3];

 //array digunakan saat ada data yg bisa dikelompokkan
 $person = [
     ["name" => "Gopal", "address" => "Madrid", "age" => 40],
     ["name" => "Kaizo", "address" => "Saturnus", "age" => 80],
     ["name" => "Kokochi", "address" => "Madrid", "age" => 40],
 ];
 echo $person[1]["name"];
 
?>