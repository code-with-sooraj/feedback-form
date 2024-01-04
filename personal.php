<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vignan Stakeholder</title>
    <style>
        /* Reset some default styles */
        body,
        h1,
        form {
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


        /* Style the form */
        form {
            animation: fadeIn 1s ease-in-out;
            display: flex;
            justify-content: space-between;
        }

        /* Style the left and right sections */
        .left,
        .right {
            flex: 1;
            padding: 10px;
        }

        /* Style the labels */
        label {
            font-weight: bold;
            color: #333;
        }

        /* Style the input fields */
        input[type="text"],
        input[type="tel"],
        input[type="email"],
        select {
            width: 80%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }

        /* Style the radio buttons */
        fieldset {
            border: none;
            margin-bottom: 15px;
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
        }

        /* Add some spacing to the radio buttons */
        input[type="radio"] {
            margin-right: 5px;
        }


        /* Apply styles to the form container */
        .container form {
            padding: 20px;
        }

        /* Style the select dropdown */
        select {
            appearance: none;
            padding: 10px;
            background-color: #fff;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }

        /* Style the fieldset for gender */
        fieldset {
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 10px;
            margin-bottom: 15px;
        }

        /* Style the legend */
        legend {
            font-weight: bold;
            color: #333;
            margin-bottom: 10px;
        }

        /* Style the radio button labels and inputs */
        fieldset p {
            margin: 0;
            color: rgb(9, 9, 9);
        }

        /* Style the radio buttons */
        input[type="radio"] {
            margin-right: 10px;
        }

        /* Highlight the selected radio button */
        input[type="radio"]:checked+label {
            font-weight: bold;
            color: #007BFF;
        }
    </style>
    <script>
        function validateForm() {
            var name = document.getElementById("name").value;
            var phone = document.getElementById("phone").value;
            var academic = document.getElementById("academic").value;
            var stakeholder = document.getElementById("stakeholder").value;
            var email = document.getElementById("email").value;
            var gender = document.querySelector('input[name="Gender"]:checked');

            if (name === "" || phone === "" || academic === "" || stakeholder === "" || email === "" || gender === null) {
                alert("Please fill out all required fields.");
                return false; // Prevent form submission
            }

            // Additional validation logic can be added here

            return true; // Allow form submission
        }
    </script>
</head>

<body>
    <div class="container">
        <h1><u>Person Details</u></h1>
        <form action="student.php" method="post">
            <div class="left">
                <label for="name">Name of the Stakeholder</label><br>
                <input type="text" name="name" placeholder="Please enter your firstname" required> <br>
                <label for="regd">Regd no.</label><br>
                <input type="text" name="regd" placeholder="Please enter your registration no" ><br>
                <label for="phone">Phone</label><br>
                <input type="tel" name="phone" placeholder="Please enter your phone" required> <br>
                <label for="feedback">Feedback for Academic Year</label><br>
                <select name="academic" id="academic" required>
                    <option value="">Select the academic Year</option>
                    <option value="2022-2023">2022-2023</option>
                </select> <br>
            </div>
            <div class="right">
                <label for="stakeholder">Type of Stakeholder</label><br>
                <select name="stakeholder" id="stakeholder" required>
                    <option value="student">Student</option>
                    <option value="faculty">Faculty</option>
                    <option value="alumni">Alumni</option>
                </select><br>
                <label for="email">Email</label><br>
                <input type="email" name="email" id="email" placeholder="Enter your email" required><br>
                <fieldset>
                    <legend>Gender*</legend>
                    <p>
                        Male <input type="radio" name="gender" id="" value="male" required> Female<input type="radio" name="gender"
                            value="female" required> Others <input type="radio" name="gender" id="" value="others" required>
                    </p>
                </fieldset><br>
                <button type="submit" id="submit-btn">Submit</button>
            </div>
        </form>
    </div>
</body>

</html>