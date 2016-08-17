var activo = false;
$(document).ready(function() {
    //Sección del menú

    $(".nav li a").each(function() {
        if(this.href.trim() == window.location){
            $(this).parent().addClass("active");
            activo = true;
        }
    });
    if(!activo){
        $('.nav li a:first').addClass("active");
    }
    //fin de la sección del menú
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
        $("#vendedor").attr("disabled","disabled"); // inhabilitar el select
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
                    function(){
                        $("#vendedor").removeAttr("disabled");// habilitar el select
                        $("#vendedor").load(str);
                    }
            });

        }else{
            $("#vendedor option").remove();
        }
    });// FIN CARGAR LOS CLIENTES Y/O VENDEDORES EN EL SELECT (AGREGAR USUAARIO AL SISTEMA


    /********/

    $('#ClienteAdd tbody').on( 'click', 'tr', function () {

        $(this).toggleClass('selected');
    } );


    /******/

} );//Fin Document ready


/* FUNCIONES */
//ENVIO DE DATOS DEL FORMULARIO
function EnviodeDatos(){
    var user=document.getElementById("NombreUser").value;
    var clave=document.getElementById("Contra").value;
    var rol=document.getElementById("rol").value;
    var vendedores=document.getElementById("vendedor").value;
    if(vendedores==''){
        vendedores = '0';
    }
    else{
        vendedores = vendedores;
    }

    /*if(/^\s*$/.test(user)){
        alert("El campo Nombre no puede estar vacio"); return false;
    }

    if(/^\s*$/.test(clave)){
        alert("No puede dejar el campo contraseña vacio"); return false;
    }

    if(/^\s*$/.test(rol)){
        alert("Debe de seleccionar el Rol de este usuario!"); return false;
    }

    if(rol==7){
        if(/^\s*$/.test(vendedores)){
            alert("Debe de asignar un vendedor para este cliente!"); return false;
        }
        else {
            vendedores = '0';
        }
    }*/


    $.ajax({
        url: "NuevoUsuario/"+user+"/"+clave+"/"+rol+"/"+vendedores,
        type: "post",
        async:true,
        success:
            function(json){
                //console.log(vendedores);
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
//exportar a excel
function generar_reporte_excel(){
    document.getElementById('FrmClientes').submit();
}

//Exportar a PDF
function  generar_reporte_pdf(){
    document.getElementById('FrmClientes').submit();
}
