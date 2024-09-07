	function toggleDroplist() {
		var droplist = document.getElementById("deptList");
		if (droplist.style.display === "none" || droplist.style.display === "") {
			droplist.style.display = "block";
		} else {
			droplist.style.display = "none";
		}
	}

	function updateDept(value) {
		document.getElementById("dept").value = value;
		document.getElementById("deptList").style.display = "none";
	}

	window.addEventListener("click", function(event) {
    var droplist = document.getElementById("deptList");
    if (!event.target.matches("#dept")) {
      droplist.style.display = "none";
    }
  });

  var options = document.querySelectorAll("#deptList option");
  options.forEach(function(option) {
    option.addEventListener("click", function() {
      var selectedValue = this.value;
      document.getElementById("dept").value = selectedValue;
      document.getElementById("deptList").style.display = "none";
    });
  });
