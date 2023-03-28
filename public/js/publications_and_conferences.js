function sidebar(e) {
    $("#side-select1").removeClass("sidebar-selected");
    $("#side-select2").removeClass("sidebar-selected");
    $("#side-select" + e).addClass("sidebar-selected");
    if (e == 1) {
        $("#side-con1").css("display", "block");
        $("#side-con12").css("display", "none");
    } else {
        $("#side-con1").css("display", "none");
        $("#side-con12").css("display", "block");
    }
}
