function reformobile(){
    if (document.body.clientWidth <= 800) {
        $(".container").css("width", document.body.clientWidth);
        $("#sch1").css("display", "block");
        $("#sch1").css("width", document.body.clientWidth);
        $("#sch2").css("display", "block");
        $("#sch2").css("width", document.body.clientWidth);
        $(".anime").css("width", "100%");
        $(".container").css("width", "100%");
        $(".anime").css("margin", "0px");
        $(".anime").css("margin-top", "20px");
        $(".block").css("height", "auto");
    } else {
        $(".container").css("width", "90%");
        $("#sch1").css("display", "inline-block");
        $("#sch1").css("width", "49%");
        $("#sch2").css("display", "inline-block");
        $("#sch2").css("width", "49%");
        $(".anime").css("width", "28%");
        $(".container").css("width", "90%");
        $(".anime").css("margin", "20px");
        $(".anime").css("margin-top", "20px");
        $(".block").css("height", "300px");
    }
}
window.onload = function(){
    reformobile();
}
window.onresize = function(){
    reformobile();
}