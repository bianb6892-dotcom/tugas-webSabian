<?php

function hitung($umur) {
    // ubah umur menjadi string supaya bisa dipecah
    $angka = str_split($umur);

    // jumlahkan semua digit
    $total = array_sum($angka);

    echo "Jumlah angka umur saya $total";
}

$umur = 17; // ganti dengan umur kalian
hitung($umur);

?>
