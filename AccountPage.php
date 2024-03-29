<?php
include 'Templates/head.php';
?>

<body>



  <div id="wrapper">

    <!-- Sidebar -->
    <?php
    include 'Templates/sidebar.php';
    ?>


    <div id="content">
      <?php
      include 'Templates/header.php';
      ?>

      <h1>ACCOUNT</h1>
        <?php
          $sql = "SELECT employeeno, lastname, firstname, depedemail FROM user_tbl WHERE uname = '$username'";
          $result = $conn->query($sql);
          if ($result->num_rows == 1) {
              // Fetch data from the result set
              $row = $result->fetch_assoc();
              $employeeNo = $row["employeeno"];
              $lastName = $row["lastname"];
              $firstName = $row["firstname"];
              $depedEmail = $row["depedemail"];

              $firstName = ucfirst(strtolower($firstName));
              $lastName = ucfirst(strtolower($lastName));
          } else {
              // Handle the case where user data is not found
              $error_message = "User data not found.";
          }
        ?>
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
                    <p1 class="answer"><?php echo $employeeNo; ?></p1>
                    <p1 class="answer"><?php echo $lastName; ?></p1>
                    <p1 class="answer"><?php echo $firstName; ?></p1>
                    <p1 class="answer"><?php echo $depedEmail; ?></p1>
              </div>

            </div>
          </div>



          <!-- AccountPicture-box and Changepasswordbtn (6 columns) -->
          <div class="col-md-6 ">
            <div class="AccountPicture-box" id="AccountPicture-box">
              <!-- Content for AccountPicture-box goes here -->
              <img src="images/enano.jpg" alt="Profile Photo" />
              <input type="file" id="upload" style="display: none;" accept="image/*">
              <label for="upload" class="button btn-primary btn">Change Photo</label>
              
            </div>
            <div class="Changepasswordbtn" id="Changepasswordbtn">
              <button class="btn btn-primary">CHANGE PASSWORD</button>
            </div>

          </div>
        </div>
      </div>


    </div>
  </div>
  

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script>
  document.getElementById("upload").addEventListener("change", function() {
    // Handle file selection here
    console.log("File selected:", this.files[0]);
  });

</script>
</body>

</html>