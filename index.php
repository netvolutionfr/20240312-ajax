<?php
$db_user = "root";
$db_pass = "";
$db_name = "20240312-ajax";
$db_host = "localhost";

try {
    $db = new PDO("mysql:host=$db_host;dbname=$db_name", $db_user, $db_pass);
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}

$sql = "SELECT * FROM products";
$result = $db->query($sql);
$products = $result->fetchAll(PDO::FETCH_ASSOC);

header('Content-Type: application/json');
echo json_encode($products);