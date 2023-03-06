<?php
// including the database connection file
include_once("config.php");

if (!is_null($manager)) {
    // select data in descending order from collection "usuarios"
    $query = new MongoDB\Driver\Query([]);
    $cursor = $manager->executeQuery('nueva.usuarios', $query);
    $result = iterator_to_array($cursor);
    usort($result, function ($a, $b) {
        return strcmp($a->name, $b->name);
    });
} else {
    echo "Hay un error";
}
?>
<html>
<head>    
    <title>Homepage</title>
</head>

<body>
<a href="add.html">Add New Data</a><br/><br/>

    <table width='80%' border=0>

    <tr bgcolor='#CCCCCC'>
        <td>Name</td>
        <td>Age</td>
        <td>Email</td>
        <td>Update</td>
    </tr>
    <?php     
    if (!empty($result)) {
        foreach ($result as $res) {
            if (property_exists($res, 'name') && property_exists($res, 'age') && property_exists($res, 'email')) {
                echo "<tr>";
                echo "<td>".$res->name."</td>";
                echo "<td>".$res->age."</td>";
                echo "<td>".$res->email."</td>";    
                echo "<td><a href=\"edit.php?id=".$res->_id."\">Edit</a></td>";
                echo "</tr>";
            }
        }
    } else {
        echo "<tr><td colspan='4'>No hay datos para mostrar.</td></tr>";
    }
    ?>
    </table>
</body>
</html>
