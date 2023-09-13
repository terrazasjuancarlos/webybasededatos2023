$(document).ready(function(){
    var carta1 = ""; var carta2 = "";
    var par= false;
    var total_pares = 0; 
    $('img').click(function(e){
        var estado = $(this).attr('data-estado')
        var nombre_imagen = $(this).attr('data-id')

        if(estado == "0"){
            if(carta1 != "" && carta2 != ""){
                console.log("las cartas son diferentes")
                if(carta1.attr('data-id') != carta2.attr('data-id')){
                    console.log("voltear cartas diferentes")
                    carta1.attr('src', 'imagen/fondo.jpg')
                    carta2.attr('src', 'imagen/fondo.jpg')
                    carta1.attr('data-estado', '0')
                    carta2.attr('data-estado', '0')
                } else {
                    console.log("las cartas son par")
                    carta1.attr('data-estado', '1')
                    carta2.attr('data-estado', '1')
                    par = false
                }
                carta1=""
                carta2=""
            }
            
        
            console.log("estado de la carta:" + estado)
            if(carta1 == ""){
                carta1 = $(this);
                carta1.attr('src','imagen/' + nombre_imagen);
                carta1.attr('data-estado', '1')
                console.log("se asigno carta #1")
            } else{
                    carta2 = $(this);
                    carta2.attr('src','imagen/' + nombre_imagen);
                    carta2.attr('data-estado', '1')
                    console.log("se asigno carta #2")
        }
    }

    if(carta1 != "" && carta2 != ""){
        if(carta1.attr('data-id') == carta2.attr('data-id')){
            par = true
            total_pares++
            $("#total_pares").html(total_pares)
            carta1 = ""
            carta2 = ""
        }    
    }
    

    if(total_pares >=8){
        alert("ganaste")
        //reiniciando la pagina setInterval("location.reload()");
        $('img').each(function (){

        })

        total_pares=0
        par=false
        carta1=""
        carta2=""
        return;
    }

    });
});