function checkAnagrams() {
    let str1 = document.getElementById("string1").value.toLowerCase();
    let str2 = document.getElementById("string2").value.toLowerCase();
  
    if (str1.length !== str2.length) {
      document.getElementById("result").innerHTML = "The two strings are not anagrams";
      return;
    }
  
    let str1Sorted = str1.split("").sort().join("");
    let str2Sorted = str2.split("").sort().join("");
  
    if (str1Sorted === str2Sorted) {
      document.getElementById("result").innerHTML = "The two strings are anagrams";
    } else {
      document.getElementById("result").innerHTML = "The two strings are not anagrams";
    }
  }