<?php

$bulan12 = "Desember"; // bulan ke 12 pakai variable

$bulan = [
    "Januari", "Februari", "Maret", "April",
    "Mei", "Juni", "Juli", "Agustus",
    "September", "Oktober", "November",
    $bulan12
];

?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Daftar Bulan</title>

    <style>
        body {
            font-family: "Segoe UI", sans-serif;
            background: linear-gradient(135deg, #00c6ff, #0072ff);
            margin: 0;
            padding: 40px;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            background: white;
            padding: 30px;
            border-radius: 18px;
            width: 380px;
            box-shadow: 0px 8px 30px rgba(0,0,0,0.25);
            animation: fadeIn 0.8s ease-in-out;
        }

        h2 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
            letter-spacing: 1px;
        }

        .box {
            padding: 12px 15px;
            margin: 8px 0;
            background: #e8f1ff;
            border-radius: 10px;
            font-size: 18px;
            font-weight: bold;
            border: 1px solid #b0c8ff;
            text-align: center;
            transition: 0.3s ease;
            cursor: pointer;
        }

        .box:hover {
            background: #bcd4ff;
            transform: scale(1.05);
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to   { opacity: 1; transform: translateY(0); }
        }
    </style>

</head>
<body>

    <div class="container">
        <h2>Daftar Bulan</h2>

        <?php
        foreach ($bulan as $b) {
            echo "<div class='box'>$b</div>";
        }
        ?>
    </div>

</body>
</html>
