<?php
// 1. Membuat Array Numerik (Indeks) yang berisi Angka 1-20
$angka = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20];

echo "<h2>1. BEGINNER: Array Numerik (1-20)</h2>";
echo "<pre>";

// 2. Mencetak isi Array menggunakan Foreach
foreach ($angka as $nilai) {
    echo "Angka: " . $nilai . "\n";
}

echo "</pre>";
?>