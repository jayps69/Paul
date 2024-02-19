<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Skills & Hobbies</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="Eligibility.css">
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
                <h1>Skills & Hobbies</h1>

                <button class="addRecord" name="addRecord" data-bs-toggle="modal" data-bs-target="#addRecord">ADD
                    RECORD</button>

            </div>


            <table id="example" class="table table-hover table-striped">
                <thead>
                    <tr>

                        <th scope="col">SKILLS & HOBBIES</th>
                        <th scope="col">EDIT</th>
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
                                    <input type="text" id="addskills" name="addskills" required="" autocomplete="off">
                                    <label for="addskills">SKILLS & HOBBIES</label>
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
                $addskills = $_POST['addskills'];


                // Prepare the insert query
                $sql = "INSERT INTO skillstbl (idno, userid, skills) 
                VALUES (NULL, ?, ?)";

                // Prepare statement
                if ($stmt = mysqli_prepare($conn, $sql)) {
                    // Bind variables to the prepared statement as parameters
                    mysqli_stmt_bind_param($stmt, "is", $userId, $addskills);

                    // Execute the statement
                    if (mysqli_stmt_execute($stmt)) {
                        echo "<script>alert('NEW RECORD ADDED'); window.location.href = 'SkillsAndHobbies.php';</script>";
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
                                    <input type="text" id="editskills" name="editskills" required="" autocomplete="off">
                                    <label for="editskills">SKILLS</label>
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
                $editskills = $_POST['editskills'];
                // SQL update query with prepared statement
                $sql = "UPDATE skillstbl SET skills = ? WHERE idno = ?";

                // Prepare the statement
                $stmt = mysqli_prepare($conn, $sql);

                // Bind parameters
                mysqli_stmt_bind_param($stmt, "si", $editskills, $idno);

                // Execute the update query
                if (mysqli_stmt_execute($stmt)) {
                    echo "<script>alert('RECORD UPDATED'); window.location.href = 'SkillsAndHobbies.php';</script>";
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
                document.getElementById('addskills').value = '';
            });


            // Clearing the fields of editRecord modal when closed
            var editModal = document.getElementById('editRecord');
            editModal.addEventListener('hidden.bs.modal', function() {
                document.getElementById('editskills').value = '';
            });

            // Sort the data table Datefrom ASC
            $('#example').dataTable({
                searching: false,
                bLengthChange: false,
                autoWidth: false,
                responsive: true // Add this line to enable responsive mode


            });
            //edit isang line
            // Populate the edit fields
            $('#example').on('click', 'button[name="editRecord"]', function() {
                var idno = $(this).data('idno');
                var rowData = $('#example').DataTable().row($(this).closest('tr')).data();
                $('#editskills').val(rowData[0]);
                $('#editidno').val(idno);
                $('#editRecord').modal('show');
            });
        });

    </script>



</body>

</html>