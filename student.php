<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST["name"];
    $regd = $_POST["regd"];
    $phone = $_POST["phone"];
    $academic = $_POST["academic"];
    $stakeholder = $_POST["stakeholder"];
    $email = $_POST["email"];
    $gender = $_POST["gender"];
} else {
    echo "Form not submitted.";

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback Form</title>
    <style>
        /* Reset some default styles */
        body, h1, form {
            margin: 0;
            padding: 0;
        }

        /* Apply styles to the container */
        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background-color: #f7f7f7;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
        }

        /* Style the header */
        h1 {
            text-align: center;
            text-decoration: underline;
            color: #333;
        }

        /* Style the form */
        form {
            display: flex;
            flex-direction: column;
        }

        /* Style the form sections */
        .form-section {
            margin-bottom: 20px;
        }

        /* Style labels */
        label {
            font-weight: bold;
            color: #333;
        }

        /* Style select dropdowns */
        select {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }

        /* Style the submit button */
        #submit-btn {
            background-color: #007BFF;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            margin-top: 20px;
        }

        /* CSS for animation */
        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(-10px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Apply animation to the form */
        form {
            animation: fadeIn 1s ease-in-out;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Feedback Form</h1>
        <form id="feedback-form" action="questionnaire.php" method="POST" onsubmit="return validateForm()">
            <div class="form-section">
                <input type="hidden" name="name" value="<?php echo $name  ?>">
                <input type="hidden" name="regd" value="<?php echo $regd  ?>">
                <input type="hidden" name="phone" value="<?php echo $phone  ?>">
                <input type="hidden" name="academic" value="<?php echo $academic  ?>">
                <input type="hidden" name="stakeholder" value="<?php echo $stakeholder  ?>">
                <input type="hidden" name="email" value="<?php echo $email  ?>">
                <input type="hidden" name="gender" value="<?php echo $gender  ?>">
                <label for="program">Regarding Program details:</label>
                <select name="program" id="program" required>
                    <option value="">Select Program Type</option>
                    <option value="UG">UG</option>
                    <option value="PG">PG</option>
                </select>
            </div>

            <div class="form-section">
                <label for="course">Select Course:</label>
                <select name="course" id="course" required>
                    <option value="">Select Course</option>
                </select>
            </div>

            <div class="form-section">
                <label for="branch">Select Branch:</label>
                <select name="branch" id="branch" required>
                    <option value="">Select Branch</option>
                </select>
            </div>

            <div class="form-section">
                <label for="regulation">Select Regulation:</label>
                <select name="regulation" id="regulation" required>
                    <option value="">Select Regulation</option>
                    <option value="R19">R19</option>
                    <option value="R22">R22</option>
                </select>
            </div>

            <button type="submit" id="submit-btn">Submit</button>
        </form>
    </div>

    <script>
        const programDropdown = document.getElementById("program");
        const courseDropdown = document.getElementById("course");
        const branchDropdown = document.getElementById("branch");

        // Define course options based on program type
        const courseOptions = {
            UG: ["Btech", "BBA", "BCA", "BPharm"],
            PG: ["Mtech", "MBA", "MCA"]
        };

        // Define branch options based on selected course
        const branchOptions = {
            Btech: ["CSE", "IT", "ECE"],
            BBA: ["Finance", "Human Resources", "Foreign Trade"],
            BCA: ["Web design", "Computer programming","CG artwork"],
            BPharm: ["Pharmaceutics","Medicinal Chemistry","Pharmacognosy"],
            Mtech: ["CSE", "IT", "ECE"],
            MBA: ["Human Resources", "Finance", "Agri-Business"],
            MCA: ["Web Design", "Computer programming", "CG artwork"]
        };

        // Function to populate dropdown based on selected program
        function populateCourseDropdown() {
            const selectedProgram = programDropdown.value;
            const courses = courseOptions[selectedProgram] || [];
            courseDropdown.innerHTML = '<option value="">Select Course</option>';
            courses.forEach(course => {
                const option = document.createElement("option");
                option.value = course;
                option.textContent = course;
                courseDropdown.appendChild(option);
            });
        }

        // Function to populate branch dropdown based on selected course
        function populateBranchDropdown() {
            const selectedCourse = courseDropdown.value;
            const branches = branchOptions[selectedCourse] || [];
            branchDropdown.innerHTML = '<option value="">Select Branch</option>';
            branches.forEach(branch => {
                const option = document.createElement("option");
                option.value = branch;
                option.textContent = branch;
                branchDropdown.appendChild(option);
            });
        }

        programDropdown.addEventListener("change", populateCourseDropdown);
        courseDropdown.addEventListener("change", populateBranchDropdown);

        function validateForm() {
            const selectedProgram = programDropdown.value;
            const selectedCourse = courseDropdown.value;
            const selectedBranch = branchDropdown.value;
            const selectedRegulation = document.getElementById("regulation").value;

            if (!selectedProgram || !selectedCourse || !selectedBranch || !selectedRegulation) {
                alert("Please fill out all required fields.");
                return false; 
            }
            return true; 
        }
    </script>
</body>
</html>
