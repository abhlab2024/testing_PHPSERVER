<?php

echo "Hello, World! This is a PHP server response.";

// phpinfo();




$servername = "db";
$username = "root";
$password = "g7@Vx#2q";
$dbname = "testdb"; // utf8mb4_general_ci   



// pdo connection
try {
    $connpdo = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $connpdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
    // die();
}


echo '----------------------------------------------------------------------------------------------------------------';


$servername = "db3";
$username = "root";
$password = "g7@Vx#2q";
$dbname = "testdb"; // utf8mb4_general_ci   



// pdo connection
try {
    $connpdo = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $connpdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
    // die();
}




echo '----------------------------------------------------------------------------------------------------------------';


$servername = "mysqq.coolify.vps.boomlive.in"; // Replace with your actual server domain or IP
$port = "3307"; // External port you exposed
$username = "root";
$password = "g7@Vx#2q";
$dbname = "testdb"; // utf8mb4_general_ci   

// PDO connection with port specification
try {
    $connpdo = new PDO("mysql:host=$servername;port=$port;dbname=$dbname;charset=utf8mb4", $username, $password);

    // Set the PDO error mode to exception
    $connpdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Set charset to utf8mb4 for full Unicode support
    $connpdo->setAttribute(PDO::MYSQL_ATTR_INIT_COMMAND, "SET NAMES utf8mb4");

    echo "Connected successfully to external MySQL database!";

    // Test the connection with a simple query
    $stmt = $connpdo->query("SELECT VERSION() as version");
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    echo "<br>MySQL Version: " . $result['version'];

} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();

    // More detailed error information for debugging
    echo "<br>Error Code: " . $e->getCode();
    echo "<br>Error Info: ";
    print_r($e->errorInfo ?? 'No additional error info');
}


echo '----------------------------------------------------------------------------------------------------------------';


$servername = "mysq.coolify.vps.boomlive.in"; // Replace with your actual server domain or IP
$port = "3307"; // External port you exposed
$username = "root";
$password = "g7@Vx#2q";
$dbname = "testdb"; // utf8mb4_general_ci   

// PDO connection with port specification
try {
    $connpdo = new PDO("mysql:host=$servername;port=$port;dbname=$dbname;charset=utf8mb4", $username, $password);

    // Set the PDO error mode to exception
    $connpdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Set charset to utf8mb4 for full Unicode support
    $connpdo->setAttribute(PDO::MYSQL_ATTR_INIT_COMMAND, "SET NAMES utf8mb4");

    echo "Connected successfully to external MySQL database!";

    // Test the connection with a simple query
    $stmt = $connpdo->query("SELECT VERSION() as version");
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    echo "<br>MySQL Version: " . $result['version'];

} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();

    // More detailed error information for debugging
    echo "<br>Error Code: " . $e->getCode();
    echo "<br>Error Info: ";
    print_r($e->errorInfo ?? 'No additional error info');
}


?>