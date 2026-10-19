<?php 
// menerima data dari ulr (method get)
if (isset($_GET["nim"]) && isset($_GET["nama"]) && isset($_GET["jurusan"]) && isset($_GET["email"]) && isset($_GET["nilai"]) && isset($_GET["grade"]) && isset($_GET["status"])) {


$nim = $_GET["nim"];
$nama =$_GET["nama"];
$jurusan =$_GET["jurusan"];
$email =$_GET["email"];
$nilai =$_GET["nilai"];
$grade =$_GET["grade"];
$status =$_GET["status"];
} else {
    header("Location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Mahasiswa</title>
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            font-family: Arial, Helvetica, sans-serif;
            background: #e0f2fe;
            margin: 0;
            padding: 30px 65px;
            color: #000;
        }

        .card {
            background: #fff;
            max-width: 700px;
            margin: 20px auto;
            padding: 25px;
            border-radius: 14px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.06);
        }

        .card.lebar {
            max-width: 1150px;
        }

        .header {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
        }

        h1,
        h2 {
            margin: 0 0 10px;
        }

        h1 {
            font-size: 24px;
        }

        h2 {
            font-size: 24px;
        }

        p {
            margin: 0 0 20px;
        }

        .btn {
            display: inline-block;
            background: #0ea5e9;
            color: #fff;
            border: 0;
            padding: 10px 14px;
            border-radius: 6px;
            text-decoration: none;
            font-size: 16px;
            cursor: pointer;
        }

        .btn.abu {
            background: #6b7280;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            border: 1px solid #e5e7eb;
        }

        th,
        td {
            padding: 14px 11px;
            text-align: left;
            border: 1px solid #e5e7eb;
            border-top: 0;
            border-bottom: 1px solid #e5e7eb;
        }

        th {
            background: #bae6fd;
        }

        .lulus {
            color: green;
            font-weight: bold;
        }

        .tidak {
            color: red;
            font-weight: bold;
        }

        .item {
            background: #f0f9ff;
            padding: 12px;
            margin-bottom: 8px;
            border-radius: 6px;
        }

        label {
            display: block;
            font-weight: bold;
            margin: 8px 0 4px;
            font-size: 14px;
        }

        input[type=text],
        textarea {
            width: 100%;
            padding: 9px;
            border: 1px solid #d1d5db;
            border-radius: 5px;
            font-size: 14px;
        }

        textarea {
            height: 90px;
            resize: vertical;
        }

        .btn-form {
            margin-top: 18px;
        }

        .btn-form .btn {
            font-size: 13px;
            padding: 7px 11px;
        }
    </style>
</head>
<body>
    <div class="card">
        <h2>Detail Mahasiswa</h2>

        <div class="item"><b>nim</b> <?= htmlspecialchars($nim); ?></div>
        <div class="item"><b>nama</b> <?= htmlspecialchars($nama); ?></div>
        <div class="item"><b>jurusan</b> <?= htmlspecialchars($jurusan); ?></div>
        <div class="item"><b>email</b> <?= htmlspecialchars($email); ?></div>
        <div class="item"><b>nilai</b> <?= htmlspecialchars($nilai); ?></div>
        <div class="item"><b>grade</b> <?= htmlspecialchars($grade); ?></div>
        <div class="item"><b>status</b> <?= htmlspecialchars($status); ?></div>

        <br>
        <a class="btn" href="index.php">Kembali</a>
    </div>
</body>
</html>