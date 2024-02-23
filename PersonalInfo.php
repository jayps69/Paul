<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Personal Information</title>
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
    />

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
        border-left: 5px solid #007bff;
        border-right: 5px solid #007bff;
        border-bottom: 5px solid #007bff;
        padding: 10px;
        border-radius: 25px;
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
        border: 3px solid #007bff;
        padding: 10px;
        margin-top: 20px;
        border-radius: 25px;
        width: 1400px;
        height: 550px;
        margin: 0 auto;
        width: 100%;
        transition: height 0.5s ease;
      }

      .PersonalInfo-box input {
      font-family: 'kameron', sans-serif; /* Replace 'YourChosenFont' with the desired font */
      font-size: 14px; /* Adjust the font size as needed */
      width: 180px;
      height: 20px;
      margin-left: 5px;
      border: 1px solid #000;
      
    }

    .PersonalInfo-box label {
      font-family: 'kameron', sans-serif; /* Replace 'YourChosenFont' with the desired font */
      font-size: 14px; /* Adjust the font size as needed */
      font-weight: bold; /* Optional: add bold font weight */
    }

    .btn-primary {
        border-radius: 25px;
        font-size: 16px;
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
height: 800px ;

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
height: 1500px ;

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

        <h1>PERSONAL INFORMATION</h1>

          <div class="PersonalInfo-box">
              <div class="row">
                <div class="col-md-4 responsive-col">
                  <!-------First section------->
                  <div class="form-group d-flex ">
                    <label for="Employeenotb">Employee No.: </label>
                    <input type="text" class="form-control" id="Employeenotb" name="Employeenotb">
                  </div>

                  <div class="form-group d-flex ">
                      <label for="lastnametb">Last Name: </label>
                      <input type="text" class="form-control" id="lastnametb" name="lastnametb">
                  </div>

                  <div class="form-group d-flex ">
                      <label for="firstnametb">First Name: </label>
                      <input type="text" class="form-control" id="firstnametb" name="firstnametb">
                  </div>

                  <div class="form-group d-flex ">
                      <label for="middlenametb">Middle Name: </label>
                      <input type="text" class="form-control" id="middlenametb" name="middlenametb">
                  </div>

                  <div class="form-group d-flex ">
                      <label for="extensionnametb">Extension Name: </label>
                      <input type="text" class="form-control" id="extensionnametb" name="extensionnametb">
                  </div>

                  <div class="form-group d-flex ">
                      <label for="depedemailtb">Deped Email: </label>
                      <input type="text" class="form-control" id="depedemailtb" name="depedemailtb">
                  </div>

                  <hr>

                  <div class="form-group d-flex ">
                      <label for="addresstb">Address: </label>
                      <input type="text" class="form-control" id="addresstb" name="addresstb">
                  </div>

                  <div class="form-group d-flex ">
                      <label for="barangaytb">Barangay: </label>
                      <input type="text" class="form-control" id="barangaytb" name="barangaytb">
                  </div>

                  <div class="form-group d-flex ">
                      <label for="districttb">District: </label>
                      <input type="text" class="form-control" id="districttb" name="districttb">
                  </div>

                  <div class="form-group d-flex ">
                    <label for="Citytb">City: </label>
                    <input type="text" class="form-control" id="Citytb" name="Citytb">
                </div>

                <div class="form-group d-flex">
                  <label for="birthdaytb">Birthday: </label>
                  <input type="text" class="form-control" id="birthdaytb" name="birthdaytb">
                </div>

                </div>

              <div class="col-md-4">
                <!-------Second section------->
                <div class="form-group d-flex">
                    <label for="agetb">Age: </label>
                    <input type="text" class="form-control" id="agetb" name="agetb">
                </div>

                <div class="form-group d-flex">
                    <label for="contacttb">Contact No.: </label>
                    <input type="text" class="form-control" id="contacttb" name="contacttb">
                </div>

                <div class="form-group d-flex">
                    <label for="gendertb">Gender: </label>
                    <input type="text" class="form-control" id="gendertb" name="gendertb">
                </div>

                <div class="form-group d-flex">
                    <label for="civilstatustb">Civil Status: </label>
                    <input type="text" class="form-control" id="civilstatustb" name="civilstatustb">
                </div>

                <div class="form-group d-flex">
                    <label for="gsistb">GSIS: </label>
                    <input type="text" class="form-control" id="gsistb" name="gsistb">
                </div>

                <div class="form-group d-flex">
                    <label for="philhealthtb">Philhealth: </label>
                    <input type="text" class="form-control" id="philhealthtb" name="philhealthtb">
                </div>

                <div class="form-group d-flex">
                  <label for="birtb">BIR: </label>
                  <input type="text" class="form-control" id="birtb" name="birtb">
              </div>
                <div class="form-group d-flex">
                    <label for="pagibigtb">Pagibig: </label>
                    <input type="text" class="form-control" id="pagibigtb" name="pagibigtb">
                </div>

                <div class="form-group d-flex">
                    <label for="presentpositiontb">Present Position: </label>
                    <input type="text" class="form-control" id="presentpositiontb" name="presentpositiontb">
                </div>

                <div class="form-group d-flex">
                    <label for="statusofappointmenttb">Status of Appointment: </label>
                    <input type="text" class="form-control" id="statusofappointmenttb" name="statusofappointmenttb">
                </div>

                <div class="form-group d-flex">
                  <label for="natureofappointmenttb">Nature of Appointment: </label>
                  <input type="text" class="form-control" id="natureofappointmenttb" name="natureofappointmenttb">
                </div>
              </div>
      
              <div class="col-md-4">
                <!-------Third section------->
                <div class="form-group d-flex">
                    <label for="fdsinpresentpositiontb">FDS in Present Position: </label>
                    <input type="text" class="form-control" id="fdsinpresentpositiontb" name="fdsinpresentpositiontb">
                </div>

                <div class="form-group d-flex">
                    <label for="salarygradetb">Salary Grade: </label>
                    <input type="text" class="form-control" id="salarygradetb" name="salarygradetb">
                </div>

                <div class="form-group d-flex">
                    <label for="steptb">Step: </label>
                    <input type="text" class="form-control" id="steptb" name="steptb">
                </div>

                <div class="form-group d-flex">
                    <label for="msalary">Monthly Salary: </label>
                    <input type="text" class="form-control" id="msalary" name="msalary">
                </div>

                <div class="form-group d-flex">
                    <label for="itemsnofromappointmenttb">Items No. from APPOINTMENT: </label>
                    <input type="text" class="form-control" id="itemsnofromappointmenttb" name="itemsnofromappointmenttb">
                </div>

                <div class="form-group d-flex">
                    <label for="leveltb">Level: </label>
                    <input type="text" class="form-control" id="leveltb" name="leveltb">
                </div>

                <div class="form-group d-flex ">
                  <label for="specializationtb">Specialization: </label>
                  <input type="text" class="form-control" id="specializationtb" name="specializationtb">
              </div>

              <div class="form-group d-flex ">
                <label for="districttb">District: </label>
                <input type="text" class="form-control" id="districttb" name="districttb">
            </div>

            <div class="form-group d-flex ">
              <label for="schooltb">School: </label>
              <input type="text" class="form-control" id="schooltb" name="schooltb">
          </div>

          <div class="form-group d-flex ">
            <label for="ifdetailedtb">If Detailed: </label>
            <input type="text" class="form-control" id="ifdetailedtb" name="ifdetailedtb">
        </div>
                <div class="saveupdatebtn text-center" id="saveupdatebtn">
                    <button class="btn btn-primary">SAVE / UPDATE</button>
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
