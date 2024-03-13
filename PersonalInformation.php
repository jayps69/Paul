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

        #content {
            width: 100%;
            padding: 15px;
        }

        h1 {
            margin-top: 20px;
            font-weight: bold;
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
            /* Add this line */
        }
        .inputGroup label2 {
            font-size: 100%;
            font-weight: bold;
            color: rgb(100, 100, 100);
            margin-left: 1.3em;

        }
        

        .inputGroup :is(input:focus, input:valid)~label {
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
                width: 70px;
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
        include 'Templates/sidebar.php';
        ?>

        <div id="content">
            <?php
            include 'Templates/header.php'
            ?>
            <?php
            // Query to retrieve the data from the database
            $sql = "SELECT `employeeno`, `lastname`, `firstname`, `middlename`, `extensionname`,`depedemail`,`addressstreet`,`addressbarangay`,`addressdistrict`,
             `addresscity`,`birthday`,`age`,`contactno`,`gender`,`civilstatus`,`gsisno`,`philhealthno`,`birno`,`pagibigno`,`presentposition`,`statusofappointment`,
             `natureofappointment`,`firstdayofservice`,`salarygrade`,`step`,`monthlysalary`,`itemnopinagtibay`,`level`,`specialization`,`schooldistrict`,`schoolname`,
             `detailed`
              FROM personalinfotbl WHERE userid = ?"; // Modify your_table_name according to your database structure

            // Prepare and bind the statement
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("i", $userId); // Assuming $your_id is the ID of the record you want to retrieve

            // Execute the statement
            $stmt->execute();

            // Bind the result variables
            $stmt->bind_result(
                $employeeno,
                $lastname,
                $firstname,
                $middlename,
                $extensionname,
                $depedemail,
                $addressstreet,
                $addressbarangay,
                $addressdistrict,
                $addresscity,
                $birthday,
                $age,
                $contactno,
                $gender,
                $civilstatus,
                $gsisno,
                $philhealthno,
                $birno,
                $pagibigno,
                $presentposition,
                $statusofappointment,
                $natureofappointment,
                $firstdayofservice,
                $salarygrade,
                $step,
                $monthlysalary,
                $itemnopinagtibay,
                $level,
                $specialization,
                $schooldistrict,
                $schoolname,
                $detailed
            );

            // Fetch the data
            $stmt->fetch();

            // Close the statement
            $stmt->close();

            // Close the connection
            $conn->close();
            ?>
            <h1>PERSONAL INFORMATION</h1>

            <div class="PersonalInfo-box">
                <div class="row" style="margin-left:30px;">
                    <div class="col-md-3 responsive-col">
                        <!-------First section------->
                        <div class="inputGroup d-flex ">  
                            <input type="text" class="form-control" id="Employeenotb" name="Employeenotb" value="<?php echo $employeeno; ?>" autocomplete="off" required="">
                            <label for="Employeenotb">Employee No.</label>
                        </div>

                        <div class="inputGroup d-flex ">
                            <input type="text" class="form-control" id="lastnametb" name="lastnametb" value="<?php echo $lastname; ?>" autocomplete="off" required="" autocomplete="off" required=""> 
                            <label for="lastnametb">Last Name</label>
                        </div>

                        <div class="inputGroup d-flex ">
                            <input type="text" class="form-control" id="firstnametb" name="firstnametb" value="<?php echo $firstname; ?>" autocomplete="off" required="">
                            <label for="firstnametb">First Name</label>
                        </div>

                        <div class="inputGroup d-flex ">
                            <input type="text" class="form-control" id="middlenametb" name="middlenametb" value="<?php echo $middlename; ?>" autocomplete="off" required="">
                            <label for="middlenametb">Middle Name</label>
                        </div>

                        <hr>

                        <div class="inputGroup d-flex ">
                            <input type="text" class="form-control" id="extensionnametb" name="extensionnametb" value="<?php echo $extensionname; ?>" autocomplete="off" required="">
                            <label for="extensionnametb">Extension Name</label>
                        </div>

                        <div class="inputGroup d-flex ">
                            <input type="text" class="form-control" id="depedemailtb" name="depedemailtb" value="<?php echo $depedemail; ?>" autocomplete="off" required="">
                            <label for="depedemailtb">Deped Email</label>
                        </div>
                        <div class="inputGroup d-flex ">
                            <input type="text" class="form-control" id="addresstb" name="addresstb" value="<?php echo $addressstreet; ?>" autocomplete="off" required="">
                            <label for="addresstb">Address</label>
                        </div>
                        <div class="inputGroup d-flex ">
                            <input type="text" class="form-control" id="barangaytb" name="barangaytb" value="<?php echo $addressbarangay; ?>" autocomplete="off" required="">
                            <label for="barangaytb">Barangay</label>
                        </div>

                        <hr>

                    </div>

                    <div class="col-md-3 responsive-col">
                        <!-------Second section------->
                        <div class="inputGroup d-flex ">
                            <input type="text" class="form-control" id="districttb" name="districttb" value="District <?php echo $addressdistrict; ?>" autocomplete="off" required="">
                            <label for="districttb">District</label>
                        </div>

                        <div class="inputGroup d-flex ">
                            <input type="text" class="form-control" id="Citytb" name="Citytb" value="<?php echo $addresscity; ?>" autocomplete="off" required="">
                            <label for="Citytb">City</label>
                        </div>

                        <div class="inputGroup d-flex">
                            <input type="text" class="form-control" id="birthdaytb" name="birthdaytb" value="<?php echo $birthday; ?>" autocomplete="off" required="">
                            <label for="birthdaytb">Birthday</label>
                        </div>
                        
                        <div class="inputGroup d-flex">
                            <input type="text" class="form-control" id="agetb" name="agetb" value="<?php echo $age; ?>" autocomplete="off" required="">
                            <label for="agetb">Age</label>
                        </div>

                        <hr>

                        <div class="inputGroup d-flex">
                            <input type="text" class="form-control" id="contacttb" name="contacttb" value="<?php echo $contactno; ?>" autocomplete="off" required="">
                            <label for="contacttb">Contact No.</label>
                        </div>

                        <div class="inputGroup d-flex">
                            <input type="text" class="form-control" id="gendertb" name="gendertb" value="<?php echo $gender; ?>" autocomplete="off" required="">
                            <label for="gendertb">Gender</label>
                        </div>

                        <div class="inputGroup d-flex">
                            <input type="text" class="form-control" id="civilstatustb" name="civilstatustb" value="<?php echo $civilstatus; ?>" autocomplete="off" required="">
                            <label for="civilstatustb">Civil Status</label>
                        </div>

                        <div class="inputGroup d-flex">
                            <input type="text" class="form-control" id="gsistb" name="gsistb" value="<?php echo $gsisno; ?>" autocomplete="off" required="">
                            <label for="gsistb">GSIS</label>
                        </div>

                        <hr>

                    </div>
                    <div class="col-md-3">
                        <!-------Third section------->
                        <div class="inputGroup d-flex">
                            <input type="text" class="form-control" id="philhealthtb" name="philhealthtb" value="<?php echo $philhealthno; ?>" autocomplete="off" required="">
                            <label for="philhealthtb">Philhealth</label>
                        </div>

                        <div class="inputGroup d-flex"> 
                            <input type="text" class="form-control" id="birtb" name="birtb" value="<?php echo $birno; ?>" autocomplete="off" required="">
                            <label for="birtb">BIR</label>
                        </div>

                        <div class="inputGroup d-flex">
                            <input type="text" class="form-control" id="pagibigtb" name="pagibigtb" value="<?php echo $pagibigno; ?>" autocomplete="off" required="">
                            <label for="pagibigtb">Pagibig</label>
                        </div>

                        <div class="inputGroup d-flex">
                            <input type="text" class="form-control" id="presentpositiontb" name="presentpositiontb" value="<?php echo $presentposition; ?>" autocomplete="off" required="">
                            <label for="presentpositiontb">Present Position</label>
                        </div>

                        <hr>

                        <div class="inputGroup d-flex">
                            <input type="text" class="form-control" id="statusofappointmenttb" name="statusofappointmenttb" value="<?php echo $statusofappointment; ?>" autocomplete="off" required="">
                            <label for="statusofappointmenttb" class="longlabel">Status of Appointment</label>
                        </div>

                        <div class="inputGroup d-flex">
                            <input type="text" class="form-control" id="natureofappointmenttb" name="natureofappointmenttb" value="<?php echo $natureofappointment; ?>" autocomplete="off" required="">
                            <label for="natureofappointmenttb" class="longlabel">Nature of Appointment</label>
                        </div>
                        <div class="inputGroup d-flex">
                            <input type="text" class="form-control" id="fdsinpresentpositiontb" name="fdsinpresentpositiontb" value="<?php echo $firstdayofservice; ?>" autocomplete="off" required="">
                            <label for="fdsinpresentpositiontb" class="longlabel">FDS in Present Position</label>
                        </div>

                        <div class="inputGroup d-flex">
                            <input type="text" class="form-control" id="salarygradetb" name="salarygradetb" value="<?php echo $salarygrade; ?>" autocomplete="off" required="">
                            <label for="salarygradetb">Salary Grade</label>
                        </div>

                        <hr>

                    </div>
                    <div class="col-md-3 col-responsive">
                        
                        <div class="inputGroup d-flex">
                            <input type="text" class="form-control" id="steptb" name="steptb" value="<?php echo $step; ?>" autocomplete="off" required="">
                            <label for="steptb">Step</label>
                        </div>

                        <div class="inputGroup d-flex">
                            <input type="text" class="form-control" id="msalary" name="msalary" value="<?php echo $monthlysalary; ?>" autocomplete="off" required="">
                            <label for="msalary">Monthly Salary</label>
                        </div>

                        <div class="inputGroup d-flex">
                            <input type="text" class="form-control" id="itemsnofromappointmenttb" name="itemsnofromappointmenttb" value="<?php echo $itemnopinagtibay; ?>" autocomplete="off" required="">
                            <label for="itemsnofromappointmenttb" >Item No.</label>
                        </div>

                        <div class="inputGroup d-flex">
                            <input type="text" class="form-control" id="leveltb" name="leveltb" value="<?php echo $level; ?>" autocomplete="off" required="">
                            <label for="leveltb">Level</label>
                        </div>
                        
                        <hr>

                        <div class="inputGroup d-flex "> 
                            <input type="text" class="form-control" id="specializationtb" name="specializationtb" value="<?php echo $specialization; ?>" autocomplete="off" required="">
                            <label for="specializationtb">Specialization</label>
                        </div>

                        <div class="inputGroup d-flex "> 
                            <input type="text" class="form-control" id="districttb" name="districttb" value="<?php echo $schooldistrict; ?>" autocomplete="off" required="">
                            <label for="districttb">District</label>
                        </div>

                        <div class="inputGroup d-flex ">
                            <input type="text" class="form-control" id="schooltb" name="schooltb" value="<?php echo $schoolname; ?>" autocomplete="off" required="">
                            <label for="schooltb">School</label>
                        </div>

                        <div class="inputGroup d-flex ">   
                            <input type="text" class="form-control" id="ifdetailedtb" name="ifdetailedtb" value="<?php echo $detailed; ?>" autocomplete="off" required="">
                            <label for="ifdetailedtb">If Detailed</label>
                        </div>

                        <hr>

                        <div class="saveupdatebtn text-center inputGroup" id="saveupdatebtn">
                            <button class="btn btn-primary">SAVE / UPDATE</button>
                        </div></div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>

</html>