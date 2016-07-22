<header class="demo-header mdl-layout__header ">
    <div class="centrado  ColorHeader">

        <span class=" title">catálogo</span>

    </div>
</header>
<!--  CONTENIDO PRINCIPAL -->
<main class="mdl-layout__content mdl-color--grey-100">
    <div class="contenedor">

        <div class=" row TextColor">
            <div class="col s5 m8 l12 offset-m1">
               ingreso y modificación
            </div>
        </div>

        <div class="row">
            <div class="col s3 m5 l5 offset-m1">
                <h6 class="item">nuevos articulos</h6>
            </div>
        </div>

               <row>
                   <form class="col s6 m6 l6" action=""method="post" name="formNuevoArto">

                       <div class="row">
                           <div class="input-field col s3 m3 l3">
                               <input name="unoUser" placeholder="Código" id="codigoArto" type="text" class="validate">
                           </div>

                           <div class="input-field col s3 m3 l5">
                               <input name="pass" placeholder="Nombre" id="NombArto" type="text" class="validate">
                           </div>
                       </div>

                       <div class="row">
                           <div class="input-field col s3 m3 l3">
                               <input name="rol" placeholder="Puntos Artículo" id="PtArto" type="text" class="validate">
                           </div>

                           <div id="BtnAddArto" class="col s3 m3 l2">
                               <a href="#" class="BtnBlue  btn ">AGREGAR</a>
                           </div>
                           <div class="file-field input-field col s3 m3 l5">
                               <div id="BtnImgArto" >
                                   <a href="#" class="BtnBlue  btn ">cargar imagen</a>
                                   <input id="CargarImgArto" type="file" multiple>
                               </div>
                               <div class="file-path-wrapper">
                                   <input  id="ImgContenedor" class="file-path validate" type="text" placeholder="IMAGEN">
                               </div>
                           </div>

                       </div>
                   </form>
               </row>
        <!-- fin de agregar nuevo articulo -->
                <div class="row">
                    <div class="col s3 m5 l3">
                        <h6 class="item">CATÁLOGO DE PREMIOS</h6>
                    </div>

                    <div  class=" Buscar  row column">
                        <div class="col s1 m1 l1 offset-l3">
                            <i class="material-icons ColorS">search</i>
                        </div>
                        <div class="input-field col s6 m6 l3 ">
                            <input  id="search" type="text" placeholder="Buscar" class="validate">
                            <label for="search"></label>
                        </div>
                    </div>
                </div>
        <!-- Tabla de catálogo de imagenes -->
        
        <table id="TbCatalogo" >
            <thead>
            <tr>
                <th></th>
                <th></th>
                <th></th>
                <th></th>

            </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <div class="images_line">
                            <div class="card small" >
                                <div id="dell" class="right row">
                                    <div class="col s1 m1 l1">
                                        <a href="#!" class=" BtnClose modal-action modal-close ">
                                            <i class="material-icons">highlight_off</i>
                                        </a>
                                    </div>
                                </div>
                                <!-- IMAGEN CONTENEDOR -->
                                <div class="card-image">
                                    <center>
                                        <div class="row">
                                            <a>
                                                <img src="<?PHP echo base_url();?>assets/img/user.jpg" >
                                            </a>
                                        </div>
                                    </center>
                                </div>
                                <!-- IMAGEN FIN DEL CONTENEDOR -->
                                <!-- CONTENIDO CARD -->
                                <div class="card-content">
                                        <center>
                                            <p class="items">102596</p>
                                            <p class="descrip">miniprocesador B&Dhc3000</p>
                                            <p class="puntos"> 983 puntos</p>
                                            <p><a href="#" class="BtnModif  btn ">modificar</a></p>
                                        </center>
                                </div>

                            </div><!-- FIN DEL CONTENIDO CARD -->
                        </div>
                    </td>

                    <td>
                        <div class="images_line">
                            <div class="card small" >
                                <div id="dell" class="right row">
                                    <div class="col s1 m1 l1">
                                        <a href="#!" class=" BtnClose modal-action modal-close ">
                                            <i class="material-icons">highlight_off</i>
                                        </a>
                                    </div>
                                </div>
                                <!-- IMAGEN CONTENEDOR -->
                                <div class="card-image">
                                    <center>
                                        <div class="row">
                                            <a>
                                                <img src="<?PHP echo base_url();?>assets/img/user.jpg" >
                                            </a>
                                        </div>
                                    </center>
                                </div>
                                <!-- IMAGEN FIN DEL CONTENEDOR -->
                                <!-- CONTENIDO CARD -->
                                <div class="card-content">
                                        <center>
                                            <p class="items">102596</p>
                                            <p class="descrip">miniprocesador B&Dhc3000</p>
                                            <p class="puntos"> 983 puntos</p>
                                            <p><a href="#" class="BtnModif  btn ">modificar</a></p>
                                        </center>
                                </div>

                            </div><!-- FIN DEL CONTENIDO CARD -->
                        </div>
                    </td>

                    <td>
                        <div class="images_line">
                            <div class="card small" >
                                <div id="dell" class="right row">
                                    <div class="col s1 m1 l1">
                                        <a href="#!" class=" BtnClose modal-action modal-close ">
                                            <i class="material-icons">highlight_off</i>
                                        </a>
                                    </div>
                                </div>
                                <!-- IMAGEN CONTENEDOR -->
                                <div class="card-image">
                                    <center>
                                        <div class="row">
                                            <a>
                                                <img src="<?PHP echo base_url();?>assets/img/user.jpg" >
                                            </a>
                                        </div>
                                    </center>
                                </div>
                                <!-- IMAGEN FIN DEL CONTENEDOR -->
                                <!-- CONTENIDO CARD -->
                                <div class="card-content">
                                        <center>
                                            <p class="items">102596</p>
                                            <p class="descrip">miniprocesador B&Dhc3000</p>
                                            <p class="puntos"> 983 puntos</p>
                                            <p><a href="#" class="BtnModif  btn ">modificar</a></p>
                                        </center>
                                </div>

                            </div><!-- FIN DEL CONTENIDO CARD -->
                        </div>
                    </td>

                    <td>
                        <div class="images_line">
                            <div class="card small" >
                                <div id="dell" class="right row">
                                    <div class="col s1 m1 l1">
                                        <a href="#!" class=" BtnClose modal-action modal-close ">
                                            <i class="material-icons">highlight_off</i>
                                        </a>
                                    </div>
                                </div>
                                <!-- IMAGEN CONTENEDOR -->
                                <div class="card-image">
                                    <center>
                                        <div class="row">
                                            <a>
                                                <img src="<?PHP echo base_url();?>assets/img/user.jpg" >
                                            </a>
                                        </div>
                                    </center>
                                </div>
                                <!-- IMAGEN FIN DEL CONTENEDOR -->
                                <!-- CONTENIDO CARD -->
                                <div class="card-content">
                                        <center>
                                            <p class="items">102596</p>
                                            <p class="descrip">miniprocesador B&Dhc3000</p>
                                            <p class="puntos"> 983 puntos</p>
                                            <p><a href="#" class="BtnModif  btn ">modificar</a></p>
                                        </center>
                                </div>

                            </div><!-- FIN DEL CONTENIDO CARD -->
                        </div>
                    </td>

                </tr>
            </tbody>
        </table><!-- FIN DE TABLA CATALOGO-->
    </div>






    </div>
</main>
<!-- FIN CONTENIDO PRINCIPAL -->