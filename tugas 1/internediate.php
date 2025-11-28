<?php
// Data variabel
$nama = "Sabian Alvaro";
$angka1 = 10;
$angka2 = 7;

// Hitung umur
$umur = $angka1 + $angka2;
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Umur</title>

    <!-- Import Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">

    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #380960ff, #fed6e3);
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .card {
            background: rgba(255, 255, 255, 0.7);
            padding: 35px;
            width: 450px;
            border-radius: 20px;
            backdrop-filter: blur(10px);
            box-shadow: 0 20px 40px rgba(0,0,0,0.15);
            animation: fadeIn 0.8s ease-in-out;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        h2 {
            text-align: center;
            color: #000000ff;
            margin-bottom: 25px;
            font-size: 28px;
        }

        .item {
            margin: 12px 0;
            font-size: 18px;
        }

        .label {
            font-weight: 600;
            color: #303952;
        }

        .value {
            color: #40407a;
        }

        .rumus-box {
            background: #ffffff;
            padding: 12px 15px;
            border-radius: 10px;
            margin-top: 15px;
            box-shadow: 0 5px 10px rgba(0,0,0,0.08);
            font-size: 16px;
            text-align: center;
        }
    </style>
</head>

<body>

<div class="card">
    <h2>Data Umur</h2>

    <p class="item"><span class="label">Nama Lengkap :</span> 
    <span class="value"><?= $nama; ?></span></p>

    <p class="item"><span class="label">Umur :</span> 
    <span class="value"><?= $umur; ?> tahun</span></p>

    <div class="rumus-box">
        <b>Rumus :</b> <?= $angka1; ?> + <?= $angka2; ?> = <b><?= $umur; ?></b>
    </div>
</div>

</body>
</html>
