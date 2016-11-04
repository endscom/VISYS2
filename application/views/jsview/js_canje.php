<script>
	$( document ).ready(function(){
		$('#MFrp').openModal();
		$('#tblEliminar,#tblpRODUCTOS').DataTable(
        {
            "info":    false,
            "searching": false,
            "bLengthChange": false,
            "lengthMenu": [[5,16,32,100,-1], [5,16,32,100,"Todo"]],
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


	});
</script>