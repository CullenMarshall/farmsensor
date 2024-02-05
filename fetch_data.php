
<?php

$host = 'localhost';
$dbname = 'ras_pi';
$username = 'root';
$password = '';
// $host = '129.154.50.17';
// $dbname = 'bongsoo';
// $username = 'bk';
// $password = '';


try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $stmt = $pdo->prepare("SELECT * FROM farm_sensor_logs limit 100");
    $stmt->execute();

    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Convert the result to JSON
    $jsonResult = json_encode($result);

    echo $jsonResult;
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
} finally {
    if ($pdo !== null) {
        $pdo = null;
    }
}


// //data visualization
// try {
//     $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
//     $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   
// }
// catch (PDOException $e) {
//     die ($e->getMessage());
// }
// $query = $db-> prepare('SELECT ');

// $query->execute(array());
// $results = $query->fetchAll(PDO::FETCH_ASSOC);

// $data = array(
//     // create whatever columns are necessary for your charts here
//     'cols' => array(
//         array(),
//         array()
//     )
//     'rows' => array()
// );

// foreach ($results as $row) {

//     $data['rows'][] = array('c' => array(
//         array('v' => $row[]),
//         array('v' => $row[])
//     });
// }

?>

