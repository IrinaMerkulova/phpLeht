<?php
$serverinimi='localhost';
$kasutajanimi='irinamerk20';
$parool='123456';
$andmebaasinimi='irinamerk20';
$yhendus=new mysqli($serverinimi, $kasutajanimi,
    $parool, $andmebaasinimi);
$yhendus->set_charset('UTF8');
/*
 * CREATE TABLE loomad(
    id int primary key AUTO_INCREMENT,
    nimi varchar(50),
    kirjeldus text);

Insert into loomad(nimi, kirjeldus)
values ('hiir', 'siia tuleb kirjeldus');

Select * from loomad
CREATE TABLE puud(
    id int PRIMARY key AUTO_INCREMENT,
    puunimi varchar(20),
    pilt TEXT)
*/
?>