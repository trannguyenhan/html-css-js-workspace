<?php 
    $str ='<?xml version="1.0"?><shapes><shape type="circle" radius="2" /> <shape type="rectangle" length="5" width="2" /><shape type="square" length="7" /></shapes>';
    // load string 
    $xml = simplexml_load_string($str) or die ("Unable to load XML string!");
    // for each shape 
    // calculate area 
    foreach ($xml->shape as $shape) {
        if ($shape['type'] == "circle") {
            $area = pi() * $shape['radius'] * $shape['radius']; 
        }
        elseif ($shape['type'] == "rectangle") {
            $area = $shape['length'] * $shape['width'];
        }
        elseif ($shape['type'] == "square") {
            $area = $shape['length'] * $shape['length'];
        }
        echo $area."\n";
    }
?>