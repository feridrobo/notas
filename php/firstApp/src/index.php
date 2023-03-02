<?php

// Conexión a la base de datos
$manager = new \MongoDB\Driver\Manager("mongodb://mongo:27017");

// Colección en la que se insertarán los datos
$collection = "test_collection";

// Documentos que se insertarán
$doc1 = ['_id' => 1, 'name' => 'John Doe', 'age' => 35];
$doc2 = ['_id' => 2, 'name' => 'Jane Smith', 'age' => 28];

// Eliminar los documentos existentes
$bulk = new \MongoDB\Driver\BulkWrite();
$bulk->delete([]);
$manager->executeBulkWrite("testdb.$collection", $bulk);

// Insertar los nuevos documentos en la colección
$bulk = new \MongoDB\Driver\BulkWrite();
$bulk->insert($doc1);
$bulk->insert($doc2);
$manager->executeBulkWrite("testdb.$collection", $bulk);

// Consulta para obtener los documentos insertados
$filter = [];
$options = [];
$query = new \MongoDB\Driver\Query($filter, $options);
$result = $manager->executeQuery("testdb.$collection", $query);

// Mostrar los documentos obtenidos
foreach ($result as $document) {
    var_dump($document);
}


?>
