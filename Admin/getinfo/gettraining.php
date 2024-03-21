<table id="example3" class="table table-striped " style="width:100%; ">
                <thead>
                    <tr>

                        <th scope="col">TITLE</th>
                        <th scope="col">FROM</th>
                        <th scope="col">TO</th>
                        <th scope="col">NO. OF HOURS</th>
                        <th scope="col">TYPE OF LEARNING AND DEVELOPMENT</th>
                        <th scope="col">CONDUCTED OR SPONSORED BY</th>
                        
                    </tr>
                </thead>
                <tbody>
                    <?php
                    // Display educationtbl to data table
                    $query = "SELECT idno, title, datefrom, dateto, numbersofhour, typeofld, conducted FROM trainingtbl WHERE userid = $userId";
                    $result = mysqli_query($conn, $query);
                    if ($result) {
                        if (mysqli_num_rows($result) > 0) {

                            while ($row = mysqli_fetch_assoc($result)) {
                                echo "<tr>";
                                echo "<td>" . $row['title'] . "</td>";
                                echo "<td>" . $row['datefrom'] . "</td>";
                                echo "<td>" . $row['dateto'] . "</td>";
                                echo "<td>" . $row['numbersofhour'] . "</td>";
                                echo "<td>" . $row['typeofld'] . "</td>";
                                echo "<td>" . $row['conducted'] . "</td>";
                                echo "</tr>";
                            }
                        }
                    }
                    ?>
                </tbody>
            </table>