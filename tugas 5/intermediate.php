<?php
// 1. Membuat Array Numerik Multi Dimensi (Data Siswa)
// Susunan data: [NIS, Nama Lengkap, Alamat Rumah, No. Telp/WA, Jenis Kelamin]
$data_siswa_numerik = [
    ["2023001", "Budi Santoso", "Jl. Mawar No. 5", "081234567890", "Laki-laki"],
    ["2023002", "Siti Aisyah", "Jl. Melati No. 10", "085678901234", "Perempuan"],
    ["2023003", "Ahmad Fikri", "Jl. Anggrek No. 15", "087654321098", "Laki-laki"]
];

$header = ["NIS", "Nama Lengkap", "Alamat Rumah", "No. Telp/WA", "Jenis Kelamin"];

echo "<h2>2. INTERMEDIATE: Array Numerik Multi Dimensi</h2>";
echo "<pre>";

// 2. Mencetak Setiap data dalam Array
foreach ($data_siswa_numerik as $key_siswa => $siswa) {
    echo "Data Siswa ke-" . ($key_siswa + 1) . ":\n";
    
    // Perulangan untuk field data siswa
    foreach ($siswa as $key_field => $nilai_field) {
        // Menggunakan array $header untuk menampilkan nama field
        echo "  " . $header[$key_field] . ": " . $nilai_field . "\n";
    }
    echo "--------------------------\n";
}

echo "</pre>";
?>