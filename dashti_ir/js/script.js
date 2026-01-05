window.onscroll = function() {changeBgMenu()};
let elementMenu = document.getElementById("navbar");
function changeBgMenu() {
    if (document.documentElement.scrollTop > 50) {
        elementMenu.style.backgroundColor = "#fff";
    } else {
        elementMenu.style.backgroundColor = "transparent";
    }
}
