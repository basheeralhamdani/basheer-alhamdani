function checkEmail() {
    let email = document.getElementById("email").value;
  
    let regex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
  
    if (regex.test(email)) {
      document.getElementById("result").innerHTML = "Valid email address";
    } else {
      document.getElementById("result").innerHTML = "Invalid email address";
    }
  }