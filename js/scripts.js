function doScroll(id) {
    if (id == null) {
        $('html, body').animate({
            scrollTop: 0
        }, 1100);
    } else {

        $('html, body').animate({
            scrollTop: $('#' + id).offset().top - 100
        }, 1100);
    }
}


function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}