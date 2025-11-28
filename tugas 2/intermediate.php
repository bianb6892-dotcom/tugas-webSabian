<?php
$x = 10;

if ($x == 10) {
    $hasil = "binggo";
} elseif ($x < 20) {
    $hasil = "benar";
} else {
    $hasil = "salah";
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title>Love Check</title>
<style>
    body {
        margin: 0;
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
        background: linear-gradient(135deg, #ff9a9e, #fad0c4);
        font-family: 'Poppins', sans-serif;
    }

    .container {
        text-align: center;
        animation: fadeIn 1s ease;
    }

    @keyframes fadeIn {
        from { opacity: 0; }
        to { opacity: 1; }
    }

    .floating-heart {
        width: 200px;
        height: 200px;
        background: #ff2d55;
        position: relative;
        transform: rotate(45deg);
        border-radius: 20px;
        box-shadow: 0 10px 25px rgba(0,0,0,0.2);
        animation: float 2.3s ease-in-out infinite;
        cursor: pointer;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .floating-heart::before,
    .floating-heart::after {
        content: "";
        width: 200px;
        height: 200px;
        background: #ff2d55;
        position: absolute;
        border-radius: 50%;
    }

    .floating-heart::before {
        top: -100px;
        left: 0;
    }

    .floating-heart::after {
        left: 100px;
        top: 0;
    }

    @keyframes float {
        0%, 100% { transform: rotate(45deg) translateY(0); }
        50% { transform: rotate(45deg) translateY(-25px); }
    }

    .text {
        transform: rotate(-45deg);
        color: white;
        font-size: 2rem;
        font-weight: bold;
        text-shadow: 0 3px 8px rgba(0,0,0,0.3);
        position: relative;
        z-index: 10;
    }
</style>
</head>
<body>
<?php
$x = 10;

if ($x == 10) {
    $hasil = "binggo";
} elseif ($x < 20) {
    $hasil = "benar";
} else {
    $hasil = "salah";
}
?>

<div class="container">
    <div class="floating-heart" id="heart">
        <div class="text"><?php echo $hasil; ?></div>
    </div>
</div>

<script>
const heart = document.getElementById("heart");
heart.addEventListener("click", () => {
    heart.style.animation = "shake 0.4s ease";
    setTimeout(() => {
        heart.style.animation = "float 2.3s ease-in-out infinite";
    }, 400);
});
</script>
</body>
</html>
