<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Eligibility</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/2.0.0/css/dataTables.bootstrap5.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/responsive/3.0.0/css/responsive.bootstrap5.css">
  <link rel="stylesheet" href="Datatables.css">

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
        <h1>Eligibility</h1>

        <button class="addRecord" name="addRecord" data-bs-toggle="modal" data-bs-target="#addRecord">ADD
          RECORD</button>

      </div>


      <table id="example" class="table table-striped nowrap" style="width:100%">
        <thead>
          <tr>

            <th scope="col">TITLE</th>
            <th scope="col">RATING</th>
            <th scope="col">DATE OF EXAMINATION</th>
            <th scope="col">PLACE OF EXAMINATION</th>
            <th scope="col">LICENSE NO.</th>
            <th scope="col">DATE OF VALIDITY</th>
            <th scope="col">EDIT</th>
          </tr>
        </thead>
        <tbody>
          <?php
          // Display educationtbl to data table
          $query = "SELECT idno, title, rating, dateofexamination, placeofexamination, licensenumber, dateofvalidity FROM eligibilitytbl WHERE userid = $userId";
          $result = mysqli_query($conn, $query);
          if ($result) {
            if (mysqli_num_rows($result) > 0) {

              while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>" . $row['title'] . "</td>";
                echo "<td>" . $row['rating'] . "</td>";
                echo "<td>" . $row['dateofexamination'] . "</td>";
                echo "<td>" . $row['placeofexamination'] . "</td>";
                echo "<td>" . $row['licensenumber'] . "</td>";
                echo "<td>" . $row['dateofvalidity'] . "</td>";
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
                  <input type="text" id="addtitle" name="addtitle" required="" autocomplete="off">
                  <label for="addtitle">TITLE</label>
                </div>
                <div class="inputGroup">
                  <input type="text" id="addrating" name="addrating" required="" autocomplete="off">
                  <label for="addrating">RATING</label>
                </div>
                <div class="inputGroup">
                  <input type="date" id="adddoe" name="adddoe" required="" autocomplete="off" class="focus-valid">
                  <label for="adddoe" class="focus-valid">DATE OF EXAM</label>
                </div>
                <div class="inputGroup">
                  <input type="text" id="addpoe" name="addpoe" required="" autocomplete="off">
                  <label for="addpoe">PLACE OF EXAM</label>
                </div>
                <div class="inputGroup">
                  <input type="text" id="addlicensenumber" name="addlicensenumber" required="" autocomplete="off">
                  <label for="addlicensenumber">LICENSE NO.</label>
                </div>
                <div class="inputGroup">
                  <input type="text" id="adddov" name="adddov" required="" autocomplete="off">
                  <label for="adddov">DATE OF VALIDITY</label>
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
        $addrating = $_POST['addrating'];
        $adddoe = $_POST['adddoe'];
        $addpoe = $_POST['addpoe'];
        $addlicensenumber = $_POST['addlicensenumber'];
        $adddov = $_POST['adddov'];

        // Prepare the insert query
        $sql = "INSERT INTO eligibilitytbl (idno, userid, title, rating, dateofexamination, placeofexamination , licensenumber, dateofvalidity) 
                VALUES (NULL, ?, ?, ?, ?, ?, ?, ?)";

        // Prepare statement
        if ($stmt = mysqli_prepare($conn, $sql)) {
          // Bind variables to the prepared statement as parameters
          mysqli_stmt_bind_param($stmt, "issssss", $userId, $addtitle, $addrating, $adddoe, $addpoe, $addlicensenumber, $adddov);

          // Execute the statement
          if (mysqli_stmt_execute($stmt)) {
            echo "<script>alert('NEW RECORD ADDED'); window.location.href = 'Eligibility.php';</script>";
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
                  <input type="text" id="edittitle" name="edittitle" required="" autocomplete="off">
                  <label for="edittitle">TITLE</label>
                </div>
                <div class="inputGroup">
                  <input type="text" id="editrating" name="editrating" required="" autocomplete="off">
                  <label for="editrating">RATING</label>
                </div>
                <div class="inputGroup">
                  <input type="date" id="editdoe" name="editdoe" required="" autocomplete="off" class="focus-valid">
                  <label for="editdoe" class="focus-valid">DATE OF EXAM</label>
                </div>
                <div class="inputGroup">
                  <input type="text" id="editpoe" name="editpoe" required="" autocomplete="off">
                  <label for="editpoe">PLACE OF EXAM</label>
                </div>
                <div class="inputGroup">
                  <input type="text" id="editlicensenumber" name="editlicensenumber" required="" autocomplete="off">
                  <label for="editlicensenumber">LICENSE NO.</label>
                </div>
                <div class="inputGroup">
                  <input type="text" id="editdov" name="editdov" required="" autocomplete="off">
                  <label for="editdov">DATE OF VALIDITY</label>
                </div>
                <input type="hidden" id="editidno" name="editidno">
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
      // Assuming you have already established a database connection
      
      // Check if the form is submitted
      if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['updatebtn'])) {
        // Retrieve form data
        $idno = $_POST['editidno'];
        $edittitle = $_POST['edittitle'];
        $editrating = $_POST['editrating'];
        $editdoe = $_POST['editdoe'];
        $editpoe = $_POST['editpoe'];
        $editlicensenumber = $_POST['editlicensenumber'];
        $editdov = $_POST['editdov'];

        // SQL update query with prepared statement
        $sql = "UPDATE eligibilitytbl SET title = ?, rating = ?, dateofexamination = ?, placeofexamination = ?, licensenumber = ?,dateofvalidity = ? WHERE idno = ?";

        // Prepare the statement
        $stmt = mysqli_prepare($conn, $sql);

        // Bind parameters
        mysqli_stmt_bind_param($stmt, "ssssssi", $edittitle, $editrating, $editdoe, $editpoe, $editlicensenumber, $editdov, $idno);

        // Execute the update query
        if (mysqli_stmt_execute($stmt)) {
          echo "<script>alert('RECORD UPDATED'); window.location.href = 'Eligibility.php';</script>";
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
        document.getElementById('addtitle').value = '';
        document.getElementById('addrating').value = '';
        document.getElementById('adddoe').value = '';
        document.getElementById('addpoe').value = '';
        document.getElementById('addlicensenumber').value = '';
        document.getElementById('adddov').value = '';
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
                return 'Eligibility of ' + fullname;
              }
            }),
            renderer: DataTable.Responsive.renderer.tableAll({
              tableClass: 'table'
            }),
          }
        }
      });

      // Populate the edit fields
      $('#example').on('click', 'button[name="editRecord"]', function () {
        var idno = $(this).data('idno');
        var rowData = $('#example').DataTable().row($(this).closest('tr')).data();
        $('#edittitle').val(rowData[0]);
        $('#editrating').val(rowData[1]);
        $('#editdoe').val(rowData[2]);
        $('#editpoe').val(rowData[3]);
        $('#editlicensenumber').val(rowData[4]);
        $('#editdov').val(rowData[5]);
        $('#editidno').val(idno);
        $('#editRecord').modal('show');
      });
      $(document).on('click', '.modal button[name="editRecord"]', function () {

        var idno = $(this).data('idno');
        // Retrieve data from the closest table row inside the modal and map it to an array
        var rowData = $(this).closest('.modal').find('tr').find('td').map(function () {
          return $(this).text();
        }).get();

        // Populate the fields in the edit modal with the retrieved data
        $('#edittitle').val(rowData[1]);
        $('#editrating').val(rowData[3]);
        $('#editdoe').val(rowData[5]);
        $('#editpoe').val(rowData[7]);
        $('#editlicensenumber').val(rowData[9]);
        $('#editdov').val(rowData[11]);
        $('#editidno').val(idno);
        $('#editRecord').modal('show');

        // Show the edit modal
        $('#editRecord').modal('show');
      });

    });

  </script>



</body>

</html>