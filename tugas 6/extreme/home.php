<?php
session_start();

if (!isset($_SESSION['username'])) {
    echo "Akses ditolak! Silakan <a href='login.php'>login</a> terlebih dahulu.";
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Homepage</title>
</head>
<body>
    <h2>Selamat Datang di Homepage</h2>
    <p>Halo, <?php echo $_SESSION['username']; ?>!</p>
    <a href="logout.php">Logout</a>
</body>
</html>