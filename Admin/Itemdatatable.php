<?php
include("../connection.php");

// Query to retrieve data from your database
$query = "SELECT `itemnopinagtibay`, CONCAT(`lastname`, ', ', `firstname`) AS `full_name`, `presentposition`, `firstdayofservice`, `schooldistrict`, `schoolname`
FROM `personalinfotbl`";

$result = $conn->query($query);

// Check if there are any results
if ($result->num_rows > 0) {
    // Initialize an empty array to store data
    $data = array();

    // Fetch data from each row and store it in the array
    while($row = $result->fetch_assoc()) {
        $data[] = $row;
    }

    // Encode the data array into JSON format
    $json_data = json_encode($data);

    // Close the database connection
    $conn->close();

    // Output the JSON data
    echo $json_data;
} else {
    echo "No data found";
}

?>