<!DOCTYPE html>
<html lang="en">
<head>
    <title>Function 1</title>
</head>
<body>
    <h1>Function 1</h1>
<div class="container text-center">
  <div class="row align-items-start">
    <div class="col">
      <script>
          const person = {
              firstName:"John",
                lastName: "Doe",
              display: function () {
    let x = document.getElementById("demo");
    x.innerHTML = this.firstName + " " + this.lastName;
          }
        }

        let display = person.display.bind(person);
        setTimeout(display, 3000);
      </script>
    </div>
    <div class="col">
      One of three columns
    </div>
    <div class="col">
      One of three columns
    </div>
  </div>
</div>
</body>
</html>
