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
                <th>ACCION</th>
                <th>ESTADO</th>
            </tr>
            </thead>
            <tbody>
                <?PHP
                    if(!($Luser)){}
                    else{
                        foreach($Luser as $user )
                        {
                            $Mmensaje = "CAMBIAR A INACTIVO";
                            $Micono="highlight_off";
                            $MColor="#6a4ad5";
                            $mIcono = "#ff0000";
                            $activo='Activo';

                            if($user['Estado']==1)
                            {
                                $activo='Inactivo';
                                $MColor="#ff0000";
                                $Micono="done_all";
                                $Mmensaje = "CAMBIAR A ACTIVO";
                                $mIcono = "#4caf50";
                            }

                            echo "
                                 <tr>
                                    <td>".date('d/m/Y',strtotime(substr($user['FechaCreacion'], 0,10)))."</td>
                                    <td id='NomCliente'>".$user['IdUsuario']."</td>
                                    <td>".$user['RUC']."</td>
                                    <td> <a href='#Duser' class='modal-trigger'>".$user['Nombre']."</td></a>
                                    <td><a data-tooltip='$Mmensaje' class='btn-flat tooltipped' onclick='DellUsers(".'"'.$user['IdUsuario'].'",'.'"'.$user['Estado'].'"'.")'><i style='color:".$mIcono."' class=' material-icons'>$Micono</i></td></a>
                                    <td id='activo'style='color:".$MColor."'>".$activo."</td>
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
            <form class="col s12" action="<?php /*echo base_url('index.php/NuevoUsuario');*/?>" method="post" name="formAddUser">
                <div class="row">
                    <div class="input-field col s6">
                        <input name="user" placeholder="Usuario / Cod. Cliente" id="NombreUser" type="text" class="required">
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
                                foreach($Lven as $vendedor) {
                                    echo '<option value="'.$vendedor['IdVendedor'].'">'.$vendedor['Nombre'].'</option>';
                                }
                            }
                            ?>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col s6">
                        <a  class="Btnadd  waves-effect btn" id="Adduser"  onclick="EnviodeDatos()">GENERAR</a></div>
                </div>
            </form>
        </div>
    </div><!-- FIN DEL CONTENIDO DEL MODAL -->
</div>
<!-- FIN  DE MODAL #2 -->
<!-- MODAL REPUESTA USUARIO -->
<!-- Modal Structure -->
<div id="UserYes" class="modal">
    <div class="modal-content">
        <h6 class="center Mcolor user">EL USUARIO SE AGREGÓ CORRECTAMENTE </h6>
    </div>
</div>
<!-- FIN  DE MODAL #3 -->
<!-- MODAL cambio de estado de usuario -->
<!-- Modal Structure -->
<div id="DellUser" class="modal">
    <div class="modal-content">
        <div class="right row">
            <div class="col s1 m1 l1">
                <a href="#!" class=" BtnClose modal-action modal-close ">
                    <i class="material-icons">highlight_off</i>
                </a>
            </div>
        </div>
        <h6 id="TxtObser" class="center Mcolor">DESEA CAMBIAR EL ESTADO DE USUARIO</h6>
        <div class="row">
            <div id="Estado" class="col s12 m12 l12">
                    <div class="row">
                        <div class="col s5 m5 l5 offset-l3">
                            <a  href="#" id="DellUsers" class="btnYes  btn">Aceptar</a>
                        </div>
                    </div>
            </div>
        </div>
    </div>
</div>
<!-- FIN  DE MODAL #3 -->
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