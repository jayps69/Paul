<?php
include("connection.php");
// Assuming you have database connection code included or imported here
error_reporting(E_ALL);
ini_set('display_errors', 1);
if(isset($_GET['search'])) {
    // Sanitize the search term to prevent SQL injection
    $searchTerm = mysqli_real_escape_string($conn, $_GET['search']);

    // Your SQL query to fetch data based on the search term
    $query = "SELECT `itemnopinagtibay`, CONCAT(`lastname`, ', ', `firstname`) AS `full_name`, `presentposition`, `gender`, `schoolname`
    FROM `personalinfotbl`
    WHERE `lastname` LIKE '%$searchTerm%' OR `firstname` LIKE '%$searchTerm%' OR `presentposition` LIKE '%$searchTerm%' OR `gender` LIKE '%$searchTerm%' OR `schoolname` LIKE '%$searchTerm%'";

    $result = mysqli_query($conn, $query);

    $data = array();
    if ($result && mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $data[] = $row;
        }
    }
    
    // Send JSON response
    header('Content-Type: application/json');
    echo json_encode($data);
    exit();
}
?>
