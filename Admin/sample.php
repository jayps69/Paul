<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.0/css/dataTables.bootstrap5.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/3.0.0/css/responsive.bootstrap5.css">

</head>
<body>
<?php
            include '../Templates/adminheader.php';
                ?>
<table id="example1" class="table table-striped nowrap" style="width:100%;" >
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


                <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
      
    <script src="https://cdn.datatables.net/2.0.0/js/dataTables.js"></script>
    <script src="https://cdn.datatables.net/2.0.0/js/dataTables.bootstrap5.js"></script>
    <script src="https://cdn.datatables.net/responsive/3.0.0/js/dataTables.responsive.js"></script>
    


    <script>
    var fullname = "<?php echo $fullName; ?>";
    $(document).ready(function () {
        console.log("Document is ready."); // Log that document is ready
        $('#example1').DataTable({
            searching: false,
            bLengthChange: false,
            responsive: {
                details: {
                    display: DataTable.Responsive.display.modal({
                        header: function (row) {
                            console.log("Header function is called."); // Log that header function is called
                            var data = row.data();
                            console.log("Full name:", fullname); // Log the value of fullname
                            return 'Education of ' + fullname; // Display the full name
                        }
                    }),
                    renderer: DataTable.Responsive.renderer.tableAll({
                        tableClass: 'table'
                    })
                }
            },
            order: [[3, 'asc']]
        });
    });
</script>


</body>


</html>