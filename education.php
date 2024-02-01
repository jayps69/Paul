<?php 
include 'Templates/head.php';
?>
<body>
    <?php 
      include 'Templates/header.php';
    ?>
    
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
    
    
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="logoutModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="logoutModalLabel">Confirm Logout</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            Are you sure you want to logout?
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-primary" data-dismiss="modal">Cancel</button>
            <a href="../login.php" class="btn btn-danger">Logout</a>
          </div>
        </div>
      </div>
    </div>
    
                
                <div class="container" >
    
    
    <h3 class="education-header" style="margin-top:20px;">Education</h3>
    <hr>
    
    
      <section class="intro">
      
          <div class="mask d-flex align-items-center">
            <div class="container">
              <div class="row justify-content-center">
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
          <button class="addRecord" name="addRecord" data-toggle="modal" data-target="#addRecord">ADD RECORD</button>
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
    
    
          <div class="input-group">
            <select required="" id="select-Level" name="select-Level" class="dropdown" required>
                <option value=""></option>
                <option value="ELEMENTARY">ELEMENTARY</option>
                <option value="SECONDARY">SECONDARY</option>
                <option value="VOCATIONAL">VOCATIONAL</option>
                <option value="COLLEGE">COLLEGE</option>
                <option value="MASTERS DEGREE">MASTERS DEGREE</option>
                <option value="DOCTORATE DEGREE">DOCTORATE DEGREE</option>
            </select>
                <label class="user-label-dropdown">LEVEL</label>
        </div>
    
        <div class="input-group">
            <input required="" type="text" name="School" id="School" autocomplete="off" class="input" required>
            <label class="user-label">SCHOOL</label>
        </div>
    
        <div class="input-group">
            <input required="" type="text" name="Degree" id="Degree" autocomplete="off" class="input" required>
            <label class="user-label">DEGREE</label>
        </div>
    
        
        <div class="input-group">
            <select required="" id="select-Datefrom" name="select-Datefrom" class="dropdown" required>
                <option value=""></option>
                        <option value="1970">1970</option>
                                            
                        <option value="1971">1971</option>
                                            
                        <option value="1972">1972</option>
                                            
                        <option value="1973">1973</option>
                                            
                        <option value="1974">1974</option>
                                            
                        <option value="1975">1975</option>
                                            
                        <option value="1976">1976</option>
                                            
                        <option value="1977">1977</option>
                                            
                        <option value="1978">1978</option>
                                            
                        <option value="1979">1979</option>
                                            
                        <option value="1980">1980</option>
                                            
                        <option value="1981">1981</option>
                                            
                        <option value="1982">1982</option>
                                            
                        <option value="1983">1983</option>
                                            
                        <option value="1984">1984</option>
                                            
                        <option value="1985">1985</option>
                                            
                        <option value="1986">1986</option>
                                            
                        <option value="1987">1987</option>
                                            
                        <option value="1988">1988</option>
                                            
                        <option value="1989">1989</option>
                                            
                        <option value="1990">1990</option>
                                            
                        <option value="1991">1991</option>
                                            
                        <option value="1992">1992</option>
                                            
                        <option value="1993">1993</option>
                                            
                        <option value="1994">1994</option>
                                            
                        <option value="1995">1995</option>
                                            
                        <option value="1996">1996</option>
                                            
                        <option value="1997">1997</option>
                                            
                        <option value="1998">1998</option>
                                            
                        <option value="1999">1999</option>
                                            
                        <option value="2000">2000</option>
                                            
                        <option value="2001">2001</option>
                                            
                        <option value="2002">2002</option>
                                            
                        <option value="2003">2003</option>
                                            
                        <option value="2004">2004</option>
                                            
                        <option value="2005">2005</option>
                                            
                        <option value="2006">2006</option>
                                            
                        <option value="2007">2007</option>
                                            
                        <option value="2008">2008</option>
                                            
                        <option value="2009">2009</option>
                                            
                        <option value="2010">2010</option>
                                            
                        <option value="2011">2011</option>
                                            
                        <option value="2012">2012</option>
                                            
                        <option value="2013">2013</option>
                                            
                        <option value="2014">2014</option>
                                            
                        <option value="2015">2015</option>
                                            
                        <option value="2016">2016</option>
                                            
                        <option value="2017">2017</option>
                                            
                        <option value="2018">2018</option>
                                            
                        <option value="2019">2019</option>
                                            
                        <option value="2020">2020</option>
                                            
                        <option value="2021">2021</option>
                                            
                        <option value="2022">2022</option>
                                            
                        <option value="2023">2023</option>
            </select>
                <label class="user-label-dropdown">FROM</label>
        </div>
    
        
        <div class="input-group">
            <select required="" id="select-Dateto" name="select-Dateto" class="dropdown" required>
                <option value=""></option>
                <option value="1970">1970</option>
                                            
                        <option value="1971">1971</option>
                                            
                        <option value="1972">1972</option>
                                            
                        <option value="1973">1973</option>
                                            
                        <option value="1974">1974</option>
                                            
                        <option value="1975">1975</option>
                                            
                        <option value="1976">1976</option>
                                            
                        <option value="1977">1977</option>
                                            
                        <option value="1978">1978</option>
                                            
                        <option value="1979">1979</option>
                                            
                        <option value="1980">1980</option>
                                            
                        <option value="1981">1981</option>
                                            
                        <option value="1982">1982</option>
                                            
                        <option value="1983">1983</option>
                                            
                        <option value="1984">1984</option>
                                            
                        <option value="1985">1985</option>
                                            
                        <option value="1986">1986</option>
                                            
                        <option value="1987">1987</option>
                                            
                        <option value="1988">1988</option>
                                            
                        <option value="1989">1989</option>
                                            
                        <option value="1990">1990</option>
                                            
                        <option value="1991">1991</option>
                                            
                        <option value="1992">1992</option>
                                            
                        <option value="1993">1993</option>
                                            
                        <option value="1994">1994</option>
                                            
                        <option value="1995">1995</option>
                                            
                        <option value="1996">1996</option>
                                            
                        <option value="1997">1997</option>
                                            
                        <option value="1998">1998</option>
                                            
                        <option value="1999">1999</option>
                                            
                        <option value="2000">2000</option>
                                            
                        <option value="2001">2001</option>
                                            
                        <option value="2002">2002</option>
                                            
                        <option value="2003">2003</option>
                                            
                        <option value="2004">2004</option>
                                            
                        <option value="2005">2005</option>
                                            
                        <option value="2006">2006</option>
                                            
                        <option value="2007">2007</option>
                                            
                        <option value="2008">2008</option>
                                            
                        <option value="2009">2009</option>
                                            
                        <option value="2010">2010</option>
                                            
                        <option value="2011">2011</option>
                                            
                        <option value="2012">2012</option>
                                            
                        <option value="2013">2013</option>
                                            
                        <option value="2014">2014</option>
                                            
                        <option value="2015">2015</option>
                                            
                        <option value="2016">2016</option>
                                            
                        <option value="2017">2017</option>
                                            
                        <option value="2018">2018</option>
                                            
                        <option value="2019">2019</option>
                                            
                        <option value="2020">2020</option>
                                            
                        <option value="2021">2021</option>
                                            
                        <option value="2022">2022</option>
                                            
                        <option value="2023">2023</option>
            </select>
                <label class="user-label-dropdown">TO</label>
        </div>
    
        
    
          </div>
          <div class="modal-footer justify-content-center"">
            <button type="button" class="btn btn-primary" >SAVE</button>
            <a class="btn btn-secondary" data-dismiss="modal"">BACK</a>
          </div>
        </div>
      </div>
    </div>
    
    
    </div>
    
    <script>
    
    $(document).ready(function() {
        // Add a click event listener to each row of the table
        $(".table tbody tr").click(function() {
            // Remove the highlighted-row class from all rows
            $(".table tbody tr").removeClass("highlighted-row");
            // Add the highlighted-row class to the clicked row
            $(this).addClass("highlighted-row");
        });
    });
    
    </script>
          <script>
           $(document).ready(function(){
      $('#addRecord').on('hide.bs.modal', function() {
        // Reset the text fields within the modal
        $(this).find('input, textarea').val('');
        
        // Reset the dropdowns (select elements) within the modal
        $(this).find('select').prop('selectedIndex', 0);
      });
    });
          </script>
    
    </body>
    
    </html>