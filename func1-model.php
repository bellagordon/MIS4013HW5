<!DOCTYPE html>
<html lang="en">
<head>
    <title>Function 1</title>
</head>
<body>
    <div class="modal" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Homework Assignment</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
         <p id="displayHomework"></p>
    <script>
        function displayHomework() {
            const assn = {
                assnTitle: "Practice with Javascript",
                assnsNumber: "Homework 5",
                fullAssnName: function () {
                    return this.courseTitle + ":" +  " " + this.classNumber;
                }
            };
            document.getElementById("displayHomework").innerText = assn.fullAssnName();
        }

        // Execute the function
        displayHomework();
    </script>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary">Function worked!</button>
      </div>
    </div>
  </div>
</div>
   
</body>
</html>

