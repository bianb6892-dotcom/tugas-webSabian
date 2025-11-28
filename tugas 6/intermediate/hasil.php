<!DOCTYPE html>
<html>
<head>
    <title>Hasil Input</title>
</head>
<body>
    <h2>Hasil Data Siswa</h2>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nama = htmlspecialchars($_POST['nama']);
        $kelas = htmlspecialchars($_POST['kelas']);

        echo "<p><strong>Nama:</strong> $nama</p>";
        echo "<p><strong>Kelas:</strong> $kelas</p>";
    } else {
        // Jika halaman diakses langsung tanpa POST
        echo "<p>Data belum diisi. Silakan kembali ke <a href='form.php'>Form Input</a>.</p>";
    }
    ?>
</body>
</html>