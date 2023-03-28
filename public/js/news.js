function multi(e) {
    $("#multi-select1").removeClass("sidebar-selected");
    $("#multi-select2").removeClass("sidebar-selected");
    $("#multi-select3").removeClass("sidebar-selected");
    $("#multi-select4").removeClass("sidebar-selected");
    $("#multi-select" + e).addClass("sidebar-selected");
    if (e == 1) {
        $("#multibox1").css("display", "block");
        $("#multibox2").css("display", "none");
        $("#multibox3").css("display", "none");
        $("#multibox4").css("display", "none");
        $("#multi-loadmore").css("display", "block");
    } else if (e == 2) {
        $("#multibox1").css("display", "none");
        $("#multibox2").css("display", "block");
        $("#multibox3").css("display", "none");
        $("#multibox4").css("display", "none");
        $("#multi-loadmore").css("display", "none");
    } else if (e == 3) {
        $("#multibox1").css("display", "none");
        $("#multibox2").css("display", "none");
        $("#multibox3").css("display", "block");
        $("#multibox4").css("display", "none");
        $("#multi-loadmore").css("display", "none");
    } else if (e == 4) {
        $("#multibox1").css("display", "none");
        $("#multibox2").css("display", "none");
        $("#multibox3").css("display", "none");
        $("#multibox4").css("display", "block");
        $("#multi-loadmore").css("display", "none");
    } else {
        $("#multibox1").css("display", "block");
        $("#multibox2").css("display", "none");
        $("#multibox3").css("display", "none");
        $("#multibox4").css("display", "none");
        $("#multi-loadmore").css("display", "block");
    }
}

function mainbar(e) {
    $("#main-select1").removeClass("sidebar-selected");
    $("#main-select2").removeClass("sidebar-selected");
    $("#main-select3").removeClass("sidebar-selected");
    $("#main-select" + e).addClass("sidebar-selected");
    if (e == 1) {
        $("#newsbox1").css("display", "block");
        $("#newsbox2").css("display", "none");
        $("#newsbox3").css("display", "none");
        $("#newsloader").css("display", "block");
    } else if (e == 2) {
        $("#newsbox1").css("display", "none");
        $("#newsbox2").css("display", "block");
        $("#newsbox3").css("display", "none");
        $("#newsloader").css("display", "none");
    } else if (e == 3) {
        $("#newsbox1").css("display", "none");
        $("#newsbox2").css("display", "none");
        $("#newsbox3").css("display", "block");
        $("#newsloader").css("display", "none");
    }
}

var limit = 10;

function newsloader() {
    $("#newsloader").hide();
    $.ajax({
        url: "page/news/?action=load&limit=" + limit + "&lang=ru",
        success: function (data) {
            $("#newsbox1").append(data);
            limit = limit + 10;
            $("#newsloader").show();
        },
    });
}
