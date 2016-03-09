<?php

include("NavBar.html");

$name = $_POST["name"];
$text = $_POST["text"];

$fileName = "Guestbook.txt";

$textFertig = "$name|$text";

if (checkText($name, $text)) {

    $inhalt = file_get_contents($fileName);
    file_put_contents($fileName, "$textFertig\n$inhalt");

    echo "Erfolgreich geschrieben!";


    header("Location: index.php?geschrieben=ja&error=nein");
    
} else {
    header("Location: index.php?geschrieben=ja&error=ja");
}




function checkText($name, $text) {
    
    
    if (!empty($name) && !empty($text)) {
        
        $laengeName = strlen($name);
        $laengeText = strlen($text);
        
        if ($laengeName <= 90 && $laengeText <= 90) {
            return true;
        } else {
            return false;
        }
        
        
    } else {
        return false;
    }
    
    
    
}


?>