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
<html>
<head>
    <title>Login Page</title>
</head>
<body>

<h2>Login</h2>
<form method="post" action="">
    <div>
        <label for="username">Username:</label>
        <input type="text" name="username" required>
    </div>
    <div>
        <label for="password">Password:</label>
        <input type="password" name="password" required>
    </div>
    <div>
        <input type="submit" value="Login">
    </div>
</form>

<?php
// Display error message if any
if (isset($error_message)) {
    echo "<p>$error_message</p>";
}
?>

</body>
</html>

<?php
// Close connection
$conn->close();
?>
