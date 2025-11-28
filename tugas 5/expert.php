<?php
// 1. Membuat Array Associative Multi Dimensi (Data Siswa)
$data_siswa_associative = [
    "siswa_1" => [
        "NIS" => "2023001",
        "Nama Lengkap" => "Budi Santoso",
        "Alamat Rumah" => "Jl. Mawar No. 5",
        "No. Telp/WA" => "081234567890",
        "Jenis Kelamin" => "Laki-laki"
    ],
    "siswa_2" => [
        "NIS" => "2023002",
        "Nama Lengkap" => "Siti Aisyah",
        "Alamat Rumah" => "Jl. Melati No. 10",
        "No. Telp/WA" => "085678901234",
        "Jenis Kelamin" => "Perempuan"
    ],
    "siswa_3" => [
        "NIS" => "2023003",
        "Nama Lengkap" => "Ahmad Fikri",
        "Alamat Rumah" => "Jl. Anggrek No. 15",
        "No. Telp/WA" => "087654321098",
        "Jenis Kelamin" => "Laki-laki"
    ]
];

echo "<h2>3. EXPERT: Array Associative Multi Dimensi</h2>";
echo "<pre>";

// 2. Mencetak Setiap data dalam Array
foreach ($data_siswa_associative as $key_siswa => $siswa) {
    // $key_siswa akan bernilai "siswa_1", "siswa_2", dst.
    echo "Data " . ucfirst(str_replace('_', ' ', $key_siswa)) . ":\n"; // Mengubah "siswa_1" menjadi "Siswa 1"
    
    // Perulangan untuk field data siswa
    // $key_field akan bernilai "NIS", "Nama Lengkap", dst.
    foreach ($siswa as $key_field => $nilai_field) {
        echo "  " . $key_field . ": " . $nilai_field . "\n";
    }
    echo "--------------------------\n";
}

echo "</pre>";
?>