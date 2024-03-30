<?php
// Include the database connection
include("../../connection.php");

// Check if the school name is provided in the URL parameter
if(isset($_GET['schoolname'])) {
    // Sanitize the input to prevent SQL injection
    $schoolname = $conn->real_escape_string($_GET['schoolname']);

    // Construct the SQL query
    $query = "SELECT `userid`,`itemnopinagtibay`, CONCAT(`lastname`, ', ', `firstname`) AS `full_name`, `presentposition`, `gender`, `schoolname`
                    FROM `personalinfotbl` WHERE schoolname = '$schoolname'";

    // Execute the query
    $result = $conn->query($query);

    // Check if there are any errors in the query execution
    if (!$result) {
        die("Error in query execution: " . $conn->error);
    }

    // Initialize an empty array to store the results
    $teachers = array();

    // Fetch the results and store them in the array
    while($row = $result->fetch_assoc()) {
        // Clean up data to ensure it contains valid UTF-8 characters
        foreach ($row as $key => $value) {
            $row[$key] = mb_convert_encoding($value, 'UTF-8', 'UTF-8');
        }
        $teachers[] = $row;
    }

    

    // Encode the results into JSON format
    $json_data = json_encode($teachers, JSON_UNESCAPED_UNICODE);

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
    header("Location: ../RegisteredTeachers.php");
    exit; // Stop further execution
}






?>
