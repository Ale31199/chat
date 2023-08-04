<?php


/*

$file = fopen('tets.txt', 'r') or die("Couldn't open the damn file!");  //apri il file

 echo fread($file, filesize('tets.txt')); //leggi il file

 fclose($file);  //chiudi il file
*/


 $file2 = fopen('tets.txt', 'w') or die('this is not good');
$testo= "puzza il culo\n";
fwrite($file2, $testo);

$testo= "puzza il cazzo\n";
fwrite($file2, $testo);

fclose($file2)


/*
include 'tets.txt';*/

?>