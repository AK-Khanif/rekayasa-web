<?php
// Contoh JSON Object
$age = array("Peter"=>35, "Ben"=>37, "Joe"=>43);

echo json_encode($age);
?>

<?php
// Contoh JSON Array
$cars = array("Volvo", "BMW", "Toyota");

echo json_encode($cars);
?>

<?php
// Contoh JSON Object (dalam string)
$jsonobj = '{"Peter":35,"Ben":37,"Joe":43}';

// Decode ke Object
$obj = json_decode($jsonobj);

// Akses nilai
echo $obj->Peter . "<br>";
echo $obj->Ben . "<br>";
echo $obj->Joe . "<br>";
?>
