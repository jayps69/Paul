<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Data</title>
    <!-- Include DataTables CSS -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
</head>
<body>

<?php
include("../connection.php");

// Initialize WHERE clause
$whereClause = "";

// Check if any dropdown value is selected
if(isset($_POST['level']) && $_POST['level'] != 'ALL') {
    $whereClause .= " level = '" . $_POST['level'] . "' AND";
}

if(isset($_POST['district']) && $_POST['district'] != 'ALL') {
    $whereClause .= " schooldistrict = '" . $_POST['district'] . "' AND";
}

if(isset($_POST['school']) && $_POST['school'] != '') {
    $whereClause .= " schoolname = '" . $_POST['school'] . "' AND";
}

if(isset($_POST['position']) && $_POST['position'] != 'ALL') {
    $whereClause .= " presentposition = '" . $_POST['position'] . "' AND";
}

if(isset($_POST['appstat']) && $_POST['appstat'] != 'ALL') {
    $whereClause .= " statusofappointment = '" . $_POST['appstat'] . "' AND";
}

if(isset($_POST['specialization']) && $_POST['specialization'] != '') {
    $whereClause .= " specialization = '" . $_POST['specialization'] . "' AND";
}

if(isset($_POST['empstat'])) {
    $whereClause .= " employmentstatus = '" . $_POST['empstat'] . "' AND";
}

// Remove the trailing "AND" from the WHERE clause
$whereClause = rtrim($whereClause, " AND");

// Perform the query with WHERE clause
$query = "SELECT employeeno, CONCAT(firstname, ', ', lastname) AS fullname, schooldistrict, schoolname, presentposition, gender, firstdayofservice, specialization FROM personalinfotbl";
if($whereClause != "") {
    $query .= " WHERE" . $whereClause;
}

// Add ORDER BY clause to sort by full name in ascending order
$query .= " ORDER BY fullname ASC";

// Echo the query for debugging
echo "Query: " . $query . "<br>";

$result = mysqli_query($conn, $query);

// Check if the query was successful
if ($result) {
    // Check if there are any rows returned
    if(mysqli_num_rows($result) > 0) {
        // Start table
        echo "<table id='employeeTable' border='1'>";
        echo "<thead><tr><th>Employee No</th><th>Name</th><th>School District</th><th>School Name</th><th>Present Position</th><th>Gender</th><th>First Day of Service</th><th>Specialization</th></tr></thead><tbody>";
        
        // Loop through the results and create table rows
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $row['employeeno'] . "</td>";
            echo "<td>" . $row['fullname'] . "</td>";
            echo "<td>" . $row['schooldistrict'] . "</td>";
            echo "<td>" . $row['schoolname'] . "</td>";
            echo "<td>" . $row['presentposition'] . "</td>";
            echo "<td>" . $row['gender'] . "</td>";
            echo "<td>" . $row['firstdayofservice'] . "</td>";
            echo "<td>" . $row['specialization'] . "</td>";
            echo "</tr>";
        }
        
        // End table body and table
        echo "</tbody></table>";
        
        // Free result set
        mysqli_free_result($result);
    } else {
        // If no rows are returned, display a message
        echo "No results found.";
    }
} else {
    // If the query fails, display an error message
    echo "Error executing query: " . mysqli_error($conn);
}

?>

<!-- Include jQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<!-- Include DataTables JavaScript -->
<script type="text/javascript" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>

<script>
    $(document).ready(function() {
        // Initialize DataTable
        $('#employeeTable').DataTable();
    });
</script>
</body>
</html>
