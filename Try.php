<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Personal Information</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
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
      <div id="sidebar">
        <div class="navbar-brand">
          <img src="Images/Logonobg.gif" alt="Logo" class="d-inline-block align-top"/>
        </div>
        <nav class="navbar">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="AccountPage.php">
                <i class="fas fa-user"></i><span>ACCOUNT</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index.html">
                <i class="fas fa-address-card"></i
                ><span>PERSONAL INFORMATION</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="ContactDetails.html">
                <i class="fas fa-phone"></i><span>CONTACT DETAILS</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">
                <i class="fas fa-graduation-cap"></i><span>EDUCATION</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">
                <i class="fas fa-check-circle"></i><span>ELIGIBILITY</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">
                <i class="fas fa-briefcase"></i><span>WORK EXPERIENCE</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">
                <i class="fas fa-handshake"></i><span>VOLUNTEER WORK</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">
                <i class="fas fa-chalkboard"></i><span>TRAININGS</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">
                <i class="fas fa-paint-brush"></i><span>SKILLS & HOBBIES</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="AboutUs.html">
                <i class="fas fa-info-circle"></i><span>ABOUT US</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">
                <i class="fas fa-sign-out-alt"></i><span> LOGOUT</span>
              </a>
            </li>
          </ul>
        </nav>
      </div>

      <div id="content">
        <header>
          <div>
            <p1>SDO QUEZON CITY</p1>
            <p2>TEACHING HUMAN RESOURCE UPDATE SYSTEM TECHNOLOGY</p2>
            <p3>TEACHER'S PORTAL</p3>
          </div>
          <div id="profile">
          <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Offcanvas</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Dropdown
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </li>
        </ul>
        <form class="d-flex mt-3" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </div>
            <img src="Images/default.png" alt="Profile Photo" />
            <span>John Paul Estanislao</span>
          </div>
        </header>

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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

  </body>
</html>
