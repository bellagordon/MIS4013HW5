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
                <p id="class1"></p> 
                <script>
                    const class1 = {
                        className: "MIS 4663",
                        classDayTime: "Mon. Wed. Fri 10:00am-10:50am",
                        display: function () {
                            let x = document.getElementById("class1");
                            x.innerHTML = this.className + " " + this.classDayTime;
                        }
                    }; 
                    let display = class1.display.bind(class1);
                    setTimeout(display, 2000);
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
