<!DOCTYPE html>
<html lang="en"> 
<head>
  <h1>Function 4</h1>
</head>
  
<body>
  <ul class="list-group">
  <li class="list-group-item"> Random number 1 : 
  <p id="randomNum1"></p> <!-- Placeholder for the random number -->
  
  <script> 
    const randomNum = (min, max) => Math.floor(Math.random() * (max - min + 1)) + min;
    const result = randomNum(1, 100000);  // Generate random number
    document.getElementById("randomNum1").textContent = result;  // Display result in the <p> tag
 </script>
    
  </li>
  <li class="list-group-item"> Random number 2 : 
  <p id="randomNum2"></p> <!-- Placeholder for the random number -->
  
  <script> 
    const randomNum = (min, max) => Math.floor(Math.random() * (max - min + 1)) + min;
    const result = randomNum(1, 100000);  // Generate random number
    document.getElementById("randomNum2").textContent = result;  // Display result in the <p> tag
 </script>
    
  </li>
  <li class="list-group-item"> Random number 3 : 
  <p id="randomNum3"></p> <!-- Placeholder for the random number -->
  
  <script> 
    const randomNum = (min, max) => Math.floor(Math.random() * (max - min + 1)) + min;
    const result = randomNum(1, 100000);  // Generate random number
    document.getElementById("randomNum3").textContent = result;  // Display result in the <p> tag
 </script>
    
  </li>
</ul>

  
</body>  
</html>
