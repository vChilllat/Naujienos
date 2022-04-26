<?php
 
require "../classes/article.php"; // klasiu failo itraukimas
 
$publications=array();  // straipsniu saraso kintamojo deklaravimas
 
 
$connect= new mysqli("localhost", 'root', '', 'articles');
 
$sql="SELECT id, author, shortContent, content, publishDate, type, title, addDate, preview FROM articles
ORDER BY type, addDate";
$result= mysqli_query($connect, $sql);
 
while ($row= mysqli_fetch_array($result)){
    $publications[]=new $row['type']($row);  // i publikaciju masyva po eilute
    }                                           // idedame po nauja straipsni kaip 
                                            // objekta
