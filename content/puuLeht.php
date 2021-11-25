<?php
require('conf.php');
global $yhendus;
//lisamine INSERT INTO
if(isset($_REQUEST['puuvorm'])){
    $kask=$yhendus->prepare('INSERT INTO puud(puunimi, pilt) 
VALUES (?, ?)');
// "s"- string
// $_REQUEST['loomanimi']- запрос в текстовый ящик input name="loomanimi"
    $kask->bind_param("ss", $_REQUEST['puunimi'], $_REQUEST['pilt']);
    $kask->execute();
// изменяет адресную строку
//$_SERVER[PHP_SELF] - до имени файла
    header("Location: $_SERVER[PHP_SELF]");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="../style/style.css">
    <meta charset="UTF-8">
    <title>Puuleht</title>
</head>
<body>
<div class="leftcolumn">
    <h2>Puud</h2>
    <?php
    //näitame puunimed
    global $yhendus;
    $kask=$yhendus->prepare("SELECT id, puunimi FROM puud");
    $kask->bind_result($id, $nimi);
    $kask->execute();
    echo "<ul>";
    while($kask->fetch()){
        echo "<li><a href='$_SERVER[PHP_SELF]?id=$id'>".$nimi."</a></li>";
    }
    echo "</ul>";
    echo "<a href='$_SERVER[PHP_SELF]?lisa=jah'>Lisa...</a>";
if(isSet($_REQUEST['lisa'])){
    ?>
    <form action="" method="post">
        <input type="hidden" name="puuvorm" value="jah">
        <label for="puunimi">Puunimi</label>
        <input type="text" name="puunimi" id="puunimi">
        <br>
        <label for="pilt">PildiLink</label>
        <textarea name="pilt" id="pilt"></textarea>
        <br>
        <input type="submit" value="Lisa">
    </form>
    <?php
}

    ?>

</div>
<div class="rightcolumn">
    <h3>siia tuleb pilt, tee klick puunimi peale</h3>
    <?php
    //näitame puunimed
    global $yhendus;
    if(isset($_REQUEST['id'])){
    $kask=$yhendus->prepare("SELECT id, puunimi, pilt FROM puud WHERE id=?");
    $kask->bind_param('i', $_REQUEST['id']);
    $kask->bind_result($id, $nimi, $pilt);
    $kask->execute();

  if($kask->fetch()){
        echo "<strong>".$nimi."</strong>";
        echo "<img src='$pilt' alt='pilt'>";
    } else {
      echo "Viga";
  }
  }
$yhendus->close();
    ?>
</div>

</body>
</html>

