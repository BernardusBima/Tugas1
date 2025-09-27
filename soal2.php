<?php
$jsonString = '{"brand":"ASUS","prosessor":"i5", "generasi":12}';


//Deocode Variabel ke PHP Object
$object = json_decode($jsonString);

//Akses Nilai Object
echo "brand: ". $object->brand; 
echo "<br>";
echo "prosessor: ". $object->prosessor; 
echo "<br>";
echo "generasi: ". $object->generasi; 
echo "<hr>";

//Deocode Variabel ke PHP Array

$array = json_decode($jsonString, true);

//Akses Nilai Array
echo "brand: ". $array['brand'];
echo "<br>";
echo "prosessor: ". $array['prosessor'];
echo "<br>";
echo "generasi: ". $array['generasi'];

?>


