<?php
include('database/home_connect.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <script defer src= "js/main.js"></script> 
    <link rel="stylesheet" href="style(home).css">



    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Dashboard</title>
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
                <span>Primary</span>
                <h2>Dashboard</h2>
            </div>
            <div class="user--info">
                <div class="search--box">
                    <i class='bx bx-search-alt-2'></i>
                    <input type="text" placeholder="Search"/>
                </div>
            </div>
        </div>






        <div class="card--container">
            <h3 class="items-title">New Items</h3>
            <div class="card--wrapper">
                <div class="card--header">
                    <div class="amount">
                        <span class="title">This Week's items</span>
                        
                    </div>
                    <span class="numbers"><?php echo number_format($total_items); ?> <i class='bx bx-candles'></i></span>

                    <span class="figure">Updated from <?php echo number_format($last_week_items); ?></span>
                

                    
                </div>

                
                <div class="card--header card-2">
                    <div class="amount">
                        <span class="title">Deliveries</span>
                        <span class="Empty">.</span>
                    </div>
                    <span class="numbers">3900</span>
                    <span class="figure">Last Week: 4456</span>
                </div>
                


                <div class="card--header card-3">
                    <div class="amount">
                        <span class="title">Deliveries</span>
                        <span class="Empty">.</span>
                    </div>
                    <span class="numbers">3900</span>
                    <span class="figure">Last Week: 4456</span>
                </div>

                <div class="card--header card-4">
                    <div class="amount">
                        <span class="title">Deliveries</span>
                        <span class="Empty">.</span>
                    </div>
                    <span class="numbers">3900</span>
                    <span class="figure">Last Week: 4456</span>
                </div>

</div> 
</div>


<button class="newitem_button">Add new Item</button> 

    <section>
        <div class="register-box" id="register-box">

        <form action="home_connect.php" method="post">


            <div class="close" id="close-button">&times;</div> 
            <div class="circle">
                <span class="newitem-head"></span>
                <span class="newitem-body"></span> 
            </div>
            <div>
                <label for="sku">SKU Number</label>
                <input type="text" placeholder="sku" name="sku" required value="SKU-">
            </div>
            <div> 
                <label for="name">Item Name</label>
                <input type="text" placeholder="name" name="name" required>
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
            <label for="Location">Location</label>
            <select name="location" id="location" required>
                <option value="" disabled selected>Select supplier</option>
                <option value="location">location 1</option>
                <option value="location2">Supplier 2</option>
                <option value="location3">Supplier 3</option>
            
            </select>

           




            <div> 
                <label for="cost">Cost</label>
                <input type="text" placeholder="cost" name="cost" required value="£ ">
            </div>
            <button class="btnSubmit">Submit</button>
        </div>
    </section>






        </div>      
</section> 


    <script src="main.js"></script>
</body>
</html>




               

