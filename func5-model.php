
<!DOCTYPE html>
<html lang="en"> 

<head>
  <title>Function 5t</title>
</head> 

<body>
  <div id="output"></div> <!-- Placeholder for the function output -->

  <script>
    function foo(i) {
      if (i < 0) {
        return;
      }
      document.getElementById("output").innerHTML += `begin: ${i}<br>`;
      foo(i - 1);
      document.getElementById("output").innerHTML += `end: ${i}<br>`;
    }
    foo(10);
  </script>
</body>
  
</html>
