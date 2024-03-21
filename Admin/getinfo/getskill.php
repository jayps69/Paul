<table id="example4" class="table table-striped nowrap" style="width:100%">
                <thead>
                    <tr>

                        <th scope="col">SKILLS & HOBBIES</th>
                        
                    </tr>
                </thead>
                <tbody>
                    <?php
                    // Display educationtbl to data table
                    $query = "SELECT idno, skills FROM skillstbl WHERE userid = $userId";
                    $result = mysqli_query($conn, $query);
                    if ($result) {
                        if (mysqli_num_rows($result) > 0) {

                            while ($row = mysqli_fetch_assoc($result)) {
                                echo "<tr>";
                                echo "<td>" . $row['skills'] . "</td>";
                                echo "</tr>";
                            }
                        }
                    }
                    ?>
                </tbody>
            </table>