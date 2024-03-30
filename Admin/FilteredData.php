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
    <title>FilteredData</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.0/css/dataTables.bootstrap5.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/3.0.0/css/responsive.bootstrap5.css">
    <link rel="stylesheet" href="../Datatables.css">
</head>
<body>
    <div id="wrapper">
        <!-- Sidebar -->
        <?php include '../Templates/adminsidebar.php'; ?>

        <div id="content">
            <?php include '../Templates/adminheader.php'; ?>

            <div class="AddButton">
                <h1>Filtered Data</h1>
            </div>

            <table id="example" class="table table-striped nowrap" style="width:100%;">
                <thead>
                    <tr>
                        <th>Employee No</th>
                        <th>Full Name</th>
                        <th>School District</th>
                        <th>School Name</th>
                        <th>Present Position</th>
                        <th>Gender</th>
                        <th>First Day of Service</th>
                        <th>Specialization</th>
                    </tr>
                </thead>
                <tbody></tbody>
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
                    { "data": "employeeno" },
                    { 
                        "data": "fullname",
                        "render": function(data, type, row, meta) {
                            if (type === 'display') {
                                data = '<a href="EmployeeDetails.php?id=' + row.userid + '">' + data + '</a>'; // Replace 'link_to_your_page' with the actual URL
                            }
                            return data;
                        }
                    },
                    { "data": "schooldistrict" },
                    { "data": "schoolname" },
                    { "data": "presentposition" },
                    { "data": "gender" },
                    { "data": "firstdayofservice" },
                    { "data": "specialization" }
                ],
                responsive: {
            details: {
                display: $.fn.dataTable.Responsive.display.modal({
                    header: function(row) {
                        var data = row.data();
                        return 'Details of ' + data.fullname;
                    }
                }),
                renderer: $.fn.dataTable.Responsive.renderer.tableAll({
                    tableClass: 'table'
                }),
            }
        },
                "order": [
                    [1, 'asc'] // Sort by the second column (fullname) in ascending order
                ]
            });
        
    });
    </script>
</body>
</html>
