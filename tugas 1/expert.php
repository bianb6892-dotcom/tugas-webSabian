<?php
// Identitas
$nama   = "Sabian Alvaro";
$alamat = "Rancamanyar";
$gender = "Laki-laki";
$nohp   = "086796456580";

// Hitung jumlah karakter string (nama)
$jumlah_string = strlen($nama);

// Mengambil setiap digit nomor HP dan menjumlahkannya
$angka_hp = str_split($nohp); // pecah jadi array digit
$nilai = 0;

foreach ($angka_hp as $a) {
    $nilai += (int)$a; // dijumlahkan ke $nilai
}

// LOGIKA
$cek1 = ($nilai < 30 && $nilai % 2 == 1);
$cek2 = ($nilai > 30 || $nilai % 2 == 2);

?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Identitas & Logika</title>

    <style>
        body {
            margin: 0;
            padding: 0;
            background: #0a0f24;
            font-family: 'Segoe UI', sans-serif;
            color: white;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .container {
            background: #11182f;
            padding: 30px;
            border-radius: 15px;
            width: 480px;
            box-shadow: 0 0 25px rgba(0, 255, 255, 0.3);
            border: 1px solid rgba(0,255,255,0.2);
            animation: fadeIn 0.8s ease-in-out;
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #00eaff;
            text-shadow: 0 0 10px #00eaff;
        }

        p {
            font-size: 17px;
            margin: 10px 0;
        }

        .highlight {
            background: rgba(0,255,255,0.1);
            padding: 10px;
            border-left: 4px solid #00eaff;
            border-radius: 6px;
        }

        .dump-box {
            background: #0d1328;
            padding: 12px;
            border-radius: 10px;
            color: #0aff9a;
            font-family: monospace;
            margin-top: 10px;
            border: 1px solid rgba(0,255,200,0.2);
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to   { opacity: 1; transform: translateY(0); }
        }
    </style>

</head>
<body>

<div class="container">
    <h2>Identitas Pengguna</h2>

    <p><b>Nama :</b> <?= $nama; ?></p>
    <p><b>Alamat :</b> <?= $alamat; ?></p>
    <p><b>Jenis Kelamin :</b> <?= $gender; ?></p>
    <p><b>No HP :</b> <?= $nohp; ?></p>

    <div class="highlight">
        <p><b>Jumlah karakter nama :</b></p>
        <div class="dump-box">
            <?php var_dump($jumlah_string); ?>
        </div>

        <p><b>Jumlah total angka dari no HP (nilai) :</b> <?= $nilai; ?></p>
    </div>

    <br>

    <h3 style="color:#00eaff; text-align:center;">Hasil Operator Logika</h3>

    <p><b>1. Apakah nilai &lt; 30 DAN ganjil?</b></p>
    <div class="dump-box">
        <?php var_dump($cek1); ?>
    </div>

    <p><b>2. Apakah nilai &gt; 30 ATAU genap?</b></p>
    <div class="dump-box">
        <?php var_dump($cek2); ?>
    </div>

</div>

</body>
</html>
