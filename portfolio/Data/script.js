var database = [
    {
        username: "rifat",
        passowrd: "rifat17"
    }
];

var urlParams = new URLSearchParams(window.location.search);
var firstName = urlParams.get('fname');
var lastName = urlParams.get('lname');
var email = urlParams.get('email');
var rfcontact = urlParams.get('reasoncontact');
var service = urlParams.get('Services');
var offer = urlParams.get('job');
var pos = urlParams.get('position');

var ShowInfo = [
    {
        Firstname: firstName,
        Lastname: lastName,
        Email: email,
        ReasonForContacting: rfcontact,
        Services: service,
        OfferingJob: offer,
        Position: pos
    }
];
var user = prompt("What is your username?");
var pass = prompt("What is your password?");

function signIn(user,pass){
    if(user === database[0].username && pass === database[0].passowrd){
        console.log(ShowInfo);
    }
    else {
        console.log("Incorrect username and password");
    }
}
signIn(user,pass);