$(document).ready(function() {
    /**** DATA TABLES ****/
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

    //$('#MCXP').DataTable();
    /**** END DATATABLES ****/
    $('.modal-trigger').leanModal();// inicializar el modal






} );

