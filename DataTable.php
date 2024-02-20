<?php
session_start();


?>
<html lang="en">
    

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Page Title</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/2.0.0/css/dataTables.bootstrap5.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/responsive/3.0.0/css/responsive.bootstrap5.css">
</head>
<?php
            include 'Templates/header.php'
                ?>

<body>

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
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.datatables.net/2.0.0/js/dataTables.js"></script>
  <script src="https://cdn.datatables.net/2.0.0/js/dataTables.bootstrap5.js"></script>
  <script src="https://cdn.datatables.net/responsive/3.0.0/js/dataTables.responsive.js"></script>
  <script src="https://cdn.datatables.net/responsive/3.0.0/js/responsive.bootstrap5.js"></script>
  
  <script>
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
            })
        }
    }
});

  </script>
</body>

</html>