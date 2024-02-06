<?php
include 'Templates/head.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Education</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
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
      </div>

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
              <div class="inputGroup">
                <select required="" autocomplete="off" id="level">
                  <option value=""></option>
                  <option value="ELEMENTARY">LEVEL</option>
                  <option value="SECONDARY">SECONDARY</option>
                  <option value="VOCATIONAL">VOCATIONAL</option>
                  <option value="COLLEGE">COLLEGE</option>
                  <option value="MASTERS DEGREE">MASTERS DEGREE</option>
                  <option value="DOCTORATE DEGREE">DOCTORATE DEGREE</option>
                </select>
                <label2 for="level">Level</label2>
              </div>


              <div class="inputGroup">
                <input type="text" id="school" name="school" required="" autocomplete="off">
                <label for="school">SCHOOL</label>
              </div>


              <div class="inputGroup">
                <input type="text" id="degree" name="degree" required="" autocomplete="off">
                <label for="degree">DEGREE</label>
              </div>

              <div class="inputGroup">
                <select required="" autocomplete="off" name="from" id="from">
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
                <label2 for="from">FROM</label2>
              </div>

              <div class="inputGroup">
                <select required="" autocomplete="off" name="to" id="to">
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
                <label2 for="to">TO</label2>
              </div>


              <div class="modal-footer justify-content-center">
                <button type="button" id="savebtn" name="savebtn" class="btn btn-primary custom-btn">SAVE</button>
              </div>



            </div>




          </div>
        </div>
      </div>
    </div>
    <script src=" https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>

</html>