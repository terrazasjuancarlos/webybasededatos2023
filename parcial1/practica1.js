$(document).ready(function(){
    $("#boton1").on("click",function(){
        $("#texto1").html("Texto Agregado Al Parrafo");
    });
    
    $("#texto1").hover(function(){
        $(this).css("background-color", "blue");
        $(this).css("font-size", "50px");

    },function(){
        $(this).css("background-color", "white");
        $(this).css("font-size", "20px");
    }
    );

    $("#boton2").click(function(){
        $("#imagen1").fadeToggle()
    })

});