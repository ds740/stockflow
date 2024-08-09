
<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $department = $_POST['department'];
    $jobrole = $_POST['jobrole'];


    $hashed_password = password_hash($password, PASSWORD_DEFAULT);




    $servername = 'localhost';
    $username = 'root';
    $password = ''; 
    $dbname = 'StockFlow';

    try {
    


        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $stmt = $conn->prepare("INSERT INTO user1 (fullname, email, password, department, jobrole) VALUES (:fullname, :email, :password, :department, :jobrole)");



        $stmt->bindParam(':fullname', $fullname);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':password', $hashed_password);
        $stmt->bindParam(':department', $department);
        $stmt->bindParam(':jobrole', $jobrole);

        $stmt->execute();
        echo "Registration successful!";
    } catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }

    $conn = null;
}
?>
