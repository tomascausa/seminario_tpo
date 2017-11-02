<?php
    include ('header.php');
?>

    <div id="recuperar-contrasena" class="smart-wrap">

        <div class="smart-forms login smart-container wrap-3">

            <div class="form-header header-primary Aligner">
                <h4><i class="fa fa-refresh Aligner-item"></i>Recuperar Contraseña</h4>
                <!-- <img src="assets/images/logo.png" class="Aligner-item logo" alt="Logo HeApp"/> -->
            </div>

            <form method="post" action="/" id="recuperar-contraseña-form">
                <div class="form-body">

                    <div class="section">
                        <label class="field prepend-icon">
                            <input type="password" name="password" id="password" class="gui-input" placeholder="Contraseña">
                            <span class="field-icon"><i class="fa fa-lock"></i></span>
                        </label>
                    </div>

                    <div class="section">
                        <label class="field prepend-icon">
                            <input type="password" name="password-2" id="password-2" class="gui-input" placeholder="Reingresar contraseña">
                            <span class="field-icon"><i class="fa fa-lock"></i></span>
                        </label>
                    </div>

                </div>
                <div class="form-footer">
    <!--					<button type="submit" class="button btn-blue btn-light-blue">Ingresar</button>-->
                    <div class="row">
					  	<div class="col-md-12">
                            <button class="button btn-blue btn-light-blue">Recuperar</button>
                        </div>
					</div>
					<div class="divider-10"></div>
					<div class="row">
					  	<div class="col-md-12">
					  		<a href="index.php" class="white-color">Iniciar Sesion</a>
					  	</div>
					</div>
                </div>
            </form>

        </div>
    </div>

<?php
    include('footer.php');
?>
