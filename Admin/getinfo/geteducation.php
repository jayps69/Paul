            <table id="example" class="table table-striped nowrap" style="width:100%;" >
                <thead>
                    <tr>

                        <th scope="col">LEVEL</th>
                        <th scope="col">SCHOOL</th>
                        <th scope="col">DEGREE</th>
                        <th scope="col">FROM</th>
                        <th scope="col">TO</th>
                        
                    </tr>
                </thead>
                <tbody>
                    <?php
                    // Display educationtbl to data table
                    $query = "SELECT idno, educationlevel, school, degree, datefrom, dateto FROM educationtbl WHERE userid = $userId";
                    $result = mysqli_query($conn, $query);
                    if ($result) {
                        if (mysqli_num_rows($result) > 0) {

                            while ($row = mysqli_fetch_assoc($result)) {
                                echo "<tr>";
                                echo "<td>" . $row['educationlevel'] . "</td>";
                                echo "<td>" . $row['school'] . "</td>";
                                echo "<td>" . $row['degree'] . "</td>";
                                echo "<td>" . $row['datefrom'] . "</td>";
                                echo "<td>" . $row['dateto'] . "</td>";
                                echo "</tr>";
                            }
                        }
                    }
                    ?>
                </tbody>
            </table>