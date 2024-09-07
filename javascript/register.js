function toggleRegister() {
    var register = document.getElementById("popup_register");
    var overlay = document.getElementById("overlay");
    var body = document.body;

    if (overlay.style.display === "none" || overlay.style.display === "") {
        overlay.style.display = "block";
        register.style.display = "block";
        body.style.overflow = "hidden";
    } else {
        register.style.display = "none";
        register.style.display = "none";
        body.style.overflow = "";
    }
}

