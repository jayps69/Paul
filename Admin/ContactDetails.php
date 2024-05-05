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

        .profilephoto{
            height: 41.65%;

        }
        .profilephoto img{
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
            include '../Templates/adminheader.php'
            ?>
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

    // Close the connection
    $conn->close();
}
            ?>
            <h1>CONTACT DETAILS</h1>

            <div class="cycle-tab-container">
              <ul class="nav nav-tabs">
                  <li class="cycle-tab-item ">
                      <a class="nav-link active" role="tab" data-toggle="tab" href="#UNITHEADS" id="Unithead-tab">Personal Information</a>
                      <div class="progress" style="height: 4px; margin-bottom: -4px;">
                          <div class="progress-bar" role="progressbar" style="width: 0%;" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                  </li>
                  <li class="cycle-tab-item">
                      <a class="nav-link" role="tab" data-toggle="tab" href="#DEVELOPER" id="Developer-tab">Contact No</a>
                      <div class="progress" style="height: 4px; margin-bottom: -4px;">
                          <div class="progress-bar" role="progressbar" style="width: 0%;" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                  </li>
                  <li class="cycle-tab-item">
                      <a class="nav-link" role="tab" data-toggle="tab" href="#ICTTEAM" id="Ictteam-tab">Work History</a>
                      <div class="progress" style="height: 4px; margin-bottom: -4px;">
                          <div class="progress-bar" role="progressbar" style="width: 0%;" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                  </li>
                  <li class="cycle-tab-item">
                      <a class="nav-link" role="tab" data-toggle="tab" href="#ADVISER" id="Adviser-tab">Education</a>
                      <div class="progress" style="height: 4px; margin-bottom: -4px;">
                          <div class="progress-bar" role="progressbar" style="width: 0%;" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                  </li>
                  <li class="cycle-tab-item">
                      <a class="nav-link" role="tab" data-toggle="tab" href="#ADVISER" id="Adviser-tab">Eligibility</a>
                      <div class="progress" style="height: 4px; margin-bottom: -4px;">
                          <div class="progress-bar" role="progressbar" style="width: 0%;" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                  </li>
                  <li class="cycle-tab-item">
                      <a class="nav-link" role="tab" data-toggle="tab" href="#ADVISER" id="Adviser-tab">Training</a>
                      <div class="progress" style="height: 4px; margin-bottom: -4px;">
                          <div class="progress-bar" role="progressbar" style="width: 0%;" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                  </li>
                  <li class="cycle-tab-item">
                      <a class="nav-link" role="tab" data-toggle="tab" href="#ADVISER" id="Adviser-tab">Skill</a>
                      <div class="progress" style="height: 4px; margin-bottom: -4px;">
                          <div class="progress-bar" role="progressbar" style="width: 0%;" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                  </li>
              </ul>
            </div>

            <div class="PersonalInfo-box">
                <div class="row" style="margin-left:30px;">
                <div class="col-md-3">
            <!-------First section------->
            <div class="inputGroup d-flex">
                <input type="text" class="form-control" id="AltEmail" name="AltEmail" value="<?php echo $alteremail1; ?>" required="" autocomplete="off"/>
                <label for="AltEmail">Alternate Email</label>
            </div>
            <div class="inputGroup d-flex">
                <input type="text" class="form-control" id="AltEmail2" name="AltEmail2" value="<?php echo $alteremail2; ?>" required="" autocomplete="off"/>
            </div>
          </div>
          <div class="col-md-3">
            <div class="inputGroup d-flex">
              <input type="text" class="form-control" id="QCSim" name="QCSim" value="<?php echo $qcsimcard; ?>" required="" autocomplete="off"/>
              <label for="QCSim">QC Sim Card No.</label>
            </div>
            <div class="inputGroup d-flex">
              <input type="text" class="form-control" id="DEPEDSim" name="DEPEDSim"  value="<?php echo $depedsimcard; ?>" required="" autocomplete="off"/>
              <label for="DEPEDSim">DEPED Sim Card No.</label>
            </div>
          </div>
          <div class="col-md-3">
            <div class="inputGroup d-flex">
              <input type="text" class="form-control" id="NEAPSim" name="NEAPSim" value="<?php echo $neapsimcard; ?>" required="" autocomplete="off"/>
              <label for="NEAPSim">NEAP Sim Card No.</label>
            </div>
            <div class="inputGroup d-flex">
              <input type="text" class="form-control" id="OtherContactNo" name="OtherContactNo" value="<?php echo $othercontacts; ?>" required="" autocomplete="off"/>
              <label for="OtherContactNo">Other Contact No.</label>
            </div>
          </div>
          <div class="col-md-3">
            <div class="inputGroup d-flex">
              <input type="text" class="form-control" id="FBName" name="FBName" value="<?php echo $facebookaccountlink; ?>" required="" autocomplete="off"/>
              <label for="FBName">Name on Facebook Profile</label>
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