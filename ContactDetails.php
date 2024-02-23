<?php
include 'Templates/head.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Contact Details</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
  <link rel="stylesheet" href="ContactDetails.css">
  <style>

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
      $sql = "SELECT `alteremail1`, `alteremail2`, `qcsimcard`, `depedsimcard`, `neapsimcard`, `othercontacts`, `facebookaccountlink` FROM contactstbl WHERE userid = ?"; // Modify your_table_name according to your database structure
      
      // Prepare and bind the statement
      $stmt = $conn->prepare($sql);
      $stmt->bind_param("i", $userId); // Assuming $your_id is the ID of the record you want to retrieve
      
      // Execute the statement
      $stmt->execute();

      // Bind the result variables
      $stmt->bind_result($AltEmail, $AltEmail2, $QCSim, $DEPEDSim, $NEAPSim, $OtherContactNo, $FBName);

      // Fetch the data
      $stmt->fetch();

      // Close the statement
      $stmt->close();

      // Close the connection
      $conn->close();
      ?>
      <h1>CONTACT DETAILS</h1>
      <div class="ContactDetails-box">
        <div class="row">
          <div class="col-md-4">
            <!-------First section------->
            <div class="form-group d-flex">
              <div class="col-md-6">
                <label for="AltEmail">Alternate Email : </label>
              </div>
              <div class="input-group mb-3">
                <div class="col-md-4">
                  <input type="text" class="form-control" id="AltEmail" name="AltEmail"
                    value="<?php echo $AltEmail; ?>" />
                </div>

                <div class="col-md-6">
                  <label for="AltEmail2"></label>
                </div>
                <div class="col-md-4">
                  <input type="text" class="form-control" id="AltEmail2" name="AltEmail2" value="<?php echo $AltEmail2; ?>" />
                </div>
              </div>
            </div>
            <div class="form-group d-flex">
              <div class="col-md-6">
                <label for="QCSim">QC Sim Card No.: </label>
              </div>
              <div class="col-md-4">
                <input type="text" class="form-control" id="QCSim" name="QCSim" value="<?php echo $QCSim; ?>" />
              </div>
            </div>
            <div class="form-group d-flex">
              <div class="col-md-6">
                <label for="DEPEDSim">DEPED Sim Card No.: </label>
              </div>
              <div class="col-md-4">
                <input type="text" class="form-control" id="DEPEDSim" name="DEPEDSim"  value="<?php echo $DEPEDSim; ?>"/>
              </div>
            </div>
            <div class="form-group d-flex">
              <div class="col-md-6">
                <label for="NEAPSim">NEAP Sim Card No.: </label>
              </div>
              <div class="col-md-4">
                <input type="text" class="form-control" id="NEAPSim" name="NEAPSim" value="<?php echo $NEAPSim; ?>" />
              </div>
            </div>
            <div class="form-group d-flex">
              <div class="col-md-6">
                <label for="OtherContactNo">Other Contact No.: </label>
              </div>
              <div class="col-md-4">
                <input type="text" class="form-control" id="OtherContactNo" name="OtherContactNo" value="<?php echo $OtherContactNo; ?>" />
              </div>
            </div>
            <div class="form-group d-flex">
              <div class="col-md-6">
                <label for="FBName">Name on Facebook Profile: </label>
              </div>
              <div class="col-md-4">
                <input type="text" class="form-control" id="FBName" name="FBName" value="<?php echo $FBName; ?>" />
              </div>
            </div>

            <div class="form-group d-flex">
              <div class="col-md-6"></div>
              <div class="col-md-6 saveupdatebtn text-center" id="saveupdatebtn">
                <button class="btn btn-primary">SAVE / UPDATE</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>

</html>