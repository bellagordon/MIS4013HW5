<!DOCTYPE html>
<html lang="en">
<head>
    <title>Function 1</title>
     <style>
        /* Basic styling for the container and text alignment */
        .container {
            margin: 20px;
        }
        .text-center {
            text-align: center;
        }

        /* Add styles for the columns */
        .border-column {
            border: 2px solid black; /* Black border */
            padding: 20px; /* Optional: Add some padding inside the column */
            border-radius: 5px; /* Optional: Add rounded corners */
        }

        /* Common text style for all demo text */
        .text-style {
            font-size: 2.5em; /* Change this value to adjust the size */
            font-weight: bold; /* Make the text bold */
        }
    </style>
</head>
<body>
    <h1>Function 1</h1>
    <div class="container text-center">
        <div class="row align-items-start">
            <div class="col border-column">
                <p class="text-style" id="class1"></p> 
                <script>
                    const class1 = {
                        className: "MIS 4663",
                        classDayTime: "Mon. Wed. Fri 10:00am-10:50am",
                        display: function () {
                            let x = document.getElementById("class1");
                            x.innerHTML = this.className + "<br>" + this.classDayTime;
                        }
                    }; 
                    let display = class1.display.bind(class1);
                    setTimeout(display, 2000);
                </script>
            </div>
           <div class="col border-column">
                <p class="text-style" id="class2"></p> 
                <script>
                    const class2 = {
                        className: "MIS 4013",
                        classDayTime: "Mon. Wed. Fri 1:00pm-1:50pm",
                        display: function () {
                            let x = document.getElementById("class2");
                            x.innerHTML = this.className + "<br>" + this.classDayTime; // Added line break for clarity
                        }
                    }; 
                    let display2 = class2.display.bind(class2);
                    setTimeout(display2, 4000); // Ensures it shows after Function 1
                </script>            
            </div>
            <div class="col border-column">
                <p class="text-style" id="class3"></p> 
                <script>
                    const class3 = {
                        className: "MIS 2113",
                        classDayTime: "Tues. Thurs 10:00am-11:45am",
                        display: function () {
                            let x = document.getElementById("class3");
                            x.innerHTML = this.className + "<br>" + this.classDayTime; // Added line break for clarity
                        }
                    }; 
                    let display3 = class3.display.bind(class3);
                    setTimeout(display3, 4000); // Ensures it shows after Function 1
                </script>               
            </div>
        </div>
    </div>
</body>
</html>
