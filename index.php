<?php
$lc = ""; 

if(isset($_SERVER['HTTP_ACCEPT_LANGUAGE']))
    $lc = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);

if($lc == "fr"){
    header("location: /index_fr.html");
    exit();
} else if($lc == "it"){
    header("location: /index.html");
    exit();
}
else{ 
    header("location: /index_en.html");
    exit();
}
?>
