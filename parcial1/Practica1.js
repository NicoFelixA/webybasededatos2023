$(document).ready(function (){
    $("#boton1").on("click", function(){
       $("#texto1").html("Texto agregado del parrafo")
    });
    $("#texto1").hover(function(){
        $(this).css("background-color", "purple");
        $(this).css("font-size", "35px");
        }, function(){
            $(this).css("background-color", "red");
            $(this).css("font-size", "15px");
        });     

    $("#boton2").click(function(e){
        $("#imagen1").fadeToggle("slow");
    });
});