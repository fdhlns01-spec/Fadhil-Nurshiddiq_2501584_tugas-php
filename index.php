<?php
// Data mahasiswa
$mahasiswa = [
    ["nim" => "25001", "nama" => "Fadhil Ganteng", "jurusan" => "Pendidikan Sistem dan Teknologi Informasi", "email" => "Fad@upi.edu", "nilai" => 88],
    ["nim" => "25002", "nama" => "owi dodo", "jurusan" => "Sistem Telekomunikasi", "email" => "odo@upi.edu", "nilai" => 76],
    ["nim" => "25003", "nama" => "Imas sarimas", "jurusan" => "Mekatronika dan Kecerdasan Buatan", "email" => "imas@upi.edu", "nilai" => 67],
    ["nim" => "25004", "nama" => "asep kusep", "jurusan" => "Pendidikan Sistem dan Teknologi Informasi", "email" => "kusep@upi.edu", "nilai" => 92],
    ["nim" => "25005", "nama" => "angel jelita", "jurusan" => "Sistem Telekomunikasi", "email" => "angel@upi.edu", "nilai" => 58],
];

function hitungGrade($nilai)
{
    if ($nilai >= 85) {
        $grade = "A";
    } elseif ($nilai >= 75) {
        $grade = "B";
    } elseif ($nilai >= 60) {
        $grade = "C";
    } else {
        $grade = "D";
    }
    return $grade;
}

function hitungStatus($nilai)
{
    if ($nilai >= 70) {
        $status = "Lulus";
    } else {
        $status = "Tidak Lulus";
    }
    return $status;
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>daftar nilai mahasiswa</title>
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
    <div class="card lebar">
        <div class="header">
            <div>
                <h1>Daftar Mahasiswa</h1>
                <p>Mini website PHP dasar</p>
            </div>
            <a class="btn" href="form_pesan.php">isi from pesan</a>
        </div>

        <table>
            <tr>
                <td>No</td>
                <td>Nim</td>
                <td>Nama</td>
                <td>Jurusan</td>
                <td>Nilai</td>
                <td>Grade</td>
                <td>Status</td>
                <td>Detail</td>
            </tr>
            <?php
            $no = 1;
            foreach ($mahasiswa as $mhs) {
                if ($mhs["nilai"] >= 80) {
                    $grade = "A";
                }elseif ($mhs["nilai"] >= 70) {
                    $grade = "B";
                } elseif ($mhs["nilai"] >= 60) {
                    $grade = "C";
                } else {
                    $grade = "D";
                }

                // warna status: hijau jika lulus, merah jika tidak lulus 
                if ($mhs["nilai"] >= 70) {
                    $status = "Lulus";
                    $kelas = "lulus";
                } else {
                    $status = "Tidak Lulus";
                    $kelas = "tidak";
                }

                // data dikirim lewat url (method get)
                $url = "detail.php?nim=" . rawurldecode($mhs["nim"]) . "&nama=" . rawurldecode($mhs["nama"]) . "&jurusan=" . rawurldecode($mhs["jurusan"]) . "&email=" . rawurldecode($mhs["email"]) . "&nilai=" . rawurldecode($mhs["nilai"]) . "&grade=" . rawurldecode($grade) . "&status=" . rawurldecode($status);
                ?>
                <tr>
                    <td><?= $no++; ?></td>
                    <td><?= $mhs["nim"]; ?></td>
                    <td><?= $mhs["nama"]; ?></td>
                    <td><?= $mhs["jurusan"]; ?></td>
                    <td><?= $mhs["nilai"]; ?></td>
                    <td><?= $grade; ?></td>
                    <td class="<?= $kelas; ?>"><?= $status; ?></td>
                    <td><a class="btn" href="<?= $url; ?>">Lihat Detail</td>
                </tr>
            <?php } ?>
        </table>
    </div>
</body>

</html>