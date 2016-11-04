<script>
	$(document).ready(function() {
	$('#ClienteAdd,#PtosCliente,#tblModal1').DataTable(
        {
            "info":    false,
            "bLengthChange": false,
            "lengthMenu": [[10,20,32,100,-1], [10,20,32,100,"Todo"]],
            "language": {
                "paginate": {
                    "first":      "Primera",
                    "last":       "Última ",
                    "next":       "Siguiente",
                    "previous":   "Anterior"
                },
                "lengthMenu":"MOSTRAR _MENU_",
                "emptyTable": "No hay datos disponibles en la tabla",
                "search":     "<i class='material-icons'>search</i>" 
            }
        }
    );
    $('#searchClientes').on( 'keyup', function () {
		var table = $('#ClienteAdd').DataTable();
		table.search(this.value).draw();
	});
	$('#searchPtsClientes').on( 'keyup', function () {
		var table = $('#PtosCliente').DataTable();
		table.search(this.value).draw();
	});

    /*RECORRER LAS FILAS SELECCIONADAS Y AGREGARLAS A LA TABLA DEL MODAL EKISDE*/
    $('#btngenerar').click(function(){
         $("#ClienteAdd tr.selected td").each(function(index) {
            var table = $('#tblModal1').DataTable();
            var CODIGO = "";
            var CLIENTE = "";
            var VENDEDOR = "";
            var ELIMINAR = ""; var bandera = 0; 
            $(this).parents("tr").find("td").each(function(){
                switch($(this).parent().children().index($(this))) {//obtengo el index de la columna EKISDE
                    case 0:
                        CODIGO = $(this).html();//alert("el codigo es: "+CODIGO);
                        break;
                    case 1:
                        CLIENTE = $(this).html();
                        break;
                    case 4:
                        VENDEDOR = $(this).html();
                        break;
                    default:x="";
                }
            });//valido si el cliente ya esta agregado
            table.cells().eq(0).each( function ( index ){
                var cell = table.cell(index);             
                var data = cell.data();
                if (CODIGO == data) {bandera=1;};
            });
            if (bandera == 0) {
            table.row.add([
                        CODIGO,
                        CLIENTE,
                        VENDEDOR,
                        ELIMINAR
                    ]).draw(false);
            mensaje("CLIENTE AGREGADO TEMPORALMENTE","");
            }
            
        });
    });
    $('#tblModal1 tbody').on( 'click', 'tr', function () {
        if($(this).hasClass('odd')){
            $(this).removeClass('odd');
            $(this).toggleClass('selected');
        }else{
            $(this).removeClass('even');
            $(this).toggleClass('selected');
        }
    } );
    $('#btneliminar').click( function (){
        var table = $('#tblModal1').DataTable();
        table.row('.selected').remove().draw( false );
    });
        //exportar a excel
    function generar_reporte_excel(formulario){
        document.getElementById(formulario).submit();
    }
    //Exportar a PDF
    function  generar_reporte_pdf(formulario){
        document.getElementById(formulario).submit();
    }

    function limpiarTabla (idTabla) {
        idTabla = $(idTabla).DataTable();
        idTabla.destroy();
        idTabla.clear();
        idTabla.draw();
    }
    function myTimer3() {
        mensaje("SE GUARDARON LOS NUEVOS USAURIOS, ESPERE..","");
        $(location).attr('href',"Clientes");
    }
    function myTimer4() {
        mensaje("SE GUARDARON LOS CAMBIOS, ESPERE..","");
        $(location).attr('href',"BajaClientes");
    }
    $('#crearUsuarios').click(function(){
        var contador = 0; var table2 = $('#tblModal1').DataTable();
            var rowCount = table2.page.info().recordsTotal;
            var codigo = ""; var nombre = ""; 
            var vendedor = ""; var IdCatalogoArticulo = ""; var bandera = 0; 
            var IdCatalogo = $('#IdCatalogoActual').val(); $('#guardarCatalogo').hide();
            var table = $('#tblCatalogo2').DataTable();            
            $('.loadIMGaa').show();$('#tblModal1').hide();$('#crearUsuarios').hide();
            $("#tblModal1 tbody tr").each(function(index) {
                $(this).children("td").each(function(index2){/*metodo para recorrer la tabla*/
                    switch($(this).parent().children().index($(this))) {//obtengo el index de la columna EKISDE
                        case 0:
                            codigo = $(this).html();
                            break;
                        case 1:
                            nombre = $(this).html();
                            break;
                        case 2:
                            vendedor = $(this).html();                            
                            break;
                        default: 
                    }
                });
                
            if (codigo!="") {
                var form_data = {
                    codigo: codigo,
                    vendedor: vendedor,
                    nombre: nombre
                    };
                 $.ajax({
                    url: "generarUsuarios",
                    type: "post",
                    async:true,
                    data: form_data,
                    success:
                        function(json){
                            contador++;//alert(bandera);
                            if (contador==rowCount) {var myVar = setInterval(myTimer3, 3500);};
                            //$('#tblModal1').show();
                        }
                    });
            }
             else{
                $('#tblModal1').show();
                $('#crearUsuarios').show();
                var $toastContent = $('<span class="center">ERROR');
                Materialize.toast($toastContent, 3500,'rounded error');
                }
            });
    });
    $('#btnCargarBajas').click(function(){
            $('#tblModal1').hide();$('#loadIMG').show();
                  
            $('#modal1').openModal(); //$('#loadIMG').show(); $('#tblModal1').hide();
            $("#ClienteAdd tr.selected td").each(function(index){
            var table = $('#tblModal1').DataTable();
            var CODIGO = "";
            var CLIENTE = "";
            var ELIMINAR ="HOLLA";
            var bandera = 0; var USUARIO="";
            $(this).parents("tr").find("td").each(function(){
                switch($(this).parent().children().index($(this))) {//obtengo el index de la columna EKISDE
                    case 0:
                        CODIGO = $(this).html();
                        break;
                    case 1:
                        CLIENTE = $(this).html();
                        break;
                    default:x="";
                }
            });
            table.cells().eq(0).each( function ( index ){
                var cell = table.cell(index);
                var data = cell.data();
                if (CODIGO == data) {bandera=1;};
            });
            if (bandera == 0) {
                $.ajax({
                url: "traerUsuario/"+CODIGO,
                type: "get",
                async:false,
                    success: function(datos)
                    {
                        if (datos!=0) {
                        USUARIO = datos;
                            table.row.add([
                                CODIGO,
                                CLIENTE,
                                USUARIO,
                                ELIMINAR
                            ]).draw(false);
                            mensaje("CLIENTE AGREGADO TEMPORALMENTE","");
                        }
                    }
                });
            }
        }); $('#tblModal1').show();$('#loadIMG').hide();
    });
    $('#btneliminarBajas').click( function (){
        var table = $('#tblModal1').DataTable();
        table.row('.selected').remove().draw( false );
    });
    $('#btnDarBaja').click(function(){
        table2 = $('#tblModal1').DataTable(); var contador=0;
        var rowCount = table2.page.info().recordsTotal;
        $("#tblModal1 tr td").each(function(index){
            var table = $('#tblModal1').DataTable();
            var CODIGO = "";            
                switch($(this).parent().children().index($(this))) {//obtengo el index de la columna EKISDE
                    case 0:
                        var form_data = {
                        codigo: $(this).html()                        
                        };
                     $.ajax({
                        url: "darBajaCliente",
                        type: "post",
                        async:true,
                        data: form_data,
                        success:
                            function(json){
                                contador++;
                                if (contador==rowCount) {var myVar = setInterval(myTimer4, 3500);};                                
                            }
                        });
                        break;
                    case 2:
                        break;
                }
        });
    });
});
</script>