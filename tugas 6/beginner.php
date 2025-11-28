 <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Mengambil dan membersihkan input nama (praktik baik keamanan dasar)
            $nama = htmlspecialchars($_POST['nama']);
            
            if (!empty($nama)) {
                echo "<h3>🎉 Halo, " . $nama . "! Senang bertemu dengan Anda.</h3>";
            } else {
                echo "<h3>⚠️ Mohon masukkan nama Anda.</h3>";
            }
        }
        ?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Input Nama Keren</title>
    <style>
        /* CSS untuk Styling */
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f4f4f9;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            margin: 0;
            color: #333;
        }

        .container {
            background: #ffffff;
            padding: 30px 40px;
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
            text-align: center;
        }

        h2 {
            color: #007bff;
            margin-bottom: 25px;
            font-weight: 600;
        }

        form {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        label {
            display: block;
            text-align: left;
            margin-bottom: 5px;
            font-weight: 500;
        }

        input[type="text"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box; /* Penting agar padding tidak melebarkan input */
            transition: border-color 0.3s;
        }

        input[type="text"]:focus {
            border-color: #007bff;
            outline: none;
        }

        input[type="submit"] {
            background-color: #007bff;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            font-weight: 600;
            transition: background-color 0.3s ease;
            margin-top: 10px;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }

        h3 {
            margin-top: 25px;
            color: #28a745; /* Warna hijau untuk pesan sukses */
            padding: 10px;
            background-color: #e2f0e7;
            border-radius: 5px;
            border-left: 5px solid #28a745;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>👋 Form Input Nama</h2>
        <form method="post" action="">
            <label for="nama">Nama Anda:</label>
            <input type="text" id="nama" name="nama" required>
            <input type="submit" value="Kirim Nama">
        </form>
    </div>
</body>
</html>