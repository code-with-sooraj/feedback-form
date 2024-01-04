<?php
// Database connection setup
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "stakeholder";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Replace X with the value you want to search for
$regd = $_POST["regd"];

// SQL query to fetch data
$sql = "SELECT name, regd, phone, academic, stakeholder, email, gender, program, course, branch, regulation, q1, q2, q3, q4, q5, q6, q7, suggestion FROM feedback WHERE regd = ?";

// Create a prepared statement
$stmt = $conn->prepare($sql);
$stmt->bind_param('s', $regd);

// Execute the statement
$stmt->execute();

// Get the result
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    echo "<table style='border-collapse: collapse; width: 100%; border: 1px solid #ccc;'>";
    echo "<tr style='background-color: #f9f9f9;'>";
    echo "<th style='border: 1px solid #ccc; padding: 8px;'>Field</th>";
    echo "<th style='border: 1px solid #ccc; padding: 8px;'>Value</th>";
    echo "</tr>";

    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td style='border: 1px solid #ccc; padding: 8px; font-weight: bold;'>Name</td>";
        echo "<td style='border: 1px solid #ccc; padding: 8px;'>" . $row["name"] . "</td>";
        // Add other fields similarly
        echo "</tr>";echo "<tr>";
        echo "<td style='border: 1px solid #ccc; padding: 8px; font-weight: bold;'>Registration</td>";
        echo "<td style='border: 1px solid #ccc; padding: 8px;'>" . $row["regd"] . "</td>";
        // Add other fields similarly
        echo "</tr>";echo "<tr>";
        echo "<td style='border: 1px solid #ccc; padding: 8px; font-weight: bold;'>Phone</td>";
        echo "<td style='border: 1px solid #ccc; padding: 8px;'>" . $row["phone"] . "</td>";
        // Add other fields similarly
        echo "</tr>";echo "<tr>";
        echo "<td style='border: 1px solid #ccc; padding: 8px; font-weight: bold;'>Academic</td>";
        echo "<td style='border: 1px solid #ccc; padding: 8px;'>" . $row["academic"] . "</td>";
        // Add other fields similarly
        echo "</tr>";echo "<tr>";
        echo "<td style='border: 1px solid #ccc; padding: 8px; font-weight: bold;'>Stakeholder</td>";
        echo "<td style='border: 1px solid #ccc; padding: 8px;'>" . $row["stakeholder"] . "</td>";
        // Add other fields similarly
        echo "</tr>";echo "<tr>";
        echo "<td style='border: 1px solid #ccc; padding: 8px; font-weight: bold;'>E-mail</td>";
        echo "<td style='border: 1px solid #ccc; padding: 8px;'>" . $row["email"] . "</td>";
        // Add other fields similarly
        echo "</tr>";echo "<tr>";
        echo "<td style='border: 1px solid #ccc; padding: 8px; font-weight: bold;'>Gender</td>";
        echo "<td style='border: 1px solid #ccc; padding: 8px;'>" . $row["gender"] . "</td>";
        // Add other fields similarly
        echo "</tr>";echo "<tr>";
        echo "<td style='border: 1px solid #ccc; padding: 8px; font-weight: bold;'>Program</td>";
        echo "<td style='border: 1px solid #ccc; padding: 8px;'>" . $row["program"] . "</td>";
        // Add other fields similarly
        echo "</tr>";echo "<tr>";
        echo "<td style='border: 1px solid #ccc; padding: 8px; font-weight: bold;'>Course</td>";
        echo "<td style='border: 1px solid #ccc; padding: 8px;'>" . $row["course"] . "</td>";
        // Add other fields similarly
        echo "</tr>";echo "<tr>";
        echo "<td style='border: 1px solid #ccc; padding: 8px; font-weight: bold;'>Branch</td>";
        echo "<td style='border: 1px solid #ccc; padding: 8px;'>" . $row["branch"] . "</td>";
        // Add other fields similarly
        echo "</tr>";echo "<tr>";
        echo "<td style='border: 1px solid #ccc; padding: 8px; font-weight: bold;'>Regulation</td>";
        echo "<td style='border: 1px solid #ccc; padding: 8px;'>" . $row["regulation"] . "</td>";
        // Add other fields similarly
        echo "</tr>";echo "<tr>";
        echo "<td style='border: 1px solid #ccc; padding: 8px; font-weight: bold;'>Course Contents of Curriculum are in tune with the Program Outcomes</td>";
        echo "<td style='border: 1px solid #ccc; padding: 8px;'>" . $row["q1"] . "</td>";
        // Add other fields similarly
        echo "</tr>";echo "<tr>";
        echo "<td style='border: 1px solid #ccc; padding: 8px; font-weight: bold;'>Course Contents are designed to enable Problem Solving Skills and Core competencies</td>";
        echo "<td style='border: 1px solid #ccc; padding: 8px;'>" . $row["q2"] . "</td>";
        // Add other fields similarly
        echo "</tr>";echo "<tr>";
        echo "<td style='border: 1px solid #ccc; padding: 8px; font-weight: bold;'>Course placed in the Curriculum serves the needs of both advanced and slow learners</td>";
        echo "<td style='border: 1px solid #ccc; padding: 8px;'>" . $row["q3"] . "</td>";
        // Add other fields similarly
        echo "</tr>";echo "<tr>";
        echo "<td style='border: 1px solid #ccc; padding: 8px; font-weight: bold;'>Contact Hour Distribution among the various course Components (LTP) is satisfiable</td>";
        echo "<td style='border: 1px solid #ccc; padding: 8px;'>" . $row["q4"] . "</td>";
        // Add other fields similarly
        echo "</tr>";echo "<tr>";
        echo "<td style='border: 1px solid #ccc; padding: 8px; font-weight: bold;'>Composition of Basic Science, Engineering, Humanities, and Management Courses is a right mix and satisfiable</td>";
        echo "<td style='border: 1px solid #ccc; padding: 8px;'>" . $row["q5"] . "</td>";
        // Add other fields similarly
        echo "</tr>";echo "<tr>";
        echo "<td style='border: 1px solid #ccc; padding: 8px; font-weight: bold;'>Laboratory sessions are sufficient to improve the technical skills of students</td>";
        echo "<td style='border: 1px solid #ccc; padding: 8px;'>" . $row["q6"] . "</td>";
        // Add other fields similarly
        echo "</tr>";echo "<tr>";
        echo "<td style='border: 1px solid #ccc; padding: 8px; font-weight: bold;'>Inclusion of Minor Project/Mini Projects improved the technical competency and leadership skills among the students</td>";
        echo "<td style='border: 1px solid #ccc; padding: 8px;'>" . $row["q7"] . "</td>";
        // Add other fields similarly
        echo "</tr>";echo "<tr>";
        echo "<td style='border: 1px solid #ccc; padding: 8px; font-weight: bold;'>Suggestion</td>";
        echo "<td style='border: 1px solid #ccc; padding: 8px;'>" . $row["suggestion"] . "</td>";
        // Add other fields similarly
        
        echo "</tr>";
    }
    echo "</div>";
} else {
    echo "No results found for Registration: " . $regd;
}



// Close the statement and connection
$stmt->close();
$conn->close();
?>
