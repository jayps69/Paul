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
            <a class="nav-link" href="ContactDetails.php">
              <i class="fas fa-phone"></i><span>CONTACT DETAILS</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="Education.php">
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
            <a class="nav-link" href="#" onclick="confirmLogout()">
              <i class="fas fa-sign-out-alt"></i><span> LOGOUT</span>
            </a>
          </li>
        </ul>
      </nav>
    </div>

    <script>
    function confirmLogout() {
      var result = confirm("Are you sure you want to logout?");
      if (result) {
        // If user confirms, redirect to logout page
        
        window.location.href = "Login.php"; // Replace "logout.php" with your actual logout page
        session_destroy();
      }
    }
  </script>