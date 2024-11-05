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
        function displayName() {
            const person = {
                firstName: "John",
                lastName: "Doe",
                fullName: function () {
                    return this.firstName + " " + this.lastName;
                }
            };
            document.getElementById("displayName").innerText = person.fullName();
        }

        // Execute the function
        displayName();
    </script>
</body>
</html>

