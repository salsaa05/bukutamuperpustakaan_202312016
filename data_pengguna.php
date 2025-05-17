<?php
include 'koneksi.php';

// Proses input buku tamu
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST['nama'];
    $keperluan = $_POST['keperluan'];
    $waktu_kunjungan = date('Y-m-d H:i:s'); // Format waktu sekarang

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
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(155, 89, 182, 0.2);
        }
        input[type="text"] {
            width: 100%;
            padding: 10px;
            margin-top: 8px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 6px;
        }
        input[type="submit"] {
            background-color: #9b59b6;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 6px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #8e44ad;
        }
        table {
            width: 80%;
            margin: 0 auto;
            border-collapse: collapse;
            background-color: #fff;
            box-shadow: 0 4px 10px rgba(155, 89, 182, 0.2);
        }
        th, td {
            padding: 12px;
            border: 1px solid #d7cce7;
            text-align: center;
        }
        th {
            background-color: #9b59b6;
            color: white;
        }
        tr:hover {
            background-color: #f2e6f9;
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

    <input type="submit" value="Simpan">
</form>

</body>
</html>
