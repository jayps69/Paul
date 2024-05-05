<?php
session_start();
?>

<?php
include '../Templates/adminhead.php';
?>
<link rel="stylesheet" href="dashboardstyles1.css">


<body>



    <div id="wrapper">

        <!-- Sidebar -->
        <?php
        include '../Templates/adminsidebar.php';

        ?>


        <div id="content">
            <?php
            include '../Templates/adminheader.php';

            ?>

            <h1>Secondary Dashboard</h1>

            <div class="cycle-tab-container">
                <ul class="nav nav-tabs">
                    <li class="cycle-tab-item ">
                        <a class="nav-link active" role="tab" data-toggle="tab" href="#DISTRICTI" value="1" id="DISTRICT I-tab">DISTRICT I</a>
                    </li>
                    <li class="cycle-tab-item">
                        <a class="nav-link" role="tab" data-toggle="tab" href="#DISTRICTII" value="2" id="DISTRICT II-tab">DISTRICT II</a>
                    </li>
                    <li class="cycle-tab-item">
                        <a class="nav-link" role="tab" data-toggle="tab" href="#DISTRICTIII" value="3" id="DISTRICT III-tab">DISTRICT
                            III</a>
                    </li>
                    <li class="cycle-tab-item">
                        <a class="nav-link" role="tab" data-toggle="tab" href="#DISTRICTIV" value="4" id="DISTRICT IV-tab">DISTRICT
                            IV</a>

                    </li>
                    <li class="cycle-tab-item">
                        <a class="nav-link" role="tab" data-toggle="tab" href="#DISTRICTV" value="5" id="DISTRICT V-tab">DISTRICT
                            V</a>
                    </li>
                    <li class="cycle-tab-item">
                        <a class="nav-link" role="tab" data-toggle="tab" href="#DISTRICTVI" value="6" id="DISTRICT VI-tab">DISTRICT
                            VI</a>
                    </li>
                </ul>
            </div>












            <div class="tab-content">
                <div class="tab-pane fade show active" id="DISTRICTI" role="tabpanel" aria-labelledby="DISTRICTI-tab">


                    <?php

                    // SQL query
                    $sql = "SELECT 
                        SUM(CASE WHEN `employmentstatus` = 'active' THEN 1 ELSE 0 END) AS active,
                        SUM(CASE WHEN `employmentstatus` = 'inactive' THEN 1 ELSE 0 END) AS inactive,
                        SUM(CASE WHEN DATEDIFF(CURDATE(), `birthday`) > 59*365 THEN 1 ELSE 0 END) AS retired,
                        SUM(CASE WHEN `statusofappointment` = 'PERMANENT' THEN 1 ELSE 0 END) AS PERMANENT,
                        SUM(CASE WHEN `statusofappointment` = 'SUBSTITUTE' THEN 1 ELSE 0 END) AS SUBSTITUTE,
                        SUM(CASE WHEN `statusofappointment` = 'PROVISIONARY' THEN 1 ELSE 0 END) AS PROVISIONARY
                        
                        FROM personalinfotbl
                        Where schooldistrict = 1 And level = 'SECONDARY'";

                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        // Output data of each row
                        while ($row = $result->fetch_assoc()) {
                            echo '<div class="cards">';
                            echo '<div class="card red">';
                            echo '<p class="tip">ACTIVE</p>';
                            echo '<p class="tip">' . $row["active"] . '</p>';
                            echo '</div>';
                            echo '<div class="card blue">';
                            echo '<p class="tip">INACTIVE</p>';
                            echo '<p class="tip">' . $row["inactive"] . '</p>';
                            echo '</div>';
                            echo '<div class="card green">';
                            echo '<p class="tip">RETIRED</p>';
                            echo '<p class="tip">' . $row["retired"] . '</p>';
                            echo '</div>';
                            echo '<div class="card gray">';
                            echo '<p class="tip">Status of Appointment</p>';
                            echo '<div class="second-text-container">';
                            echo '<div>';
                            echo '<p class="second-text">PERMANENT:</p>';
                            echo '<p class="second-text">SUBSTITUTE:</p>';
                            echo '<p class="second-text">PROVISIONARY:</p>';
                            echo '</div>';
                            echo '<div>';
                            echo '<p class="second-text">' . $row["PERMANENT"] . '</p>';
                            echo '<p class="second-text">' . $row["SUBSTITUTE"] . '</p>';
                            echo '<p class="second-text">' . $row["PROVISIONARY"] . '</p>';
                            echo '</div>';
                            echo '</div>';
                            echo '</div>';
                            echo '</div>';
                        }
                    } else {
                        echo "0 results";
                    }
                    ?>

                    <div class="Chartcards">
                        <div class="Chartcard2">
                            <div class="tools">
                                <div class="circle">
                                    <span class="red box"></span>
                                </div>
                                <div class="circle">
                                    <span class="yellow box"></span>
                                </div>
                                <div class="circle">
                                    <span class="green box"></span>
                                </div>
                            </div>

                            <div class="card__content">
                                <canvas id="stackedbarSecondary_district1"></canvas>
                            </div>
                        </div>
                    </div>


                </div>
                <div class="tab-pane" id="DISTRICTII" role="tabpanel" aria-labelledby="DISTRICTII-tab">
                    <?php

                    // SQL query
                    $sql = "SELECT 
                        SUM(CASE WHEN `employmentstatus` = 'active' THEN 1 ELSE 0 END) AS active,
                        SUM(CASE WHEN `employmentstatus` = 'inactive' THEN 1 ELSE 0 END) AS inactive,
                        SUM(CASE WHEN DATEDIFF(CURDATE(), `birthday`) > 59*365 THEN 1 ELSE 0 END) AS retired,
                        SUM(CASE WHEN `statusofappointment` = 'PERMANENT' THEN 1 ELSE 0 END) AS PERMANENT,
                        SUM(CASE WHEN `statusofappointment` = 'SUBSTITUTE' THEN 1 ELSE 0 END) AS SUBSTITUTE,
                        SUM(CASE WHEN `statusofappointment` = 'PROVISIONARY' THEN 1 ELSE 0 END) AS PROVISIONARY
                        
                        FROM personalinfotbl
                        Where schooldistrict = 2 And level = 'SECONDARY'";

                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        // Output data of each row
                        while ($row = $result->fetch_assoc()) {
                            echo '<div class="cards">';
                            echo '<div class="card red">';
                            echo '<p class="tip">ACTIVE</p>';
                            echo '<p class="tip">' . $row["active"] . '</p>';
                            echo '</div>';
                            echo '<div class="card blue">';
                            echo '<p class="tip">INACTIVE</p>';
                            echo '<p class="tip">' . $row["inactive"] . '</p>';
                            echo '</div>';
                            echo '<div class="card green">';
                            echo '<p class="tip">RETIRED</p>';
                            echo '<p class="tip">' . $row["retired"] . '</p>';
                            echo '</div>';
                            echo '<div class="card gray">';
                            echo '<p class="tip">Status of Appointment</p>';
                            echo '<div class="second-text-container">';
                            echo '<div>';
                            echo '<p class="second-text">PERMANENT:</p>';
                            echo '<p class="second-text">SUBSTITUTE:</p>';
                            echo '<p class="second-text">PROVISIONARY:</p>';
                            echo '</div>';
                            echo '<div>';
                            echo '<p class="second-text">' . $row["PERMANENT"] . '</p>';
                            echo '<p class="second-text">' . $row["SUBSTITUTE"] . '</p>';
                            echo '<p class="second-text">' . $row["PROVISIONARY"] . '</p>';
                            echo '</div>';
                            echo '</div>';
                            echo '</div>';
                            echo '</div>';
                        }
                    } else {
                        echo "0 results";
                    }
                    ?>

                    <div class="Chartcards">
                        <div class="Chartcard2">
                            <div class="tools">
                                <div class="circle">
                                    <span class="red box"></span>
                                </div>
                                <div class="circle">
                                    <span class="yellow box"></span>
                                </div>
                                <div class="circle">
                                    <span class="green box"></span>
                                </div>
                            </div>

                            <div class="card__content">
                                <canvas id="stackedbarSecondary_district2"></canvas>
                            </div>
                        </div>
                    </div>




                </div>
                <div class="tab-pane" id="DISTRICTIII" role="tabpanel" aria-labelledby="DISTRICTIII-tab">

                    <?php

                    // SQL query
                    $sql = "SELECT 
                        SUM(CASE WHEN `employmentstatus` = 'active' THEN 1 ELSE 0 END) AS active,
                        SUM(CASE WHEN `employmentstatus` = 'inactive' THEN 1 ELSE 0 END) AS inactive,
                        SUM(CASE WHEN DATEDIFF(CURDATE(), `birthday`) > 59*365 THEN 1 ELSE 0 END) AS retired,
                        SUM(CASE WHEN `statusofappointment` = 'PERMANENT' THEN 1 ELSE 0 END) AS PERMANENT,
                        SUM(CASE WHEN `statusofappointment` = 'SUBSTITUTE' THEN 1 ELSE 0 END) AS SUBSTITUTE,
                        SUM(CASE WHEN `statusofappointment` = 'PROVISIONARY' THEN 1 ELSE 0 END) AS PROVISIONARY
                        
                        FROM personalinfotbl
                        Where schooldistrict = 3 And level = 'SECONDARY'";

                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        // Output data of each row
                        while ($row = $result->fetch_assoc()) {
                            echo '<div class="cards">';
                            echo '<div class="card red">';
                            echo '<p class="tip">ACTIVE</p>';
                            echo '<p class="tip">' . $row["active"] . '</p>';
                            echo '</div>';
                            echo '<div class="card blue">';
                            echo '<p class="tip">INACTIVE</p>';
                            echo '<p class="tip">' . $row["inactive"] . '</p>';
                            echo '</div>';
                            echo '<div class="card green">';
                            echo '<p class="tip">RETIRED</p>';
                            echo '<p class="tip">' . $row["retired"] . '</p>';
                            echo '</div>';
                            echo '<div class="card gray">';
                            echo '<p class="tip">Status of Appointment</p>';
                            echo '<div class="second-text-container">';
                            echo '<div>';
                            echo '<p class="second-text">PERMANENT:</p>';
                            echo '<p class="second-text">SUBSTITUTE:</p>';
                            echo '<p class="second-text">PROVISIONARY:</p>';
                            echo '</div>';
                            echo '<div>';
                            echo '<p class="second-text">' . $row["PERMANENT"] . '</p>';
                            echo '<p class="second-text">' . $row["SUBSTITUTE"] . '</p>';
                            echo '<p class="second-text">' . $row["PROVISIONARY"] . '</p>';
                            echo '</div>';
                            echo '</div>';
                            echo '</div>';
                            echo '</div>';
                        }
                    } else {
                        echo "0 results";
                    }
                    ?>

                    <div class="Chartcards">
                        <div class="Chartcard2">
                            <div class="tools">
                                <div class="circle">
                                    <span class="red box"></span>
                                </div>
                                <div class="circle">
                                    <span class="yellow box"></span>
                                </div>
                                <div class="circle">
                                    <span class="green box"></span>
                                </div>
                            </div>

                            <div class="card__content">
                                <canvas id="stackedbarSecondary_district3"></canvas>
                            </div>
                        </div>
                    </div>



                </div>
                <div class="tab-pane" id="DISTRICTIV" role="tabpanel" aria-labelledby="DISTRICTIV-tab">

                    <?php

                    // SQL query
                    $sql = "SELECT 
                        SUM(CASE WHEN `employmentstatus` = 'active' THEN 1 ELSE 0 END) AS active,
                        SUM(CASE WHEN `employmentstatus` = 'inactive' THEN 1 ELSE 0 END) AS inactive,
                        SUM(CASE WHEN DATEDIFF(CURDATE(), `birthday`) > 59*365 THEN 1 ELSE 0 END) AS retired,
                        SUM(CASE WHEN `statusofappointment` = 'PERMANENT' THEN 1 ELSE 0 END) AS PERMANENT,
                        SUM(CASE WHEN `statusofappointment` = 'SUBSTITUTE' THEN 1 ELSE 0 END) AS SUBSTITUTE,
                        SUM(CASE WHEN `statusofappointment` = 'PROVISIONARY' THEN 1 ELSE 0 END) AS PROVISIONARY
                        
                        FROM personalinfotbl
                        Where schooldistrict = 4 And level = 'SECONDARY'";

                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        // Output data of each row
                        while ($row = $result->fetch_assoc()) {
                            echo '<div class="cards">';
                            echo '<div class="card red">';
                            echo '<p class="tip">ACTIVE</p>';
                            echo '<p class="tip">' . $row["active"] . '</p>';
                            echo '</div>';
                            echo '<div class="card blue">';
                            echo '<p class="tip">INACTIVE</p>';
                            echo '<p class="tip">' . $row["inactive"] . '</p>';
                            echo '</div>';
                            echo '<div class="card green">';
                            echo '<p class="tip">RETIRED</p>';
                            echo '<p class="tip">' . $row["retired"] . '</p>';
                            echo '</div>';
                            echo '<div class="card gray">';
                            echo '<p class="tip">Status of Appointment</p>';
                            echo '<div class="second-text-container">';
                            echo '<div>';
                            echo '<p class="second-text">PERMANENT:</p>';
                            echo '<p class="second-text">SUBSTITUTE:</p>';
                            echo '<p class="second-text">PROVISIONARY:</p>';
                            echo '</div>';
                            echo '<div>';
                            echo '<p class="second-text">' . $row["PERMANENT"] . '</p>';
                            echo '<p class="second-text">' . $row["SUBSTITUTE"] . '</p>';
                            echo '<p class="second-text">' . $row["PROVISIONARY"] . '</p>';
                            echo '</div>';
                            echo '</div>';
                            echo '</div>';
                            echo '</div>';
                        }
                    } else {
                        echo "0 results";
                    }
                    ?>

                    <div class="Chartcards">
                        <div class="Chartcard2">
                            <div class="tools">
                                <div class="circle">
                                    <span class="red box"></span>
                                </div>
                                <div class="circle">
                                    <span class="yellow box"></span>
                                </div>
                                <div class="circle">
                                    <span class="green box"></span>
                                </div>
                            </div>

                            <div class="card__content">
                                <canvas id="stackedbarSecondary_district4"></canvas>
                            </div>
                        </div>
                    </div>



                </div>
                <div class="tab-pane" id="DISTRICTV" role="tabpanel" aria-labelledby="DISTRICTV-tab">

                    <?php

                    // SQL query
                    $sql = "SELECT 
                        SUM(CASE WHEN `employmentstatus` = 'active' THEN 1 ELSE 0 END) AS active,
                        SUM(CASE WHEN `employmentstatus` = 'inactive' THEN 1 ELSE 0 END) AS inactive,
                        SUM(CASE WHEN DATEDIFF(CURDATE(), `birthday`) > 59*365 THEN 1 ELSE 0 END) AS retired,
                        SUM(CASE WHEN `statusofappointment` = 'PERMANENT' THEN 1 ELSE 0 END) AS PERMANENT,
                        SUM(CASE WHEN `statusofappointment` = 'SUBSTITUTE' THEN 1 ELSE 0 END) AS SUBSTITUTE,
                        SUM(CASE WHEN `statusofappointment` = 'PROVISIONARY' THEN 1 ELSE 0 END) AS PROVISIONARY
                        
                        FROM personalinfotbl
                        Where schooldistrict = 5 And level = 'SECONDARY'";

                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        // Output data of each row
                        while ($row = $result->fetch_assoc()) {
                            echo '<div class="cards">';
                            echo '<div class="card red">';
                            echo '<p class="tip">ACTIVE</p>';
                            echo '<p class="tip">' . $row["active"] . '</p>';
                            echo '</div>';
                            echo '<div class="card blue">';
                            echo '<p class="tip">INACTIVE</p>';
                            echo '<p class="tip">' . $row["inactive"] . '</p>';
                            echo '</div>';
                            echo '<div class="card green">';
                            echo '<p class="tip">RETIRED</p>';
                            echo '<p class="tip">' . $row["retired"] . '</p>';
                            echo '</div>';
                            echo '<div class="card gray">';
                            echo '<p class="tip">Status of Appointment</p>';
                            echo '<div class="second-text-container">';
                            echo '<div>';
                            echo '<p class="second-text">PERMANENT:</p>';
                            echo '<p class="second-text">SUBSTITUTE:</p>';
                            echo '<p class="second-text">PROVISIONARY:</p>';
                            echo '</div>';
                            echo '<div>';
                            echo '<p class="second-text">' . $row["PERMANENT"] . '</p>';
                            echo '<p class="second-text">' . $row["SUBSTITUTE"] . '</p>';
                            echo '<p class="second-text">' . $row["PROVISIONARY"] . '</p>';
                            echo '</div>';
                            echo '</div>';
                            echo '</div>';
                            echo '</div>';
                        }
                    } else {
                        echo "0 results";
                    }
                    ?>

                    <div class="Chartcards">
                        <div class="Chartcard2">
                            <div class="tools">
                                <div class="circle">
                                    <span class="red box"></span>
                                </div>
                                <div class="circle">
                                    <span class="yellow box"></span>
                                </div>
                                <div class="circle">
                                    <span class="green box"></span>
                                </div>
                            </div>

                            <div class="card__content">
                                <canvas id="stackedbarSecondary_district5"></canvas>
                            </div>
                        </div>
                    </div>


                </div>
                <div class="tab-pane" id="DISTRICTVI" role="tabpanel" aria-labelledby="DISTRICTVI-tab">

                    <?php

                    // SQL query
                    $sql = "SELECT 
                        SUM(CASE WHEN `employmentstatus` = 'active' THEN 1 ELSE 0 END) AS active,
                        SUM(CASE WHEN `employmentstatus` = 'inactive' THEN 1 ELSE 0 END) AS inactive,
                        SUM(CASE WHEN DATEDIFF(CURDATE(), `birthday`) > 59*365 THEN 1 ELSE 0 END) AS retired,
                        SUM(CASE WHEN `statusofappointment` = 'PERMANENT' THEN 1 ELSE 0 END) AS PERMANENT,
                        SUM(CASE WHEN `statusofappointment` = 'SUBSTITUTE' THEN 1 ELSE 0 END) AS SUBSTITUTE,
                        SUM(CASE WHEN `statusofappointment` = 'PROVISIONARY' THEN 1 ELSE 0 END) AS PROVISIONARY
    
                        FROM personalinfotbl
                        Where schooldistrict = 6 And level = 'SECONDARY'";

                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        // Output data of each row
                        while ($row = $result->fetch_assoc()) {
                            echo '<div class="cards">';
                            echo '<div class="card red">';
                            echo '<p class="tip">ACTIVE</p>';
                            echo '<p class="tip">' . $row["active"] . '</p>';
                            echo '</div>';
                            echo '<div class="card blue">';
                            echo '<p class="tip">INACTIVE</p>';
                            echo '<p class="tip">' . $row["inactive"] . '</p>';
                            echo '</div>';
                            echo '<div class="card green">';
                            echo '<p class="tip">RETIRED</p>';
                            echo '<p class="tip">' . $row["retired"] . '</p>';
                            echo '</div>';
                            echo '<div class="card gray">';
                            echo '<p class="tip">Status of Appointment</p>';
                            echo '<div class="second-text-container">';
                            echo '<div>';
                            echo '<p class="second-text">PERMANENT:</p>';
                            echo '<p class="second-text">SUBSTITUTE:</p>';
                            echo '<p class="second-text">PROVISIONARY:</p>';
                            echo '</div>';
                            echo '<div>';
                            echo '<p class="second-text">' . $row["PERMANENT"] . '</p>';
                            echo '<p class="second-text">' . $row["SUBSTITUTE"] . '</p>';
                            echo '<p class="second-text">' . $row["PROVISIONARY"] . '</p>';
                            echo '</div>';
                            echo '</div>';
                            echo '</div>';
                            echo '</div>';
                        }
                    } else {
                        echo "0 results";
                    }
                    ?>

                    <div class="Chartcards">
                        <div class="Chartcard2">
                            <div class="tools">
                                <div class="circle">
                                    <span class="red box"></span>
                                </div>
                                <div class="circle">
                                    <span class="yellow box"></span>
                                </div>
                                <div class="circle">
                                    <span class="green box"></span>
                                </div>
                            </div>

                            <div class="card__content">
                                <canvas id="stackedbarSecondary_district6"></canvas>
                            </div>
                        </div>
                    </div>



                </div>
            </div>
        </div>






        <script src="../charts/SecondaryCharts/stackedbarSecondary.js"></script>

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <script>
            var $j = jQuery.noConflict();
            $(document).ready(function() {
                // Function to handle click event on tab items
                $('.nav-link').click(function() {
                    var value = $(this).attr('value');
                    // Send value to PHP file using AJAX
                    $.ajax({
                        url: '../charts/SecondaryCharts/buttonclicked.php', // Change this to your PHP file path
                        method: 'POST',
                        data: {
                            value: value
                        },
                        success: function(response) {
                            // Handle success response if needed
                            console.log(response);
                        },
                        error: function(xhr, status, error) {
                            // Handle error if needed
                            console.error(xhr.responseText);
                        }
                    });
                });
            });
        </script>
</body>

</html>