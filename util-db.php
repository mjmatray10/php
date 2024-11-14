<?php
function get_db_connection() {
    // Define Azure database credentials
    $servername = "project4013.mysql.database.azure.com"; // Azure server hostname
    $username = "project4013"; // Your Azure MySQL username
    $password = "ecommerce4013!"; // Your Azure MySQL password
    $dbname = "project4013"; // Your database name
    $port = 3306; // MySQL default port

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname, $port);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    return $conn;
}
?>
