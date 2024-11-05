const person = {
    firstName: "John",
    lastName: "Doe",
    fullName: function () {
        return this.firstName + " " + this.lastName;
    }
}

// Log "John Doe" to the console
console.log(person.fullName());
