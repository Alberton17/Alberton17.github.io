$(document).ready(function(){

    $("dar_carta").click(function(){
        var b=true;
        while(b){
            var num = Math.floor(Math.random()*54)+1;
            console.log("Numero de carta ="+num);
            if(cartas[num-1]==true){
                continue;
            }else{
                $("#carta_activa").html("<img src='imagenes/"+num+".jpg'>");
                cartas[num-1] = true;
                b=false;
                cont++;
            }
            if(cont==54){
                console.log("ya se dieron todas las cartas");
                b=false;

            }
        }
    });
});