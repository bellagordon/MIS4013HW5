const ourCourse = {
  className:"E-Commerce Web Design",
  courseNumber: "MIS 4013",
  display: function () {
    let x = document.getElementById("demo");
    x.innerHTML = this.className + " " + this.courseNumber;
  }
}

let display = person.display.bind(ourCourse);
setTimeout(display, 3000);
