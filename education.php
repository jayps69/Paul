<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Education</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.0/css/dataTables.bootstrap5.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/3.0.0/css/responsive.bootstrap5.css">
    <link rel="stylesheet" href="Education.css">

</head>

<body>
    <div id="wrapper">
        <!-- Sidebar -->
        <?php
        include 'Templates/sidebar.php';
        ?>

        <div id="content">
            <?php
            include 'Templates/header.php'
                ?>


            <div class="AddButton">
                <h1>Education</h1>

                <button class="addRecord" name="addRecord" data-bs-toggle="modal" data-bs-target="#addRecord">ADD
                    RECORD</button>

            </div>


            <table id="example" class="table table-striped nowrap" style="width:100%">
                <thead>
                    <tr>

                        <th scope="col">LEVEL</th>
                        <th scope="col">SCHOOL</th>
                        <th scope="col">DEGREE</th>
                        <th scope="col">FROM</th>
                        <th scope="col">TO</th>
                        <th scope="col">EDIT</th>
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
                                echo '<td><button name="editRecord" data-bs-toggle="modal" data-bs-target="#editRecord" data-idno="' . $row['idno'] . '" class="btn btn-danger btn-sm px-3"><i class="fas fa-pencil-alt"></i></button></td>';
                                echo "</tr>";
                            }
                        }
                    }
                    ?>
                </tbody>
            </table>


            <div class="modal" id="addRecord" tabindex="-1" role="dialog" aria-labelledby="titleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <form id="addRecordForm" method="post" action="">
                            <div class="modal-header">
                                <h5 class="modal-title" id="titleModalLabel">ADD RECORD</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="inputGroup">
                                    <select required="" autocomplete="off" id="addlevel" name="addlevel"
                                        onchange="updateSelectedIndex(this)">
                                        <option value=""></option>
                                        <option value="ELEMENTARY">ELEMENTARY</option>
                                        <option value="SECONDARY">SECONDARY</option>
                                        <option value="VOCATIONAL">VOCATIONAL</option>
                                        <option value="COLLEGE">COLLEGE</option>
                                        <option value="MASTERS DEGREE">MASTERS DEGREE</option>
                                        <option value="DOCTORATE DEGREE">DOCTORATE DEGREE</option>
                                    </select>

                                    <label2 for="addlevel">LEVEL</label2>
                                </div>
                                <div class="inputGroup">
                                    <input type="text" id="addschool" name="addschool" required="" autocomplete="off">
                                    <label for="addschool">SCHOOL</label>
                                </div>
                                <div class="inputGroup">
                                    <input type="text" id="adddegree" name="adddegree" required="" autocomplete="off">
                                    <label for="adddegree">DEGREE</label>
                                </div>
                                <div class="inputGroup">
                                    <select required="" autocomplete="off" name="addfrom" id="addfrom"></select>
                                    <label2 for="addfrom">FROM</label2>
                                </div>
                                <div class="inputGroup">
                                    <select required="" autocomplete="off" name="addto" id="addto"></select>
                                    <label2 for="addto">TO</label2>
                                </div>
                                <input type="hidden" name="selectedOptionIndex" id="selectedOptionIndex" value="">
                                <div class="modal-footer justify-content-center">
                                    <button type="submit" id="savebtn" name="savebtn"
                                        class="btn btn-primary custom-btn">SAVE</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <?php
            // Add function
            if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['savebtn'])) {
                // Get form data
                $addlevel = $_POST['addlevel'];
                $selectedOptionIndex = $_POST['selectedOptionIndex'];
                $addschool = $_POST['addschool'];
                $adddegree = $_POST['adddegree'];
                $addfrom = $_POST['addfrom'];
                $addto = $_POST['addto'];

                // Prepare the SQL statement
                $sql = "INSERT INTO educationtbl (userid, educid, educationlevel, school, degree, datefrom, dateto) 
            VALUES (?, ?, ?, ?, ?, ?, ?)";

                // Create a prepared statement
                $stmt = mysqli_prepare($conn, $sql);

                // Bind parameters
                mysqli_stmt_bind_param($stmt, "iisssii", $userId, $selectedOptionIndex, $addlevel, $addschool, $adddegree, $addfrom, $addto);

                // Execute the statement
                if (mysqli_stmt_execute($stmt)) {
                    echo "<script>alert('NEW RECORD ADDED'); window.location.href = 'education.php';</script>";
                } else {
                    echo "Error: " . mysqli_error($conn);
                }

                // Close statement
                mysqli_stmt_close($stmt);

                // Close database connection
                mysqli_close($conn);
            }
            ?>

            <div class="modal fade" id="editRecord" tabindex="-1" role="dialog" aria-labelledby="titleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <form id="editRecordForm" method="post" action="">
                            <div class="modal-header">
                                <h5 class="modal-title" id="titleModalLabel">EDIT RECORD</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="inputGroup">
                                    <select required="" autocomplete="off" id="editlevel" name="editlevel"
                                        onchange="updateSelectedIndex1(this)">
                                        <option value=""></option>
                                        <option value="ELEMENTARY">ELEMENTARY</option>
                                        <option value="SECONDARY">SECONDARY</option>
                                        <option value="VOCATIONAL">VOCATIONAL</option>
                                        <option value="COLLEGE">COLLEGE</option>
                                        <option value="MASTERS DEGREE">MASTERS DEGREE</option>
                                        <option value="DOCTORATE DEGREE">DOCTORATE DEGREE</option>
                                    </select>
                                    <label2 label2 for="editlevel">LEVEL</label2>
                                </div>
                                <div class="inputGroup">
                                    <input type="text" id="editschool" name="editschool" required="" autocomplete="off">
                                    <label for="editschool">SCHOOL</label>
                                </div>
                                <div class="inputGroup">
                                    <input type="text" id="editdegree" name="editdegree" required="" autocomplete="off">
                                    <label for="editdegree">DEGREE</label>
                                </div>
                                <div class="inputGroup">
                                    <select select required="" autocomplete="off" name="editfrom"
                                        id="editfrom"></select>
                                    <label2 for="editfrom">FROM</label2>
                                </div>
                                <div class="inputGroup">
                                    <select required="" autocomplete="off" name="editto" id="editto"></select>
                                    <label2 for="editto">TO</label2>
                                </div>
                                <input type="hidden" id="editidno" name="editidno">
                                <input type="hidden" name="selectedOptionIndex1" id="selectedOptionIndex1" value="">
                                <div class="modal-footer justify-content-center">
                                    <button type="submit" id="updatebtn" name="updatebtn"
                                        class="btn btn-primary custom-btn">UPDATE</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <?php
            // Update function
            if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['updatebtn'])) {
                // Get form data
                $idno = $_POST['editidno'];
                $editlevel = $_POST['editlevel'];
                $editschool = $_POST['editschool'];
                $editdegree = $_POST['editdegree'];
                $editfrom = $_POST['editfrom'];
                $editto = $_POST['editto'];
                $selectedOptionIndex1 = $_POST['selectedOptionIndex1'];

                // Prepare the SQL statement
                $sql = "UPDATE `educationtbl` SET `educid`=?, `educationlevel`=?, `school`=?,
            `degree`=?, `datefrom`=?, `dateto`=? WHERE `idno`=?";

                // Create a prepared statement
                $stmt = mysqli_prepare($conn, $sql);

                // Bind parameters
                mysqli_stmt_bind_param($stmt, "isssssi", $selectedOptionIndex1, $editlevel, $editschool, $editdegree, $editfrom, $editto, $idno);

                // Execute the statement
                if (mysqli_stmt_execute($stmt)) {
                    echo "<script>alert('RECORD UPDATED'); window.location.href = 'Education.php';</script>";
                } else {
                    echo "Error: " . mysqli_error($conn);
                }

                // Close statement
                mysqli_stmt_close($stmt);

                // Close database connection
                mysqli_close($conn);
            }
            ?>
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.datatables.net/2.0.0/js/dataTables.js"></script>
    <script src="https://cdn.datatables.net/2.0.0/js/dataTables.bootstrap5.js"></script>
    <script src="https://cdn.datatables.net/responsive/3.0.0/js/dataTables.responsive.js"></script>
    <script src="https://cdn.datatables.net/responsive/3.0.0/js/responsive.bootstrap5.js"></script>




    <script>
        $(document).ready(function () {
            // Populate the fields of from to (Add and Edit Records)
            var start_year = new Date().getFullYear();
            var html = '';
            html += '<option value=""></option>';
            for (var i = start_year - 55; i <= start_year; i++) {
                html += '<option value="' + i + '">' + i + '</option>';
            }
            $("#addfrom, #addto, #editfrom, #editto").html(html);

            // Clearing the fields of addRecord modal when closed
            var addModal = document.getElementById('addRecord');
            addModal.addEventListener('hidden.bs.modal', function () {
                document.getElementById('addlevel').selectedIndex = 0;
                document.getElementById('addschool').value = '';
                document.getElementById('adddegree').value = '';
                document.getElementById('addfrom').selectedIndex = 0;
                document.getElementById('addto').selectedIndex = 0;
            });

            // Clearing the fields of editRecord modal when closed
            var editModal = document.getElementById('editRecord');
            editModal.addEventListener('hidden.bs.modal', function () {
                document.getElementById('editlevel').selectedIndex = 0;
                document.getElementById('editschool').value = '';
                document.getElementById('editdegree').value = '';
                document.getElementById('editfrom').selectedIndex = 0;
                document.getElementById('editto').selectedIndex = 0;
            });

            var fullname = "<?php echo $fullName; ?>";
            new DataTable('#example', {
                searching: false,
                bLengthChange: false,
                responsive: {
                    details: {
                        display: DataTable.Responsive.display.modal({
                            header: function (row) {
                                var data = row.data();
                                return 'Education of ' + fullname;
                            }
                        }),
                        renderer: DataTable.Responsive.renderer.tableAll({
                            tableClass: 'table'
                        }),
                    }
                },
                order: [[3, 'asc']] 
            });

            $('#example').on('click', 'button[name="editRecord"]', function () {
                
                var idno = $(this).data('idno');
                // Retrieve data from the clicked row and map it to an array
                var rowData = $(this).closest('tr').find('td').map(function () {
                    return $(this).text();
                }).get();

                // Populate the fields in the edit modal with the retrieved data
                $('#editlevel').val(rowData[0]);
                $('#editschool').val(rowData[1]);
                $('#editdegree').val(rowData[2]);
                $('#editfrom').val(rowData[3]);
                $('#editto').val(rowData[4]);
                $('#editidno').val(idno); // Set the idno value in a hidden input field if needed

                // Show the edit modal
                $('#editRecord').modal('show');
            });

            $(document).on('click', '.modal button[name="editRecord"]', function () {

                var idno = $(this).data('idno');
                // Retrieve data from the closest table row inside the modal and map it to an array
                var rowData = $(this).closest('.modal').find('tr').find('td').map(function () {
                    return $(this).text();
                }).get();

                // Populate the fields in the edit modal with the retrieved data
                $('#editlevel').val(rowData[1]);
                $('#editschool').val(rowData[3]);
                $('#editdegree').val(rowData[5]);
                $('#editfrom').val(rowData[7]);
                $('#editto').val(rowData[9]);
                $('#editidno').val(idno); 

                // Show the edit modal
                $('#editRecord').modal('show');
            });
        });


        //Getting the SelectedIndex of addlevel
        function updateSelectedIndex(select) {
            var selectedIndex = select.selectedIndex;
            document.getElementById('selectedOptionIndex').value = selectedIndex;
        }

        function updateSelectedIndex1(select) {
            var selectedIndex1 = select.selectedIndex;
            document.getElementById('selectedOptionIndex1').value = selectedIndex1;
        }

    </script>




</body>

</html>