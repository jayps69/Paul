<?php
            // Check if the 'id' parameter exists in the URL
            if (isset($_GET['id'])) {
                $userId = $_GET['id'];

                // Query to retrieve the data from the database
            $sql = "SELECT u.photo, p.employeeno, p.lastname, p.firstname, p.middlename,  p.extensionname, 
            p.depedemail, p.addressstreet, p.addressbarangay, p.addressdistrict, p.addresscity, p.birthday, p.age, 
            p.contactno, p.gender, p.civilstatus, p.gsisno, p.philhealthno, p.birno, p.pagibigno, p.presentposition, 
            p.statusofappointment, p.natureofappointment, p.firstdayofservice, p.salarygrade, p.step, p.monthlysalary, 
            p.itemnopinagtibay, p.level, p.specialization, p.schooldistrict, p.schoolname, p.detailed
            FROM personalinfotbl AS p
            INNER JOIN user_tbl AS u ON p.userid= u.userid
            WHERE u.userid = ?"; // Modify your_table_name according to your database structure
            


                // Prepare and bind the statement
                $stmt = $conn->prepare($sql);
                $stmt->bind_param("i", $userId);

                // Execute the statement
                $stmt->execute();

                // Bind the result variables
                $stmt->bind_result(
                    $photo,
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


            }
            ?>

                    <div class="row" style="margin-left:30px;">
                            <div class="col-md-3 responsive-col">
                                <!-------First section------->
                                <div class="profilephoto">
                                    <img src="../images/<?php echo $photo; ?>" alt="profile">
                                </div>
                                <hr>
                                <div class="inputGroup d-flex ">
                                    <input type="text" class="form-control" id="Employeenotb" name="Employeenotb"
                                        value="<?php echo $employeeno; ?>" autocomplete="off" readonly readonly>
                                    <label for="Employeenotb">Employee No.</label>
                                </div>

                                <div class="inputGroup d-flex ">
                                    <input type="text" class="form-control" id="lastnametb" name="lastnametb"
                                        value="<?php echo $lastname; ?>" autocomplete="off" 
                                        autocomplete="off" readonly>
                                    <label for="lastnametb">Last Name</label>
                                </div>

                                <div class="inputGroup d-flex ">
                                    <input type="text" class="form-control" id="firstnametb" name="firstnametb"
                                        value="<?php echo $firstname; ?>" autocomplete="off" readonly>
                                    <label for="firstnametb">First Name</label>
                                </div>

                                <div class="inputGroup d-flex ">
                                    <input type="text" class="form-control" id="middlenametb" name="middlenametb"
                                        value="<?php echo $middlename; ?>" autocomplete="off" readonly>
                                    <label for="middlenametb">Middle Name</label>
                                </div>

                                <div class="inputGroup d-flex ">
                                    <input type="text" class="form-control" id="extensionnametb" name="extensionnametb"
                                        value="<?php echo $extensionname; ?>" autocomplete="off" readonly>
                                    <label for="extensionnametb">Extension Name</label>
                                </div>

                                <hr>



                            </div>

                            <div class="col-md-3 responsive-col">
                                <!-------Second section------->
                                <div class="inputGroup d-flex ">
                                    <input type="text" class="form-control" id="depedemailtb" name="depedemailtb"
                                        value="<?php echo $depedemail; ?>" autocomplete="off" readonly>
                                    <label for="depedemailtb">Deped Email</label>
                                </div>

                                <div class="inputGroup d-flex ">
                                    <input type="text" class="form-control" id="addresstb" name="addresstb"
                                        value="<?php echo $addressstreet; ?>" autocomplete="off" readonly>
                                    <label for="addresstb">Address</label>
                                </div>

                                <div class="inputGroup d-flex ">
                                    <input type="text" class="form-control" id="barangaytb" name="barangaytb"
                                        value="<?php echo $addressbarangay; ?>" autocomplete="off" readonly>
                                    <label for="barangaytb">Barangay</label>
                                </div>

                                <div class="inputGroup d-flex ">
                                    <input type="text" class="form-control" id="districttb" name="districttb"
                                        value="District <?php echo $addressdistrict; ?>" autocomplete="off" readonly>
                                    <label for="districttb">District</label>
                                </div>

                                <hr>

                                <div class="inputGroup d-flex ">
                                    <input type="text" class="form-control" id="Citytb" name="Citytb"
                                        value="<?php echo $addresscity; ?>" autocomplete="off" readonly>
                                    <label for="Citytb">City</label>
                                </div>

                                <div class="inputGroup d-flex">
                                    <input type="text" class="form-control" id="birthdaytb" name="birthdaytb"
                                        value="<?php echo $birthday; ?>" autocomplete="off" readonly>
                                    <label for="birthdaytb">Birthday</label>
                                </div>

                                <div class="inputGroup d-flex">
                                    <input type="text" class="form-control" id="agetb" name="agetb"
                                        value="<?php echo $age; ?>" autocomplete="off" readonly>
                                    <label for="agetb">Age</label>
                                </div>

                                <div class="inputGroup d-flex">
                                    <input type="text" class="form-control" id="contacttb" name="contacttb"
                                        value="<?php echo $contactno; ?>" autocomplete="off" readonly>
                                    <label for="contacttb">Contact No.</label>
                                </div>

                                <div class="inputGroup d-flex">
                                    <input type="text" class="form-control" id="gendertb" name="gendertb"
                                        value="<?php echo $gender; ?>" autocomplete="off" readonly>
                                    <label for="gendertb">Gender</label>
                                </div>



                            </div>
                            <div class="col-md-3">
                                <!-------Third section------->
                                <div class="inputGroup d-flex">
                                    <input type="text" class="form-control" id="civilstatustb" name="civilstatustb"
                                        value="<?php echo $civilstatus; ?>" autocomplete="off" readonly>
                                    <label for="civilstatustb">Civil Status</label>
                                </div>

                                <div class="inputGroup d-flex">
                                    <input type="text" class="form-control" id="gsistb" name="gsistb"
                                        value="<?php echo $gsisno; ?>" autocomplete="off" readonly>
                                    <label for="gsistb">GSIS</label>
                                </div>

                                <div class="inputGroup d-flex">
                                    <input type="text" class="form-control" id="philhealthtb" name="philhealthtb"
                                        value="<?php echo $philhealthno; ?>" autocomplete="off" readonly>
                                    <label for="philhealthtb">Philhealth</label>
                                </div>

                                <div class="inputGroup d-flex">
                                    <input type="text" class="form-control" id="birtb" name="birtb"
                                        value="<?php echo $birno; ?>" autocomplete="off" readonly>
                                    <label for="birtb">BIR</label>
                                </div>

                                <hr>

                                <div class="inputGroup d-flex">
                                    <input type="text" class="form-control" id="pagibigtb" name="pagibigtb"
                                        value="<?php echo $pagibigno; ?>" autocomplete="off" readonly>
                                    <label for="pagibigtb">Pagibig</label>
                                </div>

                                <div class="inputGroup d-flex">
                                    <input type="text" class="form-control" id="presentpositiontb"
                                        name="presentpositiontb" value="<?php echo $presentposition; ?>"
                                        autocomplete="off" readonly>
                                    <label for="presentpositiontb">Present Position</label>
                                </div>

                                <div class="inputGroup d-flex">
                                    <input type="text" class="form-control" id="statusofappointmenttb"
                                        name="statusofappointmenttb" value="<?php echo $statusofappointment; ?>"
                                        autocomplete="off" readonly>
                                    <label for="statusofappointmenttb" class="longlabel">Status of Appointment</label>
                                </div>

                                <div class="inputGroup d-flex">
                                    <input type="text" class="form-control" id="natureofappointmenttb"
                                        name="natureofappointmenttb" value="<?php echo $natureofappointment; ?>"
                                        autocomplete="off" readonly>
                                    <label for="natureofappointmenttb" class="longlabel">Nature of Appointment</label>
                                </div>

                                <div class="inputGroup d-flex">
                                    <input type="text" class="form-control" id="fdsinpresentpositiontb"
                                        name="fdsinpresentpositiontb" value="<?php echo $firstdayofservice; ?>"
                                        autocomplete="off" readonly>
                                    <label for="fdsinpresentpositiontb" class="longlabel">FDS in Present
                                        Position</label>
                                </div>

                            </div>
                            <div class="col-md-3 col-responsive">

                                <div class="inputGroup d-flex">
                                    <input type="text" class="form-control" id="salarygradetb" name="salarygradetb"
                                        value="<?php echo $salarygrade; ?>" autocomplete="off" readonly>
                                    <label for="salarygradetb">Salary Grade</label>
                                </div>

                                <div class="inputGroup d-flex">
                                    <input type="text" class="form-control" id="steptb" name="steptb"
                                        value="<?php echo $step; ?>" autocomplete="off" readonly>
                                    <label for="steptb">Step</label>
                                </div>

                                <div class="inputGroup d-flex">
                                    <input type="text" class="form-control" id="msalary" name="msalary"
                                        value="<?php echo $monthlysalary; ?>" autocomplete="off" readonly>
                                    <label for="msalary">Monthly Salary</label>
                                </div>

                                <div class="inputGroup d-flex">
                                    <input type="text" class="form-control" id="itemsnofromappointmenttb"
                                        name="itemsnofromappointmenttb" value="<?php echo $itemnopinagtibay; ?>"
                                        autocomplete="off" readonly>
                                    <label for="itemsnofromappointmenttb">Item No.</label>
                                </div>

                                <hr>

                                <div class="inputGroup d-flex">
                                    <input type="text" class="form-control" id="leveltb" name="leveltb"
                                        value="<?php echo $level; ?>" autocomplete="off" readonly>
                                    <label for="leveltb">Level</label>
                                </div>

                                <div class="inputGroup d-flex ">
                                    <input type="text" class="form-control" id="specializationtb"
                                        name="specializationtb" value="<?php echo $specialization; ?>"
                                        autocomplete="off" readonly>
                                    <label for="specializationtb">Specialization</label>
                                </div>

                                <div class="inputGroup d-flex ">
                                    <input type="text" class="form-control" id="districttb1" name="districttb1"
                                        value="<?php echo $schooldistrict; ?>" autocomplete="off" readonly>
                                    <label for="districttb1">District</label>
                                </div>

                                <div class="inputGroup d-flex ">
                                    <input type="text" class="form-control" id="schooltb" name="schooltb"
                                        value="<?php echo $schoolname; ?>" autocomplete="off" readonly>
                                    <label for="schooltb">School</label>
                                </div>

                                <div class="inputGroup d-flex ">
                                    <input type="text" class="form-control" id="ifdetailedtb" name="ifdetailedtb"
                                        value="<?php echo $detailed; ?>" autocomplete="off" readonly>
                                    <label for="ifdetailedtb">If Detailed</label>
                                </div>



                            </div>
                        </div>