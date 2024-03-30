<?php
session_start();
?>

<?php
include '../Templates/adminhead.php';
?>
<style>
.inputGroup {
    font-family: "Segoe UI", sans-serif;
    margin: 1em 0 1em 0;
    max-width: 190px;
    position: relative;
}

.inputGroup input {
    font-size: 100%;
    padding: 0.8em;
    outline: none;
    border: 2px solid rgb(200, 200, 200);
    background-color: transparent;
    border-radius: 20px;
    width: 400px;
}

.inputGroup label {
    font-size: 100%;
    position: absolute;
    left: 0;
    padding: 0.8em;
    margin-left: 0.5em;
    pointer-events: none;
    transition: all 0.3s ease;
    color: rgb(100, 100, 100);
    top: 0;
    /* Add this line */
}

.inputGroup :is(input:focus, input:valid)~label {
    transform: translateY(-50%) scale(0.9);
    margin: 0em;
    margin-left: 1em;
    padding: 0.1em;
    background-color: White;
}

.inputGroup :is(input:focus, input:valid) {
    border-color: rgb(150, 150, 200);
}

.inputGroup select {
    font-size: 100%;
    padding: 0.4em;
    outline: none;
    border: 2px solid rgb(200, 200, 200);
    background-color: transparent;
    border-radius: 20px;
    width: 100%;
    width: 250px;
}

.inputGroup select:focus+label2,
.inputGroup select:valid+label2 {
    transform: translateY(-50%) scale(0.9);
    margin: 0em;
    margin-left: 0.6em;
    padding: 0.1em;
    background-color: White;
}

.inputGroup select:focus,
.inputGroup select:valid {
    border-color: rgb(150, 150, 200);
}

.inputGroup label2 {
    font-size: 100%;
    position: absolute;
    padding: 0.8em;
    top: -0.35em;
    left: 0.5em;
    pointer-events: none;
    transition: all 0.3s ease;
    color: rgb(100, 100, 100);
}

.col {
    margin-left: 2em;
}

.btn-primary {
    font-size: 17px;
    width: 80px;
}

.filterbutton {
    display: flex;
    justify-content: center;
    margin-left: 1em;
}

.filterlink {
    display: flex;
    justify-content: center;
    margin-left: 1em;
}
</style>

<body>
    <div id="wrapper">
        <?php
        include '../Templates/adminsidebar.php';
        ?>

        <div id="content">
            <?php
            include '../Templates/adminheader.php'
                ?>

            <div>
                <h1>Filter Data</h1>
            </div>
            <hr>
            <div class="col">
                <form id="filterForm" method="POST" action="getinfo/FilteredData1.php">
                    <div class="inputGroup">
                        <select required="" autocomplete="off" id="level" name="level">
                            <option value="ALL">ALL</option>
                            <option value="ELEMENTARY">ELEMENTARY</option>
                            <option value="SECONDARY">SECONDARY</option>
                            <option value="SHS">SHS</option>
                        </select>
                        <label2 for="level">Level</label2>
                    </div>
                    <div class="inputGroup">
                        <select required="" autocomplete="off" id="district" name="district">
                            <option value="ALL" id="ALL">ALL</option>
                            <option value="1" id="1">1</option>
                            <option value="2" id="2">2</option>
                            <option value="3" id="3">3</option>
                            <option value="4" id="4">4</option>
                            <option value="5" id="5">5</option>
                            <option value="6" id="6">6</option>
                        </select>
                        <label2 for="district">District</label2>
                    </div>
                    <div class="inputGroup">
                        <select autocomplete="off" id="school" name="school">
                            <?php
                            // Assuming you've already connected to your database
                            
                            // Perform a query to fetch schools from your database
                            $query = "SELECT schoolname, district FROM schooltbl";
                            $result = mysqli_query($conn, $query);

                            // Check if the query was successful
                            if ($result) {
                                // Loop through the results and create an option for each school
                                echo "<option value='" . "" . "'>" . "" . "</option>";
                                while ($row = mysqli_fetch_assoc($result)) {

                                    echo "<option value='" . $row['schoolname'] . "' id='" . $row['district'] . "'>" . $row['schoolname'] . "</option>";
                                }

                                // Free result set
                                mysqli_free_result($result);
                            } else {
                                // If the query fails, display an error message
                                echo "<option value=''>Error retrieving schools</option>";
                            }

                            ?>
                        </select>
                        <label2 for="school">School</label2>
                    </div>
                    <div class="inputGroup">
                        <select required="" autocomplete="off" id="position" name="position">
                            <option value="ALL">ALL</option>
                            <option value="T-I">T-I</option>
                            <option value="T-II">T-II</option>
                            <option value="T-III">T-III</option>
                            <option value="MT-I">MT-I</option>
                            <option value="MT-II">MT-II</option>
                            <option value="SPED-T-I">SPED-T-I</option>
                            <option value="SPED-T-II">SPED-T-II</option>
                            <option value="SPED-T-III">SPED-T-III</option>
                            <option value="SST-I">SST-I</option>
                        </select>
                        <label2 for="position">Position</label2>
                    </div>
                    <div class="inputGroup">
                        <select required="" autocomplete="off" id="appstat" name="appstat">
                            <option value="ALL">ALL </option>
                            <option value="PROVISIONARY">PROVISIONARY</option>
                            <option value="SUBTITUTE">SUBTITUTE</option>
                            <option value="PERMANENT">PERMANENT</option>

                        </select>
                        <label2 for="appstat">Appointment Status</label2>
                    </div>
                    <div class="inputGroup">
                        <select autocomplete="off" id="specialization" name="specialization">

                            <?php
                            // Assuming you've already connected to your database
                            
                            // Perform a query to fetch schools from your database
                            $query = "SELECT specializationsubject FROM subjectstbl";
                            $result = mysqli_query($conn, $query);

                            // Check if the query was successful
                            if ($result) {
                                // Loop through the results and create an option for each school
                                echo "<option value='" . "" . "'>" . "" . "</option>";
                                while ($row = mysqli_fetch_assoc($result)) {

                                    echo "<option value='" . $row['specializationsubject'] . "' >" . $row['specializationsubject'] . "</option>";
                                }

                                // Free result set
                                mysqli_free_result($result);
                            } else {
                                // If the query fails, display an error message
                                echo "<option value=''>Error retrieving schools</option>";
                            }

                            // Close the database connection
                            mysqli_close($conn);
                            ?>

                        </select>
                        <label2 for="specialization">Specialization</label2>
                    </div>
                    <div class="inputGroup">
                        <select required="" autocomplete="off" id="empstat" name="empstat">
                            <option value="ACTIVE">ACTIVE</option>
                            <option value="INACTIVE">INACTIVE</option>

                        </select>
                        <label2 for="empstat">Employment Status</label2>
                    </div>
                    <div class="inputGroup filterbutton">
                        <button type="submit" name="filter" class="btn btn-primary">Filter</button>
                        <button type="reset" class="btn btn-primary">Reset</button>
                    </div>
                </form>
                <div class="inputGroup filterlink">
                    <a href="retirable.php">Show Retirables</a>
                </div>


            </div>


        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>

    <script>
    $(document).ready(function() {
    // Add change event listener to the district dropdown
    $('#district').change(function() {
        var district = $(this).val();

        // Hide all options first
        $('#school option').hide();

        // Show options with matching district or empty value
        $('#school option[id="' + district + '"], #school option[value=""]').show();
    });

    // Get the form element
    var form = document.getElementById("filterForm");

    // Get the reset button
    var resetBtn = form.querySelector("button[type='reset']");

    // Add event listener to the reset button
    resetBtn.addEventListener("click", function() {
        // Reset the form
        form.reset();
    });
    });



    
    </script>


</body>