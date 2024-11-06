<!DOCTYPE html>
<html lang="en"> 

<head>
  <title>Recursive Letter Removal</title>
</head> 

<body>
  <div id="output"></div> <!-- Placeholder for the function output -->

  <script>
    function repeatString(str) {
      if (str.length === 0) {
        return;
      }

      document.getElementById("output").innerHTML += `${str}<br>`;

      manipulateString(str.slice(0, -1));

      document.getElementById("output").innerHTML += `${str}<br>`;
    }

    repeatString("JavaScript");  // Call the function with "JavaScript"
  </script>
</body>
</html>
