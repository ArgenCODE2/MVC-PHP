$().ready(function () {
    $("#mnuServicios").click(function () {
    	$("#frmMenu #controlador").val("ControladorPrincipal");
        $("#frmMenu #metodo").val("servicios");
        $("#frmMenu").submit();
    });
    
    $("#textoDialogo").html("Está saliendo del sistema, ¿Desea continuar?");
    $("#dialog").dialog({
        modal: true, title: 'Aviso:', zIndex: 10000, autoOpen: false,
        width: 'auto', resizable: false,
        buttons: {
            Si: function () {
                $(this).dialog("close");
                $("#frmMenu").submit();
            },
            No: function () {                                                                 
                $(this).dialog("close");
            }
        },
       // close: function (event, ui) {
       //     $(this).remove();
       // }
});

});