(function(d, p) {
    var a = new XMLHttpRequest(),
        b = d.body;
    a.open("GET", p, true);
    a.send();
    a.onload = function() {
        var c = d.createElement("div");
        c.style.display = "none";
        c.innerHTML = a.responseText;
        b.insertBefore(c, b.childNodes[0]);
    }
})(document, "lib/plyr/dist/plyr.svg");

plyr.setup();