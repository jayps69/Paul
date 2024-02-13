<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Education</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="Education.css">
    <style>
        .table {
            --bs-table-hover-bg: #A9D8F7 !important;
        }
        .modal-title {
            justify-self: center;
        }
        #example {
            padding: 10px;
            margin-top: 20px;
            border-radius: 10px;
            border-top: 1px solid #007bff;
            border-left: 1px solid #007bff;
            border-right: 2px solid #007bff;
            border-bottom: 2px solid #007bff;
            margin: 0 auto;
            width: 100%;
            background-color: #f5f7fa;
            transition: height 0.5s ease;
            box-shadow: 8px 6px 5px 0px rgba(0, 0, 0, 0.18);
            overflow-x: auto !important;
            overflow-y: auto !important;
        }

        .btn-close {
            z-index: 2;
        }
    </style>
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


            <div class="AddButton">
                <h1>Education</h1>

                <button class="addRecord" name="addRecord" data-bs-toggle="modal" data-bs-target="#addRecord">ADD
                    RECORD</button>

            </div>


            <table id="example" class="table table-hover table-striped">
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
                            <button name="editRecord" data-bs-toggle="modal" data-bs-target="#editRecord"
                                class="btn btn-danger btn-sm px-3">
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

                            <button type="button" class="btn btn-danger btn-edit btn-sm px-3">
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

                            <button type="button" class="btn btn-danger btn-edit btn-sm px-3">
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

                            <button type="button" class="btn btn-danger btn-edit btn-sm px-3">
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

                            <button type="button" class="btn btn-danger btn-edit btn-sm px-3">
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

                            <button type="button" class="btn btn-danger btn-edit btn-sm px-3">
                                <i class="fas fa-pencil-alt"></i>
                            </button>
                        </td>
                    </tr>


                </tbody>
            </table>

            


            <div class="modal" id="addRecord" tabindex="-1" role="dialog" aria-labelledby="titleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        
                        <div class="modal-header">
                        <h5 class="modal-title" id="titleModalLabel">ADD RECORD</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="inputGroup">
                                <select required="" autocomplete="off" id="addlevel" name="addschool">
                                    <option value=""></option>
                                    <option value="ELEMENTARY">LEVEL</option>
                                    <option value="SECONDARY">SECONDARY</option>
                                    <option value="VOCATIONAL">VOCATIONAL</option>
                                    <option value="COLLEGE">COLLEGE</option>
                                    <option value="MASTERS DEGREE">MASTERS DEGREE</option>
                                    <option value="DOCTORATE DEGREE">DOCTORATE DEGREE</option>
                                </select>
                                <label2 for="level">LEVEL</label2>
                            </div>


                            <div class="inputGroup">
                                <input type="text" id="addschool" name="addschool" required="" autocomplete="off">
                                <label for="school">SCHOOL</label>
                            </div>


                            <div class="inputGroup">
                                <input type="text" id="adddegree" name="adddegree" required="" autocomplete="off">
                                <label for="degree">DEGREE</label>
                            </div>

                            <div class="inputGroup">
                                <select required="" autocomplete="off" name="addfrom" id="addfrom"></select>
                                <label2 for="from">FROM</label2>
                            </div>

                            <div class="inputGroup">
                                <select required="" autocomplete="off" name="addto" id="addto"></select>
                                <label2 for="to">TO</label2>
                            </div>


                            <div class="modal-footer justify-content-center">
                                <button type="button" id="savebtn" name="savebtn"
                                    class="btn btn-primary custom-btn">SAVE</button>
                                    

                            </div>



                        </div>




                    </div>
                </div>
            </div>
            <div class="modal fade" id="editRecord" tabindex="-1" role="dialog" aria-labelledby="titleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h5 class="modal-title" id="titleModalLabel">EDIT RECORD</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="inputGroup">
                                <select required="" autocomplete="off" id="editlevel" name="editlevel">
                                    <option value=""></option>
                                    <option value="ELEMENTARY">LEVEL</option>
                                    <option value="SECONDARY">SECONDARY</option>
                                    <option value="VOCATIONAL">VOCATIONAL</option>
                                    <option value="COLLEGE">COLLEGE</option>
                                    <option value="MASTERS DEGREE">MASTERS DEGREE</option>
                                    <option value="DOCTORATE DEGREE">DOCTORATE DEGREE</option>
                                </select>
                                <label2 for="level">LEVEL</label2>
                            </div>


                            <div class="inputGroup">
                                <input type="text" id="editschool" name="editschool" required="" autocomplete="off">
                                <label for="school">SCHOOL</label>
                            </div>


                            <div class="inputGroup">
                                <input type="text" id="editdegree" name="editdegree" required="" autocomplete="off">
                                <label for="degree">DEGREE</label>
                            </div>

                            <div class="inputGroup">
                                <select required="" autocomplete="off" name="editfrom" id="editfrom"></select>
                                <label2 for="from">FROM</label2>
                            </div>

                            <div class="inputGroup">
                                <select required="" autocomplete="off" name="editto" id="editto"></select>
                                <label2 for="to">TO</label2>
                            </div>


                            <div class="modal-footer justify-content-center">
                                <button type="button" id="updatebtn" name="updatebtn"
                                    class="btn btn-primary custom-btn">UPDATE</button>
                                    
                            </div>



                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>


    <script>
        $(function () {
            var start_year = new Date().getFullYear();
            var html = ''
            html += '<option value=""></option>'
            for (var i = start_year - 55; i <= start_year; i++) {
                html += '<option value="' + i + '">' + i + '</option>';
            }
            $("#addfrom").html(html)
            $("#addto").html(html)
        });
    </script>
    <script>
        $(document).ready(function () {
            $('#example').dataTable({
                searching: false,
                bLengthChange: false

            });
        });
    </script>

</body>

</html>