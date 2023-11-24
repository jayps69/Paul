<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Account Page</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
  <link rel="stylesheet" href="AccountStyle.css">
</head>
<body>



  <div id="wrapper">

    <!-- Sidebar -->
    <div id="sidebar">
      <div class="navbar-brand">
        <img src="Images/Logonobg.gif" alt="Logo" class="d-inline-block align-top">
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
              <i class="fas fa-address-card"></i><span>PERSONAL INFORMATION</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
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
            <a class="nav-link" href="#">
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
                <img src="Images/default.png" alt="Profile Photo">
                <span>John Paul Estanislao</span>
              </div>
          </header> 

          <h1>ACCOUNT</h1>

          <div class="container">
            <div class="row">
              <!-- AccountDetails-box (6 columns) -->
              <div class="AccountDetails-box" id="AccountDetails-box">
                <div class="row ">
                  <div class="col-md-6 ">
                    <p1 class="label">EMPLOYEE NO. :</p1>
                    <p1 class="label">LAST NAME :</p1>
                    <p1 class="label">FIRST NAME :</p1>
                    
                    <p1 class="label">DEPED EMAIL :</p1>
                  </div>
                  <div class="col-md-6">
                    <p1 class="answer">123456</p1>
                    <p1 class="answer">Estanislao</p1>
                    <p1 class="answer">John Paul</p1>
                    <p1 class="answer">johnpaulestanislao32@yahoo.com</p1>
                  </div>
                  
                </div>
              </div>
              
              
          
              <!-- AccountPicture-box and Changepasswordbtn (6 columns) -->
              <div class="col-md-6 ">
                <div class="AccountPicture-box" id="AccountPicture-box">
                  <!-- Content for AccountPicture-box goes here -->
                  <img src="Images/default.png" alt="Profile Photo">
                </div>
                <div class="Changepasswordbtn" id="Changepasswordbtn">
                  <button class="btn btn-primary">CHANGE PASSWORD</button>
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
