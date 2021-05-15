<?php 
    // set name of XML file 
    $file = "sins.xml"; 
    // load file 
    $xml = simplexml_load_file($file) or die ("Unable to load XML file!");
    // access each <sin> 
    echo $xml->sin[0] . "\n"; 
    echo $xml->sin[1] . "\n"; 
    echo $xml->sin[2] . "\n"; 
    echo $xml->sin[3] . "\n"; 
    echo $xml->sin[4] . "\n"; 
    echo $xml->sin[5] . "\n"; 
    echo $xml->sin[6] . "\n"; 
?>