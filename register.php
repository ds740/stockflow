<?php
include('database/connect.php');
?>

<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Page</title>
    <link rel="stylesheet" href="styles/style(reg).css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>

    <header class="app-header">
        <h1>Stock Flow</h1>
    </header>

    <div class="wrapper">
        <form action="connect.php" method="post">
            <h1>Register</h1>
            <div class="input-box">
                <input type="text" placeholder="Full Name" name="fullname" required>
                <i class='bx bxs-user'></i>
            </div>

            <div class="input-box">
                <input type="email" placeholder="Email" name="email" required>
                <i class='bx bxs-envelope'></i>
            </div>

            <div class="input-box">
                <input type="password" placeholder="Password" name="password" required>
                <i class='bx bxs-lock-alt'></i>
            </div>

            <div class="input-box">
                <input type="text" placeholder="Department" name="department" required>
                <i class='bx bxs-building'></i>
            </div>

            <div class="input-box">
                <input type="text" placeholder="Job Role" name="jobrole" required>
                <i class='bx bxs-briefcase-alt'></i>
            </div>

            <div class="remember-forget">
                <label><input type="checkbox"> Remember me</label>
                <a href="#">Forgot password?</a>
            </div>

            <button type="submit" class="btn">Register Now</button>

            <div class="register-link">
                <p>Already have an account? <a href="login.html">Login</a></p>
            </div>
        </form>
    </div>

</body>
</html>
