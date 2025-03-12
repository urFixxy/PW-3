<?php
    $filename = "database.txt";

    if(file_exists($filename)){
        $file = fopen($filename, "r");

        while(!feof($file)){
            $line = fgets($file);
            echo nl2br($line);
        }

        fclose($file);
    }else{
        echo "File tidak ditemukan";
    }
?>