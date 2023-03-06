<?php
require_once __DIR__ . '/vendor/autoload.php';

// Conexión a la base de datos
$manager = new \MongoDB\Driver\Manager("mongodb://mongo:27017");
if (!$manager) {
    echo "No se pudo conectar a la base de datos.";
}

// Seleccionar la base de datos y la colección
$db = "nueva";
$collectionName = "usuarios";

// Obtener la colección
$collection = "$db.$collectionName";

$user1  = ['name' => 'Mukesh Chapagain', 'age' => 88, 'email' => 'mukesh@example.com'];
$user2  = ['name' => 'Raju Sharma', 'age' => 77, 'email' => 'raju@example.com'];
$user3  = ['name' => 'Krishna Yadav', 'age' => 65, 'email' => 'krishna@example.com'];

// insertar documentos
$bulk = new \MongoDB\Driver\BulkWrite();

//$manager->executeBulkWrite("nueva.usuarios", $bulk);

foreach ([$user1, $user2, $user3] as $user) {
    // Comprobar si ya existe un usuario con el mismo nombre
    $filter = ['name' => $user['name']];
    $query = new MongoDB\Driver\Query($filter);
    $existUser = $manager->executeQuery($collection, $query)->toArray();

    // Insertar el usuario solo si no existe otro usuario con el mismo nombre
    if (empty($existUser)) {
        $bulk->insert($user);
    } 
}

if ($bulk->count() > 0) { // Verificar si se han insertado documentos
    $result = $manager->executeBulkWrite($collection, $bulk);
    if ($result->getInsertedCount() > 0) {
        echo "Se han insertado " . $result->getInsertedCount() . " documentos.";
    }
} 




?> 


