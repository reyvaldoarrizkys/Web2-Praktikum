<?php
//Buat Array
$animals = ["burung", "kucing", "nyamuk", "singa"];
echo $animals[1] . "<br>";

echo $animals[3] . "<br>";
echo "<hr>";

foreach ($animals as $animal) {
    echo $animal . "<br>";
}
echo "<hr>";

// Buat Array Asosiatif
$mahasiswa = ["nama"=>"Reyvaldo", "jurusan"=>"TI", "semester =>6"];
echo $mahasiswa["jurusan"] . "<br>";
echo "<hr>";

// Nampilin Semua Data
foreach ($mahasiswa as $key=>$value){
    echo "key : " . $key . "Value : " . $value . "<br>";
}
echo "<hr>";

//Buat Array Multidimensi
$dosen = [
    ["Reyvaldo", "Web"],
    ["Alpian", "DDP"],
    ["Rifky", "OS"]
];
echo $dosen[2][0];
// indexnya bisa 00, 01, 10, 11, 20, 21
?>

