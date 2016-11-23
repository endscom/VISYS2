<script>
	$(document).ready(function () {
		$('#cuentaXcliente').openModal();
		
		$('#generarCtaXcte').click(function(){			
			var idCliente = $('#ListCliente').val();
            var Fecha1 = $('#CXCfecha1').val();
            var Fecha2 = $('#CXCfecha2').val();
            $('#CXCdetallefecha1').text(Fecha1);
            $('#CXCdetallefecha2').text(Fecha2);
            $('#CXCdetalleCodigo').text($('#ListCliente option:selected').text());
            if (idCliente==null) {mensaje("SELECCIONE UN CLIENTE","error");}
            else{
        	$('#CtaXcte').openModal();
            limpiarTabla(tblcuentaXcliente);
        	$('#tblcuentaXcliente').DataTable({
                "order": [[ 1, "desc" ]],
                "ajax":{
                "url": "cuentaXcliente",
                "data": function ( d ) {
                        d.codigo = idCliente;
                        d.fecha1 = Fecha1;
                        d.fecha2 = Fecha2;
                    }
                },
                "info":    false,
                "bPaginate": false,
                "paging": false,
                "pagingType": "full_numbers",
                "lengthMenu": [[10, -1], [10, "Todo"]],
                "language": {
                    "emptyTable": "No hay datos disponibles en la tabla",
                    "lengthMenu": '_MENU_ ',
                    "search": '<i class=" material-icons">search</i>',
                    "loadingRecords": "",
                    "paginate": {
                        "first": "Primera",
                        "last": "Última ",
                        "next":       "Siguiente",
                        "previous":   "Anterior"
                    }
                },
               columns: [
                    { "data": "FACTURA" },
                    { "data": "FECHA" },
                    { "data": "PUNTOS" },
                    { "data": "APLICADOS" },
                    { "data": "DISPONIBLE" }
              ]
            });
                $('#tblcuentaXcliente').on( 'init.dt', function () {
                    var totalAcumulado=0;
                    obj = $('#tblcuentaXcliente').DataTable();
                    obj.rows().data().each( function (index,value) {
                        totalAcumulado += parseInt(obj.row(value).data().DISPONIBLE);
                    });
                    $('#CXCdetalleTotal').text(totalAcumulado);
                    $.ajax({
                        url: "datosCliente/"+idCliente,
                        type: "GET",
                        dataType: "json",
                        contentType: false,
                        processData: false,
                        success: function(datos)
                        {      
                            $.each( datos, function( key, value ) {
                                $('#CXCdetalleRUC').text(value.RUC);
                                $('#CXCdetalleDIR').text(value.DIRECCION);
                            });
                        }
                    });
                }).dataTable();
            }
    	});
        
        
        function limpiarTabla (idTabla) {
                idTabla = $(idTabla).DataTable();
                idTabla.destroy();
                idTabla.clear();
                idTabla.draw();
        }
	});
        function PrintPDF(targetURL){
            var a = document.createElement('a');
            //a.href = targetURL + "/" + $("#" + id ).text();
            a.target = '_blank';
            switch(targetURL) {
                case cuentaXcliente:
                var idCliente = $('#ListCliente').val();
                Fecha1 = ($('#CXCfecha1').val()=="") ? "null" : $('#CXCfecha1').val()
                Fecha2 = ($('#CXCfecha2').val()=="") ? "null" : $('#CXCfecha2').val()
                    a.href = "pdfCTAxCLIENTE/"+idCliente+"/"+Fecha1+"/"+Fecha2;
                    break;
                case hola:
                    
                    break;
                default:
                    alert("entro al otro");
            }
            window.open(a);
        }
</script>