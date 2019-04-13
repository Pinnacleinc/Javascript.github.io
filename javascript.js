  

//onclick code
  function displayDate() {
  document.getElementById("demo").innerHTML = Date();
}
//on focus code
function myfocus(y) {
  y.style.background = "blue";
}
// onblur js code
function uper() {
  var x = document.getElementById("fname");
  x.value = x.value.toUpperCase();
  var y = document.getElementById("lname");
  y.value = y.value.toUpperCase();
}

//onchange event
function change() {
  var x = document.getElementById("mySelect").value;
  document.getElementById("demos").innerHTML = "You selected: " + x;
}

// onmouse over and onmuse out
function bigImg(x) {
  x.style.height = "480px";
  x.style.width = "480px";
}

function normalImg(x) {
  x.style.height = "240px";
  x.style.width = "240px";
}
//onsubmit
function myFunction() {
  alert("The form was submitted");
}

function func1() {
  alert("THIS IS AN ONLOAD EVENT.");
}
//onload js code
window.onload=func1;