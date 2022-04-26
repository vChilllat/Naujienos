<?php

require '../controllers/singleArticleController.php';


foreach ($publications as $publication) {
    $publication->printItem();   // metodo iskvietimas (nes buvo kurti objektai)
    
}
