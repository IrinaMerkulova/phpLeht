<!DOCTYPE html>
<html lang="et">
<head>
    <meta charset="UTF-8">
    <title>Ülesanne 402</title>
</head>
<body>
<a href="../../../phpAlgus/test.php">tagasi...Ülesannete leht</a>
<h1>Ülesanne 402</h1>
<h2>1. 20 Checkbox tsükliga</h2>
<?php
    $i=1;
    while($i<=20){
        echo "<input type='checkbox' id='$i' name='box[]' value='$i'>";
        echo "<label for='$i'>box ".$i."</label><br>";
    $i++;
    }
?>
<h2>2. 20 Tekstkasti tsükliga </h2>
<?php
$i=1;
while($i<=20){
    echo "<input type='text' id=t'$i' name='cell[]' value=''>";
    echo "<label for=t'$i'>cell ".$i."</label><br>";
    $i++;
}
?>
<h2>3. 20 Radionupud tsükliga </h2>
<?php
$z=1;
while($z<=20){
    echo "<input type='radio' id=r'$z' name='value []' value=''>";
    echo "<label for=r'$z'>value ".$z."</label><br>";
    $z++;
}
?>
</body>
</html>
