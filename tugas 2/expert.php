<?php
echo "<pre>";

// Judul cantik
echo "═══════════════════════════════════════\n";
echo "           TABEL EXPERT 0 - 7           \n";
echo "═══════════════════════════════════════\n\n";

// Header kolom
echo "┌─────────";
for ($col = 0; $col <= 7; $col++) {
    echo "───────";
}
echo "┐\n";

echo "│ Row/Col ";
for ($col = 0; $col <= 7; $col++) {
    echo "│  $col   ";
}
echo "│\n";

// Garis pemisah
echo "├─────────";
for ($col = 0; $col <= 7; $col++) {
    echo "───────";
}
echo "┤\n";

// Isi tabel
for ($row = 0; $row <= 7; $row++) {

    // Tandai baris silver
    $label = ($row % 2 == 0) ? "$row (S)" : "  $row   ";
    $label = str_pad($label, 9, " ", STR_PAD_RIGHT);

    echo "│ $label ";

    for ($col = 0; $col <= 7; $col++) {
        $hasil = str_pad($row * $col, 4, " ", STR_PAD_LEFT);
        echo "│ $hasil ";
    }

    echo "│\n";

    // garis antar baris
    if ($row < 7) {
        echo "├─────────";
        for ($col = 0; $col <= 7; $col++) {
            echo "───────";
        }
        echo "┤\n";
    }
}

// Penutup tabel
echo "└─────────";
for ($col = 0; $col <= 7; $col++) {
    echo "───────";
}
echo "┘\n";

echo "</pre>";
?>
