var slider = document.getElementById("age_range");
var output = document.getElementById("age");
output.innerHTML = slider.value;

slider.oninput = function() {
  output.innerHTML = this.value;
}