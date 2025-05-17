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
            box-shadow: 0 4px 8px rgba(155, 89, 182, 0.1);
            color: #5e3370;
            font-size: 18px;
            transition: all 0.3s ease;
        }
        .menu a:hover {
            background-color: #b39ddb;
            color: white;
            transform: scale(1.05);
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
