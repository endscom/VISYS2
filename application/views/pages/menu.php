<div class="demo-layout mdl-layout mdl-js-layout mdl-layout--fixed-drawer mdl-layout--fixed-header">

    <div class="demo-drawer mdl-layout__drawer mdl-color--blue-grey-900 mdl-color-text--blue-grey-50">

        <header id="MenuFondo" class="demo-drawer-header">
            <img id="imgUser" src="<?PHP echo base_url();?>assets/img/Logo-Visys-blanco.png" width="65%" >
            <div id="user" class="row">
                <div class="col l2 center carita">
                  <i class=" material-icons">face</i>
                </div>
                <div class="col l10 center">
                  <span class="Loggen"><?php echo $this->session->userdata('UserN');?></span>
                </div>
            </div>
        </header>
       <div id="menu">
           <ul class="nav menu demo-navigation mdl-navigation__link" >
               <a href="Main"><li href="Main"><i class="material-icons">home</i> inicio</li></a>
               <a href="Catalogo"><li href="Catalogo"><i class="material-icons">dashboard</i> catálogo</li></a>
               <a href="facturas"><li href="facturas"><i class="material-icons">assignment</i> facturas</li></a>
               <a href="Clientes"><li href="Clientes"><i class="material-icons">supervisor_account</i> clientes</li></a>
               <a href="PuntosClientes"><li href="PuntosClientes"><i class="material-icons">content_copy</i> puntos clientes</li></a>
               <a href="BajaClientes"><li href="BajaClientes"><img src="<?PHP echo base_url()?>assets/img/bajacliente.png" width="30px"> baja clientes</li></a>
               <a href="Frp"><li href="Frp"><i class="material-icons">payment</i> canje puntos (frp)</li></a>
               <a href="FRE"><li href="FRE"><i class="material-icons">attach_money</i> canje efectivo (fre)</li></a>
               <!--<a href="EliminarVineta"><li href="EliminarVineta"><i class="material-icons">remove_circle</i> eliminar boucher</li></a>-->
               <a href="Usuarios"><li href="Usuarios"><i class="material-icons">account_box</i> usuarios</li></a>
               <a href="Reportes"><li href="Reportes"><i class="material-icons">description</i> reportes</li></a>
               <a href="salir"> <li href="salir"><i class="material-icons">exit_to_app</i> cerrar sesión</li></a> 
          </ul>
       </div>
    </div>

