<?php
include('database/loc_connect.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style(loc).css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Inventory Management </title>
</head>





<body>
    <div class="sidebar">
        <div class="logo"></div>
        <ul class="menu">
            <li>
                <a href="home.php" class="">
                    <i class='bx bxs-dashboard'></i>
                    <span class="text">Dashboard</span>
                </a>
            </li>
            <li>
                <a href="inventory.php" class="">
                    <i class='bx bxs-component'></i>
                    <span class="text">Inventory</span>
                </a>
            </li>
            <li>
                <a href="location.php" class="">
                    <i class='bx bxs-location-plus'></i>
                    <span class="text">Location</span>
                </a>
            </li>
            <li>
                <a href="#" class="">
                    <i class='bx bxs-report'></i>
                    <span class="text">Report</span>
                </a>
            </li>
            <li>
                <a href="#" class="">
                    <i class='bx bxs-conversation'></i>
                    <span class="text">Chatbot</span>
                </a>
            </li>
            <li class="help">
                <a href="#" class="">
                    <i class='bx bxs-help-circle'></i>
                    <span class="text">Help & Privacy</span>
                </a>
            </li>
            <li class="logout">
                <a href="#" class="">
                    <i class='bx bxs-log-out-circle'></i>
                    <span class="text">Log out</span>
                </a>
            </li>
        </ul>
    </div>
        

    <div class="main--content">
        <div class="header--wrapper">
            <div class="header--title">
                <span>Stock Flow</span>
                <h2>Location</h2>
            </div>
            <div class="user--info">
                <div class="search--box">
                    <i class='bx bx-search-alt-2'></i>
                    <input type="text" placeholder="Search"/>
                </div>
            </div>
        </div>








        <table class="items_table">
        <thead>
            <tr>
                <th>Location ID</th>
                <th>section</th>
                <th>Item assigned</th>
                <th>Dimension</th>
                <th>Status</th>
                <th>photos</th>
                
                
                
            </tr>
        </thead>

        <tbody>
            <?php include 'loc_connect.php'; ?>
        </tbody>


        

    </table>
</div> 

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const headers = document.querySelectorAll('.items_table .aisle-header');
            
            headers.forEach(header => {
                header.addEventListener('click', function () {
                    const aisle = this.getAttribute('data-aisle');
                    const rows = document.querySelectorAll(`.items_table .aisle-rows[data-aisle="${aisle}"]`);
                    rows.forEach(row => row.classList.toggle('show'));
                });
            });
        });
    </script>


</body>
</html>




               

