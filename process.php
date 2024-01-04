
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questionnaire for Student (IT)</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        /* Style your existing CSS for .main-container */
        .main-container {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
        }

        .head_class {
            background-color: #007BFF;
            color: #fff;
            text-align: center;
            padding: 20px;
            max-width: 800;
        }

        h1 {
            margin: 0;
        }

        label {
            font-weight: bold;
            margin-top: 10px;
            display: block;
        }

        span {
            font-size: 14px;
            color: #555;
        }

        input[type="range"] {
            width: 50%;
            height: 10px;
            -webkit-appearance: none;
            appearance: none;
            background: #14d8e6;
            border-radius: 5px;
        }


        /* Add animation for labels */
        label {
            opacity: 0;
            transform: translateY(-20px);
            transition: opacity 0.5s ease, transform 0.5s ease;
        }

        /* Apply animation when labels become visible */
        label.show {
            opacity: 1;
            transform: translateY(0);
        }

        form {
            max-width: 800px;
            align-self: center;
        }

        /* Styles for the button container */
        .btn-class {
            text-align: center;
        }

        /* Styles for the buttons */
        .btn-class button {
            background-color: #007BFF;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            margin: 5px;
            /* Add some margin between buttons */
            transition: background-color 0.3s ease;
            /* Smooth transition for background color */
        }

        /* Hover state for buttons */
        .btn-class button:hover {
            background-color: #0056b3;
            /* Change the background color on hover */
        }

        /* Animation for buttons */
        @keyframes buttonFadeIn {
            from {
                opacity: 0;
                transform: translateY(-10px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Apply animation to buttons */
        .btn-class button {
            animation: buttonFadeIn 0.5s ease-in-out;
        }
    </style>
</head>

<body>

    <div class="container">

        <div class="main-container">
            <form action="process_form.php" method="post">
                
                <div class="head_class">
                    <h1>QUESTIONNAIRE FOR STUDENT (IT)</h1>
                </div>
                <br>
                <div>
                    <label for="regd">Registration No.</label>
                    <input type="text" id="regd">
                </div>
                <label class="show" for="q1">Course Contents of Curriculum are in tune with the Program Outcomes</label>
                <span>1 means Low</span>
                <input type="range" id="q1" name="q1" min="1" max="5">
                <span>5 means High</span>

                <label class="show" for="q2">Course Contents are designed to enable Problem Solving Skills and Core
                    competencies</label>
                <span>1 means Low</span>
                <input type="range" id="q2" name="q2" min="1" max="5">
                <span>5 means High</span>

                <label class="show" for="q3">Course placed in the Curriculum serves the needs of both advanced and slow
                    learners</label>
                <span>1 means Low</span>
                <input type="range" id="q3" name="q3" min="1" max="5">
                <span>5 means High</span>

                <label class="show" for="q4">Contact Hour Distribution among the various course Components (LTP) is
                    satisfiable</label>
                <span>1 means Low</span>
                <input type="range" id="q4" name="q4" min="1" max="5">
                <span>5 means High</span>

                <label class="show" for="q5">Composition of Basic Science, Engineering, Humanities, and Management
                    Courses
                    is a right mix and satisfiable</label>
                <span>1 means Low</span>
                <input type="range" id="q5" name="q5" min="1" max="5">
                <span>5 means High</span>

                <label class="show" for="q6">Laboratory sessions are sufficient to improve the technical skills of
                    students</label>
                <span>1 means Low</span>
                <input type="range" id="q6" name="q6" min="1" max="5">
                <span>5 means High</span>

                <label class="show" for="q7">Inclusion of Minor Project/Mini Projects improved the technical competency
                    and
                    leadership skills among the students</label>
                <span>1 means Low</span>
                <input type="range" id="q7" name="q7" min="1" max="5">
                <span>5 means High</span>
                <label for="suggest">Suggest any other points to improve the quality of the Curriculum</label> <br>
                <textarea name="suggest" id="suggest" cols="100" rows="2"></textarea>
                <div class="btn-class">
                    <button type="submit">Submit</button>
                    <button type="reset">Reset</button>
                </div>
            </form>
        </div>
    </div>

    <script>
        // Add animation to labels when the page loads
        window.addEventListener('DOMContentLoaded', function () {
            const labels = document.querySelectorAll('label');
            labels.forEach(function (label, index) {
                setTimeout(function () {
                    label.classList.add('show');
                }, index * 100); // Add a delay for each label
            });
        });
    </script>
</body>

</html>