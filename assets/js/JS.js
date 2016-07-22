$(document).ready(function() {
    /**** DATA TABLES ****/
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

    //$('#MCXP').DataTable();
    /**** END DATATABLES ****/
    $('.modal-trigger').leanModal();// inicializar el modal






} );

