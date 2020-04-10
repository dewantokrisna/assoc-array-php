<?php
// $mahasiswa = [["Dewanto", "A11.2014.08648", "dewanto.krisna@gmail.com", "Teknik Informatika"], ["A11.2014.08649", "Krisna", "krisna.dewanto@gmail.com", "Teknik Industri"]];

// Aray Associative
// Seperti numeric, key nya string
$mahasiswa = [
    [
        "nama" => "Dewanto Krisna",
        "nim" => "A11.2014.08648",
        "email" => "dewanto.krisna@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "1.png"
    ],
    [
        "nama" => "Krisna Dewanto",
        "nim" => "A11.2014.08678",
        "email" => "krisna.dewanto@gmail.com",
        "jurusan" => "Teknik Industri",
        "tugas" => [90, 80, 100],
        "gambar" => "2.png"
    ]

];
//echo $mahasiswa[1]['tugas'][1];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Associative Array</title>
</head>

<body>
    <h1>List Mahasiswa</h1>
    <?php foreach ($mahasiswa as $mhs) : ?>
        <ul>
            <li>
                <img src="img/<?= $mhs["gambar"] ?>" alt="">
            </li>
            <li>Nama : <?= $mhs["nama"]; ?></li>
            <li>NIM : <?= $mhs["nim"]; ?></li>
            <li>Email : <?= $mhs["jurusan"]; ?></li>
            <li>Jurusan : <?= $mhs["email"]; ?></li>
        </ul>
    <?php endforeach; ?>





</body>

</html>