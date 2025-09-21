document.getElementById("signupForm").addEventListener("submit", function(event) {
  event.preventDefault(); 

  let name = document.getElementById("name").value.trim();
  let email = document.getElementById("email").value.trim();
  let password = document.getElementById("password").value.trim();

  if (name.length < 3) {
    alert("Name must be at least 3 characters long.");
    return;
  }

  let emailPattern = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/;
  if (!email.match(emailPattern)) {
    alert("Please enter a valid email address.");
    return;
  }

  if (password.length < 6) {
    alert("Password must be at least 6 characters long.");
    return;
  }

  alert("Registration successful!\nWelcome, " + name);
});