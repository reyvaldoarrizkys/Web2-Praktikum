<?php

$nama = $_POST["nama"];
$matkul = $_POST["matkul"];
$nilai_uts = $_POST["nilai_uts"];
$nilai_uas = $_POST["nilai_uas"];
$nilai_tugas = $_POST["nilai_tugas"];

// Buat Total diisini
$total_nilai = ($nilai_uts + $nilai_uas + $nilai_tugas) / 3;

// Buat Variabel Kosong
$grade;
$status;
$predikat;

if ($total_nilai > 60) {
    $status =  "Lulus";
} else {
    $status =  "Tidak Lulus";
}

//Buat Logic Grade
if ($total_nilai >= 85) {
    $grade =  "A";
} elseif ($total_nilai >= 70) {
    $grade =  "B";
} elseif ($total_nilai >= 50) {
    $grade =  "C";
} elseif ($total_nilai >= 30) {
    $grade =  "D";
} else {
    $grade =  "E";
}

//Logic Predikat
switch ($grade) {
    case 'A':
        $predikat =  "Sangat Memuaskan";
        break;
    case 'B':
        $predikat =  "Memuaskan";
        break;
    case 'C':
        $predikat =  "Cukup";
        break;
    case 'D':
        $predikat =  "Kurang";
        break;
    case 'E':
        $predikat =  "Sangat Kurang";
        break;
    default:
        $predikat =  "Tidak Ada";
        break;
}
?>


<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>

<body>
    <div class="container">
        <h1>Daftar Nilai Siswa</h1>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Nama</th>
                    <th scope="col">Mata Kuliah</th>
                    <th scope="col">Nilai UTS</th>
                    <th scope="col">Nilai UAS</th>
                    <th scope="col">Nilai Tugas</th>
                    <th scope="col">Grade</th>
                    <th scope="col">Predikat</th>
                    <th scope="col">Status</th>
                </tr>
            </thead>
            <tbody>
                <td><?= $nama; ?></td>
                <td><?= $matkul; ?></td>
                <td><?= $nilai_uts; ?></td>
                <td><?= $nilai_uas; ?></td>
                <td><?= $nilai_tugas; ?></td>
                <td><?= $grade; ?></td>
                <td><?= $predikat; ?></td>
                <td><?= $status; ?></td>
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</body>

</html>