function reformobile(){
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
}
window.onload = function(){
    reformobile();
}
window.onresize = function(){
    reformobile();
}