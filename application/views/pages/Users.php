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

                <?PHP
                    if(!($Luser)){}
                    else{

                        foreach($Luser as $user )
                        {
                            if($user['Estado']==1)
                            {$activo='Inactivo';}
                            else{$activo='Activo';}
                            echo "
                                 <tr>
                                    <td>".date('d/m/Y',strtotime(substr($user['FechaCreacion'], 0,10)))."</td>
                                    <td id='NomCliente'>".$user['IdUsuario']."</td>
                                    <td>".$user['RUC']."</td>
                                    <td> <a  href='#Duser' class='modal-trigger'>".$user['Nombre']."</td></a>
                                    <td><i class='BtnClose material-icons'>highlight_off</i></td>
                                    <td id='activo'>".$activo."</td>
                                </tr>
                            ";
                        }
                    }
                ?>

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
            <form class="col s12" action="<?php echo base_url('index.php/NuevoUsuario');?>" method="post" name="formAddUser">
                <div class="row">
                    <div class="input-field col s6">
                        <input name="user" placeholder="Usuario / Cod. Cliente" id="NombreUser" type="text" class="validate">
                    </div>

                    <div class="input-field col s6">
                        <input name="pass" placeholder="Contraseña" id="Contra" type="password" class="validate">
                    </div>
                </div>

                <div class="row">
                    <div class="input-field col s6">
                        <select name="rol" id="rol">
                            <option value="" disabled selected> ROL</option>
                            <?PHP
                                if(!($Lrol)){
                                } else {
                                     foreach($Lrol as $rol) {
                                          echo '<option value="'.$rol['IdRol'].'">'.$rol['Descripcion'].'</option>';
                                     }
                                 }
                            ?>

                        </select>

                    </div>
                    <div class="input-field col s6">
                        <select name="vendedor" id="vendedor">
                            <option value="" disabled selected> VENDEDOR</option>
                            <?PHP
                            if(!($Lven)){
                            } else {
                                foreach($Lven as $rol) {
                                    echo '<option value="'.$rol['IdVendedor'].'">'.$rol['Nombre'].'</option>';
                                }
                            }
                            ?>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col s6">
                        <a onclick="EnviodeDatos()" class="Btnadd  waves-effect  btn modal-trigger" >GENERAR</a>
                    </div>
                </div>
            </form>
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

        <h6 class="center Mcolor AdUser">INFORMACIÓN DEL CLIENTE</h6>

        <p class="center datos1 cod "> COD. CLIENTE: 00449</p>
        <h6  class="center datos1 user linea">00449 FARMACIA CASTELLÓN</h6>
        <p class="center datos1 ruc linea"> RUC 4412000183001H</p>

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