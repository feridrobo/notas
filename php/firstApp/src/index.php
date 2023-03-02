<?php

// Conexión a la base de datos
$manager = new \MongoDB\Driver\Manager("mongodb://mongo:27017");

// Colección en la que se insertarán los datos
$collection = "test_collection";

// Documentos que se insertarán
$doc1 = ['_id' => 1, 'name' => 'John Doe', 'age' => 100];
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


// Modificar el documento con _id = 1
$bulk = new \MongoDB\Driver\BulkWrite();
$bulk->update(['_id' => 1], ['$set' => ['age' => 99]]);
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
$result = $manager->executeQuery("testdb.$collection", $query);
// Mostrar los documentos obtenidos en una tabla
echo "<table>";
echo "<thead><tr><th>ID</th><th>Name</th><th>Age</th></tr></thead>";
echo "<tbody>";
foreach ($result as $document) {
    echo "<tr>";
    echo "<td>" . $document->_id . "</td>";
    echo "<td>" . $document->name . "</td>";
    echo "<td>" . $document->age . "</td>";
    echo "</tr>";
}
echo "</tbody>";
echo "</table>";

$result = $manager->executeQuery("testdb.$collection", $query);


// Mostrar los campos 'name' y 'age' de cada documento
foreach ($result as $document) {
    echo "Name: " . $document->name . ", Age: " . $document->age . "<br>";
}

?>
