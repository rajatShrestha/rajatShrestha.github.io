// function form which gets called when the message button is triggred
function form() {
  var name = document.forms["contact"]["name"].value;
  var age = document.forms["contact"]["age"].value;
  var email = document.forms["contact"]["email"].value;
  var message = document.forms["contact"]["message"].value;
  
  if (name == "" ||  email == "" || message == ""){

      alert("Empty fields found. Please fill the form.");
  }
  else if (age > 100 || age < 1 || age == "") {
      alert("Invalid age");
  }
  else {
      alert("Thanks " + name +" for giving out your opinion. \n You will get your reply at your email at \n" + email );
  }
}




//for the navbar
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
      x.className += " responsive";
  } else {
      x.className = "topnav";
  }
}