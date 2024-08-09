<?php
include('database/inv_connect.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style(inv).css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Inventory Management</title>
    <style>
        .filter-btn {
            margin: 10px 0;
            position: relative;
            display: inline-block;
        }
        .filter-dropdown {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 1;
        }
        .filter-dropdown a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }
        .filter-dropdown a:hover {
            background-color: #f1f1f1;
        }
        .filter-btn:hover .filter-dropdown {
            display: block;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
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
                <a href="#" class="">
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
                <h2>Inventory</h2>
            </div>
            <div class="user--info">
                <div class="search--box">
                    <i class='bx bx-search-alt-2'></i>
                    <input type="text" placeholder="Search"/>
                </div>
            </div>
        </div>



    
        <div class="filter-btn">
            <button>Filter by Category</button>
            <div class="filter-dropdown">
                <a href="#">All</a>
                <a href="#">Category 1</a>
                <a href="#">Category 2</a>
                <a href="#">Category 3</a>
            </div>
        </div>

       



        <table class="items_table">
        <thead>
            <tr>
                <th>SKU</th>
                <th>Name</th>
                <th>Description</th>
                <th>Supplier</th>
                <th>Location</th>
                <th>Cost</th>
                <th>Edit</th>
                
            </tr>
        </thead>


        <tbody>
            <?php include 'inv_connect.php'; ?>
        </tbody>

    </table>






    <section>
        
            <div class="register-box" id="register-box">
            <h1> Make changes </h1> 
                <form action="home_connect.php" method="post">
                    <div class="close" id="close-button">&times;</div>
                    <div>
                        <label for="sku">SKU Number</label>
                        <input type="text" id="sku" placeholder="sku" name="sku" required value="SKU-">
                    </div>
                    <div>
                        <label for="name">Item Name</label>
                        <input type="text" id="name"  placeholder="name" name="name" required>
                    </div>
                    <div>
                        <label for="description">Description</label>
                        <input type="text" placeholder="description" name="description" required>
                    </div>
                    <div>
                        <label for="supplier">Supplier</label>
                        <select name="supplier" id="supplier" required>
                            <option value="" disabled selected>Select supplier</option>
                            <option value="supplier1">Supplier 1</option>
                            <option value="supplier2">Supplier 2</option>
                            <option value="supplier3">Supplier 3</option>
                        </select>
                    </div>
                    <div>
                        <label for="location">Location</label>
                        <select name="location" id="location" required>
                            <option value="" disabled selected>Select location</option>
                            <option value="location1">Location 1</option>
                            <option value="location2">Location 2</option>
                            <option value="location3">Location 3</option>
                        </select>
                    </div>
                    <div>
                        <label for="cost">Cost</label>
                        <input type="text" placeholder="cost" name="cost" required value="£ ">
                    </div>
                    <button class="btnSubmit">Submit</button>
                </form>
            </div>
        </section>
    </div>




    <script src="inv.js"></script>

    


    </body>
    </html>