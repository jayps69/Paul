<?php
include '../../connection.php';

// Default value
$value = '1';

// Check if the request method is POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the value sent from AJAX
    $value = $_POST['value'];
}

// SQL query to fetch data based on the selected district
$sql = "SELECT 
            COUNT(CASE WHEN `presentposition` = 'T-I' AND `gender` = 'MALE' THEN 1 END) AS T_I_Male,
            COUNT(CASE WHEN `presentposition` = 'T-I' AND `gender` = 'FEMALE' THEN 1 END) AS T_I_Female,
            COUNT(CASE WHEN `presentposition` = 'T-II' AND `gender` = 'MALE' THEN 1 END) AS T_II_Male,
            COUNT(CASE WHEN `presentposition` = 'T-II' AND `gender` = 'FEMALE' THEN 1 END) AS T_II_Female,
            COUNT(CASE WHEN `presentposition` = 'T-III' AND `gender` = 'MALE' THEN 1 END) AS T_III_Male,
            COUNT(CASE WHEN `presentposition` = 'T-III' AND `gender` = 'FEMALE' THEN 1 END) AS T_III_Female,
            COUNT(CASE WHEN `presentposition` = 'MT-I' AND `gender` = 'MALE' THEN 1 END) AS MT_I_Male,
            COUNT(CASE WHEN `presentposition` = 'MT-I' AND `gender` = 'FEMALE' THEN 1 END) AS MT_I_Female,
            COUNT(CASE WHEN `presentposition` = 'MT-II' AND `gender` = 'MALE' THEN 1 END) AS MT_II_Male,
            COUNT(CASE WHEN `presentposition` = 'MT-II' AND `gender` = 'FEMALE' THEN 1 END) AS MT_II_Female,
            COUNT(CASE WHEN `presentposition` = 'SPED-T-I' AND `gender` = 'MALE' THEN 1 END) AS SPED_T_I_Male,
            COUNT(CASE WHEN `presentposition` = 'SPED-T-I' AND `gender` = 'FEMALE' THEN 1 END) AS SPED_T_I_Female,
            COUNT(CASE WHEN `presentposition` = 'SPED-T-II' AND `gender` = 'MALE' THEN 1 END) AS SPED_T_II_Male,
            COUNT(CASE WHEN `presentposition` = 'SPED-T-II' AND `gender` = 'FEMALE' THEN 1 END) AS SPED_T_II_Female,
            COUNT(CASE WHEN `presentposition` = 'SPED-T-III' AND `gender` = 'MALE' THEN 1 END) AS SPED_T_III_Male,
            COUNT(CASE WHEN `presentposition` = 'SPED-T-III' AND `gender` = 'FEMALE' THEN 1 END) AS SPED_T_III_Female,
            COUNT(CASE WHEN `presentposition` = 'SST-I' AND `gender` = 'MALE' THEN 1 END) AS SST_I_Male,
            COUNT(CASE WHEN `presentposition` = 'SST-I' AND `gender` = 'FEMALE' THEN 1 END) AS SST_I_Female
        FROM 
            personalinfotbl
        WHERE 
            `schooldistrict` = '$value' 
            AND `employmentstatus` = 'ACTIVE' 
            AND `level` ='SHS'";

// Execute the SQL query
$result = $conn->query($sql);

// Prepare data array
$data = array();

// Check if there are rows returned
if ($result->num_rows > 0) {
    // Fetch the row
    $row = $result->fetch_assoc();
    
    // Prepare labels
    $data['labels'] = ["T-I", "T-II", "T-III", "MT-I", "MT-II", "SPED-T-I", "SPED-T-II", "SPED-T-III", "SST-I"];

    // Prepare datasets
    $data['datasets'] = [
        [
            'label' => 'Male',
            'data' => [
                (int)$row['T_I_Male'],
                (int)$row['T_II_Male'],
                (int)$row['T_III_Male'],
                (int)$row['MT_I_Male'],
                (int)$row['MT_II_Male'],
                (int)$row['SPED_T_I_Male'],
                (int)$row['SPED_T_II_Male'],
                (int)$row['SPED_T_III_Male'],
                (int)$row['SST_I_Male']
            ],
            'backgroundColor' => 'rgba(63, 182, 255, 0.2)',
            'borderColor' => 'rgba(63, 182, 255, 1)',
            'borderWidth' => 3,
            'stack' => 'stack1'
        ],
        [
            'label' => 'Female',
            'data' => [
                (int)$row['T_I_Female'],
                (int)$row['T_II_Female'],
                (int)$row['T_III_Female'],
                (int)$row['MT_I_Female'],
                (int)$row['MT_II_Female'],
                (int)$row['SPED_T_I_Female'],
                (int)$row['SPED_T_II_Female'],
                (int)$row['SPED_T_III_Female'],
                (int)$row['SST_I_Female']
            ],
            'backgroundColor' => 'rgba(227, 0, 72, 0.2)',
            'borderColor' => 'rgba(227, 0, 72, 1)',
            'borderWidth' => 3,
            'stack' => 'stack1'
        ]
    ];
}

// Output the data as JSON
header('Content-Type: application/json');
echo json_encode($data);
?>
