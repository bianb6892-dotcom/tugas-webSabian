<?php

$hari = ["Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu", "Minggu"];

?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Daftar Hari</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(to right, #4facfe, #00f2fe);
            margin: 0;
            padding: 40px;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            background: white;
            padding: 25px 30px;
            border-radius: 15px;
            box-shadow: 0px 5px 20px rgba(0,0,0,0.2);
            text-align: center;
            width: 350px;
        }

        h2 {
            margin-bottom: 20px;
            color: #333;
        }

        .box {
            padding: 12px;
            margin: 8px 0;
            background: #ffb3b3;
            border-radius: 8px;
            font-size: 18px;
            font-weight: bold;
            border: 1px solid #e06d6d;
            transition: 0.3s;
        }

        .box:hover {
            background: #ff8080;
            transform: scale(1.05);
        }
    </style>

</head>
<body>

    <div class="container">
        <h2>Daftar Hari</h2>

        <?php
        foreach ($hari as $h) {
            echo "<div class='box'>$h</div>";
        }
        ?>
    </div>

</body>
</html>
