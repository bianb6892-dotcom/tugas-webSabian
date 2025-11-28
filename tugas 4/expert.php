<?php

$hari = ["Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu", "Minggu"];

?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Deret Hari</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            padding: 20px;
        }
        .box {
            display: inline-block;
            padding: 10px 20px;
            margin: 5px;
            background: #ffb3b3;
            border: 1px solid #e06d6d;
            border-radius: 5px;
            font-weight: bold;
        }
    </style>
</head>
<body>

<h2>Deret Hari dalam Kotak</h2>

<?php
foreach ($hari as $h) {
    echo "<div class='box'>$h</div>";
}
?>

</body>
</html>
