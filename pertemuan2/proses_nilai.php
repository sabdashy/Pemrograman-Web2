<?php
if (isset($_GET['submit'])) {
    $nama = $_GET['nama'];
    $matkul = $_GET['matkul'];
    $uts = $_GET['uts'];
    $uas = $_GET['uas'];
    $praktikum = $_GET['praktikum'];
    $total = round(($uts + $uas + $praktikum) / 3, 2);

    echo 'Nama : ' . $nama . '<br>';
    echo 'Mata Kuliah : ' . $matkul . '<br>';
    echo 'Nilai UTS : ' . $uts . '<br>';
    echo 'Nilai UAS : ' . $uas . '<br>';
    echo 'Nilai Praktikum : ' . $praktikum . '<br>';
    echo 'Nilai Rata-Rata : ' . $total . '<br>';
} else {
    echo 'tidak ada data';
}

if ($total > 84 && $total < 101) {
    echo 'Grade Nilai Anda : A';
} elseif ($total > 69 && $total < 85) {
    echo 'Grade Nilai Anda : B';
} elseif ($total > 55 && $total < 70) {
    echo 'Grade Nilai Anda : C';
} elseif ($total > 35 && $total < 56) {
    echo 'Grade Nilai Anda : D';
} elseif ($total >= 0 && $total < 36) {
    echo 'Grade Nilai Anda : E';
} else {
    echo 'Grade Nilai Anda : I';
}
