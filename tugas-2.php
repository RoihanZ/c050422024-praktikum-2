<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $phi = 3.14;
        $r = 7;
        $s = 10;
        $luas_alas = $phi * ($r * $r);
        $luas_selimut = $phi * $r * $s;
        $luas_permukaan = $luas_alas + $luas_selimut;
        echo "==================================================================<br>";
        echo "Program menghitung luas alas dari Bangun Ruang Kerucut<br>";
        echo "Rumus : &pi; * r<sup>2</sup><br>";
        echo "&pi; = $phi<br>";
        echo "r<sup>2</sup> = $r<br>";
        echo "Luas Alas = $luas_alas<br>";
        echo "==================================================================<br>";
        echo "Program menghitung luas selimut dari Bangun Ruang Kerucut<br>";
        echo "Rumus : &pi; * r * s<br>";
        echo "&pi; = $phi<br>";
        echo "r = $r<br>";
        echo "s = $s<br>";
        echo "Luas Selimut = $luas_selimut<br>";
        echo "==================================================================<br>";
        echo "Program menghitung luas permukaan dari Bangun Ruang Kerucut<br>";
        echo "Rumus : Luas Alas + Luas Permukaan<br>";
        echo "Luas Alas    = $luas_alas<br>";
        echo "Luas Selimut = $luas_selimut<br>";
        echo "Luas Permukaan = $luas_permukaan<br>";
        echo "==================================================================<br>";
    ?>
</body>
</html>