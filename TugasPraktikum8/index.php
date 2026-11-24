<?php
require_once 'Hewan.php';

$kucing = new Kucing("Mimi", 2);
$anjing = new Anjing("Doggy", 3);

$daftarHewan = [$kucing, $anjing];
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Data Hewan</title>
</head>
<body>
    <h1>Data Hewan</h1>
    <?php foreach ($daftarHewan as $hewan): ?>
        <p>
            Nama  : <?= $hewan->getNama(); ?><br>
            Umur  : <?= $hewan->getUmur(); ?> tahun<br>
            Jenis : <?= $hewan->getJenis(); ?><br>
            Suara : <?= $hewan->getSuara(); ?>
        </p>
        <hr>
    <?php endforeach; ?>
</body>
</html>
