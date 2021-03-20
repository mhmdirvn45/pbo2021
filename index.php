<?php

require_once 'Mahasiswa.php';
require_once 'MahasiswaBaru.php';
require_once 'Pegawai.php';
require_once 'Dosen.php';
require_once 'User.php';

$zaky = new Mahasiswa('H1101191024','Hazacky Aswat Ramadhan','2001-11-23','Pria');
$irvan = new Mahasiswa('H1101191062','Muhammad P Irvan C','2000-05-05','Pria');
$rafi = new Mahasiswa('H1101191030','Muhammad Rafi H W','2001-01-23','Pria');

$pegawai1 = new Pegawai('11215869','Pegawai Satu','081265584963','Rp. 8.500.000');
$pegawai2 = new Pegawai('11216872','Pegawai Dua','085326987653','Rp. 8.000.000');

$mhswbru1 = new MahasiswaBaru('H1101291030', 'Farid', '2002-02-30', 'Pria', '666779');
$mhswbru2 = new MahasiswaBaru('H1101291062', 'Adrian', '2002-09-21', 'Pria', '666789');

$dosen = new Dosen('111093','Dosen Satu','089626983699','Rp. 5.000.000','66981','Pengajar');
$dosen = new Dosen('111098','Dosen Dua','085366872188','Rp. 7.500.000','87546', 'Seketaris Jurusan');

$user1 = new User('user1','admin1');
$user2 = new User('user2','admin2');
?>

<html>
    <head>
        <title>Pratikum Inheritance</title>
    </head>
    <body>
    <?php echo '<h3>Data Mahasiswa</h3>'; ?>
    <?php 
    $zaky->tampilkanAngkatan();
    $zaky->tampilkanUmur();
    $zaky->tampilkanNama();
    ?>

    <?php 
        $irvan->tampilkanAngkatan();
        $irvan->tampilkanUmur();
        $irvan->tampilkanNama(); 
    ?>

    <?php
        $rafi->tampilkanAngkatan();
        $rafi->tampilkanUmur();
        $rafi->tampilkanNama();
    ?>

    </body>
</html>