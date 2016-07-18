<header class="demo-header mdl-layout__header ">
    <div class="centrado  ColorHeader">

        <span class=" title">usuarios</span>

    </div>
</header>
<!--//////////////////////////////////////////////////////////
                CONTENIDO
///////////////////////////////////////////////////////////-->
<main class="mdl-layout__content mdl-color--grey-100">

    <div class="contenedor">

        <div class=" row TextColor">
            <div class="col s5 m5 l12">
               usuarios sistema de puntos
            </div>
        </div>

        <div class="container">
            <div class=" Buscar row column">

                <div class="col s1 m1 l1 offset-l3">
                    <i class="material-icons ColorS">search</i>
                </div>

                <div class="input-field col s6 m6 l4">
                    <input  id="search" type="text" placeholder="Buscar" class="validate">
                    <label for="search"></label>
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
                <th>CREADO</th>
                <th>USUARIO</th>
                <th>RUC</th>
                <th>NOMBRE</th>
                <th>ELIMINAR</th>
                <th>ESTADO</th>
            </tr>
            </thead>

            <tbody>

            <tr>
                <td>14/07/2015</td>
                <td id="NomCliente">00001</td>
                <td>215457889621478</td>
                <td> <a  href="#Duser" class="modal-trigger">farmacia david</td></a>
                <td><i class=" BtnClose material-icons">highlight_off</i></td>
                <td id="activo">ACTIVO</td>
            </tr>

            <tr>
                <td>14/07/2015</td>
                <td id="NomCliente">00001</td>
                <td>215457889621478</td>
                <td>farmacia david</td>
                <td><i class=" BtnClose material-icons">highlight_off</i></td>
                <td id="activo">ACTIVO</td>
            </tr>

            <tr>
                <td>14/07/2015</td>
                <td id="NomCliente">00001</td>
                <td>215457889621478</td>
                <td>farmacia david</td>
                <td><i class=" BtnClose material-icons">highlight_off</i></td>
                <td id="activo">ACTIVO</td>
            </tr>

            <tr>
                <td>14/07/2015</td>
                <td id="NomCliente">00001</td>
                <td>215457889621478</td>
                <td>farmacia david</td>
                <td><i class=" BtnClose material-icons">highlight_off</i></td>
                <td id="activo">ACTIVO</td>
            </tr>

            </tbody>

        </table>


    </div>
</main>

<!--/////////////////////////////////////////////////////////////////////////////////////////
                                        MODALES
//////////////////////////////////////////////////////////////////////////////////////////-->

<!-- AGREGAR USUARIO -->
<div id="modal1" class="modal">
    <div class="modal-content">

        <div class="right row">
            <div class="col s1 m1 l1">
                <a href="#!" class=" BtnClose modal-action modal-close ">
                    <i class="material-icons">highlight_off</i>
                </a>
            </div>
        </div>

        <h6 class="center Mcolor AdUser">AGREGAR USUARIO VISYS </h6>

        <div class="row">
            <form class="col s12" action=""method="post" name="formnuevo">

                <div class="row">
                    <div class="input-field col s6">
                        <input name="unoUser" placeholder="Usuario / Cod. Cliente" id="NombreUser" type="text" class="validate">
                    </div>

                    <div class="input-field col s6">
                        <input name="pass" placeholder="Contraseña" id="Contra" type="password" class="validate">
                    </div>
                </div>

                <div class="row">
                    <div class="input-field col s6">
                        <input name="rol" placeholder="Rol" id="rol" type="text" class="validate">
                    </div>
                    <div class="input-field col s6">
                        <input name="vendedor" placeholder="Vendedor"id="vendednor" type="text" class="validate">
                        <label for="pass2"></label>
                    </div>
                </div>
            </form>
        </div>


        <div class="row">
            <div class="col s6">
                <a href="#UserYes" class="Btnadd modal-action modal-close btn modal-trigger">GENERAR</a>
            </div>
        </div>

    </div><!-- FIN DEL CONTENIDO DEL MODAL -->

</div>
<!-- FIN  DE MODAL #1 -->

<!-- MODAL REPUESTA USUARIO -->
<!-- Modal Structure -->
<div id="UserYes" class="modal">
    <div class="modal-content">
        <h6 class="center Mcolor user">EL USUARIO SE AGREGÓ CORRECTAMENTE </h6>
    </div>

</div>
<!-- FIN  DE MODAL #2 -->

<!-- MODAL DETALLES USUARIO -->
<!-- Modal Structure -->
<div id="Duser" class="modal">
    <div class="modal-content">

        <div class="right row">
            <div class="col s1 m1 l1">
                <a href="#!" class=" BtnClose modal-action modal-close ">
                    <i class="material-icons">highlight_off</i>
                </a>
            </div>
        </div>

        <h6 class="center Mcolor">INFORMACIÓN DEL CLIENTE</h6>

        <p class="center datos1"> COD. CLIENTE: 00449</p>
        <h6  class="center datos1">00449 FARMACIA CASTELLÓN</h6>
        <p class="center datos1"> RUC 4412000183001H</p>

        <p id="acumulado" class="center Datos">ACUMULADO: <span id="AcuT">250,000</span>  Pts.</p>

        <div class="row">
            <div class="col s3 m2 l3 offset-l2">
                <p id="ModalFeet"  class="datos1 "> VENDEDOR: <br> Esperanza Castillo</p>
            </div>

            <div class="col s3 m2 l3 offset-l3">
                <p id="ModalFeet"  class="datos1"> ZONA: <br>F14</p>
            </div>
        </div>

    </div><!-- fin del contenido del modal -->

</div>