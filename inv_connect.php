<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'StockFlow';

try {

    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


    $sql = "SELECT sku, name, description, supplier, location, cost FROM inventory";
    $stmt = $conn->query($sql);


    if ($stmt->rowCount() > 0) {

        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            echo "<tr>
                    <td>" . htmlspecialchars($row["sku"]) . "</td>
                    <td>" . htmlspecialchars($row["name"]) . "</td>
                    <td>" . htmlspecialchars($row["description"]) . "</td>
                    <td>" . htmlspecialchars($row["supplier"]) . "</td>
                    <td>" . htmlspecialchars($row["location"]) . "</td>
                    <td>" . htmlspecialchars($row["cost"]) . "</td>
                    <td><a href='#' class='edit-icon' 
                        data-sku='" . htmlspecialchars($row["sku"]) . "'
                        data-name='" . htmlspecialchars($row["name"]) . "'
                        data-description='" . htmlspecialchars($row["description"]) . "'
                        data-supplier='" . htmlspecialchars($row["supplier"]) . "'
                        data-location='" . htmlspecialchars($row["location"]) . "'
                        data-cost='" . htmlspecialchars($row["cost"]) . "'>
                        <i class='bx bx-edit'></i></a></td>
                  </tr>";
        }
    } else {
        echo "<tr><td colspan='7'>No results found</td></tr>";
    }
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}
?>


