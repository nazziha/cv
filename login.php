<?php
include_once 'config.php';
// Start the session
session_start();

$data = $conn->query("select * from user_table");
$user = $data->fetch_assoc();
$usernamedb = $user['username'];
$passworddb = $user['password'];

// Define the correct username and password
$correct_username = $usernamedb;
$correct_password = $passworddb;

// Check if the form has been submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the username and password from the form
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Check if the username and password are correct
    if ($username == $correct_username && password_verify($password, $correct_password)) {
        // Set the session variable to indicate that the user is logged in
        $_SESSION["loggedin"] = true;

        // Redirect the user to the CV page
        header("location: admin.php");
        exit;
    } else {
        // Display an error message
        $error = "Invalid username or password.";
    }
}

// If the user is already logged in, redirect them to the CV page
if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) {
    header("location: admin.php");
    exit;
}

// Display the login page
?>
<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h2>Login</h2>
        <?php if (isset($error)) { ?>
            <div class="alert alert-danger"><?php echo $error; ?></div>
        <?php } ?>
        <form method="post">
            <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" class="form-control" id="username" name="username">
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" class="form-control" id="password" name="password">
            </div>
            <button type="submit" class="btn btn-primary">Login</button>
        </form>
    </div>
</body>
</html>