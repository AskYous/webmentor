<?php
ini_set('display_errors','On');

$mentorship="1";
$link="chat\\".$mentorship;
 
if (!file_exists("$link")) {
    mkdir("$link");
}
$linkk="$link"."\\filename.txt";
 $File = "$linkk"; 
 $Handle = fopen($File, 'w');
 $Data = "Jane Doe\n"; 
 fwrite($Handle, $Data); 
 $Data = "Bilbo Jones\n"; 
 fwrite($Handle, $Data); 
 print "Data Written"; 
 fclose($Handle); 
?>