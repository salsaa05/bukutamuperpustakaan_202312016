<?php
include 'koneksi.php';
?>

<!DOCTYPE html>
<html>
<head>
    <title>Data Buku Tamu</title>
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background-color: #f3ebf8; 
            padding: 20px;
            margin: 0;
        }
        h2 {
            text-align: center;
            color: #7e57c2; 
        }
        table {
            width: 80%;
            margin: 0 auto;
            border-collapse: collapse;
            background-color: #fff;
            box-shadow: 0 4px 10px rgba(126, 87, 194, 0.1);
        }
        th, td {
            padding: 12px 15px;
            border: 1px solid #e0d3f5;
            text-align: center;
        }
        th {
            background-color: #b39ddb; 
            color: white;
        }
        tr:nth-child(even) {
            background-color: #f2e6f9; 
        }
        tr:hover {
            background-color: #e9d7f7;
        }
    </style>
</head>
<body>
    <h2>Data Buku Tamu</h2>
    <table>
        <tr>
            <th>No</th>
            <th>Nama Pengunjung</th>
            <th>Keperluan</th>
            <th>Waktu Kunjungan</th>
        </tr>
        <?php
        $no = 1;
        $result = mysqli_query($conn, "SELECT * FROM buku_tamu ORDER BY id DESC");
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>
                    <td>" . $no++ . "</td>
                    <td>" . htmlspecialchars($row['nama']) . "</td>
                    <td>" . htmlspecialchars($row['keperluan']) . "</td>
                    <td>" . htmlspecialchars($row['waktu_kunjungan']) . "</td>
                </tr>";
        }
        ?>
    </table>
</body>
</html>
