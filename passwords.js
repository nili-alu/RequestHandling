function checkPasswordStrength() {
  var password = document.getElementById("password").value;
  var passwordStrengthBar = document.getElementById("password-strength-bar");
  var registrationButton = document.getElementById("registration-button");
  var criteriaList = document.getElementById("criteria-list");

  // Define regular expressions for each requirement
  var hasUpperCase = /[A-Z]/.test(password);
  var hasLowerCase = /[a-z]/.test(password);
  var hasNumbers = /\d/.test(password);
  var hasSpecialChars = /[!@#$%^&*()_+{}\[\]:;<>,.?~\\-]/.test(password);

  // Calculate password strength based on the requirements
  var strength = 0;
  if (hasUpperCase) strength++;
  if (hasLowerCase) strength++;
  if (hasNumbers) strength++;
  if (hasSpecialChars) strength++;

  // Prepare a message for the criteria list
  var criteriaMessage = "";
  criteriaMessage += "- At least one uppercase letter: " + (hasUpperCase ? "✅" : "❌") + "\n";
  criteriaMessage += "- At least one lowercase letter: " + (hasLowerCase ? "✅" : "❌") + "\n";
  criteriaMessage += "- At least one number: " + (hasNumbers ? "✅" : "❌") + "\n";
  criteriaMessage += "- At least one special character: " + (hasSpecialChars ? "✅" : "❌") + "\n";
  criteriaMessage += "- At least 8 characters): " + (password.length >= 8 ? "✅" : "❌");

  // Update the criteria list
  criteriaList.innerText = criteriaMessage;

  // Update the password strength bar
  if (password.length < 8 || strength < 4) {
    passwordStrengthBar.innerHTML = "Weak password";
    passwordStrengthBar.style.color = "red";
    registrationButton.disabled = true;
  } else {
    passwordStrengthBar.innerHTML = "Strong password";
    passwordStrengthBar.style.color = "green";
    registrationButton.disabled = false; // Enable the button
  }
}
