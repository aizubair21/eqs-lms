//hide or show the asside 
function pushmenu() {
    console.log("click to pushmenu");
    document.body.classList.toggle("sidebar-collapse");
    document.body.classList.toggle("sidebar-open");
    document.body.classList.toggle("sidebar-closeed");

    if (!document.body.classList.contains("sidebar-collapse")) {
        document.getElementById("sidebar-close-btn").classList.add("d-block");
    } else {
        document.getElementById("sidebar-close-btn").classList.remove("d-block");
    }
}
