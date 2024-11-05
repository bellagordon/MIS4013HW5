<!DOCTYPE html>
<html lang="en">
<head>
    <title>Function 1</title>
</head>
<body>
    <h1>Function 1</h1>
    <div class="card">
        <div class="card-body">
            Course Name
        </div>
    </div>
    <p id="displayName"></p>
    <script>
        // JavaScript function to display "John Doe"
        function displayCourse() {
            const course = {
                courseTitle: "E-Commerce Web Design",
                classNumber: "MIS 4013",
                fullCourseName: function () {
                    return this.courseTitle + "," +  " " + this.classNumber;
                }
            };
            document.getElementById("displayCourse").innerText = course.fullCourseName();
        }

        // Execute the function
        displayName();
    </script>
</body>
</html>

