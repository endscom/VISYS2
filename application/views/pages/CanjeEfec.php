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
<!--////////////////////////////////////////////////////////////////////////////////////////////////////////
                                    MODAL PRINCIPAL
/////////////////////////////////////////////////////////////////////////////////////////////////////////-->
<!-- Modal #1
                Modal Structure -->
<div id="modal1" class="modal">
    <div class="modal-content">

        <div class="right row">
            <div class="col s1 m1 l1">
                <a href="#!" class=" BtnClose modal-action modal-close ">
                    <i class="material-icons">highlight_off</i>
                </a>
            </div>
        </div>

        <h6 class="center Mcolor">FORMATO DE REMISIÓN DE EFECTIVO</h6>



        <div class="row">
            <div class="col s2 m2 l2">
                <p class="Datos">COD.FRE: </p><input id="frp" type="text" class="validate">
                <br>
            </div>


            <div class="col s2 m2 l3 ">
                <p class="Datos">FECHA CAMBIO: </p>
            </div>
            <div class="input-field col s2 m2 l2 ">
                <input type="text" id="date1" class="datepicker1">

            </div>
        </div>


        <div class="row ">
            <div class="input-field col s2 m2 l3">
                <p class="DatoFrp">COD.CLIENTE:</p>
                <input  id="frp" type="text" class="validate">
            </div>

            <div class="input-field col s2 m3 l6"  >
                <select name="cliente" id="ListCliente">
                    <option value="" disabled selected>CLIENTE</option>
                    <option value="1">Option 1</option>
                    <option value="2">Option 2</option>
                    <option value="3">Option 3</option>
                </select>
            </div>

            <div class="input-field col s2 m2 l2">
                <input  id="frp" type="text" class="validate">
            </div>
        </div>

        <div class="right row">
            <div class="col s2 m2 l2">
                <a href="#Dfre" class="Procesar waves-effect modal-action modal-close btn modal-trigger">procesar</a>
            </div>
        </div>

        <table id="tblEliminar" class=" TblDatos">
            <thead>
            <tr>
                <th>FECHA</th>
                <th>#FATURA</th>
                <th>Pts.</th>
                <th>Pts. a EFECT.</th>
                <th><i class="material-icons">done</i> </th>
                <th>ESTADO</th>
            </tr>
            </thead>

            <tbody>
            <tr>
                <td>24/01/2016</td>
                <td>067799</td>
                <td>30,000</td>
                <td>C$ 30,000</td>
                <td>
                    <p >
                        <input type="checkbox" id="test1" />
                        <label for="test1"></label>
                    </p>
                </td>
                <td>DISPONIBLE</td>
            </tr>
            <tr>
                <td>24/01/2016</td>
                <td>067799</td>
                <td>30,000</td>
                <td>C$ 30,000</td>
                <td>
                    <p >
                        <input type="checkbox" id="test1" />
                        <label for="test1"></label>
                    </p>
                </td>
                <td>DISPONIBLE</td>
            </tr>

            </tbody>
        </table>

        <div class="right row text">
            <div class="col s8 m8 l12">
                <p class="Datos">TOTAL EFECTIVO: <span class="datos1">C$ 363,522 </span></p>
            </div>

        </div>
        <div class="row">
            <form class="col s12">
                <div class="row">
                    <div class="input-field col s12">
                        <p id="obser" class="Datos">OBSERVACIONES</p>
                        <textarea id="frp" class="materialize-textarea"></textarea>

                    </div>
                </div>
            </form>
        </div>

    </div>





</div>
<!-- FIN MODAL -->
<!--/////////////////////////////////////////////////////////////////////////////////////////////////////////////
                                        MODAL DETALLE FRP
//////////////////////////////////////////////////////////////////////////////////////////////////////////////-->

<!-- Modal #4
                Modal Structure -->
<div id="Dfre" class="modal">
    <div class="modal-content">

        <div class="right row">
            <div class="col s1 m1 l1">
                <a href="#!" class=" BtnClose modal-action modal-close ">
                    <i class="material-icons">highlight_off</i>
                </a>
            </div>
        </div>

        <h6 id="titulM" class="center Mcolor">DETALLE FRE</h6>

        <p class="center datos1"> N° FRE 38389</p>
        <p class="center datos1"> 24/12/2016</p>
        <h6  class="center datos1">00449 FARMACIA CASTELLÓN</h6>
        <p class="center Datos"> RUC 4412000183001H</p>

        <div class="row text">
            <div class="col s8 m8 l8">
                <p class="Datos">CANJE: 100,000 Pts</p>
            </div>
            <div class="col s4 m4 l4">
                <p class="Datos">EFECTIVO: C$ 50,000</p>
            </div>
        </div>

        <table id="tblpRODUCTOS" class=" TblDatos">
            <thead>
            <tr>
                <th>FECHA</th>
                <th>#FACTURA</th>
                <th>Pts</th>
                <th>Pts. a EFECT.</th>
                <th>ESTADO</th>

            </tr>
            </thead>

            <tbody>
            <tr>
                <td>24/01/2016</td>
                <td>069424</td>
                <td>25,000 Pts</td>
                <td>C$ 12,000</td>
                <td>PAGADO</td>

            </tr>
            <tr>
                <td>24/01/2016</td>
                <td>069424</td>
                <td>25,000 Pts</td>
                <td>C$ 12,000</td>
                <td>PAGADO</td>

            </tr>

            </tbody>
        </table>

        <div class="row">
            <form class="col s12">
                <div class="row">
                    <div class="input-field col s12">
                        <p id="obser" class="Datos">OBSERVACIONES</p>
                        <textarea id="frp" class="materialize-textarea">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sequi laudantium provident, debitis odio et, explicabo optio iure, odit, dicta quibusdam fugit soluta doloribus quo officiis quae ex veniam vero eum!
                            Error doloremque nisi, deserunt, esse beatae, sunt ad minima optio quidem possimus iste laborum dolores tempora porro veritatis molestiae? Saepe reprehenderit delectus mollitia vel minus recusandae cumque molestias obcaecati temporibus.
                            Corporis officiis quod est consequatur iusto labore dicta et sunt hic numquam aspernatur repudiandae quaerat cupiditate at, inventore reiciendis tenetur laboriosam alias dolor recusandae expedita? Autem fugit non consectetur quasi?

                        </textarea>

                    </div>
                </div>
            </form>
        </div>



    </div><!-- fin del contenido del modal -->



</div>
<!-- Fin de Modal#4-->
