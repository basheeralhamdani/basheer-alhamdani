function calculateAge() {
    let dateOfBirth = new Date(document.getElementById("dateOfBirth").value);
  
    let today = new Date();
  
    let ageInMilliseconds = today.getTime() - dateOfBirth.getTime();
  
    let ageInYears = Math.floor(ageInMilliseconds / (1000 * 60 * 60 * 24 * 365));
  
    document.getElementById("result").innerHTML = "Age: " + ageInYears;
  }