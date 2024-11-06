
<!DOCTYPE html>
<html lang="en"> 

<head>
  <title>Function 5t</title>
</head> 

<body>
  <div id="output"></div> <!-- Placeholder for the function output -->

  <script>
    function rpt(i) {
      if (i < 0) {
        return;
      }
      document.getElementById("output").innerHTML += `+${i}<br>`;
      rpt(i - 1);
      document.getElementById("output").innerHTML += `-${i}<br>`;
    }
    rpt(10);
  </script>
</body>
  
</html>
