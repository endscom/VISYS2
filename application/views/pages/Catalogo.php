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

               <div>
                   <form class="col s6 m6 l6" action="" method="post" name="formNuevoArto">

                      <div class="articulos">
                          <div id="articulo" class="row">
                              <div class="input-field col s2 m5 l5 ">
                                  <input name="unoUser" placeholder="Código" id="codigoArto" type="text" class="validate">
                              </div>

                              <div class="input-field col s2 m6 l6">
                                  <input name="pass" placeholder="Nombre" id="NombArto" type="text" class="validate">
                              </div>
                          </div>

                          <div class="row">
                              <div class="input-field col s2 m5 l5">
                                  <input name="rol" placeholder="Puntos Artículo" id="PtArto" type="text" class="validate">
                              </div>

                              <div id="BtnAddArto" class="col s3 m2 l2">
                                  <a href="#" class="BtnBlue  btn ">AGREGAR</a>
                              </div>
                          </div>
                      </div>

                       <div class="cosa">
                            <div class="fileinput fileinput-new" data-provides="fileinput">
                               <div id="ImgContenedor" class="fileinput-new thumbnail" style="width: 250px; height: 150px; padding: 5px 0 10px !important;">
                               </div>
                               <div id="ImgContenedor" class="fileinput-preview fileinput-exists thumbnail" style="max-width:250px; max-height:150px;"></div>
                               <div>
                                   <span id="cargar" class="btn btn-default btn-file"><span class="fileinput-new">cargar</span>
                                       <span id="cancel" class="fileinput-exists">cambiar</span><input type="file" name="..."></span>
                                   <a id="cargar" href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">cancelar</a>
                               </div>
                           </div>

                       </div>



                   </form>
               </div>
        <!-- fin de agregar nuevo articulo -->

        <div class="row">
                <div class="col s8 m7 l3 offset-s2 offset-m5 of">
                    <h6 class="item">CATÁLOGO DE PREMIOS</h6>
                </div>
        </div>
                <div class="row">
                    <div  class=" Buscar  row column">
                        <div class="col s1 m1 l1 offset-s1 offset-m3 offset-l7">
                            <i class="material-icons ColorS">search</i>
                        </div>
                        <div class="input-field col s7 m6 l3 offset-m3  ">
                            <input  id="search" type="text" placeholder="Buscar" class="validate">
                            <label for="search"></label>
                        </div>
                    </div>
                </div>

        <!-- Tabla de catálogo de imagenes -->
        <div class="contedor_img">

            <div class="images_ca">
                <div class="row right">
                     <i class="material-icons">highlight_off</i>
                 </div>
                   <img src="<?PHP echo base_url();?>assets/img/catalogo/101100.jpg" alt="">
                <div class="descripImg">
                    <p class="codP">102596</p>
                    <p class="descript">Miniprocesador B&D hc3000</p>
                    <p class="ptsdes">939 puntos</p>
                </div>
                <a href="#" id="modificar" class="btn">modificar</a>
            </div>

            <div class="images_ca">
                <div class="row right">
                    <i class="material-icons">highlight_off</i>
                </div>
                <img src="<?PHP echo base_url();?>assets/img/catalogo/101345.jpg" alt="">
                <div class="descripImg">
                    <p class="codP">102596</p>
                    <p class="descript">Miniprocesador B&D hc3000</p>
                    <p class="ptsdes">939 puntos</p>
                </div>
                <a href="#" id="modificar" class="btn">modificar</a>
            </div>

            <div class="images_ca">
                <div class="row right">
                    <i class="material-icons">highlight_off</i>
                </div>
                <img src="<?PHP echo base_url();?>assets/img/catalogo/101349.jpg" alt="">
                <div class="descripImg">
                    <p class="codP">102596</p>
                    <p class="descript">Miniprocesador B&D hc3000</p>
                    <p class="ptsdes">939 puntos</p>
                </div>
                <a href="#" id="modificar" class="btn">modificar</a>
            </div>

            <div class="images_ca">
                <div class="row right">
                    <i class="material-icons">highlight_off</i>
                </div>
                <img src="<?PHP echo base_url();?>assets/img/catalogo/101605.jpg" alt="">
                <div class="descripImg">
                    <p class="codP">102596</p>
                    <p class="descript">Miniprocesador B&D hc3000</p>
                    <p class="ptsdes">939 puntos</p>
                </div>
                <a href="#" id="modificar" class="btn">modificar</a>
            </div>

            <div class="images_ca">
                <div class="row right">
                    <i class="material-icons">highlight_off</i>
                </div>
                <img src="<?PHP echo base_url();?>assets/img/catalogo/101645.jpg" alt="">
                <div class="descripImg">
                    <p class="codP">102596</p>
                    <p class="descript">Miniprocesador B&D hc3000</p>
                    <p class="ptsdes">939 puntos</p>
                </div>
                <a href="#" id="modificar" class="btn">modificar</a>
            </div>

            <div class="images_ca">
                <div class="row right">
                    <i class="material-icons">highlight_off</i>
                </div>
                <img src="<?PHP echo base_url();?>assets/img/catalogo/102586.jpg" alt="">
                <div class="descripImg">
                    <p class="codP">102596</p>
                    <p class="descript">Miniprocesador B&D hc3000</p>
                    <p class="ptsdes">939 puntos</p>
                </div>
                <a href="#" id="modificar" class="btn">modificar</a>
            </div>

            <div class="images_ca">
                <div class="row right">
                    <i class="material-icons">highlight_off</i>
                </div>
                <img src="<?PHP echo base_url();?>assets/img/catalogo/102596.jpg" alt="">
                <div class="descripImg">
                    <p class="codP">102596</p>
                    <p class="descript">Miniprocesador B&D hc3000</p>
                    <p class="ptsdes">939 puntos</p>
                </div>
                <a href="#" id="modificar" class="btn">modificar</a>
            </div>

            <div class="images_ca">
                <div class="row right">
                    <i class="material-icons">highlight_off</i>
                </div>
                <img src="<?PHP echo base_url();?>assets/img/catalogo/103371.jpg" alt="">
                <div class="descripImg">
                    <p class="codP">102596</p>
                    <p class="descript">Miniprocesador B&D hc3000</p>
                    <p class="ptsdes">939 puntos</p>
                </div>
                <a href="#" id="modificar" class="btn">modificar</a>
            </div>
       </div>

    </div>




    </div>
</main>
<!-- FIN CONTENIDO PRINCIPAL -->