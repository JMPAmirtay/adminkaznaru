//s1 по s4 - слайды
//ix - счетчик шагов
//sec - время на один шаг
//width - ширина одного слайда
//opacity - прозрачность
//acs - индикатор, не позволяющий анимации наложиться саму на себя
var s1;
var s2;
var ix = 1;
var sec = 4000;
var width = 1247;
var opacity = 0.1;
var acs = 4;
function start() {
    s1 = $("#slide1");
    s2 = $("#slide2");
    s3 = $("#slide3");
    s4 = $("#slide4");
    s2.css({ left: width, opacity: opacity });
    s3.css({ left: width * 2, opacity: opacity });
    s4.css({ left: -1 * width, opacity: opacity });
    timer = setTimeout("step();", sec);
}
function step() {
    acs = 0;
    if (ix == 1) {
        s1.animate({ left: -1 * width, opacity: opacity }, 2000, function () {
            acs++;
        });
        s2.animate({ left: 0, opacity: 1 }, 2000, function () {
            acs++;
        });
        s3.animate({ left: width }, 2000, function () {
            acs++;
        });
        s4.animate({ left: -2 * width }, 2000, function () {
            s4.css("left", "2520px");
            acs++;
        });
        ix++;
        timer = setTimeout("step();", sec);
    } else if (ix == 2) {
        s2.animate({ left: -1 * width, opacity: opacity }, 2000, function () {
            acs++;
        });
        s3.animate({ left: 0, opacity: 1 }, 2000, function () {
            acs++;
        });
        s4.animate({ left: width }, 2000, function () {
            acs++;
        });
        s1.animate({ left: -2 * width }, 2000, function () {
            s1.css("left", "2520px");
            acs++;
        });
        ix++;
        timer = setTimeout("step();", sec);
    } else if (ix == 3) {
        s3.animate({ left: -1 * width, opacity: opacity }, 2000, function () {
            acs++;
        });
        s4.animate({ left: 0, opacity: 1 }, 2000, function () {
            acs++;
        });
        s1.animate({ left: width }, 2000, function () {
            acs++;
        });
        s2.animate({ left: -2 * width }, 2000, function () {
            s2.css("left", "2520px");
            acs++;
        });
        ix++;
        timer = setTimeout("step();", sec);
    } else if (ix == 4) {
        s4.animate({ left: -1 * width, opacity: opacity }, 2000, function () {
            acs++;
        });
        s1.animate({ left: 0, opacity: 1 }, 2000, function () {
            acs++;
        });
        s2.animate({ left: width }, 2000, function () {
            acs++;
        });
        s3.animate({ left: -2 * width }, 2000, function () {
            s3.css("left", "2520px");
            acs++;
        });
        ix = 1;
        timer = setTimeout("step();", sec);
    }
    $(".slider").mouseover(function () {
        $(this).cycle({ timeout: 0 });
    });
}
function setslide(x) {
    clearTimeout(timer);
    if (acs == 4 && x != ix) {
        if (ix == 1 && x == 4) {
            dstep();
        } else if (ix == 4 && x == 1) {
            step();
        } else if (ix < x) {
            step();
        } else {
            dstep();
        }
    }
    $(".slider").mouseover(function () {
        $(this).cycle({ timeout: 0 });
    });
}
function dstep() {
    acs = 0;
    if (ix == 1) {
        s3.css("left", "-2520px");
        s1.animate({ left: width, opacity: opacity }, 2000, function () {
            acs++;
        });
        s2.animate({ left: width * 2 }, 2000, function () {
            acs++;
        });
        s3.animate({ left: -1 * width }, 2000, function () {
            acs++;
        });
        s4.animate({ left: 0, opacity: 1 }, 2000, function () {
            acs++;
        });
        ix = 4;
        timer = setTimeout("step();", sec);
    } else if (ix == 4) {
        s2.css("left", "-2520px");
        s4.animate({ left: width, opacity: opacity }, 2000, function () {
            acs++;
        });
        s1.animate({ left: width * 2 }, 2000, function () {
            acs++;
        });
        s2.animate({ left: -1 * width }, 2000, function () {
            acs++;
        });
        s3.animate({ left: 0, opacity: 1 }, 2000, function () {
            acs++;
        });
        ix = 3;
        timer = setTimeout("step();", sec);
    } else if (ix == 3) {
        s1.css("left", "-2520px");
        s3.animate({ left: width, opacity: opacity }, 2000, function () {
            acs++;
        });
        s4.animate({ left: width * 2 }, 2000, function () {
            acs++;
        });
        s1.animate({ left: -1 * width }, 2000, function () {
            acs++;
        });
        s2.animate({ left: 0, opacity: 1 }, 2000, function () {
            acs++;
        });
        ix = 2;
        timer = setTimeout("step();", sec);
    } else if (ix == 2) {
        s4.css("left", "-2520px");
        s2.animate({ left: width, opacity: opacity }, 2000, function () {
            acs++;
        });
        s3.animate({ left: width * 2 }, 2000, function () {
            acs++;
        });
        s4.animate({ left: -1 * width }, 2000, function () {
            acs++;
        });
        s1.animate({ left: 0, opacity: 1 }, 2000, function () {
            acs++;
        });
        ix = 1;
        timer = setTimeout("step();", sec);
    }
    $(".slider").mouseover(function () {
        $(this).cycle({ timeout: 0 });
    });
}
