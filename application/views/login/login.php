<div class="container">

        <div  class="header">
            <div id="imgLogo" class=" row">
                <div  class="col s6 m6 l12">
                    <img  src="<?PHP echo base_url();?>assets/img/Logo-Visys-blanco.png" width="15%" >
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col s12">
                <div id="body">
                        <form class="form" method="post" action="<?php echo base_url('index.php/login')?>">
                            <div class="container">
                                <div  class=" row">
                                    <div class="input-field col s6 m6 l6 offset-l3">
                                        <input  placeholder="USUARIO" name="txtUsuario" id="nombre" type="text" class=" validate">
                                    </div>

                                </div>

                                <div class="row">
                                    <div class="input-field col s6 m6 l6 offset-l3">
                                        <input placeholder="CONTRASEÑA" name="txtpassword" id="pass" type="password" class="validate">

                                    </div>
                                </div>
                            </div>
                            <div class="row center">
                                    <button id="Acceder" class="Btnadd modal-action modal-close btn" type="submit" name="action">ACCEDER</button>
                            </div>
                        </form><!-- Fin del Formulario de Identificación -->

                </div>
            </div>
        </div>
    </div>
