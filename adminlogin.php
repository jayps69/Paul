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
    $sql = "SELECT * FROM admin_tbl WHERE uname='$input_username'";
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
            header("location: New1.php");
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <style>
        .login-page {
            width: 360px;
            padding: 8% 0 0;
            margin: auto;
        }

        .form {
            position: relative;
            border-radius: 3%;
            z-index: 1;
            background: #FFFFFF;
            max-width: 360px;
            margin: 0 auto 100px;
            padding: 45px;
            text-align: center;
            background-color: #9dc6ea;
            box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
        }

        .form input {
            font-family: Arial, sans-serif;
            outline: 0;
            background: #f2f2f2;
            width: 100%;
            border: 0;
            margin: 0 0 15px;
            padding: 15px;
            box-sizing: border-box;
            font-size: 14px;
            border-radius: 2%;
        }

        .form button {
            font-family: Arial, sans-serif;
            background-color: #007bff;
            width: 100%;
            border: 0;
            padding: 15px;
            font-size: 14px;
            -webkit-transition: all 0.3 ease;
            transition: all 0.3 ease;
            cursor: pointer;
        }

        .form .message {
            margin: 15px 0 0;
            font-size: 14px;
            color: black;
            text-decoration: none;
        }
        .form .message a{
            color: #007bff;
            text-decoration: none;
        }

        .container {
            position: relative;
            z-index: 1;
            max-width: 300px;
            margin: 0 auto;
        }

        body {
            background-color: white;
            background-image: linear-gradient(to right, white, white);
            font-family: Arial, sans-serif;
        }
        h3{
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
        .login-header{
            margin-bottom: 1rem;
        }
        .forgot:hover{
            color: red !important;
        }
        .register:hover{
            color: red !important;
        }
    </style>
    <title>SDOQC Teacher's Portal Login Page</title>
</head>

<body>
    <div class="login-page">
        
        <div class="form">
            <div class="login">
                <div class="login-header">
                    <h3><b>Admins Portal</b></h3>
                    <img src="Images/Logonobg.gif" alt="Logo" class="d-inline-block align-top">
                    
                </div>
            </div>
            <form method="post" action="">
                <input type="text" class="form-control" name="username" placeholder="Email" />
                <input type="password" class="form-control" name="password" placeholder="Password" />
                <input type="submit" class="btn btn-primary active" value="Log In">
                <p class="message"><a class="register" href="Registration.php">Create an account</a> | 
                <a class="forgot" href="#">Forgot password</a></p>
            </form>
        </div>
    </div>

    <?php
    // Display error message if any
    if (isset($error_message)) {
        echo "<p>$error_message</p>";
    }
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>

<?php
// Close connection
$conn->close();
?>