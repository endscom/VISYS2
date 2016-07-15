<header class="demo-header mdl-layout__header ">
    <div class="centrado  ColorHeader">

        <span class=" title">CLIENTES</span>

    </div>
</header>
<!--//////////////////////////////////////////////////////////
                CONTENIDO
///////////////////////////////////////////////////////////-->
<main class="mdl-layout__content mdl-color--grey-100">

    <div class="contenedor">

        <div class=" row TextColor">
            <div class="col s5 m5 l12">
               CLIENTES PARA AGREGAR AL PROGRAMA DE PUNTOS
            </div>
        </div>

        <div class="container">
            <div class=" Buscar row column">

                <div class="col s1 m1 l1 offset-l3">
                    <i class="material-icons ColorS">search</i>
                </div>

                <div class="input-field col s2 m4 l4">
                    <input  id="search" type="text" placeholder="Buscar" class="validate">
                    <label for="search"></label>
                </div>

                <div class="col s1 m1 l1">
                    <img src="<?PHP echo base_url();?>assets/img/icono_excel.png " width="30px">
                </div>
                <div class="col s1 m1 l1 ">
                    <img src="<?PHP echo base_url();?>assets/img/icono-pdf.png " width="30px" >
                </div>
            </div>
        </div>

        <div class="right row">
            <div class="col s3">
                <a href="#modal1" class="BtnBlue waves-effect  btn modal-trigger ">AGREGAR</a>
            </div>
        </div>


        <table id="ClienteAdd" class=" TblDatos">

            <thead>
            <tr>
                <th>CLIENTE</th>
                <th>RUC</th>
                <th>DIRECCIÓN</th>
            </tr>
            </thead>

            <tbody>

            <tr>
                <td>xxxx</td>
                <td>xxxxx</td>
                <td>xxxx</td>
            </tr>

            <tr>
                <td>xxxx</td>
                <td>xxxxx</td>
                <td>xxxx</td>
            </tr>

            <tr>
                <td>xxxx</td>
                <td>xxxxx</td>
                <td>xxxx</td>
            </tr>

            <tr>
                <td>xxxx</td>
                <td>xxxxx</td>
                <td>xxxx</td>
            </tr>

            </tbody>

        </table>

    </div><!-- Fin Contenedor -->
</main>


<!--///////////////////////////////////////////////////////////////////////
                        MODALES
////////////////////////////////////////////////////////////////////////-->

<!-- Modal #1
                Modal Structure -->
<div id="modal1" class="modal">
    <div class="modal-content">

        <div class=" row">

            <div class="right col s3 m3 l3">
                <a href="#!" class=" BtnClose modal-action modal-close ">
                    <i class="material-icons">highlight_off</i>
                </a>
            </div>
        </div>
        <h6 class="center Mcolor">DESEA AGREGAR:</h6>

    <div class="row">
        <div class="col s12">

            <table id="tblModal1" class="TheadColor">

                <thead>
                <tr>
                    <th>CLIENTE.</th>
                    <th>COD.UNIMARK</th>
                    <th>ELIMINAR</th>
                </tr>
                </thead>

                <tbody>

                <tr>
                    <td>xxxxxxxxxxxxxxxxxxxxxxx</td>
                    <td>LUNAN</td>
                    <td>
                        <i class=" BtnClose material-icons">highlight_off</i>
                    </td>
                </tr>

                <tr>
                    <td>xxxxxxxxxxxxxxxxxxxxxxx</td>
                    <td>LUNAN</td>
                    <td>
                        <i class=" BtnClose material-icons">highlight_off</i>
                    </td>
                </tr>
                </tbody>

            </table>
        </div>
    </div>

    </div>

    <div class="row">
        <div class="col s6">
            <a href="#modal2" class="Btnadd modal-action modal-close btn modal-trigger">GENERAR</a>
        </div>
    </div>

</div>
<!-- Fin de Modal#1-->

<!--///////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////-->

<!-- Modal #2-->
<!-- Modal Structure -->
<div id="modal2" class="modal">
    <div class="modal-content">



        <div  class="row ">
            <div class="col s6 m6 l8">
                <h4 class="Mcolor">CLIENTES AGREGADOS</h4>
            </div>
            <div class="col s6 m6 l4">
                <a href="#" class=" modal-action modal-close ">
                    <i class="BtnClose material-icons">highlight_off</i>
                </a>
            </div>
        </div>

        <table id="tblModal2" class="TheadColor">
            <thead>
            <tr>
                <th>CLIENTE</th>
                <th>USUARIO VISYS</th>
                <th>CONTRASEÑA</th>
            </tr>
            </thead>

            <tbody>
            <tr>
                <td>xxxxxxx</td>
                <td>xxxxxx</td>
                <td>xxxx</td>
            </tr>
            </tbody>
        </table>

    </div>


</div>