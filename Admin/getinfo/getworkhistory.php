<table id="example5" class="table table-striped " style="width:100%; ">
                <thead>
                    <tr>

                        <th scope="col">NAME</th>
                        <th scope="col">ITEM NO PINAGTIBAY</th>
                        <th scope="col">POSITION</th>
                        <th scope="col">FDS</th>
                        <th scope="col">CD</th>
                        <th scope="col">SCHOOL</th>
                        
                    </tr>
                </thead>
                <tbody>
                    <?php
                    // Display educationtbl to data table
                    $query = "SELECT CONCAT(u.lastname, ', ', u.firstname) AS fullname, 
                    w.itemnopinagtibay, 
                    w.presentposition, 
                    w.firstdayofservice, 
                    w.schooldistrict, 
                    w.schoolname
                    FROM workhistorytbl AS w
                    INNER JOIN user_tbl AS u ON w.userid = u.userid
                    WHERE u.userid = $userId;";
                    $result = mysqli_query($conn, $query);
                    if ($result) {
                        if (mysqli_num_rows($result) > 0) {

                            while ($row = mysqli_fetch_assoc($result)) {
                                echo "<tr>";
                                echo "<td>" . $row['fullname'] . "</td>";
                                echo "<td>" . $row['itemnopinagtibay'] . "</td>";
                                echo "<td>" . $row['presentposition'] . "</td>";
                                echo "<td>" . $row['firstdayofservice'] . "</td>";
                                echo "<td>" . $row['schooldistrict'] . "</td>";
                                echo "<td>" . $row['schoolname'] . "</td>";
                                echo "</tr>";
                            }
                        }
                    }
                    ?>
                </tbody>
            </table>