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
                                <div class="row">
                                    <div class="input-field col s3 m3 l3 offset-l4  offset-m2 login-text">
                                        <input type="checkbox" id="remember-me" />
                                        <label id="recordar" for="remember-me">RECORDAR</label>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col s3 m2 l6">
                                    <button id="Acceder" class="Btnadd modal-action modal-close btn" type="submit" name="action">ACCEDER</button>
                                </div>
                            </div>

                        </form>


                </div>

            </div>
        </div>
    <div id="conTIcon" class="row">
        <div id="logos" class="col s3 m3 l3">
            <img  src="<?PHP echo base_url();?>assets/img/iconos_login.png"  >
        </div>
        <div id="logos1" class="right col s3 m3 l3 ">
            <img  src="<?PHP echo base_url();?>assets/img/log_unimark.png" >
        </div>
    </div>
    </div>
