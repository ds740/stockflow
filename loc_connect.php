<?php
                // Connect to the database
                $servername = 'localhost';
                $username = 'root';
                $password = '';
                $dbname = 'StockFlow';

                try {
                    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                    // Query to fetch data from the 'location' table
                    $sql = "SELECT name, sections, items_assigned, dimension, status FROM location";
                    $stmt = $conn->query($sql);

                    $current_aisle = '';
                    if ($stmt->rowCount() > 0) {
                        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                            $aisle = substr($row['name'], 0, 1); // Assuming aisle ID starts with a letter
                            if ($aisle !== $current_aisle) {
                                if ($current_aisle !== '') {
                                    echo '</tbody>';
                                }
                                $current_aisle = $aisle;
                                echo "<tr class='aisle-header' data-aisle='$current_aisle'>
                                        <td colspan='5'>$current_aisle</td>
                                      </tr>
                                      <tbody class='aisle-rows' data-aisle='$current_aisle'>";
                            }
                            echo "<tr>
                                    <td>" . htmlspecialchars($row["name"]) . "</td>
                                    <td>" . htmlspecialchars($row["sections"]) . "</td>
                                    <td>" . htmlspecialchars($row["items_assigned"]) . "</td>
                                    <td>" . htmlspecialchars($row["dimension"]) . "</td>
                                    <td>" . htmlspecialchars($row["status"]) . "</td>
                                    <td>";
                           
                            echo "</td></tr>";
                        }
                        echo '</tbody>';
                    } else {
                        echo "<tr><td colspan='6'>No results found</td></tr>";
                    }
                } catch (PDOException $e) {
                    die("Connection failed: " . $e->getMessage());
                }
                ?>