<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>.... Mõistatus</title>
</head>
<body>
<h1> ... mõistatus</h1>
<?php
echo "<h3>Arva ära kaks arvu!</h3>";
$arv1=5;
$arv2=10;
//kahe arvude liitmine +
echo "Kui liidame kokku, vastus on ".($arv1+$arv2);
echo "<br>";
//jagamine
echo "Kui esimene arv jagame teise arvuga, siis vastus on "
    .($arv1/$arv2);
// esimene arv ruudus
echo "<br>";
echo "Esimene arv ruudus on ". pow($arv1, 2);
echo "<br>";
// lahutamine
echo "Kui teisest arvust lahutada esimene, siis vastus on ";

// korrutis
echo "Kahe arvude korrutis = ";
echo "<br>";
echo "<a href='vastus.php'> Õiged vastused</a>";

echo "<br>";
echo "<h2> Arva ära EESTI LINNANIMI</h2>";
echo "<br>";
$nimi="Tartu";

// teksti pikkus
echo "<br>Linnanimi pikkus - ".strlen($nimi);

// esimene täht
echo "<br>Linnanimi 1.täht - ".substr($nimi, 0, 1);
// kõik tähed tagurpidi
echo "<br>Kõik tähed tagurpidi - ". strtolower(strrev($nimi));
 //




?>

</body>
</html><?php
