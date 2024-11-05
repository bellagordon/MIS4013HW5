const person = {
    firstName: "John",
    lastName: "Doe",
    fullName: function () {
        return this.firstName + " " + this.lastName;
    }
}

// Display "John Doe" on the webpage
document.getElementById("displayName").innerText = person.fullName();
