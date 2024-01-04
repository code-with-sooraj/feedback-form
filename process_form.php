<?php
// Establish a database connection
$servername = "localhost"; // Change this to your database server
$username = "root"; // Change this to your database username
$password = ""; // Change this to your database password
$dbname = "stakeholder"; // Change this to your database name

// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get data from the form
$name = $_POST["name"];
$regd = $_POST["regd"];
$phone = $_POST["phone"];
$academic = $_POST["academic"];
$stakeholder = $_POST["stakeholder"];
$email = $_POST["email"];
$gender = $_POST["gender"];
$program = $_POST["program"];
$course = $_POST["course"];
$branch = $_POST["branch"];
$regulation = $_POST["regulation"];
$q1 = $_POST['q1'];
$q2 = $_POST['q2'];
$q3 = $_POST['q3'];
$q4 = $_POST['q4'];
$q5 = $_POST['q5'];
$q6 = $_POST['q6'];
$q7 = $_POST['q7'];
$suggestion = $_POST['suggestion'];

// Insert the data into the database
$sql = "INSERT INTO feedback (name, regd, phone, academic, stakeholder, email, gender, program, course, branch, regulation, q1, q2, q3, q4, q5, q6, q7, suggestion) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

// Create a prepared statement
$stmt = $conn->prepare($sql);

if ($stmt) {
    // Bind values to the placeholders
    $stmt->bind_param("sssssssssssssssssss", $name, $regd, $phone, $academic, $stakeholder, $email, $gender, $program, $course, $branch, $regulation, $q1, $q2, $q3, $q4, $q5, $q6, $q7, $suggestion);

    // Execute the statement
    if ($stmt->execute()) {
        echo "<script>alert('Form is successfully submited');</script>";
        } else {
        echo "Error: " . $stmt->error;
    }

    // Close the statement
    $stmt->close();
} else {
    echo "Error preparing the statement: " . $conn->error;
}

// Close the database connection
$conn->close();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Input Box and Submit Button</title>
    <style>
        body {
    font-family: Arial, sans-serif;
    background-color: #f5f5f5;
    margin: 0;
    padding: 0;
    text-align: center;
}

h1 {
    background-color: #007BFF;
    color: #fff;
    padding: 20px;
}

form {
    background-color: #fff;
    width: 300px;
    margin: 20px auto;
    padding: 20px;
    border: 1px solid #ccc;
    border-radius: 5px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

label {
    display: block;
    margin-bottom: 10px;
    font-weight: bold;
}

input[type="text"] {
    width: 100%;
    padding: 10px;
    margin-bottom: 20px;
    border: 1px solid #ccc;
    border-radius: 5px;
    outline: none;
}

button[type="submit"] {
    background-color: #007BFF;
    color: #fff;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-weight: bold;
}

button[type="submit"]:hover {
    background-color: #0056b3;
}

    </style>
</head>
<body>
    <h1>Feedback form</h1>
    <form action="fetch.php" method="post">
        <label for="userInput">Registration no:</label>
        <input type="text" id="regd" name="regd" required>
        <button type="submit">Submit</button>
    </form>
</body>
</html>

