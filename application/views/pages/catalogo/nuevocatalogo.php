<header class="demo-header mdl-layout__header ">
    <div class="centrado  ColorHeader">
        <span class=" title">catálogo</span>
    </div>
</header>
<!--  CONTENIDO PRINCIPAL -->
<main class="mdl-layout__content mdl-color--grey-100">
    <div class="contenedor">        
        <div class=" row TextColor center">
            <div class="col s5 m8 l12 offset-m1">
               creación de catalogos                
            </div>
        </div>
  	<div class="row noMargen valign-wrapper ">
          <div class="bold noMargen left col s5 m8 l8">
            <h6>ARTÍCULOS EN CATÁLOGO</h6>
          </div>
          <div class="bold col s5 m8 l2">
              <a href="#listaArticulosCatalogoActual" id="btngenerar"  onclick="AddClients()" class="BtnBlue waves-effect  btn modal-trigger ">AGREGAR</a>
          </div>
    </div>
    <div class="progress" style="display:none">
          <div class="indeterminate violet"></div>
    </div>
  <div class="row center">
		<table id="tblCatalogoActual" class="table TblDatos">
            <thead>
            <tr>
                <th>CÓDIGO</th>
                <th>ARTÍCULO</th>
                <th>MINIATURA</th>
                <th>PUNTOS</th>
                <th>SELECCIONAR</th>
            </tr>
            </thead>
            <tbody>
                <?PHP
                if(!($catalogo)){}
                else{
                    foreach($catalogo AS $row)
                    {
                        echo "<tr>
                                   <td>".$row['CodigoImg']."</td>
                                   <td>".$row['Nombre']."</td>
                                   <td class='center'><img class='btn-floating materialboxed' data-caption='".$row['Nombre']." ".number_format($row['Puntos'])." PTOS'
                                   width='250' src='".base_url()."assets/img/catalogo/".$row['Imagen']."'></td>
                                   <td><input id='".$row['CodigoImg']."' type='number' min='0'  step='any' value=".$row['Puntos']."></td>
                                   <td><a href='#' onclick='ActualizarPuntos(".'"'.$row['CodigoImg'].'","'.$row['IdCT'].'"'.")'><i class='material-icons'>save</i></a></td>
                              </tr>";
                    }
                }
                ?>
            </tbody>
        </table>
	   </div>
    </div>
</main>

 <!--Modal Structure lista de articulos DE CATALOGO ACTUAL-->
  <div id="listaArticulosCatalogoActual" class="modal">
    <div class="btnCerrar right">
      <i  style='color:red;' class="material-icons modal-action modal-close">highlight_off</i>
    </div>
    <div class="modal-content">
      <div class="row noMargen TextColor center">
            <div class="col s5 m8 l12 offset-m1">
               CATALOGO ACTUAL
            </div>
          <div class="input-field col s12 l3">
          <select id="cmbCatalogos" class="negra">
            <option value="" disabled selected>AGREGAR ARTÍCULOS DE:</option>
            <?php 
                  if (!($catalogos)) {}
                    else{
                        foreach ($catalogos as $key) {
                            echo "<option value='".$key['IdCT']."'>".$key['Descripcion']."</option>";
                        }
                    }
                  ?>

          </select>
        </div>
        </div>
        <div class="progress progress2" style="display:none">
          <div class="indeterminate violet"></div>
    </div>
      <div class="row noMargen TextColor center">
           <table id="tblCatalogoActualModal" class="table TblDatos">
            <thead>
            <tr>
                <th>CÓDIGO</th>
                <th>ARTÍCULO</th>
                <th>MINIATURA</th>
                <th>PUNTOS</th>
                <th>ELIMINAR</th>
            </tr>
            </thead>
            <tbody>
                <?PHP
                if(!($catalogo)){}
                else{
                    foreach($catalogo AS $row)
                    {
                        echo "<tr>
                                   <td>".$row['CodigoImg']."</td>
                                   <td>".$row['Nombre']."</td>
                                   <td class='center'><img class='btn-floating materialboxed' data-caption='".$row['Nombre']." ".number_format($row['Puntos'])." PTOS'
                                   width='250' src='".base_url()."assets/img/catalogo/".$row['Imagen']."'></td>
                                   <td>".$row['Puntos']."</td>
                                   <td><a href='#' onclick='darBaja(".'"'.$row['CodigoImg'].'","'.$row['IdCT'].'"'.")'><i class='material-icons'>delete_forever</i></a></td>
                              </tr>";
                    }
                }
                ?>
            </tbody>
        </table>
      </div>
      <div class="row center">
            <a id="guardarCatalogo" class="redondo waves-effect waves-light btn">GUARDAR</a>
      </div>         
    </div>
</div>



       <!--Modal Structure lista de articulos-->
  <div id="listaArticulos" class="modal">
    <div class="btnCerrar right">
      <i  style='color:red;' class="material-icons modal-action modal-close">highlight_off</i>
    </div>
    <div class="modal-content">
      <div class="row TextColor center">
            <div class="col s5 m8 l12 offset-m1">
               reutilización de catálogo
               <input type="text" id="ponerID"/>
            </div>
      </div>
      <div class="row TextColor center">
            <table id="tblCatalogoPasado" class="table TblDatos">
            <thead>
            <tr>
                <th>CÓDIGO</th>
                <th>ARTÍCULO</th>
                <th>MINIATURA</th>
                <th>PUNTOS</th>
                <th>SELECCIONAR</th>
                <th style="display:none;">ID CATALOGO</th>
            </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
      </div>
      <div class="row center">
            <a id="addCatalogoAntiguo" class="redondo waves-effect waves-light btn">ACEPTAR</a>
      </div>         
    </div>
</div>



  <!-- Modal Structure DAR DE BAJA-->
  <div id="darBaja" class="modal">
    <div class="btnCerrar right">
      <i  style='color:red;' class="material-icons modal-action modal-close">highlight_off</i>
    </div>
    <div class="modal-content">
      <div class="row TextColor center">
            <div class="col s5 m8 l12">
               ¿está seguro que desea dar de baja a este artículo?
            </div>
      </div>
      <div class="row center">
            <a id="darBajaOK" class="redondo waves-effect waves-light btn">ACEPTAR</a>
      </div>         
    </div>
  </div>