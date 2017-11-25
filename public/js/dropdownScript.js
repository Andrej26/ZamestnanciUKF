/* When the user clicks on the button,
toggle between hiding and showing the dropdown content */
function publikacieFunc() {
    var publ = document.getElementById("publDrop");
    var proj = document.getElementById("projDrop");
    var pbbutton = document.getElementsByClassName("publ-dropdown");
    var prbutton = document.getElementsByClassName("proj-dropdown");

    publ.style.display = "block";
    proj.style.display = "none";
    pbbutton[0].style.backgroundColor= "#656c71";
    prbutton[0].style.backgroundColor = "#959ca1";

}
function projektyFunc() {
    var publ = document.getElementById("publDrop");
    var proj = document.getElementById("projDrop");
    var pbbutton = document.getElementsByClassName("publ-dropdown");
    var prbutton = document.getElementsByClassName("proj-dropdown");

    publ.style.display = "none";
    proj.style.display = "block";
    pbbutton[0].style.backgroundColor = "#959ca1";
    prbutton[0].style.backgroundColor = "#656c71";

}

