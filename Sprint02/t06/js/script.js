let firstName = String(prompt("What is your first name?"));
let lastName = String(prompt("What is your last name?"));
let firstChecked = firstName.match(/^[a-z]+$/i)
let lastChecked = lastName.match(/^[a-z]+$/i)

if (firstChecked && lastChecked) {
    firstName = firstName.charAt(0).toUpperCase() + firstName.slice(1).toLowerCase();
    lastName = lastName.charAt(0).toUpperCase() + lastName.slice(1).toLowerCase();

    console.log(`Hey, ${firstName} ${lastName}`);
    alert(`Hey, ${firstName} ${lastName}`);
}
else {
    console.log("Wrong input!");
    alert("Wrong input!");
}
