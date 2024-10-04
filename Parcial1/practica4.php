<?php

    $aciertos = 0;
    $pregunta1 = $_POST["pregunta1"];
    $pregunta2 = $_POST["pregunta2"];
    $pregunta3 = $_POST["pregunta3"];
    $pregunta4 = $_POST["pregunta4"];
    $pregunta5 = $_POST["pregunta5"];
    $pregunta6 = $_POST["pregunta6"];
    $pregunta7 = $_POST["pregunta7"];
    $pregunta8 = $_POST["pregunta8"];
    $pregunta9 = $_POST["pregunta9"];
    $pregunta10 = $_POST["pregunta10"];

    echo "Miranda De Los Rios Alberto 5AVP";

    //valida pregunta 1 1. ¿Lenguaje de programación que se utiliza para WEB?
    echo "<h3>1. ¿que es la prostata? </h3>";
    echo "<h5>Repuesta seleccionada ".$pregunta1." ---- Correcta = Glandula del aparato reproductor masculino</h5>";
    if($pregunta1 == "Masculino"){
        $aciertos++;
        echo "<img src='correcta.jpg' width='50px'><hr>";
    } else {
        echo "<img src='incorrecta.jpg' width='50px'><hr>";
    }
    //------FIN de la pregunta 1 ------------------

    //Valido pregunta 2 s una plataforma informática de lenguaje de programación creada por Sun Microsystems en 1995.
    echo "<h3>2. _____________ es como se le llama a una ´prostata que no tiene robux.</h3>";
    echo "<h5>Repuesta seleccionada ".$pregunta2." ---- Correcta = noobstata</h5>";
    if(strtoupper($pregunta2) == "noobstata"){
        $aciertos++;
        echo "<img src='correcta.jpg' width='50px'><hr>";
    } else {
        echo "<img src='incorrecta.jpg' width='50px'><hr>";
    }
    //Fin de la pregunta 2 -----------------------------

    //Pregunta 3 - se deben validar 2 opciones sql y mongo
    echo "<h3>3. ¿Como se le llama al especialista del aparato reproductor masculino? (Selecciona 2)</h3>";
    echo "<h5>Repuesta seleccionada ".implode(",", $pregunta3)." ---- Correcta = Urologo, El dedos</h5>";
    $p3_respuestas_correctas = 0;

    if(count($pregunta3) == 2){
        for($i=0; $i<count($pregunta3); $i++){
            if($pregunta3[$i] == "urologo" || $pregunta3[$i] == "dedos"){
                $p3_respuestas_correctas ++;
            }
        }
        if($p3_respuestas_correctas == 2){
            $aciertos++;
            echo "<img src='correcta.jpg' width='50px'><hr>";
        } else {
            echo "<img src='incorrecta.jpg' width='50px'><hr>";
        }
    } else {
        echo "<img src='incorrecta.jpg' width='50px'><hr>";
    }
    //----------FIN pregunta 3 ------------------------------------

    //valida pregunta 4. ¿Es la forma correcta de nombrar una variable en PHP?

        echo "<h3>4. ¿Es la forma correcta de acariciarse la prostata?</h3>";
        echo "<h5>Repuesta seleccionada ".$pregunta4." ---- Correcta = no se</h5>";
        if($pregunta4 == "no se"){
            $aciertos++;
            echo "<img src='correcta.jpg' width='50px'><hr>";
        } else {
            echo "<img src='incorrecta.jpg' width='50px'><hr>";
        }
    //------FIN de la pregunta 4 ------------------

    //Valido pregunta 5 es una función de php que sirve para contar los elementos de un array.
        echo "<h3>5.a que edad debe usted empezar a visitar al urologo?</h3>";
        echo "<h5>Repuesta seleccionada ".$pregunta5." ---- Correcta = 50</h5>";
        if(strtoupper($pregunta5) == "50"){
            $aciertos++;
            echo "<img src='correcta.jpg' width='50px'><hr>";
        } else {
            echo "<img src='incorrecta.jpg' width='50px'><hr>";
        }

        echo "<h3>6. ¿cuantas veces a la semana debe revisar el aceite?</h3>";
        echo "<h5>Repuesta seleccionada ".$pregunta6." ---- Correcta = una vez</h5>";
        if($pregunta6 == "1"){
            $aciertos++;
            echo "<img src='correcta.jpg' width='50px'><hr>";
        } else {
            echo "<img src='incorrecta.jpg' width='50px'><hr>";
        }

        echo "<h3>7. ¿Bajo que sintoma se debe visitar al urologo lo antes posible?</h3>";
        echo "<h5>Repuesta seleccionada ".$pregunta7." ---- Correcta = preoblemas para orinar</h5>";
        if($pregunta7 == "orina"){
            $aciertos++;
            echo "<img src='correcta.jpg' width='50px'><hr>";
        } else {
            echo "<img src='incorrecta.jpg' width='50px'><hr>";
        }

        echo "<h3>8. ¿Cuanto piuede llegar a costar una cita con un urologo?</h3>";
        echo "<h5>Repuesta seleccionada ".$pregunta8." ---- Correcta = de 600 a 1000 pesos</h5>";
        if($pregunta8 == "3"){
            $aciertos++;
            echo "<img src='correcta.jpg' width='50px'><hr>";
        } else {
            echo "<img src='incorrecta.jpg' width='50px'><hr>";
        }

        echo "<h3>9. ¿la prostata de ibarra esta inflamada?</h3>";
        echo "<h5>Repuesta seleccionada ".$pregunta9." ---- Correcta = si y mucho</h5>";
        if($pregunta9 == "si"){
            $aciertos++;
            echo "<img src='correcta.jpg' width='50px'><hr>";
        } else {
            echo "<img src='incorrecta.jpg' width='50px'><hr>";
        }

        echo "<h3>10. _____________ de cada 8 hombres sufren de cancer de prostata</h3>";
    echo "<h5>Repuesta seleccionada ".$pregunta10." ---- Correcta = 1</h5>";
    if(strtoupper($pregunta10) == "1"){
        $aciertos++;
        echo "<img src='correcta.jpg' width='50px'><hr>";
    } else {
        echo "<img src='incorrecta.jpg' width='50px'><hr>";
    }


    //Fin de la pregunta 2 -----------------------------

    echo "CALIFICACIÓN FINAl = " . ($aciertos * 10) . "%";

?>