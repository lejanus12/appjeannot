<?php

    $fileDir = dirname( __DIR__). DIRECTORY_SEPARATOR ."uploads". DIRECTORY_SEPARATOR ."newText.txt";

    echo $fileDir;

    fopen($fileDir,"w");


?>