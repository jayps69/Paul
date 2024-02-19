<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Work Experience</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="Eligibility.css">

    <style>
        input[type=date]:required:invalid::-webkit-datetime-edit {
            color: transparent;
        }

        input[type=date]:focus::-webkit-datetime-edit {
            color: black !important;
        }
    </style>
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
                <h1>Work Experience</h1>

                <button class="addRecord" name="addRecord" data-bs-toggle="modal" data-bs-target="#addRecord">ADD
                    RECORD</button>

            </div>


            <table id="example" class="table table-hover table-striped">
                <thead>
                    <tr>
                        <th scope="col">FROM</th>
                        <th scope="col">TO</th>
                        <th scope="col">POSITION</th>
                        <th scope="col">OFFICE</th>
                        <th scope="col">MONTHLY SALARY</th>
                        <th scope="col">SALARY GRADE</th>
                        <th scope="col">APPOINTMENT STATUS</th>
                        <th scope="col">GOVERNMENT SERVICE</th>
                        <th scope="col">EDIT</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    // Display educationtbl to data table
                    $query = "SELECT idno, datefrom, dateto, positiontitle, office, monthlysalary, salarygrade, statusofappointment, governmentservice 
          FROM workexperiencetbl WHERE userid = $userId";
                    $result = mysqli_query($conn, $query);
                    if ($result) {
                        if (mysqli_num_rows($result) > 0) {

                            while ($row = mysqli_fetch_assoc($result)) {
                                echo "<tr>";
                                echo "<td>" . $row['datefrom'] . "</td>";
                                echo "<td>" . $row['dateto'] . "</td>";
                                echo "<td>" . $row['positiontitle'] . "</td>";
                                echo "<td>" . $row['office'] . "</td>";
                                echo "<td>" . $row['monthlysalary'] . "</td>";
                                echo "<td>" . $row['salarygrade'] . "</td>";
                                echo "<td>" . $row['statusofappointment'] . "</td>";
                                echo "<td>" . $row['governmentservice'] . "</td>";
                                echo '<td><button name="editRecord" data-bs-toggle="modal" data-bs-target="#editRecord" data-idno="' . $row['idno'] . '" class="btn btn-danger btn-sm px-3"><i class="fas fa-pencil-alt"></i></button></td>';
                                echo "</tr>";
                            }
                        }
                    }
                    ?>
                </tbody>
            </table>


            <div class="modal" id="addRecord" tabindex="-1" role="dialog" aria-labelledby="titleModalLabel" aria-hidden="true">
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
                                    <input type="date" id="addfrom" name="addfrom" required="" autocomplete="off">
                                    <label for="addfrom">FROM</label>
                                </div>
                                <div class="inputGroup">
                                    <input type="date" id="addto" name="addto" required="" autocomplete="off">
                                    <label for="addto">TO</label>
                                </div>
                                <div class="inputGroup">
                                    <input type="text" id="addposition" name="addposition" required="" autocomplete="off" class="focus-valid">
                                    <label for="addposition" class="focus-valid">POSITION</label>
                                </div>
                                <div class="inputGroup">
                                    <input type="text" id="addoffice" name="addoffice" required="" autocomplete="off">
                                    <label for="addoffice">OFFICE</label>
                                </div>
                                <div class="inputGroup">
                                    <input type="number" id="addmonthly" name="addmonthly" required="" autocomplete="off">
                                    <label for="addmonthly">MONTHLY SALARY</label>
                                </div>
                                <div class="inputGroup">
                                    <input type="text" id="addsalary" name="addsalary" required="" autocomplete="off">
                                    <label for="addsalary">SALARY GRADE</label>
                                </div>
                                <div class="inputGroup">
                                    <input type="text" id="addstatus" name="addstatus" required="" autocomplete="off">
                                    <label for="addstatus">APPOINTMENT STATUS</label>
                                </div>
                                <div class="inputGroup">
                                    <input type="text" id="addservice" name="addservice" required="" autocomplete="off">
                                    <label for="addservice">GOVERNMENT SERVICE</label>
                                </div>
                                <div class="modal-footer justify-content-center">
                                    <button type="submit" id="savebtn" name="savebtn" class="btn btn-primary custom-btn">SAVE</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <?php
            // Add function
            if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['savebtn'])) {

                // Get form data and sanitize
                $addfrom = $_POST['addfrom'];
                $addto = $_POST['addto'];
                $addposition = $_POST['addposition'];
                $addoffice = $_POST['addoffice'];
                $addmonthly = $_POST['addmonthly'];
                $addsalary = $_POST['addsalary'];
                $addstatus = $_POST['addstatus'];
                $addservice = $_POST['addservice'];

                // Prepare the insert query
                $sql = "INSERT INTO workexperiencetbl (idno, userid, datefrom, dateto, positiontitle, office, monthlysalary, salarygrade, statusofappointment, governmentservice) 
                VALUES (NULL, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

                // Prepare statement
                if ($stmt = mysqli_prepare($conn, $sql)) {
                    // Bind variables to the prepared statement as parameters
                    mysqli_stmt_bind_param($stmt, "issssssss", $userId, $addfrom, $addto, $addposition, $addoffice, $addmonthly, $addsalary, $addstatus, $addservice);

                    // Execute the statement
                    if (mysqli_stmt_execute($stmt)) {
                        echo "<script>alert('NEW RECORD ADDED'); window.location.href = 'WorkExperience.php';</script>";
                    } else {
                        echo "Error: " . mysqli_stmt_error($stmt);
                    }

                    // Close statement
                    mysqli_stmt_close($stmt);
                } else {
                    echo "Error: " . mysqli_error($conn);
                }

                // Close database connection
                mysqli_close($conn);
            }
            ?>

            <div class="modal fade" id="editRecord" tabindex="-1" role="dialog" aria-labelledby="titleModalLabel" aria-hidden="true">
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
                                    <input type="date" id="editfrom" name="editfrom" required="" autocomplete="off">
                                    <label for="editfrom">FROM</label>
                                </div>
                                <div class="inputGroup">
                                    <input type="date" id="editto" name="editto" required="" autocomplete="off">
                                    <label for="editto">TO</label>
                                </div>
                                <div class="inputGroup">
                                    <input type="text" id="editposition" name="editposition" required="" autocomplete="off" class="focus-valid">
                                    <label for="editposition" class="focus-valid">POSITION</label>
                                </div>
                                <div class="inputGroup">
                                    <input type="text" id="editoffice" name="editoffice" required="" autocomplete="off">
                                    <label for="editoffice">OFFICE</label>
                                </div>
                                <div class="inputGroup">
                                    <input type="number" id="editmonthly" name="editmonthly" required="" autocomplete="off">
                                    <label for="editmonthly">MONTHLY SALARY</label>
                                </div>
                                <div class="inputGroup">
                                    <input type="text" id="editsalary" name="editsalary" required="" autocomplete="off">
                                    <label for="editsalary">SALARY GRADE</label>
                                </div>
                                <div class="inputGroup">
                                    <input type="text" id="editstatus" name="editstatus" required="" autocomplete="off">
                                    <label for="editstatus">APPOINTMENT STATUS</label>
                                </div>
                                <div class="inputGroup">
                                    <input type="text" id="editservice" name="editservice" required="" autocomplete="off">
                                    <label for="editservice">GOVERNMENT SERVICE</label>
                                </div>
                                <input type="hidden" id="editidno" name="editidno">
                                <div class="modal-footer justify-content-center">
                                    <button type="submit" id="updatebtn" name="updatebtn" class="btn btn-primary custom-btn">UPDATE</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <?php
            // Assuming you have already established a database connection

            // Check if the form is submitted
            if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['updatebtn'])) {
                // Retrieve form data
                $idno = $_POST['editidno'];
                $editfrom = $_POST['editfrom'];
                $editto = $_POST['editto'];
                $editposition = $_POST['editposition'];
                $editoffice = $_POST['editoffice'];
                $editmonthly = $_POST['editmonthly'];
                $editsalary = $_POST['editsalary'];
                $editstatus = $_POST['editstatus'];
                $editservice = $_POST['editservice'];

                // SQL update query with prepared statement
                $sql = "UPDATE workexperiencetbl SET datefrom = ?, dateto = ?, positiontitle = ?, office = ?, monthlysalary = ?, salarygrade = ?, statusofappointment = ?,
          governmentservice = ? WHERE idno = ?";

                // Prepare the statement
                $stmt = mysqli_prepare($conn, $sql);

                // Bind parameters
                mysqli_stmt_bind_param($stmt, "ssssssssi", $editfrom, $editto, $editposition, $editoffice, $editmonthly, $editsalary, $editstatus, $editservice, $idno);

                // Execute the update query
                if (mysqli_stmt_execute($stmt)) {
                    echo "<script>alert('RECORD UPDATED'); window.location.href = 'WorkExperience.php';</script>";
                } else {
                    echo "Error updating record: " . mysqli_error($conn);
                }

                // Close the statement
                mysqli_stmt_close($stmt);
            }

            // Close the database connection
            mysqli_close($conn);
            ?>
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>


    <script>
        $(document).ready(function() {
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
            addModal.addEventListener('hidden.bs.modal', function() {
                document.getElementById('addfrom').value = '';
                document.getElementById('addto').value = '';
                document.getElementById('addposition').value = '';
                document.getElementById('addoffice').value = '';
                document.getElementById('addmonthly').value = '';
                document.getElementById('addsalary').value = '';
                document.getElementById('addstatus').value = '';
                document.getElementById('addservice').value = '';
            });


            // Clearing the fields of editRecord modal when closed
            var editModal = document.getElementById('editRecord');
            editModal.addEventListener('hidden.bs.modal', function() {
                document.getElementById('editfrom').value = '';
                document.getElementById('editto').value = '';
                document.getElementById('editposition').value = '';
                document.getElementById('editoffice').value = '';
                document.getElementById('editmonthly').value = '';
                document.getElementById('editsalary').value = '';
                document.getElementById('editstatus').value = '';
                document.getElementById('editservice').value = '';
            });

            // Sort the data table Datefrom ASC
            $('#example').dataTable({
                searching: false,
                bLengthChange: false,
                autoWidth: false,
                responsive: true // Add this line to enable responsive mode


            });

            // Populate the edit fields
            $('#example').on('click', 'button[name="editRecord"]', function() {
                var idno = $(this).data('idno');
                var rowData = $('#example').DataTable().row($(this).closest('tr')).data();
                $('#editfrom').val(rowData[0]);
                $('#editto').val(rowData[1]);
                $('#editposition').val(rowData[2]);
                $('#editoffice').val(rowData[3]);
                $('#editmonthly').val(rowData[4]);
                $('#editsalary').val(rowData[5]);
                $('#editstatus').val(rowData[6]);
                $('#editservice').val(rowData[7]);
                $('#editidno').val(idno);
                $('#editRecord').modal('show');
            });
        });

    </script>



</body>

</html>