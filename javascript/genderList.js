function toggleDropGender() {
    var droplist = document.getElementById("genderList");
    if (droplist.style.display === "none" || droplist.style.display === "") {
        droplist.style.display = "block";
    } else {
        droplist.style.display = "none";
    }
}

function updateDept(value) {
    document.getElementById("gender").value = value;
    document.getElementById("genderList").style.display = "none";
}

window.addEventListener("click", function(event) {
var droplist = document.getElementById("genderList");
if (!event.target.matches("#gender")) {
  droplist.style.display = "none";
}
});

var options = document.querySelectorAll("#genderList option");
options.forEach(function(option) {
option.addEventListener("click", function() {
  var selectedValue = this.value;
  document.getElementById("gender").value = selectedValue;
  document.getElementById("genderList").style.display = "none";
});
});