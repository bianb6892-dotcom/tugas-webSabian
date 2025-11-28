<?php
$nama       = "sabian alvaro";
$alamat     = "rancamanyar";
$kelamin    = "laki laki";
$nohp       = "086796456580";
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biodata Diri</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #4facfe, #00f2fe);
            padding: 40px;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .card {
            background: #ffffffee;
            padding: 25px;
            border-radius: 15px;
            width: 350px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.15);
            animation: fadeIn 0.8s ease-in-out;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        h2 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
            font-size: 26px;
        }

        .item {
            margin: 12px 0;
            padding: 10px;
            background: #f7faff;
            border-left: 5px solid #4facfe;
            border-radius: 5px;
        }

        .label {
            font-weight: bold;
            color: #333;
        }

        .value {
            color: #555;
        }
    </style>
</head>
<body>

<div class="card">
    <h2>Biodata Diri</h2>

    <div class="item"><span class="label">Nama Lengkap:</span> <span class="value"><?= $nama; ?></span></div>
    <div class="item"><span class="label">Alamat Rumah:</span> <span class="value"><?= $alamat; ?></span></div>
    <div class="item"><span class="label">Jenis Kelamin:</span> <span class="value"><?= $kelamin; ?></span></div>
    <div class="item"><span class="label">No HP:</span> <span class="value"><?= $nohp; ?></span></div>
</div>

</body>
</html>
