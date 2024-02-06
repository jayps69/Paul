<?php
include 'Templates/head.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Education</title>
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
    />
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <link rel="stylesheet" href="Education.css">
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
        <header>
          <div>
            <p1>SDO QUEZON CITY</p1>
            <p2>TEACHING HUMAN RESOURCE UPDATE SYSTEM TECHNOLOGY</p2>
            <p3>TEACHER'S PORTAL</p3>
          </div>
          <div id="profile">
            <img src="Images/default.png" alt="Profile Photo" />
            <span>John Paul Estanislao</span>
          </div>
        </header>

       
        <div class="AddButton">
        <h1>Education</h1>

        <button class="addRecord" name="addRecord" data-toggle="modal" data-target="#addRecord">ADD RECORD</button>

        </div>
        

        <div class="Education-box">
        <section class="intro">
  
  <div class="mask">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="card shadow-2-strong" style="background-color: #f5f7fa;">
            <div class="card-body">
              <div class="table-responsive scrollable-table">
                <table class="table table-borderless mb-0">
                  <thead>
                    <tr>
                      
                      <th scope="col">LEVEL</th>
                      <th scope="col">SCHOOL</th>
                      <th scope="col">DEGREE</th>
                      <th scope="col">FROM</th>
                      <th scope="col">TO</th>
                      <th scope="col">EDIT</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      

                      <td>ELEMENTARY</td>
                      <td>School1</td>
                      <td>Sample Degree</td>
                      <td>1997</td>
                      <td>2005</td>

                      <td>
                        <button type="button" class="btn btn-danger btn-sm px-3">
                          <i class="fas fa-pencil-alt"></i>
                        </button>
                      </td>
                    </tr>
                    <tr>
                      

                      <td>ELEMENTARY</td>
                      <td>School1</td>
                      <td>Sample Degree</td>
                      <td>1997</td>
                      <td>2005</td>

                      <td>
                        <button type="button" class="btn btn-danger btn-sm px-3">
                          <i class="fas fa-pencil-alt"></i>
                        </button>
                      </td>
                    </tr>
                    <tr>
                      

                      <td>ELEMENTARY</td>
                      <td>School1</td>
                      <td>Sample Degree</td>
                      <td>1997</td>
                      <td>2005</td>

                      <td>
                        <button type="button" class="btn btn-danger btn-md px-3">
                          <i class="fas fa-pencil-alt"></i>
                        </button>
                      </td>
                    </tr>
                    <tr>
                      

                      <td>ELEMENTARY</td>
                      <td>School1</td>
                      <td>Sample Degree</td>
                      <td>1997</td>
                      <td>2005</td>
                      <td>

                        <button type="button" class="btn btn-danger btn-sm px-3">
                          <i class="fas fa-pencil-alt"></i>
                        </button>
                      </td>
                    </tr>
                    <tr>
                      

                      <td>ELEMENTARY</td>
                      <td>School1</td>
                      <td>Sample Degree</td>
                      <td>1997</td>
                      <td>2005</td>
                      <td>
                          
                        <button type="button" class="btn btn-danger btn-sm px-3">
                          <i class="fas fa-pencil-alt"></i>
                        </button>
                      </td>
                    </tr>
                    <tr>
                      
                      <td>ELEMENTARY</td>
                      <td>School1</td>
                      <td>Sample Degree</td>
                      <td>1997</td>
                      <td>2005</td>

                      <td>
                        <button type="button" class="btn btn-danger btn-sm px-3">
                          <i class="fas fa-pencil-alt"></i>
                        </button>
                      </td>
                    </tr>
                    <tr>
                      
                      <td>ELEMENTARY</td>
                      <td>School1</td>
                      <td>Sample Degree</td>
                      <td>1997</td>
                      <td>2005</td>
                      <td>

                        <button type="button" class="btn btn-danger btn-sm px-3">
                          <i class="fas fa-pencil-alt"></i>
                        </button>
                      </td>
                    </tr>

                    <tr>
                    

                      <td>ELEMENTARY</td>
                      <td>School1</td>
                      <td>Sample Degree</td>
                      <td>1997</td>
                      <td>2005</td>
                      <td>

                        <button type="button" class="btn btn-danger btn-sm px-3">
                          <i class="fas fa-pencil-alt"></i>
                        </button>
                      </td>
                    </tr>

                    
                  </tbody>
                </table>
              </div>
              
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  
</section>

<div class="modal fade" id="addRecord" tabindex="-1" role="dialog" aria-labelledby="titleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="titleModalLabel">ADD RECORD</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">


      
      <div class="modal-footer justify-content-center">
        <button type="button" id="ModalSave" class="btn btn-primary" >SAVE</button>
      </div>
    </div>
  </div>
</div>



    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  </body>
</html>
