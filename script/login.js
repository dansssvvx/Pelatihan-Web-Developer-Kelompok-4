const loginForm = document.getElementById("loginForm");
const emailInput = document.getElementById("email");
const passwordInput = document.getElementById("password");

loginForm.addEventListener("submit", function (event) {
  event.preventDefault(); 

  const email = emailInput.value.trim();
  const password = passwordInput.value.trim();

  const emailPattern = /^[^\s@]+@[^\s@]+\.[a-z]{2,3}$/;
  if (!email.match(emailPattern)) {
    alert("Please enter a valid email address.");
    return;
  }

  if (password.length < 6) {
    alert("Password must be at least 6 characters long.");
    return;
  }

  alert("Login successful!\nWelcome!");
  window.location.href = "index.html"; 
});