<?php
$x = 10; // variabel dicek

// Cek kondisi
if ($x == 10) {
    $hasil = "benar!";
} else {
    $hasil = "salah oii";
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Pengecekan Variabel dalam Love</title>
    <style>
        body {
            margin: 0;
            background: #e5a1a1ff;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .heart {
            position: relative;
            width: 200px;
            height: 180px;
            background: #ff4d6d;
            transform: rotate(-45deg);
            margin: 20px;
            box-shadow: 0 4px 10px rgba(255, 77, 109, 0.6);
            display: flex;
            justify-content: center;
            align-items: center;
            cursor: default;
        }

        .heart::before,
        .heart::after {
            content: "";
            position: absolute;
            width: 200px;
            height: 180px;
            background: #ff4d6d;
            border-radius: 50%;
        }

        .heart::before {
            top: -100px;
            left: 0;
        }

        .heart::after {
            left: 100px;
            top: 0;
        }

        .heart-text {
    transform: rotate(45deg);
    color: white;
    font-size: 2rem;
    font-weight: bold;
    text-shadow: 1px 1px 4px rgba(0,0,0,0.3);
    user-select: none;
    position: relative;   /* ⭐ Tambahkan ini */
    z-index: 10;          /* ⭐ Tambahkan ini */
}
@keyframes shake {
    0% { transform: rotate(-45deg) translate(0, 0); }
    25% { transform: rotate(-45deg) translate(5px, -5px); }
    50% { transform: rotate(-45deg) translate(-5px, 5px); }
    75% { transform: rotate(-45deg) translate(5px, 5px); }
    100% { transform: rotate(-45deg) translate(0, 0); }
}

.heart.animate {
    animation: shake 0.4s ease;
}

    </style>
</head>
<body>

<div class="heart">
    <div class="heart-text"><?= $hasil; ?></div>
</div>
<script>
    const heart = document.querySelector('.heart');

    heart.addEventListener('click', () => {
        heart.classList.add('animate');

        // Hapus animasi setelah selesai, agar bisa digoyang lagi
        setTimeout(() => {
            heart.classList.remove('animate');
        }, 400);
    });
</script>

</body>
</html>
