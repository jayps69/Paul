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
    <link rel="stylesheet" href="PersonalInformation.css" />


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