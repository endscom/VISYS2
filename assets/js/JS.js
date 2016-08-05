$(document).ready(function() {

    /**** DATATABLES ****/
    $('#tblFREimpre').DataTable(
        {
            "info":    false,
            "searching": false,
            "lengthMenu": [[4,16,32,100,-1], [4,16,32,100,"Todo"]],
            "language": {
                "paginate": {
                    "first":      "Primera",
                    "last":       "Última ",
                    "next":       "Siguiente",
                    "previous":   "Anterior"
                },
                "lengthMenu":false
            }
        }
    );
    $('#TbCatalogo').DataTable(
        {
            "info":    false,
            "searching": false,
            "lengthMenu": [[4,16,32,100,-1], [4,16,32,100,"Todo"]],
            "language": {
                "paginate": {
                    "first":      "Primera",
                    "last":       "Última ",
                    "next":       "Siguiente",
                    "previous":   "Anterior"
                },
                "lengthMenu": "MOSTRAR _MENU_"
            }
        }
    );
    $('#TblMaVinetas').DataTable(
        {
            "info":    false,
            "searching": false,
            "lengthMenu": [[5,10,50,100,-1], [5,10,50,100,"Todo"]],
            "language": {
                "paginate": {
                    "first":      "Primera",
                    "last":       "Última ",
                    "next":       "Siguiente",
                    "previous":   "Anterior"
                },
                "lengthMenu": "MOSTRAR _MENU_"
            }
        }
    );
    $('#MCXP').DataTable(
        {
            "info":    false,
            "searching": false,
            "lengthMenu": [[5,10,50,100,-1], [5,10,50,100,"Todo"]],
            "language": {
                "paginate": {
                    "first":      "Primera",
                    "last":       "Última ",
                    "next":       "Siguiente",
                    "previous":   "Anterior"
                },
                "lengthMenu": "MOSTRAR _MENU_"
            }
        }
    );
    $('#tblEliminar').DataTable(
        {
            "info":    false,
            "searching": false,
            "lengthMenu": [[5,10,50,100,-1], [5,10,50,100,"Todo"]],
            "language": {
                    "paginate": {
                        "first":      "Primera",
                        "last":       "Última ",
                        "next":       "Siguiente",
                        "previous":   "Anterior"
                    },
                   "lengthMenu": "MOSTRAR _MENU_"
            }
        }
    );
    $('#ClienteAdd').DataTable(
        {
            "info":    false,
            "searching": false,
            "lengthMenu": [[5,10,50,100,-1], [5,10,50,100,"Todo"]],
            "language": {
                "paginate": {
                    "first":      "Primera",
                    "last":       "Última ",
                    "next":       "Siguiente",
                    "previous":   "Anterior"
                },
                "lengthMenu": "MOSTRAR _MENU_"
            }
        }
    );
    $('#BajaCliente').DataTable(
        {
            "info":    false,
            "searching": false,
            "lengthMenu": [[5,10,50,100,-1], [5,10,50,100,"Todo"]],
            "language": {
                "paginate": {
                    "first":      "Primera",
                    "last":       "Última ",
                    "next":       "Siguiente",
                    "previous":   "Anterior"
                },
                "lengthMenu": "MOSTRAR _MENU_"
            }
        }
    );
    $('#PtosCliente').DataTable(
        {
            "info":    false,
            "searching": false,
            "lengthMenu": [[5,10,50,100,-1], [5,10,50,100,"Todo"]],
            "language": {
                "paginate": {
                    "first":      "Primera",
                    "last":       "Última ",
                    "next":       "Siguiente",
                    "previous":   "Anterior"
                },
                "lengthMenu": "MOSTRAR _MENU_"
            }
        }
    );
    $('#FRP').DataTable(
        {
            "info":    false,
            "searching": false,
            "lengthMenu": [[5,10,50,100,-1], [5,10,50,100,"Todo"]],
            "language": {
                "paginate": {
                    "first":      "Primera",
                    "last":       "Última ",
                    "next":       "Siguiente",
                    "previous":   "Anterior"
                },
                "lengthMenu": "MOSTRAR _MENU_"
            }
        }
    );
    $('#tblpRODUCTOS').DataTable(
        {
            "info":    false,
            "searching": false,
            "lengthMenu": [[5,10,50,100,-1], [5,10,50,100,"Todo"]],
            "language": {
                "paginate": {
                    "first":      "Primera",
                    "last":       "Última ",
                    "next":       "Siguiente",
                    "previous":   "Anterior"
                },
                "lengthMenu": "MOSTRAR _MENU_"
            }
        }
    );
    $('#tblModals').DataTable(
        {
            "info":    false,
            "searching": false,
            "lengthMenu": [[5,10,50,100,-1], [5,10,50,100,"Todo"]],
            "language": {
                "paginate": {
                    "first":      "Primera",
                    "last":       "Última ",
                    "next":       "Siguiente",
                    "previous":   "Anterior"
                },
                "lengthMenu": "MOSTRAR _MENU_"
            }
        }
    );

    /**** END DATATABLES ****/

    $('.modal-trigger').leanModal();// INICIAR LOS MODALES
    Materialize.toast();

    //CARGAR LOS CLIENTES Y/O VENDEDORES EN EL SELECT (AGREGAR USUAARIO AL SISTEMA)
    $("#rol").change(function(){
        str = $( "#rol option:selected" ).val();

        if(str=="Vendedor"||str=="Cliente"){
            if (str=="Vendedor"){
                str = "LoadVendedores";
            }else {
                str = "LoadCliente";
            }

            $.ajax({
                url: str,
                type: "get",
                async:true,
                success:
                    function(json){
                        //$("#vendedor").chosen().change(str);
                        $("#vendedor").load(str);

                    }
            });

        }else{
            $("#vendedor option").remove();
        }
    });
    //$("#vendedor").chosen();

} );

/* FUNCIONES */
//ENVIO DE DATOS DEL FORMULARIO
function EnviodeDatos(){
    var user=document.getElementById("NombreUser").value;
    var clave=document.getElementById("Contra").value;
    var rol=document.getElementById("rol").value;
    var vendedor=document.getElementById("vendedor").value;


    if(/^\s*$/.test(user)){
        alert("El campo Nombre no puede estar vacio"); return false;
    }

    if(/^\s*$/.test(clave)){
        alert("No puede dejar el campo contraseña vacio"); return false;
    }

    if(/^\s*$/.test(rol)){
        alert("Debe de seleccionar el Rol de este usuario!"); return false;
    }

    if(rol==7){
        if(/^\s*$/.test(vendedor)){
            alert("Debe de asignar un vendedor para este cliente!"); return false;
        }
    } else {
        vendedor = '0';
    }


    $.ajax({
        url: "NuevoUsuario/"+user+"/"+clave+"/"+rol+"/"+vendedor,
        type: "post",
        async:true,
        success:
            function(json){
                Materialize.toast('EL USUARIO SE AGREGÓ CORRECTAMENTE', 3000);
                var myVar = setInterval(myTimer, 2000);

            }
        });
    }

function myTimer() {

    $(location).attr('href',"Usuarios");
}

//CAMBIAR DE ESTADO AL USUARIO
function DellUsers(IdUser, Estado){
    $('#CsUser').openModal();

    if(Estado==1){
        $("p").html("DESEA CAMBIAR EL ESTADO ACTIVO AL USUARIO");
    }else{
        $("p").html("DESEA CAMBIAR EL ESTADO INACTIVO AL USUARIO");
    }

    $("#DellUsers").click(function(){
        $.ajax({
            url: "ActUser/"+IdUser+"/"+Estado,
            type: "post",
            async:true,
            success: function(json){
                 $(location).attr('href',"Usuarios");
            }
        });
    });
}


