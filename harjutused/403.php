<!DOCTYPE html>
<html lang="et">
<head>
    <meta charset="UTF-8">
    <title>Ülesanne 403</title>
</head>
<body>
<a href="../../../phpAlgus/test.php">tagasi...Ülesannete leht</a>
<h1>Ülesanne 403</h1>
<?php
//ilusad värvi nimed massiivis
$varv=array('Gold', 'CornflowerBlue', 'Coral', 'Crimson');
//tsükliga kuvame värvid massiivist
for($i = 0; $i <15; $i++){
    echo "<span style='color: $varv[$i]'>$varv[$i]</span><br>";
}

?>
</body>
</html>
