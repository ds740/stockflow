<?php
include('supplier_connect.php');
?>
<?php
$servername = 'localhost';
$username = 'root';
$password = ''; 
$dbname = 'StockFlow';

try {
    
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    
    $stmt = $conn->prepare("SELECT * FROM supplier");
    $stmt->execute();
    $suppliers = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script defer src="js/main.js"></script>
    <link rel="stylesheet" href="style(supplier).css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Dashboard</title>
</head>
<body>
    <div class="sidebar">
        <div class="logo"></div>
        <ul class="menu">
            <li>
                <a href="home.php">
                    <i class='bx bxs-dashboard'></i>
                    <span class="text">Dashboard</span>
                </a>
            </li>
            <li>
                <a href="inventory.php">
                    <i class='bx bxs-component'></i>
                    <span class="text">Inventory</span>
                </a>
            </li>
            <li>
                <a href="location.php">
                    <i class='bx bxs-location-plus'></i>
                    <span class="text">Location</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class='bx bxs-report'></i>
                    <span class="text">Report</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class='bx bxs-conversation'></i>
                    <span class="text">Chatbot</span>
                </a>
            </li>
            <li class="help">
                <a href="#">
                    <i class='bx bxs-help-circle'></i>
                    <span class="text">Help & Privacy</span>
                </a>
            </li>
            <li class="logout">
                <a href="#">
                    <i class='bx bxs-log-out-circle'></i>
                    <span class="text">Log out</span>
                </a>
            </li>
        </ul>
    </div>




    
<div class="container">

    <header> 

        <div class="filter">
            
                show <select name="" id="table_size">
                    <option value="10"> 10 </optoin> 
                     <option value="10"> 20 </optoin> 
                      <option value="10"> 30 </optoin> 
                       <option value="10"> 50 </optoin> 
                       </select> entries 
                    </div> 

                  
    <div class="search">
        <label for="search">Search:</label>
        <input type="search" name="" id="search" placeholder="Search supplier aa by name">
    </div> 



                    
    <div class="newsupplierBtn">
    <button id="openFormBtn">Add New Supplier</button> 
</div>
</header>


                    <table> 

                        <thead> 

                            <tr class="heading">
                                <th> Supplier Number </th> 
                                
                                <th> Name</th> 
                                <th> Company  </th> 
                                <th> Address </th> 
                                <th> Contract Terms </th> 
                                <th> Contact  </th> 
                                 <th> phone no  </th> 
                                 <th>Action</th>

                    </tr> 
                        </thead>


                        <tbody class="supplier-info">
                <?php if (empty($suppliers)): ?>
                    <tr><td class="empty" colspan="9">No data available in table</td></tr>
                <?php else: ?>
                    <?php foreach ($suppliers as $supplier): ?>
                        <tr>
                            <td><?php echo htmlspecialchars($supplier['supplier_number']); ?></td>
                            
                            <td><?php echo htmlspecialchars($supplier['supplier_name']); ?></td>
                            <td><?php echo htmlspecialchars($supplier['company']); ?></td>
                            <td><?php echo htmlspecialchars($supplier['city']); ?></td>
                            <td><?php echo htmlspecialchars($supplier['delivery_terms']); ?></td>
                            <td><?php echo htmlspecialchars($supplier['contact']); ?></td>
                            <td><?php echo htmlspecialchars($supplier['phone_no']); ?></td>
                            <td>
                                <i class='bx bx-edit-alt'></i>
                                <i class='bx bxs-trash'></i>
                                <i class='bx bxs-low-vision'></i>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php endif; ?>
            </tbody>
        </table>

           












                <div class="popup" id="popupForm">
    <div class="popup-content">
        <header> 
            <h2 class="modalTitle">Fill in the Supplier Details</h2> 
            <button class="closeBtn" id="closeFormBtn">&times;</button> 
        </header>
        <div class="body">


        <form action="supplier_connect.php" method="post">

                

                <div class="form_control">
                    <label for="supplier_number">Supplier Number:</label>
                    <input type="text" name="supplier_number" id="supplier_number" required value="SP24-">
                </div>
                <div class="form_control">
                    <label for="supplier_name">Supplier Name:</label>
                    <input type="text" name="supplier_name" id="supplier_name" required>
                </div>
                <div class="form_control">
                    <label for="company">Company:</label>
                    <input type="text" name="company" id="company" required>
                </div>
                <div class="form_control">
                    <label for="city">City:</label>
                    <input type="text" name="city" id="city" required>
                </div>


                <div class="form_control">
                <label for="delivery_terms">Delivery Terms</label>
            <select name="delivery_terms" id="delivery_terms" required>
                <option value="" disabled selected>Select supplier</option>
                <option value="deliveryterm-1"> EXW (Ex Works)</option>
                <option value="deliveryterm-2">DAP (Delivered At Place)</option>
                <option value="deliveryterm-3">Consignment Delivery</option>
            </select>
            </div>

                <div class="form_control">
                    <label for="contact">Contact:</label>
                    <input type="text" name="contact" id="contact" required>
                </div>
                <div class="form_control">
                    <label for="phone_no">Phone Number:</label>
                    <input type="text" name="phone_no" id="phone_no" required>
                </div>
                <footer class="popupFooter">
                    <button type="submit" class="submitBtn">Submit</button>
                </footer>
            </form>
        </div>
    </div>
</div>


    <script src="supplier.js"></script>
</body>
</html>