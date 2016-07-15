
<div id="container">
    <div class="header">
        <div class="row">
            <div class="col s11">
                <img src="<?PHP echo base_url();?>assets/img/Logo-Visys-color.png" width="20%" >
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col s12">
                <div id="body">


                        <form class="form" method="post" action="<?php echo base_url('index.php/login')?>">
                            <div class="center row">
                                <div class="input-field col s3 offset-s4">
                                    <input placeholder="USUARIO" name="txtUsuario" id="nombre" type="text" class=" validate">

                                </div>

                            </div>

                            <div class="row">
                                <div class="input-field col s3  offset-s4">
                                    <input placeholder="CONTRASEÑA" name="txtpassword" id="pass" type="password" class="validate">

                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s3 offset-s4  login-text">
                                    <input type="checkbox" id="remember-me" />
                                    <label for="remember-me">RECORDAR</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s7 offset-s2 ">
                                    <button class="btn btn-block btn-blue waves-button waves-effect waves-light" type="submit" name="action">ACCEDER</button>
                                </div>
                            </div>

                        </form>


                </div>

            </div>
        </div>
    </div>
</div>