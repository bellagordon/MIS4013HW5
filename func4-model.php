<!DOCTYPE html>
<html lang="en">
<head>
  <h1>Function 4</h1>
</head>
  
<body>
  <ul class="list-group">
    <li class="list-group-item"> Random number 1 : 
      <p id="randomNum1"></p> <!-- Placeholder for the random number -->
    </li>
    <li class="list-group-item"> Random number 2 : 
      <p id="randomNum2"></p> <!-- Placeholder for the random number -->
    </li>
    <li class="list-group-item"> Random number 3 : 
      <p id="randomNum3"></p> <!-- Placeholder for the random number -->
    </li>
  </ul>

  <script>
    // Define the random number function once
    const randomNum = (min, max) => Math.floor(Math.random() * (max - min + 1)) + min;

    // Generate and display the random numbers
    document.getElementById("randomNum1").textContent = randomNum(1, 100000);
    document.getElementById("randomNum2").textContent = randomNum(1, 100000);
    document.getElementById("randomNum3").textContent = randomNum(1, 100000);
  </script>

</body>
</html>
