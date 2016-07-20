<header class="demo-header mdl-layout__header ">
    <div class="centrado  ColorHeader">

        <span class=" title">reportes</span>

    </div>
</header>
<!--//////////////////////////////////////////////////////////
                CONTENIDO
///////////////////////////////////////////////////////////-->
<main class="mdl-layout__content mdl-color--grey-100">

    <div class="contenedor">

        <div  id="contenedor" class="container">

            <div class="row">
                <div class="col s3 m3 l2">
                    <a href="#cuentaXcliente" class=" IconBlue modal-action modal-close modal-trigger ">
                        <i class="medium material-icons iconoCenter">assignment</i>
                        <p class="TextIconos">CUENTA POR CLIENTE</p>
                    </a>
                </div>
                <div class="col s3 m3 l2 offset-l1">
                    <a href="#SP" class=" IconBlue modal-action modal-close modal-trigger ">
                        <i class="medium material-icons iconoCenter ">supervisor_account</i>
                        <p class="TextIconos">MASTER CUENTA SP</p>
                    </a>
                </div>
                <div class="col s3 m3 l3 offset-l1">
                    <a href="#CompraxProduc" class=" IconBlue modal-action modal-close  modal-trigger ">
                        <i class="medium material-icons iconoCenter">shopping_cart</i>
                        <p class="TextIconos">MASTER COMPRAS POR PRODUCTOS</p>
                    </a>
                </div>
                <div class="col s3 m3 l3">
                    <a href="#!" class=" IconBlue modal-action modal-close ">
                        <i class="medium material-icons iconoCenter">add_shopping_cart</i>
                        <p class="TextIconos">MOVIMIENTO PRODUCTOS</p>
                    </a>
                </div>
            </div>

            <div class="row">
                <div class="col s3 m3 l2">
                    <a href="#!" class=" IconBlue modal-action modal-close ">
                        <i class="medium material-icons iconoCenter">redeem</i>
                        <p class="TextIconos">CANJE PREMIOS SP</p>
                    </a>
                </div>
                <div class="col s3 m3 l2 offset-l1">
                    <a href="#!" class=" IconBlue modal-action modal-close ">
                        <i class="medium material-icons iconoCenter">date_range</i>
                        <p class="TextIconos">REPORTE POR FECHA</p>
                    </a>
                </div>
                <div class="col s3 m3 l3 offset-l1">
                    <a href="#!" class=" IconBlue modal-action modal-close ">
                        <i class="medium material-icons iconoCenter">receipt</i>
                        <p class="TextIconos">MASTER VIÑETAS</p>
                    </a>
                </div>
                <div class="col s3 m3 l3">
                    <a href="#!" class=" IconBlue modal-action modal-close ">
                        <i class="medium material-icons iconoCenter">assignment_turned_in</i>
                        <p class="TextIconos">MÁS REPORTES</p>
                    </a>
                </div>
            </div>



    </div>
</main>

<!--///////////////////////////////////////////////////////////////////////////////////////////////////////////////////
                                            MODALES DE REPORTES
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->

<!--///////////////////////////////////////////////////////////////////////////////////////////////////////////////////
                                            Modal Cuenta por Cliente
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
<!-- Modal Cuenta por Cliente -->
<div id="cuentaXcliente" class="modal">
    <div class="modal-content">
        <div class="right row">
            <div class="col s1 m1 l1">
                <a href="#!" class=" BtnClose modal-action modal-close ">
                    <i class="material-icons">highlight_off</i>
                </a>
            </div>
        </div>

        <h6 class="center Mcolor AdUser">CUENTA POR CLIENTE</h6>

        <div class="row">
            <form class="col s12" action=""method="post" name="formnuevo">

                <div class="row">
                    <div class="input-field col s3">
                        <input name="unoUser" placeholder="Cod. Cliente" id="CodCliente" type="text" class="validate">
                    </div>

                    <div class="input-field col s9">
                        <input name="pass" placeholder="" id="Contra" type="text" class="validate">
                    </div>

                </div>

                <div class="row">
                    <div class="input-field col s6">
                        <input name="fecha1" placeholder="Desde" id="fecha1" type="text" class="datepicker1">
                    </div>
                    <div class="input-field col s6">
                        <input name="fecha2" placeholder="Hasta" id="vendednor" type="text" class="datepicker1">

                    </div>
                </div>
            </form>
        </div>
        <div class="row">
            <div class="col s6 m6 l5">
                <a href="#CtaXcte" class="Btnadd modal-action modal-close btn modal-trigger">GENERAR</a>
            </div>
        </div>
    </div><!-- fin del contenido modal -->
</div>
<!-- FIN DE MODAL CUENTA POR CLIENTE -->

<!-- MODAL DETALLES CUENTA POR CLIENTE -->
<div id="CtaXcte" class="modal">
    <div class="modal-content">
        <div class="right row">
            <div class="col s1 m1 l1">
                <a href="#!" class=" BtnClose modal-action modal-close ">
                    <i class="material-icons">highlight_off</i>
                </a>
            </div>
        </div>
        <!-- LOGO SISTEMA DE VISYS -->
        <center><img src="<?PHP echo base_url(); ?>assets/img/logo-visys.png" width="20%"></center>

        <h6 class="center Mcolor AdUser">CUENTA POR CLIENTE</h6>

      <p class="frpT pts">DATOS DEL CLIENTE</p>

        <div class="row">
            <div class="col s5 m3 l6">
                <p class="Mcolor cod">00635 </p>
                <p class="Mcolor cod linea">FARMACIA VIDA</p>
                <p class="detalles linea">Frente a Unión Fenosa, Ocotal </p>
                <p class="detalles linea">27323298</p>
            </div>
            <div class="col s3 m4 l3">
                <p class="fecha">01/05/2016</p>
                   <p class="rango">Desde</p>
            </div>
            <div class="col s3 m4 l3">
                <p class="fecha">22/06/2016</p>
                <p class="rango">Hasta</p>
            </div>
        </div>
        <!-- TOTAL DE PUNTOS DEL CLIENTE -->
        <div id="Total" class="right row text">
            <div class="col s8 m8 l12">
                <p class="Dato">TOTAL DE PUNTOS: <span class="dato">6,000 Pts. </span></p>
            </div>
        </div>
        <!-- TABLA DE DETALLES -->
            <table id="tblEliminar" class=" TblDatos">
                <thead>
                <tr>
                    <th>FECHA</th>
                    <th>FACTURA</th>
                    <th>PUNTOS X COMPRA</th>
                    <th>ESTADO</th>

                </tr>
                </thead>

                <tbody>
                <tr>
                    <td>24/01/2016</td>
                    <td id="black">067799</td>
                    <td >30,000 Pts.</td>
                    <td>ACTIVO</td>

                </tr>
                <tr>
                    <td>24/01/2016</td>
                    <td id="black">067799</td>
                    <td >30,000 Pts.</td>
                    <td>ACTIVO</td>
                </tr>

                </tbody>
            </table>

        <div id="Iconos" class="row">
            <div class="col s2 m2 l1 offset-l4 offset-s4 offset-m4">
                <a href="#!" class=" BtnClose ">
                    <i class="medium material-icons"  >print</i>
                </a>
            </div>
            <div class="col s2 m2 l1 offset-l1">
                <a href="#"><img src="<?PHP echo base_url();?>assets/img/icono_excel.png " width="38px" ></a>
            </div>
            <div class="col s2 m2 l1 offset-l1">
                <a href="#"><img src="<?PHP echo base_url();?>assets/img/icono-pdf.png " width="38px" ></a>
            </div>
        </div>

    </div>
</div>
<!--///////////////////////////////////////////////////////////////////////////////////////////////////////////////////
                                         Fin   Modal Cuenta por Cliente
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->

<!--///////////////////////////////////////////////////////////////////////////////////////////////////////////////////
                                            Modal Master Cuenta SP
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
<div id="SP" class="modal">
    <div class="modal-content">
        <div class="right row">
            <div class="col s1 m1 l1">
                <a href="#!" class=" BtnClose modal-action modal-close ">
                    <i class="material-icons">highlight_off</i>
                </a>
            </div>
        </div>

        <h6 class="center Mcolor AdUser">MASTER CUENTA SP</h6>

        <div class="row">
            <form class="col s12" action=""method="post" name="formSP">

                <div class="row">
                    <div class="input-field col s6">
                        <input name="fecha1" placeholder="Desde" id="fecha1" type="text" class="datepicker1">
                    </div>
                    <div class="input-field col s6">
                        <input name="fecha2" placeholder="Hasta" id="fecha2" type="text" class="datepicker1">

                    </div>
                </div>
            </form>
        </div>
        <div class="row">
            <div class="col s6 m6 l5">
                <a href="#SPdet" class="Btnadd modal-action modal-close btn modal-trigger">GENERAR</a>
            </div>
        </div>
    </div><!-- FIN CONTENIDO MODAL -->
</div>
<!-- Detalles del Master de Clientes SP -->

<div id="SPdet" class="modal">
    <div class="modal-content">
        <div class="right row">
            <div class="col s1 m1 l1">
                <a href="#!" class=" BtnClose modal-action modal-close ">
                    <i class="material-icons">highlight_off</i>
                </a>
            </div>
        </div>
        <!-- LOGO SISTEMA DE VISYS -->
        <center><img src="<?PHP echo base_url(); ?>assets/img/logo-visys.png" width="20%"></center>

        <h6 class="center Mcolor AdUser">MASTER CLIENTES SP</h6>

        <div class="row">
            <div class="col s3 m4 l3 offset-l3 offset-m3 offset-s3">
                <p class="fecha">01/05/2016</p>
                <p class="rango">Desde</p>
            </div>
            <div class="col s3 m4 l3">
                <p class="fecha">22/06/2016</p>
                <p class="rango">Hasta</p>
            </div>
        </div>

        <!-- TOTAL DE PUNTOS DEL CLIENTE -->
        <div id="Total" class="right row text">
            <div class="col s8 m8 l12">
                <p class="Dato">TOTAL DE PUNTOS: <span class="dato">6,000 Pts. </span></p>
            </div>
        </div>
        <!-- TABLA DE DETALLES -->
        <table id="FRP" class=" TblDatos">
            <thead>
            <tr>
                <th>COD. CLIENTE</th>
                <th>RUC</th>
                <th>CLIENTE</th>
                <th>Pts.</th>
                <th>RUTA</th>

            </tr>
            </thead>

            <tbody>
            <tr>
                <td id="Codigo">067799</td>
                <td >0010202860051M</td>
                <td>farmacia san martín</td>
                <td id="Codigo">10,800 Pts.</td>
                <td id="Codigo">F09</td>

            </tr>
            <tr>
                <td id="Codigo">067799</td>
                <td >0010202860051M</td>
                <td>farmacia san martín</td>
                <td id="Codigo">10,800 Pts.</td>
                <td id="Codigo">F09</td>
            </tr>

            </tbody>
        </table>

        <div id="Iconos" class="row">
            <div class="col s2 m2 l1 offset-l4 offset-s4 offset-m4">
                <a href="#!" class=" BtnClose ">
                    <i class="medium material-icons"  >print</i>
                </a>
            </div>
            <div class="col s2 m2 l1">
                <a href="#"><img src="<?PHP echo base_url();?>assets/img/icono_excel.png " width="40px" ></a>
            </div>
            <div class="col s2 m2 l1 ">
                <a href="#"><img src="<?PHP echo base_url();?>assets/img/icono-pdf.png " width="38px" ></a>
            </div>
        </div>
    </div><!-- Fin Contenido Modal -->
</div>

<!--///////////////////////////////////////////////////////////////////////////////////////////////////////////////////
                                        Fin Modal Master Cuenta SP
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->

<!--///////////////////////////////////////////////////////////////////////////////////////////////////////////////////
                                            Modal Master Compras X Procducto
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
<div id="CompraxProduc" class="modal">
    <div class="modal-content">
        <div class="right row">
            <div class="col s1 m1 l1">
                <a href="#!" class=" BtnClose modal-action modal-close ">
                    <i class="material-icons">highlight_off</i>
                </a>
            </div>
        </div>

        <h6 class="center Mcolor AdUser">MASTER COMPRAS POR PRODUCTO</h6>

        <div class="row">
            <form class="col s12" action=""method="post" name="formCXP">

                <div class="row">
                    <div class="input-field col s6">
                        <input name="fecha1" placeholder="Desde" id="fecha1" type="text" class="datepicker1">
                    </div>
                    <div class="input-field col s6">
                        <input name="fecha2" placeholder="Hasta" id="fecha2" type="text" class="datepicker1">

                    </div>
                </div>
            </form>
        </div>
        <div class="row">
            <div class="col s6 m6 l5">
                <a href="#cxpdet" class="Btnadd modal-action modal-close btn modal-trigger">GENERAR</a>
            </div>
        </div>
    </div><!-- FIN CONTENIDO MODAL -->
</div>
<!-- Detalles del Master de Clientes SP -->

<div id="cxpdet" class="modal">
    <div class="modal-content">
        <div class="right row">
            <div class="col s1 m1 l1">
                <a href="#!" class=" BtnClose modal-action modal-close ">
                    <i class="material-icons">highlight_off</i>
                </a>
            </div>
        </div>
        <!-- LOGO SISTEMA DE VISYS -->
        <center><img src="<?PHP echo base_url(); ?>assets/img/logo-visys.png" width="20%"></center>

        <h6 class="center Mcolor AdUser">MASTER COMPRAS POR PRODUCTO</h6>

        <div class="row">
            <div class="col s3 m4 l3 offset-l3 offset-m3 offset-s3">
                <p class="fecha">01/05/2016</p>
                <p class="rango">Desde</p>
            </div>
            <div class="col s3 m4 l3">
                <p class="fecha">22/06/2016</p>
                <p class="rango">Hasta</p>
            </div>
        </div>

        <!-- TOTAL DE PUNTOS DEL CLIENTE -->
        <div id="Total" class="right row text">
            <div class="col s8 m8 l12">
                <p class="Dato">TOTAL DE PUNTOS: <span class="dato">6,000 Pts. </span></p>
            </div>
        </div>
        <!-- TABLA DE DETALLES -->
        <table id="MCXP" class=" TblDatos">
            <thead>
            <tr>
                <th>N°</th>
                <th>FECHA</th>
                <th>FACTURA</th>
                <th>CANT.</th>
                <th>DESCRIPCIÓN</th>
                <th>LABOR.</th>
                <th>COD.</th>
                <th>CLIENTE</th>
                <th>RUTA</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>1</td>
                <td>01/06/2016</td>
                <td>FC002678</td>
                <td>6</td>
                <td>acetominofen jarabe 120 ML</td>
                <td>RAMOS</td>
                <td>03317</td>
                <td>farmacia mi farmacia</td>
                <td>F10</td>
            </tr>
            <tr>
                <td>1</td>
                <td>01/06/2016</td>
                <td>FC002678</td>
                <td>6</td>
                <td>acetominofen jarabe 120 ML</td>
                <td>RAMOS</td>
                <td>03317</td>
                <td>farmacia mi farmacia</td>
                <td>F10</td>
            </tr>
            <tr>
                <td>1</td>
                <td>01/06/2016</td>
                <td>FC002678</td>
                <td>6</td>
                <td>acetominofen jarabe 120 ML</td>
                <td>RAMOS</td>
                <td>03317</td>
                <td>farmacia mi farmacia</td>
                <td>F10</td>
            </tr>
            </tbody>


        </table>

        <div id="Iconos" class="row">
            <div class="col s2 m2 l1 offset-l4 offset-s4 offset-m4">
                <a href="#!" class=" BtnClose ">
                    <i class="medium material-icons"  >print</i>
                </a>
            </div>
            <div class="col s2 m2 l1">
                <a href="#"><img src="<?PHP echo base_url();?>assets/img/icono_excel.png " width="40px" ></a>
            </div>
            <div class="col s2 m2 l1 ">
                <a href="#"><img src="<?PHP echo base_url();?>assets/img/icono-pdf.png " width="38px" ></a>
            </div>
        </div>
    </div><!-- Fin Contenido Modal -->
</div>

<!--///////////////////////////////////////////////////////////////////////////////////////////////////////////////////
                                            Modal Master Cuenta SP
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->