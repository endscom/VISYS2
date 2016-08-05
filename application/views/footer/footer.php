

</div>

<!--Import jQuery before materialize.js-->
<script type="text/javascript" src="<?PHP echo base_url();?>assets/js/jquery-2.1.1.min.js"></script>
<script src="<?PHP echo base_url();?>assets/js/chosen.jquery.js"></script>
<script type="text/javascript" src="<?PHP echo base_url();?>assets/js/materialize.min.js"></script>
<script type="text/javascript" src="<?PHP echo base_url();?>assets/js/jquery.dataTables.js"></script>
<script src="<?PHP echo base_url();?>assets/js/JS.js"></script>
<script src="<?PHP echo base_url();?>assets/js/material.min.js"></script>
<script src="<?PHP echo base_url();?>assets/js/materialize.js"></script>

<!--<a href="https://github.com/google/material-design-lite/blob/master/templates/dashboard/" target="_blank" id="view-source" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored mdl-color-text--white">View Source</a>-->
<script>
    $('.datepicker1').pickadate({
        selectMonths: true, // Creates a dropdown to control month
        selectYears: 15, // Creates a dropdown of 15 years to control year
        format: 'dd-mm-yyyy',// Formats dateformat:dd/mm/yyyy
        monthsFull: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
        monthsShort: ['Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun', 'Jul', 'Ago', 'Sep', 'Oct', 'Nov', 'Dic'],
        weekdaysFull: ['Domingo', 'Lunes', 'Martes', 'Miercoles', 'Jueves', 'Viernes', 'Sabado'],
        weekdaysShort: ['Dom', 'Lun', 'Mar', 'Mie', 'Jue', 'Vie', 'Sab'],
        showMonthsShort: undefined,
        showWeekdaysFull: undefined,
        today: 'Hoy',
        clear: 'Borrar',
        close: 'Cerrar'
    });
</script>

</body>
</html>