<!DOCTYPE html>
<html lang="en">
<head>
    <title>Function 1</title>
</head>
<body> 
    <h1>Function 1</h1>
    <div class="card">
    <div class="card text-bg-primary mb-3">
        This week's assignment -
    </div>
    </div>
    <div class="card">
        <div class="card-body">
         <p id="displayHomework"></p>
            <script>
        function displayHomework() {
            const assn = {
                assnTitle: "Practice with Javascript",
                assnNumber: "Homework 5",
                fullAssnName: function () {
                    return this.assnTitle + ":" +  " " + this.assnNumber;
                }
            };
            document.getElementById("displayHomework").innerText = assn.fullAssnName();
        }

        // Execute the function
        displayHomework();
    </script>        
</div>
</body>   
</html>
