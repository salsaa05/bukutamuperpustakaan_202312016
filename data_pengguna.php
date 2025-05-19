<?php
include 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST['nama'];
    $keperluan = $_POST['keperluan'];
    $waktu_kunjungan = date('Y-m-d H:i:s');

    $query = "INSERT INTO buku_tamu (nama, keperluan, waktu_kunjungan) VALUES ('$nama', '$keperluan', '$waktu_kunjungan')";
    mysqli_query($conn, $query);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Buku Tamu</title>
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background-color: #f8f3fc;
            padding: 20px;
        }
        h2 {
            color: #5e3370;
            text-align: center;
        }
        form {
            width: 60%;
            margin: 0 auto 40px;
            background-color: #fff;
            padding: 50px;
        }
        input[type="text"] {
            width: 100%;
            padding: 10px;
            margin-top: 8px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
        }
        input[type="submit"] {
            background-color: #b39ddb;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 6px;
        }
        input[type="submit"]:hover {
            background-color: #e9d7f7;
        }
        .button-group {
            display: flex;
            justify-content: flex-start;
            gap: 10px;
            margin-top: 10px;
        }
        .back-button {
            background-color: #b39ddb;
            color: white;
            padding: 10px 20px;
            border-radius: 6px;
            text-decoration: none;
            font-weight: normal;
        }
        .back-button:hover {
            background-color: #e9d7f7;
        }
    </style>
</head>
<body>

<h2>Form Buku Tamu</h2>

<form method="POST" action="">
    <label>Nama</label>
    <input type="text" name="nama" required>

    <label>Keperluan</label>
    <input type="text" name="keperluan" required>

    <div class="button-group">
        <input type="submit" value="Simpan">
        <a href="index.php" class="back-button">Kembali</a>
    </div>
</form>

</body>
</html>
