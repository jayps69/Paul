

<?php
include("../connection.php");


// Query to retrieve data from your database
$query = "SELECT userid, employeeno, CONCAT(lastname, ', ', firstname) AS fullname, schooldistrict, schoolname, presentposition, birthday, age 
FROM personalinfotbl 
WHERE age >= 59";

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

    // Encode the data array into JSON format
    $json_data = json_encode($data, JSON_UNESCAPED_UNICODE);

    // Check if there are any errors in JSON encoding
    $json_error = json_last_error();
    if ($json_error !== JSON_ERROR_NONE) {
        die("Error encoding data into JSON format: " . json_last_error_msg());
    }

    // Close the database connection
    $conn->close();

    // Output the JSON data
    echo $json_data;
} else {
    echo "No data found";
}

?>
