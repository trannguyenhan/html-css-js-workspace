<?php 
    // set name of XML file 
    $file = "ingredients.xml"; 
    // load file 
    $xml = simplexml_load_file($file) or die ("Unable to load XML file!");
    // get all the <desc> elements and print 
    foreach ($xml->xpath('//item[quantity > 1]/desc') as $desc) { echo "$desc\n"; } 
?>