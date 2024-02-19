<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Trainings</title>
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
        .longlabel{
            font-size: 11px !important;
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
                <h1>Trainings</h1>

                <button class="addRecord" name="addRecord" data-bs-toggle="modal" data-bs-target="#addRecord">ADD
                    RECORD</button>

            </div>


            <table id="example" class="table table-hover table-striped">
                <thead>
                    <tr>

                        <th scope="col">TITLE</th>
                        <th scope="col">FROM</th>
                        <th scope="col">TO</th>
                        <th scope="col">NO. OF HOURS</th>
                        <th scope="col">TYPE OF LEARNING AND DEVELOPMENT</th>
                        <th scope="col">CONDUCTED OR SPONSORED BY</th>
                        <th scope="col">EDIT</th>
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
                                    <input type="text" id="addtitle" name="addtitle" required="" autocomplete="off">
                                    <label for="addtitle">TITLE</label>
                                </div>
                                <div class="inputGroup">
                                    <input type="date" id="addfrom" name="addfrom" required="" autocomplete="off">
                                    <label for="addfrom">FROM</label>
                                </div>
                                <div class="inputGroup">
                                    <input type="date" id="addto" name="addto" required="" autocomplete="off" class="focus-valid">
                                    <label for="addto" class="focus-valid">TO</label>
                                </div>
                                <div class="inputGroup">
                                    <input type="number" id="addnohr" name="addnohr" required="" autocomplete="off">
                                    <label for="addnohr">NO. OF HOUR</label>
                                </div>
                                <div class="inputGroup">
                                    <input type="text" id="addtypeld" name="addtypeld" required="" autocomplete="off">
                                    <label for="addtypeld" class="longlabel">TYPE OF LEARNING AND DEVELOPMENT</label>
                                </div>
                                <div class="inputGroup">
                                    <input type="text" id="addconducted" name="addconducted" required="" autocomplete="off">
                                    <label for="adddov" class="longlabel">CONDUCTED OR SPONSORED BY</label>
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
                $addtitle = $_POST['addtitle'];
                $addfrom = $_POST['addfrom'];
                $addto = $_POST['addto'];
                $addnohr = $_POST['addnohr'];
                $addtypeld = $_POST['addtypeld'];
                $addconducted = $_POST['addconducted'];

                // Prepare the insert query
                $sql = "INSERT INTO trainingtbl (idno, userid, title, datefrom, dateto, numbersofhour , typeofld, conducted) 
                VALUES (NULL, ?, ?, ?, ?, ?, ?, ?)";

                // Prepare statement
                if ($stmt = mysqli_prepare($conn, $sql)) {
                    // Bind variables to the prepared statement as parameters
                    mysqli_stmt_bind_param($stmt, "issssss", $userId, $addtitle, $addfrom, $addto, $addnohr, $addtypeld, $addconducted);

                    // Execute the statement
                    if (mysqli_stmt_execute($stmt)) {
                        echo "<script>alert('NEW RECORD ADDED'); window.location.href = 'Trainings.php';</script>";
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
                                    <input type="text" id="edittitle" name="edittitle" required="" autocomplete="off">
                                    <label for="edittitle">TITLE</label>
                                </div>
                                <div class="inputGroup">
                                    <input type="date" id="editfrom" name="editfrom" required="" autocomplete="off">
                                    <label for="editfrom">FROM</label>
                                </div>
                                <div class="inputGroup">
                                    <input type="date" id="editto" name="editto" required="" autocomplete="off" class="focus-valid">
                                    <label for="editto" class="focus-valid">TO</label>
                                </div>
                                <div class="inputGroup">
                                    <input type="number" id="editnohr" name="editnohr" required="" autocomplete="off">
                                    <label for="editnohr">NO. OF HOURS</label>
                                </div>
                                <div class="inputGroup">
                                    <input type="text" id="edittypeld" name="edittypeld" required="" autocomplete="off">
                                    <label for="edittypeld" class="longlabel">TYPE OF LEARNING AND DEVELOPMENT</label>
                                </div>
                                <div class="inputGroup">
                                    <input type="text" id="editconducted" name="editconducted" required="" autocomplete="off">
                                    <label for="editconducted" class="longlabel">CONDUCTED OR SPONSORED BY</label>
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
                $edittitle = $_POST['edittitle'];
                $editfrom = $_POST['editfrom'];
                $editto = $_POST['editto'];
                $editnohr = $_POST['editnohr'];
                $edittypeld = $_POST['edittypeld'];
                $editconducted = $_POST['editconducted'];

                // SQL update query with prepared statement
                $sql = "UPDATE trainingtbl SET title = ?, datefrom = ?, dateto = ?, numbersofhour = ?, typeofld = ?, conducted = ? WHERE idno = ?";

                // Prepare the statement
                $stmt = mysqli_prepare($conn, $sql);

                // Bind parameters
                mysqli_stmt_bind_param($stmt, "ssssssi", $edittitle, $editfrom, $editto, $editnohr, $edittypeld, $editconducted, $idno);

                // Execute the update query
                if (mysqli_stmt_execute($stmt)) {
                    echo "<script>alert('RECORD UPDATED'); window.location.href = 'Trainings.php';</script>";
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
                document.getElementById('addtitle').value = '';
                document.getElementById('addfrom').value = '';
                document.getElementById('addto').value = '';
                document.getElementById('addnohr').value = '';
                document.getElementById('addtypeld').value = '';
                document.getElementById('addconducted').value = '';
            });


            // Clearing the fields of editRecord modal when closed
            var editModal = document.getElementById('editRecord');
            editModal.addEventListener('hidden.bs.modal', function() {
                document.getElementById('edittitle').value = '';
                document.getElementById('editfrom').value = '';
                document.getElementById('editto').value = '';
                document.getElementById('editnohr').value = '';
                document.getElementById('edittypeld').value = '';
                document.getElementById('editconducted').value = '';
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
                $('#edittitle').val(rowData[0]);
                $('#editfrom').val(rowData[1]);
                $('#editto').val(rowData[2]);
                $('#editnohr').val(rowData[3]);
                $('#edittypeld').val(rowData[4]);
                $('#editconducted').val(rowData[5]);
                $('#editidno').val(idno);
                $('#editRecord').modal('show');
            });
        });

    </script>



</body>

</html>