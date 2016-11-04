<script>
	$(document).ready(function(argument) {
		$('#TbCatalogo').DataTable({
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
        });
        $('#TbDetalleFactura').DataTable({
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
        });
		$('#searchFactura').on( 'keyup', function () {
			var table = $('#TbCatalogo').DataTable();
			table.search(this.value).draw();
		});
	});

	function detalleFactura(factura) {
		$('#modalDetalleFact').openModal();
		$('#loadIMG').show();
		$('#codFactura').text(factura);
		limpiarTabla(TbDetalleFactura);
		$('#TbDetalleFactura').DataTable({
                "order": [[ 1, "desc" ]],
                ajax: "detallefacturas/"+ factura,
                "info":    false,
                "bPaginate": false,
                "paging": false,
                "pagingType": "full_numbers",
                "lengthMenu": [[10, -1], [10, "Todo"]],
                "language": {
                    "emptyTable": "No hay datos disponibles en la tabla",
                    "lengthMenu": '_MENU_ ',
                    "search": '<i class=" material-icons">search</i>',
                    "loadingRecords": "cargando...",
                    "paginate": {
                        "first": "Primera",
                        "last": "Última ",
                        "next":       "Siguiente",
                        "previous":   "Anterior"
                    }
                },
               columns: [
                    { "data": "ARTICULO" },
                    { "data": "DESCRIPCION" },
                    { "data": "CANTIDAD" },
                    { "data": "PUNTOS" },
                    { "data": "TOTAL" }
              ]
            });
            $('#TbDetalleFactura').on( 'init.dt', function () {
                $('#TbDetalleFactura').show();
                $('#loadIMG').hide();
            }).dataTable();
		
	}
	function limpiarTabla (idTabla) {
        idTabla = $(idTabla).DataTable();
        idTabla.destroy();
        idTabla.clear();
        idTabla.draw();
}
</script>