<?php

$dbServName = "localhost";
$dbUserName = "root";
$dbPassWord = "";
$dbBaseName = "jil_data";



$dsn = 'mysql:host=localhost;dbusername=jil_data';

try {
    $db = new pdo($dsn, $dbUserName,$dbPassWord);
    echo "Connection Good";
} catch (PDOException $e) {
    alert(error_log);
    exit();
}

$conn = mysqli_connect($dbServName, $dbUserName,$dbPassWord,$dbBaseName);

$conn->close();

?>