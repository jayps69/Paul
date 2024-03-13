
<div id="sidebar">
      <div class="navbar-brand">
        <img src="../Images/Logonobg.gif" alt="Logo" class="d-inline-block align-top">
      </div>
      <nav class="navbar">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="DivisionDashboard.php">
              <i class="fas fa-user"></i><span>DIVISION</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="ElementaryDashboard.php">
              <i class="fas fa-address-card"></i><span>ELEMENTARY</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="SecondaryDashboard.php">
              <i class="fas fa-phone"></i><span>SECONDARY</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="ShsDashboard.php">
              <i class="fas fa-graduation-cap"></i><span>SHS</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="Summary.php">
              <i class="fas fa-check-circle"></i><span>SUMMARY</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="FilterData.php">
              <i class="fas fa-briefcase"></i><span>FILTER DATA</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="Employee.php">
              <i class="fas fa-handshake"></i><span>EMPLOYEE</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="SearchItem.php">
              <i class="fas fa-chalkboard"></i><span>SEARCH ITEM</span>
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
    window.location.href = "Admin/logout1.php"; // Redirect to logout.php for server-side logout
  }
}
</script>