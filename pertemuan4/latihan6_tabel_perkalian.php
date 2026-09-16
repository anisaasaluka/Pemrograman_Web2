<!DOCTYPE html>
<html>
<head>
    <title>Tabel Perkalian</title>
</head>

<body>

<h2>Tabel Perkalian</h2>

<hr>

<?php

$angka = 12;

for ($i = 15; $i <= 45; $i += 2) {

    $hasil = $angka * $i;

    echo "$angka * $i = $hasil <br>\n";
}

?>

</body>
</html>