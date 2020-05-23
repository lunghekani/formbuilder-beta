<?php

$comments= $_POST['getrender'];
function createname() { 

    $chars = "abcdefghijkmnopqrstuvwxyz023456789"; 
    srand((double)microtime()*1000000); 
    $i = 0; 
    $pass = '' ; 

    while ($i <= 10) { 
        $num = rand() % 33; 
        $tmp = substr($chars, $num, 1); 
        $pass = $pass . $tmp; 
        $i++; 
    } 

    return $pass; 

} 
$headtag = "<link href=\"assets/css/lib/bootstrap.min.css\" rel=\"stylesheet\">";

    $pagename ="Form-".createname();
    $folderinfofile = fopen("$pagename.html","w"); 
fwrite($folderinfofile,"<!DOCTYPE html>"."\n"."<html>"."\n".$headtag."\n".
"<body>"."\n");
fwrite($folderinfofile,$comments."\n");
fwrite($folderinfofile,"</body>"."\n"."</html>"."\n");
echo"your page has been saved as: ".$pagename;
?>
