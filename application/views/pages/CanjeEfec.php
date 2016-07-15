<header class="demo-header mdl-layout__header ">
    <div class="centrado  ColorHeader">

        <span class=" title">fre</span>

    </div>
</header>
<!--//////////////////////////////////////////////////////////
                CONTENIDO
///////////////////////////////////////////////////////////-->

<main class="mdl-layout__content mdl-color--grey-100">

    <div class="contenedor">

        <div id="search" class=" right Buscar row column">
            <div class="col s1 m1 l2">
                <i class="material-icons ColorS">search</i>
            </div>

            <div class="input-field col s6 m6 l10">
                <input  id="search" type="text" placeholder="Buscar" class="validate">
                <label for="search"></label>
            </div>
        </div>

        <div class=" row TextColor">
            <div class="col s5 m5 l12">
               canje por efectivo
            </div>
        </div>

        <div class="right row">
            <div class="col s2">
                <a href="#modal1" class="Btnadd waves-effect  btn modal-trigger">efectivo</a>
            </div>
        </div>

        <table id="FRP" class=" TblDatos">

            <thead>
            <tr>
                <th>FECHA</th>
                <th># FRP</th>
                <th>COD. CLIENTE</th>
                <th>NOMBRE</th>
                <th>Pts.</th>
                <th>EFECTIVO</th>
                <th>ELIMINAR</th>
            </tr>
            </thead>

            <tbody>

            <tr>
                <td> 14/07/2015</td>
                <td>fc002332</td>
                <td>00022</td>
                <td>xxxxxx xxxxxxxx xxxxxx xxxxx x</td>
                <td>2,742 Pts.</td>
                <td>C$ 1,371</td>
                <td>
                    <a href="#modal2" class="Icono modal-trigger">
                        <i class="material-icons">highlight_off</i>
                    </a>
                </td>
            </tr>

            <tr>
                <td> 14/07/2015</td>
                <td>fc002332</td>
                <td>00022</td>
                <td>xxxxxx xxxxxxxx xxxxxx xxxxx x</td>
                <td>2,742 Pts.</td>
                <td>C$ 1,371</td>
                <td>
                    <a href="#modal2" class="Icono modal-trigger">
                        <i class="material-icons">highlight_off</i>
                    </a>
                </td>
            </tr>

            </tbody>

        </table>

    </div>
</main>

<!--///////////////////////////////////////////////////////////////////////////////////////////////
                                     MODALES ELIMINACION DE FRP
////////////////////////////////////////////////////////////////////////////////////////////////-->
<!-- Modal #2 -->
<!-- Modal Structure -->
<div id="modal2" class="modal">
    <div class="modal-content">

        <div class="right row">
            <div class="col s1 m1 l1">
                <a href="#!" class=" BtnClose modal-action modal-close ">
                    <i class="material-icons">highlight_off</i>
                </a>
            </div>
        </div>

        <h6 class="center Mcolor">DESEA ELIMINAR EL FRP <span class="redT">#00351</span></h6>

        <div class="row">
            <div class="col s2 m2 l2">
                <a href="#modal3" class="Procesar waves-effect  modal-action modal-close btn modal-trigger">procesar</a>
            </div>
        </div>

    </div>

</div>
<!-- Modal #3 -->
<!-- Modal Structure -->

<div id="modal3" class="modal">
    <div class="modal-content">

        <div class="right row">
            <div class="col s1 m1 l1">
                <a href="#!" class=" BtnClose modal-action modal-close ">
                    <i class="material-icons">highlight_off</i>
                </a>
            </div>
        </div>

        <h6 class="center Mcolor">ELIMINADO CORRECTAMENTE FRP <span class="redT">#00351</span></h6>



    </div>

</div>