<?php

include('database/connection.php');

session_start();
$error_message = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];


    $query = 'SELECT * FROM user1 WHERE email = :username';
    $stmt = $conn->prepare($query);
    $stmt->bindParam(':username', $username);
    $stmt->execute();
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($user) {

        if (password_verify($password, $user['password'])) {

            $_SESSION['user_id'] = $user['id'];
            header("Location: home.php");
            exit();
        } else {
            $error_message = 'Invalid password';
        }
    } else {
        $error_message = 'Invalid username';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="styles/style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <header class="app-header">
        <h1>Stock Flow</h1>
    </header>
    <div class="wrapper">
        <form action="login.php" method="POST">
            <h1>Login</h1>
            <?php if (!empty($error_message)): ?>
                <div id="errormessage">
                    <p>Error: <?= htmlspecialchars($error_message) ?></p>
                </div>
            <?php endif; ?>
            <div class="input-box">
                <input type="text" placeholder="Username" name="username" required>
                <i class='bx bxs-user'></i>
            </div>
            <div class="input-box">
                <input type="password" placeholder="Password" name="password" required>
                <i class='bx bxs-lock-alt'></i>
            </div>
            <div class="remember-forget">
                <label><input type="checkbox"> Remember me</label>
                <a href="#">Forgot password?</a>
            </div>
            <div class="loginbuttoncontainer">
                <button class="btn" type="submit">Login</button>
            </div>
            <div class="register-link">
                <p>Don't have an account? <a href="register.html">Register</a></p>
            </div>
        </form>
    </div>
</body>
</html>
