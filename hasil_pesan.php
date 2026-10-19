<?php
// cek data post, jika ada simpan ke variabel
if (isset($_POST["nama"]) && isset($_POST["kelas"]) && isset($_POST["pesan"])) {
    $nama = $_POST["nama"];
    $kelas = $_POST["kelas"];
    $pesan = $_POST["pesan"];
} else {
    $ada = false;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pesan Mahasiswa</title>
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
        <?php if (isset($_POST["nama"]) && isset($_POST["kelas"]) && isset($_POST["pesan"])) {
            $nama = $_POST["nama"];
            $kelas = $_POST["kelas"];
            $pesan = $_POST["pesan"];
            ?>
            <h2>Pesan Berhasil Dikirim</h2>
            <p>Terima kasih, <b> <?= htmlspecialchars($nama); ?></b>!</p>

            <div class="item"><b>Nama:</b> <?= htmlspecialchars($nama); ?> </div>
            <div class="item"><b>Kelas:</b> <?= htmlspecialchars($kelas); ?></div>
            <div class="item"><b>Pesan:</b> <?= htmlspecialchars($pesan); ?></div>

            <br>
            <a class="btn" href="index.php">Kembali ke Data Mahasiswa</a>
        <?php } else { ?>
            <h2>Pesan Gagal Dikirim</h2>
            <P>Data belum lengkap. Silahkan isi semua kolom pada form.</P>

            <br>
            <a class="btn" href="form_pesan.php">Kembali ke form</a>
        <?php } ?>
    </div>
</body>

</html>