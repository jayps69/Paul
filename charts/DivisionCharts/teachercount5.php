<?php
include("../../connection.php");

// Your PHP code to fetch data from the database
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
    `schooldistrict` = '5'
    AND `employmentstatus` = 'ACTIVE'";

$result = $conn->query($sql);

$data = array();

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $data['labels'] = ["T-I", "T-II", "T-III", "MT-I", "MT-II", "SPED-T-I", "SPED-T-II", "SPED-T-III", "SST-I"];
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
