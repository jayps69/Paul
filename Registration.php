<?php
// Start session
session_start();

include "connection.php";

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get username and password from form
    $input_username = $_POST["username"];
    $input_password = $_POST["password"];

    // Sanitize inputs
    $input_username = $conn->real_escape_string($input_username);
    $input_password = $conn->real_escape_string($input_password);

    // Retrieve user record from database
    $sql = "SELECT * FROM user_tbl WHERE uname='$input_username'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();

        if (md5($input_password) == $row["pword"]) {
            // Password is correct, set session variables
            $_SESSION["loggedin"] = true;
            $_SESSION["username"] = $input_username;

            // Fetch first name, last name, and any other necessary user data
            $fname = $row["firstname"];
            $lname = $row["lastname"];
            $picture = $row["photo"];
            $userId = $row["userid"]; // Adjusted column name

            // Set session variable for userId
            $_SESSION["userId"] = $userId;


            $fname = ucfirst(strtolower($fname));
            $lname = ucfirst(strtolower($lname));

            // Concatenate first name and last name to form full name
            $fullName = $fname . " " . $lname;

            // Set session variable for full name
            $_SESSION["fullname"] = $fullName;
            // Set session variable for picture
            $_SESSION["photo"] = $picture;
            // Redirect to home page or dashboard
            header("location: AccountPage.php");
        } else {
            // Password is incorrect
            $error_message = "Invalid username or password";
        }
    } else {
        // User not found
        $error_message = "Invalid username or password";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">

    <style>
        .login-page {
            padding: 5% 0 0;
            justify-content: center;
        }

        .form {
            position: relative;
            border-radius: 3%;
            max-width: 1500px;
            z-index: 1;
            background: #FFFFFF;
            margin: 0 auto 100px;
            padding: 60px;
            background-color: white;
            box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
            justify-content: center;
        }

        .form button {
            font-family: Arial, sans-serif;
            background-color: #007bff;
            width: 7%;
            border: 0;
            padding: 15px;
            font-size: 14px;
            -webkit-transition: all 0.3 ease;
            transition: all 0.3 ease;
            cursor: pointer;
            left: 50%;
        }

        .form .message {
            margin: 15px 0 0;
            font-size: 14px;
            color: black;
            text-decoration: none;
        }

        .form .message a {
            color: #007bff;
        }

        .container {
            position: relative;
            z-index: 1;
            max-width: 300px;
            margin: 0 auto;
        }

        body {
            background-color: white;
            background-image: linear-gradient(to right, white, #9dc6ea);
            font-family: Arial, sans-serif;
        }

        h3 {
            text-align: center;
            font-weight: 900;
            font-size: 30px;
            color: rgb(16, 137, 211);
            font-family: var(--bs-body-font-family);
        }

        .btn {
            color: #9dc6ea;
            background-color: #9dc6ea;
        }

        .login-header {
            margin-bottom: 1rem;
        }

        .forgot {
            color: red !important;
        }

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
            background-color: white;
            border-radius: 20px;
            width: 400px;
        }

        .inputGroup label {
            font-size: 100%;
            font-weight: bold;
            position: absolute;
            left: 0;
            padding: 0.8em;
            margin-left: 0.5em;
            pointer-events: none;
            transition: all 0.3s ease;
            color: rgb(100, 100, 100);
            top: 0;
            z-index: 2;
            /* Add this line */
        }
        .inputGroup label2 {
            font-size: 100%;
            font-weight: bold;
            color: rgb(100, 100, 100);
            margin-left: 1.3em;

        }

        .inputGroup :is(input:focus, input:valid)~label {
            transform: translateY(-75%) scale(0.9);
            margin: 0em;
            margin-left: 1em;
            padding: 0.1em;
            background-color: transparent;
        }

        .imglabel {
            border: 1px solid #ccc;
            display: inline-block;
            padding: 6px 12px;
            cursor: pointer;
        }

    </style>
    <title>SDOQC Teacher's Portal Login Page</title>
</head>

<body>
    <div class="login-page">

        <div class="form">
            <div class="login">
                <div class="login-header">
                    <h3><b>Registration Page</b></h3>
                </div>
            </div>
            <form method="post" action="">
                <div class="row">
                    <div class="col-md-4">
                        <div class="inputGroup">
                            <input type="email" name="email" id="email" required="" autocomplete="off">
                            <label for="email">Email Address</label>
                        </div>
                        <div class="inputGroup">
                            <input type="text" name="password" id="password" required="" autocomplete="off">
                            <label for="password">Password</label>
                        </div>
                        <div class="inputGroup">
                            <input type="text" name="password2" id="password2" required="" autocomplete="off">
                            <label for="password2">Re-enter Password</label>
                        </div>
                        <div class="inputGroup">
                            <input type="text" name="school" id="school" required="" autocomplete="off">
                            <label for="school">School</label>
                        </div>

                    </div>
                    <div class="col-md-4">
                        <div class="inputGroup">
                            <input type="text" name="fname" id="fname" required="" autocomplete="off">
                            <label for="fname">First Name</label>
                        </div>
                        <div class="inputGroup">
                            <input type="text" name="lname" id="lname" required="" autocomplete="off">
                            <label for="lname">Last Name</label>
                        </div>
                        <div class="inputGroup">
                            <input type="text" name="employeeno" id="employeeno" required="" autocomplete="off">
                            <label for="employeeno">Employee Number</label>
                        </div>
                        <div class="inputGroup">
                            <input type="date" name="birthday" id="birthday" required="" autocomplete="off">
                            <label for="birthday">Date of Birth</label>
                        </div>

                    </div>
                    <div class="col-md-4">
                        <div class="inputGroup">
                            <input type="text" name="question" id="question" required="" autocomplete="off">
                            <label for="question">Security Question</label>
                        </div>
                        <div class="inputGroup">
                            <input type="text" name="answer" id="answer" required="" autocomplete="off" placeholder="Answer">
                        </div>
                        <div class="inputGroup">
                            <input type="text" name="question2" id="question2" required="" autocomplete="off">
                            <label for="question2">Security Question</label>
                        </div>
                        <div class="inputGroup">
                            <input type="text" name="answer2" id="answer2" required="" autocomplete="off" placeholder="Answer">
                        </div>
                    </div>


                </div>
                <div class="row">
                    <div class="inputGroup">
                        <label2 for="photo">Add Photo</label2>
                        <input type="file" name="photo" id="photo" class="form-control" value="Add Photo">
                    </div>
                </div>  
                <div class="row justify-content-center">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
        </div>
        </form>
    </div>
    </div>

    <?php
    // Display error message if any
    if (isset($error_message)) {
        echo "<p>$error_message</p>";
    }
    ?>
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/3.0.0/js/responsive.bootstrap5.js"></script>
</body>

</html>

<?php
// Close connection
$conn->close();
?>