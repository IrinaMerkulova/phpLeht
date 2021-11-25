<?php
// andmed massiivis
$data=[
    "nimi"=> "Irina Merkulova",
    "aadress"=>"Sõpruse pst 184, Tallinn",
    "pilt"=> "tthk.jpg",
    "koduleht"=>"https://merkulova.thkit.ee/php"
];
?>
<br>
<a href="http://merkulova.thkit.ee/phpLeht/">tagasi...Ülesannete leht</a>
<h1>Ülesanne 401/var 1 </h1>
<p> <b>
        <?=$data["nimi"]?>
    </b></p>
<p><i>
        <?=$data["aadress"]?>
    </i></p>
<img src="<?=$data["pilt"]?>" alt="pildike">
<br>
<a href="<?=$data["koduleht"]?>" target="_blank">Merkulova koduleht</a>
<!--kkk-->
<h1>Ülesanne 401/var 2 - array() </h1>
<?php
// massiiv array funktsiooniga
$array=array("Irina Merkulova", 12,
    "tthk.jpg", "merkulova.thkit.ee");
echo "<b>Nimi: ".$array[0]."</b><br>";
echo "<i>Aadress: ".$array[1]."</i><br>";
echo "<img src='$array[2]' alt='pildike'>";
echo "<br><a href='https://$array[3]'>Koduleht</a>"
?>

