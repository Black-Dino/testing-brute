<!-- login.php -->
<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the submitted username and password
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Hardcoded admin credentials for demonstration (replace with a database lookup)
    $adminUsername = "admin";
    $adminPassword = "admin";

    // Check if the credentials are valid
    if ($username == $adminUsername && $password == $adminPassword) {
        echo "Login successful!";
        // You can redirect to a dashboard or perform other actions here
    } else {
        echo "Invalid username or password";
    }
} else {
    // Redirect to the login page if the form is not submitted
    header("Location: index.html");
    exit();
}
?>
