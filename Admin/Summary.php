<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Summary</title>
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
                <h1>SUMMARY</h1>
            </div>

            <table id="example" class="table table-striped nowrap" style="width:100%;">
                <thead>
                    <tr>
                        <th scope="col">SCHOOL</th>
                        <th scope="col">TOTAL TEACHERS REGISTERED</th>
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
        var table = $('#example').DataTable({
            columns: [{
                    data: 'schoolname',
                    render: function(data, type, row) {
                        // Render the school name as a clickable link
                        if (type === 'display' && row.schoolname) {
                            return '<a href="getinfo/getregisteredteachers.php?schoolname=' +
                                encodeURIComponent(row.schoolname) + '">' + row.schoolname +
                                '</a>';
                        }
                        return data;
                    }
                },
                {
                    data: 'Registered_Users'
                }
            ],
            bLengthChange: false,
            deferRender: true,
            ordering: false, // Disabling sorting
            responsive: true // Making the table responsive
        });

        // Fetch data using AJAX
        $.ajax({
            url: 'getinfo/getschool.php', // Correct URL for fetching data
            dataType: 'json',
            success: function(data) {
                if (data && data.length > 0) {
                    table.clear().rows.add(data).draw();
                } else {
                    console.error("No data returned from the server");
                    // You can show an alert or handle the absence of data in any appropriate way here
                }
            },
            error: function(xhr, status, error) {
                console.error("An error occurred while fetching data:", status, error);
                // You can show an alert or handle the error in any appropriate way here
            }
        });
    });
    </script>
</body>

</html>