function sliceArray() {
  let inputArray = document.getElementById("inputArray").value.split(",");
  let startIndex = parseInt(document.getElementById("startIndex").value);
  let endIndex = parseInt(document.getElementById("endIndex").value);

  let slicedArray = inputArray.slice(startIndex, endIndex);

  document.getElementById("result").innerHTML = "Sliced Array: " + slicedArray;
}