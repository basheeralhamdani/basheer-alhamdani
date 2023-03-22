function splitString() {
    let inputString = document.getElementById("inputString").value;
  
    let wordsArray = inputString.split(" ");
  
    document.getElementById("result").innerHTML = "Words Array: " + wordsArray;
  }