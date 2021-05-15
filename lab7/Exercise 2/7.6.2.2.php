<?php
    // set name of XML file 
    $file = "pet.xml"; 
    // load file  
    $xml = simplexml_load_file($file) or die ("Unable to load XML file!");
    // modify XML data 
    $xml->name = "Sammy Snail"; 
    $xml->age = 4; 
    $xml->species = "snail"; 
    $xml->parents->mother = "Sue Snail"; 
    $xml->parents->father = "Sid Snail"; 
    // write new data to file
    file_put_contents($file, $xml->asXML()); 
?>