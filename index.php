<!DOCTYPE html>
<html>
<head>
    <title>Perpustakaan</title>
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background-color: #f8f3fc;
            margin: 0;
            padding: 0;
        }
        .header {
            background-color: #b39ddb;
            color: white;
            padding: 20px 0;
            text-align: center;
        }
        .container {
            max-width: 800px;
            margin: 40px auto;
            text-align: center;
        }
        .menu {
            display: flex;
            justify-content: center;
            gap: 40px;
            margin-top: 40px;
        }
        .menu a {
            text-decoration: none;
            background-color: #ffffff;
            border: 1px solid #d7cce7;
            padding: 20px 30px;
            border-radius: 10px;
            color: #5e3370;
            font-size: 18px;
        }
        .menu a:hover {
            background-color: #b39ddb;
            color: white;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>Perpustakaan Teman Kata</h1>
        <p>Perpustakaan tempat di mana imajinasi tak terbatas</p>
    </div>
    <div class="container">
        <div class="menu">
            <a href="data_pengguna.php">Isi Buku Tamu</a>
            <a href="hasil_data.php">Daftar pengunjung</a>
        </div>
    </div>
</body>
</html>
