<?php

// Check if the 'id' parameter exists in the URL
if(isset($_GET['id'])) {
$userId = $_GET['id'];

// Query to retrieve the data from the database
$sql = "SELECT alteremail1 , alteremail2, qcsimcard, depedsimcard, neapsimcard, othercontacts, facebookaccountlink
FROM contactstbl 
WHERE userid = ?"; // Modify your_table_name according to your database structure



// Prepare and bind the statement
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $userId);

// Execute the statement
$stmt->execute();

// Bind the result variables
$stmt->bind_result(
$alteremail1,
$alteremail2,
$qcsimcard,
$depedsimcard,
$neapsimcard,
$othercontacts,
$facebookaccountlink
);

// Fetch the data
$stmt->fetch();

// Close the statement
$stmt->close();


}

?>

<div class="row" style="margin-left:30px;">

                            <div class="col-md-3">
                                <!-------First section------->
                                <div class="inputGroup d-flex">
                                    <input type="text" class="form-control" id="AltEmail" name="AltEmail"
                                        value="<?php echo $alteremail1; ?>" readonly autocomplete="off" />
                                    <label for="AltEmail">Alternate Email</label>
                                </div>
                                <div class="inputGroup d-flex">
                                    <input type="text" class="form-control" id="AltEmail2" name="AltEmail2"
                                        value="<?php echo $alteremail2; ?>" readonly autocomplete="off" />
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="inputGroup d-flex">
                                    <input type="text" class="form-control" id="QCSim" name="QCSim"
                                        value="<?php echo $qcsimcard; ?>" readonly autocomplete="off" />
                                    <label for="QCSim">QC Sim Card No.</label>
                                </div>
                                <div class="inputGroup d-flex">
                                    <input type="text" class="form-control" id="DEPEDSim" name="DEPEDSim"
                                        value="<?php echo $depedsimcard; ?>" readonly autocomplete="off" />
                                    <label for="DEPEDSim">DEPED Sim Card No.</label>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="inputGroup d-flex">
                                    <input type="text" class="form-control" id="NEAPSim" name="NEAPSim"
                                        value="<?php echo $neapsimcard; ?>" readonly autocomplete="off" />
                                    <label for="NEAPSim">NEAP Sim Card No.</label>
                                </div>
                                <div class="inputGroup d-flex">
                                    <input type="text" class="form-control" id="OtherContactNo" name="OtherContactNo"
                                        value="<?php echo $othercontacts; ?>" readonly autocomplete="off" />
                                    <label for="OtherContactNo">Other Contact No.</label>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="inputGroup d-flex">
                                    <input type="text" class="form-control" id="FBName" name="FBName"
                                        value="<?php echo $facebookaccountlink; ?>" readonly autocomplete="off" />
                                    <label for="FBName">Name on Facebook Profile</label>
                                </div>

                            </div>
                        </div>