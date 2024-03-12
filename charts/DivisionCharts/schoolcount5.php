<?php
include("../../connection.php");

// Query to count schools for each category
$sql = "SELECT 
            SUM(CASE WHEN schoolname LIKE '%Elementary%' THEN 1 ELSE 0 END) AS elementary_count,
            SUM(CASE WHEN schoolname LIKE '%high school%' THEN 1 ELSE 0 END) AS high_school_count,
            SUM(CASE WHEN schoolname LIKE '%shs%' THEN 1 ELSE 0 END) AS shs_count
        FROM schooltbl
        WHERE `district` = 5";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Fetch the counts
    $row = $result->fetch_assoc();
    
    // Store counts in variables and cast them to integers
    $elementaryCount = (int)$row['elementary_count'];
    $highSchoolCount = (int)$row['high_school_count'];
    $shsCount = (int)$row['shs_count'];

    // Output data as JSON
    $data = [
        ['label' => 'ELEMENTARY', 'value' => $elementaryCount],
        ['label' => 'HIGH SCHOOL', 'value' => $highSchoolCount],
        ['label' => 'SHS', 'value' => $shsCount]
    ];
    echo json_encode($data);
} else {
    echo "0 results";
}

// Close connection
$conn->close();
?>
