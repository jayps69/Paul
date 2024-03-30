<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Personal Information</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.0/css/dataTables.bootstrap5.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/3.0.0/css/responsive.bootstrap5.css">

    <style>
    body {
        margin: 0;
        padding: 0;
        font-family: kameron;
    }

    label {
        width: 120px;
        margin-right: 2px;
        display: block;
    }

    #wrapper {
        display: flex;
    }

    #sidebar {
        max-width: 200px;
        position: sticky;
        top: 0;
        height: 100vh;
        background: #007bff;
        color: white;
        transition: all 0.3s;
        display: flex;
        flex-direction: column;
        align-items: center;
        overflow-y: auto;

    }

    #sidebar .navbar-brand img {
        width: 75px;
        height: 75px;
    }

    #sidebar .navbar-nav {
        display: flex;
        flex-direction: column;
    }

    #sidebar .nav-item {
        padding: 5px;
        margin-bottom: 10px;
    }

    #sidebar .nav-item i {
        margin-right: 5px;
    }

    #sidebar .nav-item a {
        color: white;
        font-weight: bold;
        font-size: 14px;
    }

    header {
        display: flex;
        flex-direction: row;
        justify-content: space-between;
        align-items: center;
        border-top: 1px solid #007bff;
        border-left: 1px solid #007bff;
        border-right: 1px solid #007bff;
        border-bottom: 1px solid #007bff;
        padding: 10px;
        border-radius: 25px;
        box-shadow: 16px 12px 9px 0px rgba(0, 0, 0, 0.18);
    }

    header div {
        display: flex;
        flex-direction: column;
    }

    header p1,
    header p2,
    header p3 {
        font-weight: bold;
    }

    header p1 {
        font-size: 24px;
    }

    header p2 {
        font-size: 22px;
    }

    header p3 {
        font-size: 20px;
    }

    #profile {
        display: flex;
        align-items: center;
    }

    #profile img {
        width: 40px;
        height: 40px;
        border-radius: 50%;
        margin-right: 10px;
    }

    #profile span {
        font-weight: bold;
        font-size: 14px;
    }

    .nav {

        margin-bottom: 1rem;
    }

    #content {
        width: 100%;
        padding: 15px;
    }

    h1 {
        margin-top: 20px;
        font-weight: bold;
    }

    thead,
    th {

        text-align: center !important;
        vertical-align: middle !important;
    }

    td {
        text-align: center !important;
        vertical-align: middle !important;
    }

    .PersonalInfo-box {
        border: 1px solid #007bff;
        padding: 10px;
        margin-top: 20px;
        border-radius: 25px;
        width: 1400px;
        height: 550px;
        margin: 0 auto;
        width: 100%;
        transition: height 0.5s ease;
        box-shadow: 10px 8px 5px 0px rgba(0, 0, 0, 0.18);
        overflow-y: scroll;
        overflow-x: hidden;



    }

    .inputGroup {
        font-family: "Segoe UI", sans-serif;
        margin: 1em 0 1em 0;
        max-width: 190px;
        position: relative;
    }

    .inputGroup input {
        font-size: 100%;
        padding: 0.5em;
        outline: none;
        border: 2px solid rgb(200, 200, 200);
        background-color: white;
        border-radius: 20px;
        width: 400px;
    }

    .inputGroup label {
        font-size: 70%;
        font-weight: bold;
        position: absolute;
        left: 0;
        padding: 0.8em;
        margin-left: 0.5em;
        pointer-events: none;
        transition: all 0.3s ease;
        color: rgb(100, 100, 100);
        top: 0;
        z-index: 2;

    }

    .inputGroup label2 {
        font-size: 100%;
        font-weight: bold;
        color: rgb(100, 100, 100);
        margin-left: 1.3em;

    }


    .inputGroup :is(input:focus, input:valid)~label,
    .inputGroup input[readonly]~label {
        transform: translateY(-75%) scale(0.9);
        margin: 0em;
        margin-left: 1em;
        padding: 0.1em;
        background-color: transparent;
    }

    .btn-primary {
        border-radius: 25px;
        font-size: 16px;
        margin-top: 0.1rem;
        margin-bottom: 0.1rem;
    }

    .longlabel {
        font-size: 10px !important;
    }



    .profilephoto img {
        margin-top: 2em;
        object-fit: contain;
        height: 150px;
        width: auto;
        border: 2px solid rgb(200, 200, 200);
        border-radius: 20px;
    }

    @media (max-width: 1250px) {
        .row {
            justify-content: center;
        }

        header p1 {
            font-size: 20px;
        }

        header p2 {
            font-size: 18px;
        }

        header p3 {
            font-size: 16px;
        }

        #profile span {
            font-size: 12px;
        }

        h1 {
            font-size: 30px;
        }
    }

    @media (max-width: 1051px) {

        .PersonalInfo-box {
            height: 800px;

        }
    }

    @media (max-width: 960px) {
        header p1 {
            font-size: 18px;
        }

        header p2 {
            font-size: 16px;
        }

        header p3 {
            font-size: 14px;
        }

        #profile span {
            font-size: 10px;
        }

        h1 {
            font-size: 20px;
        }
    }



    @media (max-width: 875px) {
        #sidebar {
            width: 100px;
        }

        #sidebar .navbar-nav {
            align-items: center;
        }

        #sidebar .nav-item {
            padding: 5px;
            margin-bottom: 5px;
        }

        #sidebar .nav-item span {
            display: none;
        }

        #sidebar .navbar {
            overflow: visible;
            justify-content: center;
        }

        header p1 {
            font-size: 16px;
        }

        header p2 {
            font-size: 14px;
        }

        header p3 {
            font-size: 12px;
        }

        #profile span {
            font-size: 10px;
        }

        h1 {
            font-size: 18px;
        }
    }

    @media (max-width: 767px) {

        .PersonalInfo-box {
            height: 1500px;

        }
    }
    </style>
</head>

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

            <h1 id="tabTitle">Personal Information</h1>
            <div class="cycle-tab-container">
                <ul class="nav nav-tabs">
                    <li class="cycle-tab-item ">
                        <a class="nav-link active" role="tab" data-toggle="tab" href="#PersonalInfo"
                            id="PersonalInfo-tab">Personal Information</a>


                        <div class="progress" style="height: 4px; margin-bottom: -4px;">
                            <div class="progress-bar" role="progressbar" style="width: 0%;" aria-valuemin="0"
                                aria-valuemax="100"></div>
                        </div>
                    </li>
                    <li class="cycle-tab-item">
                        <a class="nav-link" role="tab" data-toggle="tab" href="#ContactNo" id="ContactNo-tab">Contact
                            No</a>
                        <div class="progress" style="height: 4px; margin-bottom: -4px;">
                            <div class="progress-bar" role="progressbar" style="width: 0%;" aria-valuemin="0"
                                aria-valuemax="100"></div>
                        </div>
                    </li>
                    <li class="cycle-tab-item">
                        <a class="nav-link" role="tab" data-toggle="tab" href="#WorkHistory" id="WorkHistory-tab">Work
                            History</a>
                        <div class="progress" style="height: 4px; margin-bottom: -4px;">
                            <div class="progress-bar" role="progressbar" style="width: 0%;" aria-valuemin="0"
                                aria-valuemax="100"></div>
                        </div>
                    </li>
                    <li class="cycle-tab-item">
                        <a class="nav-link" role="tab" data-toggle="tab" href="#Education"
                            id="Education-tab">Education</a>
                        <div class="progress" style="height: 4px; margin-bottom: -4px;">
                            <div class="progress-bar" role="progressbar" style="width: 0%;" aria-valuemin="0"
                                aria-valuemax="100"></div>
                        </div>
                    </li>
                    <li class="cycle-tab-item">
                        <a class="nav-link" role="tab" data-toggle="tab" href="#Eligibility"
                            id="Eligibility-tab">Eligibility</a>
                        <div class="progress" style="height: 4px; margin-bottom: -4px;">
                            <div class="progress-bar" role="progressbar" style="width: 0%;" aria-valuemin="0"
                                aria-valuemax="100"></div>
                        </div>
                    </li>
                    <li class="cycle-tab-item">
                        <a class="nav-link" role="tab" data-toggle="tab" href="#Training" id="Training-tab">Training</a>
                        <div class="progress" style="height: 4px; margin-bottom: -4px;">
                            <div class="progress-bar" role="progressbar" style="width: 0%;" aria-valuemin="0"
                                aria-valuemax="100"></div>
                        </div>
                    </li>
                    <li class="cycle-tab-item">
                        <a class="nav-link" role="tab" data-toggle="tab" href="#Skill" id="Skill-tab">Skill</a>
                        <div class="progress" style="height: 4px; margin-bottom: -4px;">
                            <div class="progress-bar" role="progressbar" style="width: 0%;" aria-valuemin="0"
                                aria-valuemax="100"></div>
                        </div>
                    </li>
                </ul>
            </div>



            <div class="PersonalInfo-box">

                <div class="tab-content">
                    <div class="tab-pane fade show active" id="PersonalInfo" role="tabpanel"
                        aria-labelledby="PersonalInfo-tab">
                        <?php
                        include 'getinfo/getpersonalinfo.php';
                        ?>
                    </div>


                    <div class="tab-pane fade" id="ContactNo" role="tabpanel" aria-labelledby="ContactNo-tab">
                        <?php
                        include 'getinfo/getcontactno.php';
                        ?>
                    </div>
                    <div class="tab-pane fade" id="WorkHistory" role="tabpanel" aria-labelledby="WorkHistory-tab">
                        <!-- Work History content goes here -->
                        <?php
                        include 'getinfo/getworkhistory.php';
                        ?>
                    </div>
                    <div class="tab-pane fade" id="Education" role="tabpanel" aria-labelledby="Education-tab">
                        <!-- Education content goes here -->
                        <?php
                        include 'getinfo/geteducation.php';
                        ?>
                    </div>
                    <div class="tab-pane fade" id="Eligibility" role="tabpanel" aria-labelledby="Eligibility-tab">
                        <!-- Eligibility content goes here -->
                        <?php
                        include 'getinfo/geteligibility.php';

                        ?>
                    </div>
                    <div class="tab-pane fade" id="Training" role="tabpanel" aria-labelledby="Training-tab">
                        <!-- Training content goes here -->
                        <?php
                        include 'getinfo/gettraining.php';

                        ?>
                    </div>
                    <div class="tab-pane fade" id="Skill" role="tabpanel" aria-labelledby="Skill-tab">
                        <?php
                        include 'getinfo/getskill.php';

                        ?>
                    </div>
                </div>
            </div>




        </div>

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

        <script src="https://cdn.datatables.net/2.0.0/js/dataTables.js"></script>
        <script src="https://cdn.datatables.net/2.0.0/js/dataTables.bootstrap5.js"></script>
        <script src="https://cdn.datatables.net/responsive/3.0.0/js/dataTables.responsive.js"></script>


        <script>
        $(document).ready(function() {
            // Listen for tab change event
            $('.nav-tabs a').on('shown.bs.tab', function(event) {
                // Get the target tab's text and set it as the h1 content
                var tabText = $(event.target).text();
                $('#tabTitle').text(tabText);
            });
        });

        var fullname = "<?php echo $fullName; ?>";
        new DataTable('#example', {
            searching: false,
            bLengthChange: false,
            responsive: {
                details: {
                    display: DataTable.Responsive.display.modal({
                        header: function(row) {
                            var data = row.data();
                            return 'Education of ' + fullname;
                        }
                    }),
                    renderer: DataTable.Responsive.renderer.tableAll({
                        tableClass: 'table'
                    }),
                }
            },
            order: [
                [3, 'asc']
            ]
        });

        var fullname = "<?php echo $fullName; ?>";
        new DataTable('#example2', {
            searching: false,
            bLengthChange: false,
            responsive: {
                details: {
                    display: DataTable.Responsive.display.modal({
                        header: function(row) {
                            var data = row.data();
                            return 'Eligibility of ' + fullname;
                        }
                    }),
                    renderer: DataTable.Responsive.renderer.tableAll({
                        tableClass: 'table'
                    }),
                }
            },
            order: [
                [2, 'asc']
            ]
        });

        var fullname = "<?php echo $fullName; ?>";
        new DataTable('#example3', {
            searching: false,
            bLengthChange: false,

            responsive: {
                details: {
                    display: DataTable.Responsive.display.modal({
                        header: function(row) {
                            var data = row.data();
                            return 'Trainings of ' + fullname;
                        }
                    }),
                    renderer: DataTable.Responsive.renderer.tableAll({
                        tableClass: 'table'
                    }),
                }
            },
            order: [
                [1, 'asc']
            ],

            columnDefs: [{
                    width: '20%',
                    targets: 0
                }

            ]
        });

        var fullname = "<?php echo $fullName; ?>";
        new DataTable('#example4', {
            searching: false,
            bLengthChange: false,
            responsive: {
                details: {
                    display: DataTable.Responsive.display.modal({
                        header: function(row) {
                            var data = row.data();
                            return 'Eligibility of ' + fullname;
                        }
                    }),
                    renderer: DataTable.Responsive.renderer.tableAll({
                        tableClass: 'table'
                    }),
                }
            },
            order: [
                [2, 'asc']
            ]
        });

        var fullname = "<?php echo $fullName; ?>";
        new DataTable('#example5', {
            searching: false,
            bLengthChange: false,
            responsive: {
                details: {
                    display: DataTable.Responsive.display.modal({
                        header: function(row) {
                            var data = row.data();
                            console.log("Row Data:", data); // Log the row data
                            console.log("workhistorytable")
                            return 'Work History of ' + fullname;
                        }
                    }),
                    renderer: DataTable.Responsive.renderer.tableAll({
                        tableClass: 'table'
                    }),
                }
            },
            order: [
                [2, 'asc']
            ]
        });
        </script>
</body>

</html>