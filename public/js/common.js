$(function(){
    $("#navList li").click(function(){
        $("#navList li").removeClass("active");
        $(this).addClass("active");
    });
});