var myIndex = 0;
function carousel() {
    var i;
    var x = document.getElementsByClassName("Slides");
    for (i = 0; i < x.length; i++) {
      x[i].style.visibility = "hidden";
      x[i].style.opacity = 0;
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}
    x[myIndex-1].style.visibility = "visible";
    x[myIndex-1].style.opacity = 1;
    setTimeout(carousel, 4000);
}
carousel();
