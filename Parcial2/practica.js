$ (document).ready( function(){
    alert("funciona query");

    $('#boton').on("click", function(){
        var nombre = $('#nombre').val();

        alert(nombre);
    })

    $("#texto").click(function(){
        $("#texto").css("display", "inherit").fadeOut(200);
    });
}
)