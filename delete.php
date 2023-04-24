<script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
<?php
// Include your database connection code here
$servername = "localhost"; // Change this to your server name
$username = "root"; // Change this to your database username
$password = ""; // Change this to your database password
$dbname = "test3"; // Change this to your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);



// Check if user ID is provided in the query parameter
if (isset($_GET["id"])) {
    $userId = $_GET["id"];

    // Delete the user from the database
    $sql = "DELETE FROM users WHERE id = $userId";
    $stmt = mysqli_query($conn, $sql);

    // Redirect back to the previous page
    header("Location: student_report.php");
    exit();
}
