<div class="demo-layout mdl-layout mdl-js-layout mdl-layout--fixed-drawer mdl-layout--fixed-header">

    <div class="demo-drawer mdl-layout__drawer mdl-color--blue-grey-900 mdl-color-text--blue-grey-50">

        <header id="MenuFondo" class="demo-drawer-header">
            <img src="<?PHP echo base_url();?>assets/img/Logo-Visys-blanco.png" width="65%" >
            <a id="user" class="mdl-navigation__link ">
                <i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">face</i>
                    <span class="Loggen"><?php echo $this->session->userdata('UserN');?></span>
            </a>
        </header>

        <nav id="menu" class="demo-navigation mdl-navigation ">
            <a  class="mdl-navigation__link activo" href="Main"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">home</i>INICIO</a>
            <a  class="mdl-navigation__link " href="EliminarVineta"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">remove_circle</i>ELIMINAR VIÑETA</a>
            <a  class="mdl-navigation__link " href="Clientes"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">supervisor_account</i>CLIENTES</a>
            <a  class="mdl-navigation__link " href="BajaClientes"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">report</i>BAJA CLIENTES</a>
            <a  class="mdl-navigation__link " href="PuntosClientes"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">content_copy</i>PUNTOS CLIENTES</a>
            <a  class="mdl-navigation__link " href="Frp"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">payment</i>CANJE PUNTOS (FRP)</a>
            <a  class="mdl-navigation__link " href="FRE"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">payment</i>CANJE EFECTIVO (FRE)</a>
            <a  class="mdl-navigation__link " href=""><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">dashboard</i>CATÁLOGO</a>
            <a  class="mdl-navigation__link " href="Usuarios"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">account_box</i>USUARIO</a>
            <a  class="mdl-navigation__link " href="Reportes"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">description</i>REPORTES</a>
            <a  class="mdl-navigation__link " href="salir"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">exit_to_app</i><span class="visuallyhidden"></span>CERRAR SESION</a>
        </nav>
    </div>

