var activo = false;
$(document).ready(function() {

  //$('#editarCatalogo').openModal();
    $('select').material_select();

$('#txtimagen').change(function(){
    //var filename = $('input[type=file]').val().replace(/C:\\fakepath\\/i, '');
    var file = $('input[type=file]').val().replace(/C:\\fakepath\\/i, '')
    var codigo = file.split(".");$('#codigoArto').val(codigo[0]);
});


$('#tblCatalogoActual').DataTable( {
            "info":    false,
            "bPaginate": false,
            "lengthMenu": [[5,10,50,100,-1], [5,10,50,100,"Todo"]],
            "language": {
                "paginate": {
                    "first":      "Primera",
                    "last":       "Última ",
                    "next":       "Siguiente",
                    "previous":   "Anterior"                    
                },
                "lengthMenu": "MOSTRAR _MENU_ REGISTORS",
                "search":     "BUSCAR"
            }
        });
$('#tblCatalogo2').DataTable( {
            "info":    false,
            "lengthMenu": [[5,10,50,100,-1], [5,10,50,100,"Todo"]],
            "language": {
                "paginate": {
                    "first":      "Primera",
                    "last":       "Última ",
                    "next":       "Siguiente",
                    "previous":   "Anterior"                    
                },
                "lengthMenu": "MOSTRAR _MENU_",
                "search":     "BUSCAR"
            }
        });
    /******Agregar clase Activo a items del Menú******/
 $('#tblCatalogo').DataTable();
    $(".nav li a").each(function() {
        if(this.href.trim() == window.location){
            $(this).parent().addClass("active");
            activo = true;
        }
    });
    if(!activo){
        $('.nav li a:first').addClass("active");
    }
    /****** Seccíon del Menú ******/

    /**** DATATABLES ****/

    $('#tblFREimpre,#TbCatalogo,#TblMaVinetas,#MCXP,#tblEliminar,#ClienteAdd,#BajaCliente,#PtosCliente,#FRP,#tblpRODUCTOS,#tblModals').DataTable(
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
        if($(this).hasClass('odd')){
            $(this).removeClass('odd');
            $(this).toggleClass('selected');
        }else{
            $(this).removeClass('even');
            $(this).toggleClass('selected');
        }

    } );


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

function AddClients(){
    //$('#CsUser').openModal();
    $('#ClienteAdd tr').each( function () {
        if($(this).is('.selected')) {
            var cliente = $(this).find("td").eq(0).html();

            console.log(cliente);
            var patron="%20";

            var cadena=cliente.replace(patron,'');
            console.log(cadena);
            $.ajax({
                url: "FindClient/"+cadena,
                type: "post",
                async:true,
                success: function(json){
                   $(location).attr('Clientes');
                }
            });

        }

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
function subirimagen()
{    
    $('#labelCodigo').hide();
    $('#labelDescripcion').hide();
    $('#labelPuntos').hide();
    $('#labelImagen').hide();
    if ($('#txtimagen').val()=="") {$('#labelImagen').show(); return false;}   
    if ($('#codigoArto').val()=="") {$('#labelCodigo').show();return false;}
    if ($('#NombArto').val()=="") {$('#labelDescripcion').show();return false;}
    if ($('#PtArto').val()=="") {$('#labelPuntos').show();return false;} 
    else{   
    $('#agregar').hide();
    $('#loadIMG').show(); 
    var file = $('input[type=file]').val().replace(/C:\\fakepath\\/i, '')
            var formData = new FormData($("#formimagen")[0]);
            $.ajax({
                url: "verificarImg",
                type: "POST",
                data: formData,
                contentType: false,
                processData: false,
                success: function(datos)
                {
                    if (datos!=0) {
                    $("#mensajeIMG").html(datos);
                    $('#modalIMG').openModal(); 
                    $('#agregar').show();
                    $('#loadIMG').hide();
                    }else{
                        $('#formimagen').submit();
                    }
                }
            });
        }
}

    $('#cmbCatalogos').change(function(){
        alert(this.value);
    });
    $("#aceptarIMG").click(function(){
        $('#formimagen').submit();
    });
function darBaja(id){
      $('#darBaja').openModal(); 
        $("#darBajaOK").click(function(){
             alert("diste ok animal");
    });     
}