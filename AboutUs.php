<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SDOQC|HRUTP|About Us</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"/>
    <link rel="stylesheet" href="Aboutus.css"/>


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

            <h1>ABOUT US</h1>
            <div class="cycle-tab-container">
              <ul class="nav nav-tabs">
                  <li class="cycle-tab-item ">
                      <a class="nav-link active" role="tab" data-toggle="tab" href="#UNITHEADS" id="Unithead-tab">UNIT HEADS</a>
                      <div class="progress" style="height: 4px; margin-bottom: -4px;">
                          <div class="progress-bar" role="progressbar" style="width: 0%;" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                  </li>
                  <li class="cycle-tab-item">
                      <a class="nav-link" role="tab" data-toggle="tab" href="#DEVELOPER" id="Developer-tab">DEVELOPER</a>
                      <div class="progress" style="height: 4px; margin-bottom: -4px;">
                          <div class="progress-bar" role="progressbar" style="width: 0%;" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                  </li>
                  <li class="cycle-tab-item">
                      <a class="nav-link" role="tab" data-toggle="tab" href="#ICTTEAM" id="Ictteam-tab">ICT TEAM</a>
                      <div class="progress" style="height: 4px; margin-bottom: -4px;">
                          <div class="progress-bar" role="progressbar" style="width: 0%;" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                  </li>
                  <li class="cycle-tab-item">
                      <a class="nav-link" role="tab" data-toggle="tab" href="#ADVISER" id="Adviser-tab">ADVISERS</a>
                      <div class="progress" style="height: 4px; margin-bottom: -4px;">
                          <div class="progress-bar" role="progressbar" style="width: 0%;" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                  </li>
              </ul>
            </div>
          <div class="PersonalInfo-box">
              <div class="row">

                <div class="tab-content">
                  <div class="tab-pane fade show active" id="UNITHEADS" role="tabpanel" aria-labelledby="Unithead-tab">
          
                      <div class="content-wrapper">
                          <img src="images/hrutplogo.png" alt="hrutplogo">
                          <h4>TEACHING UNIT HEADS</h4>
          
                          <div class="card">
                              <div class="card-image">
                                  <img src="images/lugtu.png" alt="Bernadette D.C. Lugtu">
                              </div>
                              <div class="category">BERNADETTE DC. LUGTU</div>
                              <div class="heading">Administrative Officer V / HRMO-III</div>
                              <div class="heading2">HEAD, TEACHING UNIT</div>
                          </div>
          
                          <div class="card">
                              <div class="card-image">
                                  <img src="images/desiderio.png" alt="Marie Jeanne Carmelli R. Desiderio">
                              </div>
                              <div class="category">MARIE JEANNE CARMELLI R. DESIDERIO</div>
                              <div class="heading">Administrative Officer IV / HRMO-II</div>
                              <div class="heading2">HEAD, ELEMENTARY LEVEL</div>
                          </div>
                      </div>
                  </div>

                  <div class="tab-pane fade" id="DEVELOPER" role="tabpanel" aria-labelledby="Developer-tab">
                    <div class="content-wrapper">
                        <img src="images/techlogo.png" alt="techlogo">
                        <h4 id="devteam-header">DEVELOPER TEAM</h4>
        
                        <div class="card">
                            <div class="card-image">
                                <img src="images/mcko.jpg" alt="MICHAEL A. DESIDERIO">
                            </div>
                            <div class="category">MICHAEL A. DESIDERIO, CEH</div>
                            <div class="heading">Information System Analyst II / System Developer</div>
                            
                        </div>
        
                        <div class="card">
                            <div class="card-image">
                                <img src="images/desiderio.png" alt="Marie Jeanne Carmelli R. Desiderio">
                            </div>
                            <div class="category">MARIE JEANNE CARMELLI R. DESIDERIO</div>
                            <div class="heading">AO-IV / HRMO II / System Analyst</div>
                        </div>
        
                        <div class="card">
                            <div class="card-image">
                                <img src="images/brianreyes.jpg" alt="BRIAN SPENCER REYES">
                            </div>
                            <div class="category">BRIAN SPENCER REYES</div>
                            <div class="heading">Project Development Officer I</div>
                        </div>
        
                        <small>-----------------------------------------------------------</small>
        
                        <h4 class="text-primary">TECHNICAL STAFF</h4>
        
                        <div class="card">
                            <div class="category">LIZA C. FUYONAN</div>
                            <div class="heading">Administrative Officer II</div>
                        </div>
        
                        <div class="card">
                            <div class="category">VANESSA A. CACAYURAN</div>
                            <div class="heading">Administrative Officer II</div>
                        </div>
        
                        <div class="card">
                            <div class="category">REXMOND D. MADEJA</div>
                            <div class="heading">Administrative Assistant III</div>
                        </div>
        
                        <div class="card">
                            <div class="category">PAOLO JAMES S. REYES</div>
                            <div class="heading">Administrative Assistant III</div>
                        </div>
        
                        <div class="card">
                            <div class="category">ROSSEL G. MACEDA</div>
                            <div class="heading">Administrative Assistant III</div>
                        </div>
        
                        <div class="card">
                            <div class="category">CHRISTINA R. ESTRADA</div>
                            <div class="heading">Administrative Assistant III</div>
                        </div>
        
                        <div class="card">
                            <div class="category">RAZEL CLAUDETTE O. VELEZ</div>
                            <div class="heading">Human Resource Mangement Aide</div>
                        </div>
        
                        <div class="card">
                            <div class="category">JOHN PAUL L. ESTANISLAO</div>
                            <div class="heading">INTERN / OJT</div>
                        </div>
        
                        <div class="card">
                            <div class="category">JENNELLA A. SABLADA</div>
                            <div class="heading">INTERN / OJT</div>
                        </div>     
                        
                        <div class="card">
                          <div class="category">JACOB D. DIONISIO</div>
                          <div class="heading">INTERN / OJT</div>
                      </div>

                      </div>
                    </div>

                  <div class="tab-pane fade" id="ICTTEAM" role="tabpanel" aria-labelledby="Ictteam-tab">
                    
                    <div class="content-wrapper">
                      <img src="images/ictlogo.jpg" alt="ictlogo">
                      <h4 id="Ictteam-header">ICT TEAM</h4>

                      <div class="card">
                          <div class="card-image">
                              <img src="images/mamtina.jpg" alt="Bernadette D.C. Lugtu">
                          </div>
                          <div class="category">DR. MA. CRISTINA N. MARQUEZ</div>
                          <div class="heading">Information Techonology Officer</div>
                      </div>

                      <div class="card">
                          <div class="card-image">
                              <img src="images/ran.jpg" alt="Marie Jeanne Carmelli R. Desiderio">
                          </div>
                          <div class="category">FLORANTE TORREFIEL</div>
                          <div class="heading">Computer Maintenance Technologist I</div>
                      </div>
                  </div> 
                  </div>

                  <div class="tab-pane fade" id="ADVISER" role="tabpanel" aria-labelledby="Adviser-tab">

                    <div class="content-wrapper">
                        <img src="images/sdoqclogo.png" alt="sdoqclogo">
                        <h4>ADVISERS</h4>

                        <div class="card">
                          <div class="card-image">
                            <img src="" >
                        </div>
                          <div class="category">DR. JENILYN ROSE B. CORPUZ, CESO VI</div>
                          <div class="heading">Schools Division Superintendent</div>
                        </div>

                        <div class="card">
                          <div class="card-image">
                            <img src="">
                          </div>
                          <div class="category">ENGR. MARC VOLTAIRE A. PADILLA, CESe</div>
                          <div class="heading">Assistant Schools Division Superintendent</div>
                        </div>
                    </div> 
                  </div>


    </div>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <script>
      $(document).ready(function() {
          let currentTabIndex = 0;
          const tabs = $('.cycle-tab-item .nav-link');
          const progressBars = $('.cycle-tab-item .progress-bar');
          let interval;
  
          function resetProgressBars() {
              progressBars.css('width', '0%').attr('aria-valuenow', 0);
          }
  
          function startProgressForTab(index) {
              let width = 0;
  
              if (interval) {
                  clearInterval(interval);
              }
  
              const progressBar = $(tabs[index]).parent().find('.progress-bar');
  
              interval = setInterval(function() {
                  width += 1; // Increment by 1% every 150ms
                  progressBar.css('width', width + '%').attr('aria-valuenow', width);
  
                  if (width >= 100) {
                      clearInterval(interval);
                      currentTabIndex++;
                      if (currentTabIndex >= tabs.length) {
                          currentTabIndex = 0; // loop back to the first tab
                      }
                      $(tabs[currentTabIndex]).tab('show');
                      startProgressForTab(currentTabIndex);
                  }
              }, 150); // Changed this from 300ms to 150ms
          }
  
          // Start progress for the first tab on load
          startProgressForTab(0);
  
          // When a tab is shown, reset all progress bars and start progress for the current tab
          tabs.on('shown.bs.tab', function (e) {
              currentTabIndex = tabs.index(e.target); // Get the index of the currently shown tab
              resetProgressBars();
              startProgressForTab(currentTabIndex);
          });
      });
  </script>
  

  </body>
</html>
