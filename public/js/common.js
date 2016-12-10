$(function(){
    $("#lanList li a").click(function(){
        var caret = "<b class=\"caret\"></b>";
        $("#lanNav ul li a:first").html($(this).text()+caret);
    });
});