function toggleDroplevel() {
    var droplevel = document.getElementById("levelList");
    if (droplevel.style.display === "none" || droplevel.style.display === "") {
        droplevel.style.display = "block";
    } else {
        droplevel.style.display = "none";
    }
}

function updateDept(value) {
    document.getElementById("level").value = value;
    document.getElementById("levelList").style.display = "none";
}

window.addEventListener("click", function(event) {
var droplevel = document.getElementById("levelList");
if (!event.target.matches("#level")) {
  droplevel.style.display = "none";
}
});

var options = document.querySelectorAll("#levelList option");
options.forEach(function(option) {
option.addEventListener("click", function() {
  var selectedValue = this.value;
  document.getElementById("level").value = selectedValue;
  document.getElementById("levelList").style.display = "none";
});
});