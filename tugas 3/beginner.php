<?php

function ucapanBahagia() {
    return "Saya Bahagia Hari ini";
}

$pesan = ucapanBahagia();

?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Ucapan Bahagia</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(to right, #4facfe, #00f2fe);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .card {
            background: white;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0px 5px 20px rgba(0,0,0,0.2);
            text-align: center;
            width: 350px;
        }
        .card h1 {
            font-size: 24px;
            color: #333;
            margin-bottom: 10px;
        }
        .message {
            font-size: 20px;
            color: #0077cc;
            font-weight: bold;
        }
    </style>

</head>
<body>

    <div class="card">
        <h1>Pesan Hari Ini</h1>
        <div class="message"><?= $pesan; ?></div>
    </div>

</body>
</html>
