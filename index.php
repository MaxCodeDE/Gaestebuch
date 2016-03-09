<?php

echo "<title> G&auml;stebuch </title>";

include("NavBar.html");

include("Startseite.html");
include("Gaestebuch.html");

include("FAQ.html");




function getMessanges() {
    
    checkDirectory();
    
    $fileName = "Guestbook.txt";
    $fileWriter = fopen($fileName, "r");
    
    while(!feof($fileWriter)) {
        
        $file = fgets($fileWriter);
        
        $data = explode("|", $file);
        
        $writer = $data[0];
        $message = $data[1];
        
        echo "<a class='list-group-item'>
            <h4 class='list-group-item-heading'> <i class='fa fa-user'></i> $writer </h4>
            <p class='list-group-item-text'> <i class='fa fa-pencil'></i> $message </p>
            </a>";
        
        
    }
    
    fclose($fileWriter);
    
}

function checkDirectory() {
    
    $fileName = "Guestbook.txt";
    $templateInhalt = "DemoUser1|Hallo Welt!
DemoUser2|Hallo!
Max|Hallo!";
    
    if (!file_exists($fileName)) {
        
        $fileWriter = fopen($fileName, "w");
        fwrite($fileWriter, $templateInhalt);
        fclose($fileWriter);
        
    } 
}


echo "<script> showHome(); </script>";

if ($_GET['geschrieben'] == "ja" && $_GET['error'] == "nein") {
    echo "<script> showGuestbook(); showGeschrieben(true); </script>";
} 
if ($_GET['geschrieben'] == "ja" && $_GET['error'] == "ja") {
    echo "<script> showGuestbook(); showGeschrieben(false); </script>";
}

?>