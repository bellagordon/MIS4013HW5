<!DOCTYPE html>
<html lang="en"> 
<head>
    <title>Collapsible Card Example</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        /* Make the text larger and center it */
        .card-body {
            font-size: 3em; /* Adjust the size as needed */
            display: flex;
            justify-content: center; /* Horizontally center the text */
            align-items: center; /* Vertically center the text */
            height: 200px; /* Set a fixed height for the card to center the text properly */
        }
    </style>
</head>
<body> 
<p class="d-inline-flex gap-1">
  <a class="btn btn-primary" data-bs-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">Equation</a>
  <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#multiCollapseExample2" aria-expanded="false" aria-controls="multiCollapseExample2">Answer</button>
</p>
<div class="row">
  <div class="col">
    <div class="collapse" id="multiCollapseExample1">
      <div class="card card-body">
       (12 x 15) x 3
      </div>
    </div>
  </div>
  <div class="col">
    <div class="collapse" id="multiCollapseExample2">
      <div class="card card-body">
       <p id="x"></p>
        <script>
      function myEquation(a, b, c) {
      return (a * b) * c;
      }

      let x = myEquation(12, 15, 3); 
      document.getElementById("x").innerText = x; 
      </script>      
          
      </div>
    </div>
  </div>
</div>
</body>
</html>
