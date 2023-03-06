<?php
require_once __DIR__ . '/config.php';

try {
    if (isset($_POST['update'])) {
        $id = $_POST['id'];
        $user = array(
            'name' => $_POST['name'],
            'age' => $_POST['age'],
            'email' => $_POST['email']
        );

        // checking empty fields
        $errorMessage = '';
        foreach ($user as $key => $value) {
            if (empty($value)) {
                $errorMessage .= $key . ' field is empty<br />';
            }
        }

        if ($errorMessage) {
            // print error message & link to the previous page
            echo '<span style="color:red">' . $errorMessage . '</span>';
            echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
        } else {
            //updating the 'users' table/collection
            $filter = ['_id' => new \MongoDB\BSON\ObjectID($id)];
            $update = ['$set' => $user];
            $options = ['multi' => false, 'upsert' => false];

            $bulk = new \MongoDB\Driver\BulkWrite();
            $bulk->update($filter, $update, $options);
            $result = $manager->executeBulkWrite($collection, $bulk);

            // redirecting to the display page. In our case, it is index.php
            echo "<script>window.location.href='http://localhost:8080/index.php'</script>";
            exit;
        }
    }

    //getting id from url
    $id = $_GET['id'];

    //selecting data associated with this particular id
    $filter = ['_id' => new \MongoDB\BSON\ObjectID($id)];
    $options = [];
    $query = new \MongoDB\Driver\Query($filter, $options);
    $cursor = $manager->executeQuery($collection, $query);

    $result = current($cursor->toArray());

    $name = $result->name;
    $age = $result->age;
    $email = $result->email;
} catch (Exception $e) {
    echo 'Error: ' . $e->getMessage();
}
?>
<html>

<head>
    <title>Edit Data</title>
</head>

<body>
    <a href="index.php">Home</a>
    <br /><br />

    <form name="form1" method="post" action="edit.php">
        <table border="0">
            <tr>
                <td>Name</td>
                <td><input type="text" name="name" value="<?php echo $name; ?>"></td>
            </tr>
            <tr>
                <td>Age</td>
                <td><input type="text" name="age" value="<?php echo $age; ?>"></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="text" name="email" value="<?php echo $email; ?>"></td>
            </tr>
            <tr>
                <td><input type="hidden" name="id" value=<?php echo $_GET['id']; ?>></td>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>
</body>

</html>
