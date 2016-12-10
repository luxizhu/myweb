$(function(){
    $("#lanList li a").click(function(){
        $("#nowTab").text($(this).text());
    });
});