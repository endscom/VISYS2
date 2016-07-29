$(document).ready(function() {

   /* var Modal=document.getElementById("Modal").value;
    if(Modal==1)
    {
        $('#UserYes').openModal();
    }
*/
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

    $('#UserYes').openModal();

    $.ajax({
        url: "NuevoUsuario/"+user+"/"+clave+"/"+rol+"/"+vendedor,
        type: "post",
        async:true,
        success:
            function(json){
                var myVar = setInterval(myTimer, 1000);
            }
        });
    }

function myTimer() {
    $(location).attr('href',"Usuarios");
}

//CAMBIAR DE ESTADO AL USUARIO
function DellUsers(IdUser, Estado){
    $('#CsUser').openModal();

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


