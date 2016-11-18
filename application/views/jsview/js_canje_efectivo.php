<script>
$(document).ready(function() {
	//$('#Dfre').openModal();
	$('#searchFRE').on( 'keyup', function () {
        var table = $('#tblFRE').DataTable();
        table.search( this.value ).draw();
    } );
	$('#tblFRE,#tblFacturaFRE').DataTable(
    {
            "info":    false,
            //"searching": false,
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

    $( "#ListCliente").change(function() {
        var Cls = $(this).val();
        $('#txtCodCliente').val(Cls);
        if(Cls !=0){
            $.ajax({
                url: "getAplicadoP/"+ Cls,
                type: "post",
                async:true,
                success:
                    function(clsAplicados){
                        $("#PtosDisponibles").val(parseInt(clsAplicados));
                    }
            });
            limpiarTabla(tblFacturaFRE);
            $('#tblFacturaFRE').DataTable({
                ajax: "getFacturaFRE/"+ Cls,
                "info":    false,
                "bPaginate": false,
                "paging": false,
                "pagingType": "full_numbers",
                columns: [
                    { "data": "FECHA" },
                    { "data": "FACTURA" },
                    { "data": "DISPONIBLE" },
                    { "data": "EFECTIVO" },
                    { "data": "OPCION" }
                ]
            });
        }else{
            alert("No Selecciono ningun cliente");
        }
    });

    function limpiarTabla (idTabla) {
        idTabla = $(idTabla).DataTable();
        idTabla.destroy();
        idTabla.clear();
        idTabla.draw();
    }
     function mensaje(mensaje,clase) {
        var $toastContent = $('<span class="center">'+mensaje+'</span>');
            if (clase == 'error'){
                return Materialize.toast($toastContent, 3500,'rounded error');
            }
            return  Materialize.toast($toastContent, 3500,'rounded');    
    }
    
});
    function isVerificar(posicion,fact){
        var EFECTIVO   = $('#tblFacturaFRE').DataTable().row(posicion).data().EFECTIVO;
        var total = parseInt($('#totalEfectivo').html());
        if($("#CHK"+fact).is(':checked') ) {
            total +=EFECTIVO;
            $('#totalEfectivo').html(total);
        }else{
            //console.log("el total ahorita es: "+total);
            total = total - EFECTIVO;
            $('#totalEfectivo').html(total);
        }
    }
    function procesar() {
        var fechaFRE = $("#date1").val();
        var numFRE = $("#frp").val();
        var tblFacturas = $('#tblFacturaFRE').DataTable();
        $.ajax({
            url: "BuscaFRE/" + numFRE,
            type: "post",
            async:false,
            success:
                function(clsAplicados){
                    if (parseInt(clsAplicados) > 0) {
                        mensaje('NUMERO YA EXISTE!!!, INGRESE OTRO NUMERO DE FRE',"error");
                        $("#frp").empty();
                        $("#frp").focus();
                    }
                }
        });
        if ( (numFRE =="") || (numFRE.length < 4)){
            $("#frp").focus();
            mensaje("INGRESE NUMERO DE FRE", "error");return false;
        }
        if ( (fechaFRE =="") && (fechaFRE.length < 4) ){
                $("#frp").focus();
                mensaje("SELECCIONE LA FECHA", "error");return false;
        }
        if ( !tblFacturas.data().any() ){
                mensaje("TABLA DE FACTURAS VACIA", "error");return false;
        }else if($('#ListCliente').val()!=""){
            guardarFRE(numFRE,fechaFRE);
        }

    }
    function guardarFRE(idFrp,Fecha){

        var IdCliente = $( "#ListCliente option:selected" ).val();
        var Nombre    = $( "#ListCliente option:selected" ).html();
        var Comentario    = $( "#observaciones" ).val();
        i=0;
        var logFactura       = new Array();
        var viewFacturas     = new Array();
        var detallesFactura  = new Array();
        var obj;
        obj = $('#tblFacturaFRE').DataTable();
        totalFinalFRE=0;
        obj.rows().data().each( function (index,value) {
            var FCH = obj.row(value).data().FECHA;
            var FAC = obj.row(value).data().FACTURA;
            var FLPunto = obj.row(value).data().DISPONIBLE;
            var EFECTIVO = obj.row(value).data().EFECTIVO;
            dis = parseInt($("#DIS" + FAC).text());
            est = ($("#EST" + FAC).text());
            
            if($("#CHK"+FAC).is(':checked') ) {
                logFactura[i]      = IdCliente + "," + FAC + "," + FCH+ "," + FLPunto;//armo el log
                viewFacturas[i]    = new Array(4);
                viewFacturas[i][0] = FCH;
                viewFacturas[i][1] = FAC;
                viewFacturas[i][2] = FLPunto;
                viewFacturas[i][3] = parseInt(FLPunto/2);
                viewFacturas[i][4] = "PAGADO";
                detallesFactura[i] = idFrp+","+FAC+","+FCH+","+FLPunto+","+EFECTIVO;//armo los detalles
                totalFinalFRE += FLPunto;
                i++;
            }
        });
         var form_data = {
            frp: [idFrp, Fecha, IdCliente,Nombre,Comentario],
            fac: detallesFactura,
            log: logFactura
        };
        $.ajax({
            url: "saveFRE",
            type: "post",
            async:true,
            data: form_data,
            success:
                function(data){//alert(data);
                    if (data==1){
                        $("#spnFRP").text(idFrp);
                        $("#spnFecha").text(Fecha);
                        $("#spnCodCls").text(IdCliente);
                        $("#spnNombreCliente").text(Nombre);
                        idTabla = $('#tblModal1').DataTable(); idTabla.destroy();
                        idTabla.clear(); idTabla.draw();
                        $('#tblModal1').DataTable( {
                            data: viewFacturas,
                            "info":    false,
                            //"order": [[ 2, "asc" ]],
                            //"searching": false,
                            "bLengthChange": true,
                            "bPaginate": false,
                            "lengthMenu": [[10,15,32,100,-1], [10,15,32,100,"Todo"]],
                            "language": {
                                "paginate": {
                                    "first":      "Primera",
                                    "last":       "Última ",
                                    "next":       "Siguiente",
                                    "previous":   "Anterior"
                                },
                                "lengthMenu":"Mostrar _MENU_",
                                "emptyTable": "No hay datos disponibles en la tabla",
                                "search":     ""},
                                columns: [
                                { title: "FECHA" },
                                { title: "FACTURA #" },
                                { title: "PUNTOS" },
                                { title: "PUNTOS A EFECTIVO" },
                                { title: "ESTADO" }
                            ]
                        } );

                        $("#totalCanje").text(totalFinalFRE);
                        $("#totalEfectivo2").text(parseInt(totalFinalFRE/2));
                        $('#Dfre').openModal();

                        $('#obser').text(Comentario);
                        $("#frpProgress").hide();
                        $("#divTop").show();
                    } else {
                        mensaje("ERROR AL CREAR EL FRP","error");
                    }
                }
        });
    }
    function getview(id){
        $('#Dfre').openModal();
        $("#frpProgress").show();
        //$("#vfrpTop,#vfrpTop").hide();
        $('#iconoPrint').hide();
        var form_data = {
            fre: id
        };

        $.ajax({
            url: "getviewFRE",
            type: "post",
            async:true,
            data: form_data,
            success:
            function(data){
                    $("#frpProgress").hide();
                    //$("#vfrpTop,#vfrpTop").show();

                    var dataJson = JSON.parse(data);
                    console.log(dataJson);

                    var DF = "";
                    if (dataJson.DFactura[0].Anulado == "N"){
                        $('#iconoPrint').show();
                    }
                    $("#spnFRP").text(dataJson.top[0].IdFRE);
                    $("#spnFecha").text(dataJson.top[0].Fecha);
                    $("#spnCodCls").text(dataJson.top[0].IdCliente);
                    $("#spnNombreCliente").text(dataJson.top[0].Nombre);
                    $("#obser").text(dataJson.top[0].Comentario);
                    $("#totalCanje").text(formatNumber(dataJson.DFactura[0].Puntos));
                    $("#totalEfectivo2").text(formatNumber(dataJson.DFactura[0].Efectivo));
                    for (f=0;f<dataJson.DFactura.length;f++){

                        if( dataJson.DFactura[f].SALDO > 0) {ESTAD ="PARCIAL"}else {ESTAD ="APLICADO"}
                        DF +=   "<tr>" +
                                    "<td>" +dataJson.DFactura[f].Fecha + "</td>" +
                                    "<td>" +dataJson.DFactura[f].Factura+ "</td>" +
                                    "<td>" +formatNumber(dataJson.DFactura[f].Puntos)+ "</td>" +
                                    "<td>" +formatNumber(dataJson.DFactura[f].Efectivo)+ "</td>" +
                                    "<td>PAGADO</td>" +
                                "</tr>"
                    }
                    $("#tblModal1 > tbody").html(DF);
                    //$("#spnttFRP").text(ttff);
            }
        });
    }
    function formatNumber(x) {//solo funciona con exteros
        return isNaN(x)?"":x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
    }
     function callUrlPrint(targetURL,id){
        var a = document.createElement('a');
        a.href = targetURL + "/" + $("#" + id ).text();
        a.target = '_blank';
        window.open(a);
    }
    function dellFrp(id){
        $("#Dell").openModal();
        $("#spnDellFRP").text(id);
    }
    $('#ProceDell').on( 'click', function () {
        var id = $("#spnDellFRP").text();
        $("#dellCorrectoFRE").text(id);
        var form_data = {
            fre: id
        };
        $("#DellRes").openModal();
        $.ajax({
            url: "delFRE",
            type: "post",
            async:true,
            data: form_data,
            success:
                function(data){
                    console.log(data)
                    if (data != 1){
                        mensaje("SELECCIONE UN FRE PRIMERO...","error");
                    } else {
                        //window.setTimeout($(location).attr('href',"FRE"), 2000);
                        $("#dellCorrectoFRE").text(id);
                    }
                }
        });
    });
</script>