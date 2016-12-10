$(function(){
    $("#lanList li a").click(function(){
        var caret = "<b class=\"caret\"></b>";
        $("#lanNav ul li a:first").html($(this).text()+caret);
    });

    $("#navList li").click(function(){
        $("#navList li").removeClass("active");
        $(this).addClass("active");
    });
});