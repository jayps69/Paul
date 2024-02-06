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
  </div>
  

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>

</html>