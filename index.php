<?php
echo "Hola Mundo";
echo "Este es un ejemplo de texto en español.";
// Print a variable
$greeting = "Hola, ¿cómo estás?";
echo $greeting;

// Print an array
$fruits = array("Manzana", "Banana", "Cereza");
print_r($fruits);

// Print formatted strings
$name = "Emmanuel";
$age = 30;
printf("Mi nombre es %s y tengo %d años.", $name, $age);

// Print JSON encoded data
$data = array("nombre" => "Emmanuel", "edad" => 30);
echo json_encode($data);
?>