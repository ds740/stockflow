
<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $sku = $_POST['sku'];
    $name = $_POST['name'];
    $description = $_POST['description'];
    $supplier = $_POST['supplier'];
    $location = $_POST['location'];
    $cost = $_POST['cost'];






    $servername = 'localhost';
    $username = 'root';
    $password = ''; 
    $dbname = 'StockFlow';

    try {
    


        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


        $stmt = $conn->prepare("INSERT INTO inventory (sku, name, description, supplier, location, cost) VALUES (:sku, :name, :description, :supplier, :location, :cost)");



        $stmt->bindParam(':sku', $sku);
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':description', $description);
        $stmt->bindParam(':supplier', $supplier);
        $stmt->bindParam(':location', $location);
        $stmt->bindParam(':cost', $cost);


        
// Fetch total number of items in inventory
$stmt = $conn->prepare("SELECT COUNT(*) AS total_items FROM inventory");
$stmt->execute();
$result = $stmt->fetch(PDO::FETCH_ASSOC);

// Check if the result is valid
if ($result && isset($result['total_items'])) {
    $total_items = $result['total_items'];
} else {
    $total_items = 0; 
}


        $stmt->execute();
        echo "data saved successful!";
    } catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
        $total_items = 0; // Default to 0 in case of an error
    }

    $conn = null;
}
?>
