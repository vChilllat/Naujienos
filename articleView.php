<?php
 
require '../controllers/articleController.php';
 
 
foreach ($publications as $publication) {
    $publication->printItem();   // metodo iskvietimas (nes buvo kurti objektai)
}
