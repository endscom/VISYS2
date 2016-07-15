<header class="demo-header mdl-layout__header ">
    <div class="centrado  ColorHeader">

        <span class=" title">BAJA CLIENTES</span>

    </div>
</header>

<main class="mdl-layout__content mdl-color--grey-100">
    <div class="contenedor">

        <div class=" row TextColor">
            <div class="col s5 m5 l12">
                DAR BAJA A LOS CLIENTES
            </div>
        </div>
        <div class=" Buscar row column">
            <div class="col s1 m1 l1">
                <i class="material-icons ColorS">search</i>
            </div>
            <div class="input-field col s2 m4 l4">
                <input  id="search" type="text" placeholder="Buscar" class="validate">
                <label for="search"></label>
            </div>
        </div>

        <div class="right row">
            <div class="col s3">
                <a href="#modal1" class="BtnEliminar waves-effect  btn modal-trigger">ELIMINAR</a>
            </div>
        </div>


        <table id="ClienteAdd" class="responsive-table TblDatos">

            <thead>
            <tr>
                <th>CLIENTE</th>
                <th>RUC</th>
                <th>DIRECCIÓN</th>
            </tr>
            </thead>

            <tbody>
            <tr>
                <td>xxxxxxxx xxxxxx</td>
                <td>xxxxxxxx xxxxxx</td>
                <td>xxxxxxxx xxxxxx</td>
            </tr>

            <tr>
                <td>xxxxxxxx xxxxxx</td>
                <td>xxxxxxxx xxxxxx</td>
                <td>xxxxxxxx xxxxxx</td>
            </tr>

            <tr>
                <td>xxxxxxxx xxxxxx</td>
                <td>xxxxxxxx xxxxxx</td>
                <td>xxxxxxxx xxxxxx</td>
            </tr>


            </tbody>

        </table>

    </div><!-- Fin Contenedor -->
</main>
<!--///////////////////////////////////////////////////////////////////////
                        MODALES
/////////////////////////////////////////////////////////////////////////->
<!-- MODAL 1 -->
<!-- Modal Structure -->
<div id="modal1" class="modal">
    <div class="modal-content">

        <div class=" row">

            <div class="col s9 m9 l9">
                <h5 class="Mcolor">DESEADAR DE BAJA:</h5>
            </div>

            <div class="right col s3 m3 l3">
                <a href="#!" class=" BtnClose modal-action modal-close ">
                    <i class="material-icons">highlight_off</i>
                </a>
            </div>
        </div>

        <div class="row">
            <div class="col s12">

                <table id="tblModal1" class="TheadColor">

                    <thead>
                    <tr>
                        <th>COD. UNIMARK.</th>
                        <th> CLIENTE</th>
                        <th>USUARIO VISYS</th>
                        <th>CONTRASEÑA</th>
                        <th>ELIMINAR</th>
                    </tr>
                    </thead>

                    <tbody>

                    <tr>
                        <td>xxxxxxxxxxxxxxxxxxxxxxx</td>
                        <td>LUNAN</td>
                        <td>784512</td>
                        <td>UMK!0000</td>
                        <td>
                            <i class=" BtnClose material-icons">highlight_off</i>
                        </td>
                    </tr>

                    <tr>
                        <td>xxxxxxxxxxxxxxxxxxxxxxx</td>
                        <td>LUNAN</td>
                        <td>784512</td>
                        <td>UMK!0000</td>
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
        <div class="col s6 m3 l6">
            <a href="#modal2" class="Btnadd modal-action modal-close btn modal-trigger">DAR_BAJA</a>
        </div>
    </div>

</div>
<!--///////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////-->

<!-- Modal #2-->
<!-- Modal Structure -->
<div id="modal2" class="modal">
    <div class="modal-content">


        <div  class="row ">
            <div class="col s6 m6 l11">
                <h4 class="Mcolor">CLIENTES DE BAJA EN EL SISTEMA DE PUNTOS</h4>
            </div>
            <div class="col s6 m6 l1">
                <a href="#" class=" modal-action modal-close ">
                    <i class="BtnClose material-icons">highlight_off</i>
                </a>
            </div>
        </div>

        <table id="tblModal2" class="TheadColor">
            <thead>
            <tr>
                <th>COD. UNIMARK</th>
                <th>CLIENTE</th>

            </tr>
            </thead>

            <tbody>
            <tr>
                <td>xxxxxxx</td>
                <td>xxxxxx</td>

            </tr>

            <tr>
                <td>xxxxxxx</td>
                <td>xxxxxx</td>

            </tr>

            </tbody>
        </table>

    </div>


</div>