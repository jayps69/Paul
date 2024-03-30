<?php
session_start();

// Check if the filtered data is set in the session
if(isset($_SESSION['filtered_data'])) {
    // Retrieve the filtered data from the session variable
    $json_data = $_SESSION['filtered_data'];

    // Decode the JSON data
    $data = json_decode($json_data, true);

    // Check if JSON decoding was successful and $data is an array
    if (!is_array($data)) {
        // Handle the case where JSON decoding was unsuccessful or $data is not an array
        echo "Error processing data. Please try again.";
        exit; // Exit script to prevent further execution
    }
} else {
    // Handle the case where filtered data is not set in the session
    echo "Filtered data not found. Please go back and try again.";
    exit; // Exit script to prevent further execution
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Employee</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.0/css/dataTables.bootstrap5.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/3.0.0/css/responsive.bootstrap5.css">
    <link rel="stylesheet" href="../Datatables.css">

</head>

<body>
    <div id="wrapper">
        <!-- Sidebar -->
        <?php
        include '../Templates/adminsidebar.php';
        ?>

        <div id="content">
            <?php
            include '../Templates/adminheader.php'
                ?>


            <div class="AddButton">
                <h1>REGISTERED TEACHERS</h1>



            </div>


            <table id="example" class="table table-striped nowrap" style="width:100%;">
                <thead>
                    <tr>
                        <th scope="col">ITEM NO.</th>
                        <th scope="col">NAME</th>
                        <th scope="col">POSITION</th>
                        <th scope="col">SEX</th>
                        <th scope="col">SCHOOL</th>
                    </tr>
                </thead>
                <tbody>
                  
                </tbody>
            </table>









        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.datatables.net/2.0.0/js/dataTables.js"></script>
    <script src="https://cdn.datatables.net/2.0.0/js/dataTables.bootstrap5.js"></script>
    <script src="https://cdn.datatables.net/responsive/3.0.0/js/dataTables.responsive.js"></script>
    <script src="https://cdn.datatables.net/responsive/3.0.0/js/responsive.bootstrap5.js"></script>



    <script>
$(document).ready(function() {
    $('#example').DataTable({
        "data": <?php echo $json_data; ?>,
        "columns": [
            { "data": "itemnopinagtibay" },
            { 
                "data": "full_name",
                "render": function(data, type, row, meta) {
                    if (type === 'display') {
                        return '<a href="EmployeeDetails.php?id=' + row.userid + '">' + data + '</a>';
                    }
                    return data;
                }
            },
            { "data": "presentposition" },
            { "data": "gender" },
            { "data": "schoolname" }
        ],
        "bLengthChange": false,
        "deferRender": true,
        "ordering": false, // Disabling sorting
        "responsive": {
            "details": {
                "display": $.fn.dataTable.Responsive.display.modal({
                    "header": function(row) {
                        var data = row.data();
                        return 'Details of ' + data.full_name;
                    }
                }),
                "renderer": $.fn.dataTable.Responsive.renderer.tableAll({
                    "tableClass": 'table'
                }),
            }
        },
        "columnDefs": [
            { "targets": 1, "searchable": true }, // Make second column searchable
            { "targets": [0, 2, 3, 4], "searchable": false } // Disable searching for other columns
        ],
        "order": [
            [1, 'asc'] // Sort by the second column (full_name) in ascending order
        ]
    });
});
</script>











</body>

</html>