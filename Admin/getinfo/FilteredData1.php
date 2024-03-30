<?php
ob_start(); // Start output buffering

include("../../connection.php");

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
$query = "SELECT userid, employeeno, CONCAT(firstname, ', ', lastname) AS fullname, schooldistrict, schoolname, presentposition, gender, firstdayofservice, specialization FROM personalinfotbl";
if($whereClause != "") {
    $query .= " WHERE" . $whereClause;
}

// Add ORDER BY clause to sort by full name in ascending order
$query .= " ORDER BY fullname ASC";

// Execute the query
$result = $conn->query($query);

// Check if there are any errors in the query execution
if (!$result) {
    die("Error in query execution: " . $conn->error);
}

// Check if there are any results
if ($result->num_rows > 0) {
    // Initialize an empty array to store data
    $data = array();

    // Fetch data from each row and store it in the array
    while($row = $result->fetch_assoc()) {
        // Clean up data to ensure it contains valid UTF-8 characters
        foreach ($row as $key => $value) {
            $row[$key] = mb_convert_encoding($value, 'UTF-8', 'UTF-8');
        }
        $data[] = $row;
    }

    // Output the JSON data
    $json_data = json_encode($data, JSON_UNESCAPED_UNICODE);

    // Check if there are any errors in JSON encoding
    $json_error = json_last_error();
    if ($json_error !== JSON_ERROR_NONE) {
        die("Error encoding data into JSON format: " . json_last_error_msg());
    }

    // Start a session to store the filtered data
    session_start();

    // Store the JSON data in a session variable
    $_SESSION['filtered_data'] = $json_data;

    // Redirect to sample2.php using POST method
    header("Location: ../FilteredData.php");
    exit; // Stop further execution
}

// If there are no results, display an alert and redirect using JavaScript
echo "<script>alert('No data found'); window.location.href = 'FilterData.php';</script>";
exit; // Stop further execution




?>
