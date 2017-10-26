<?php
	include('header.php');
?>

	<div id="login" class="smart-wrap">

		<div class="smart-forms login smart-container wrap-3">

			<div class="form-header header-primary Aligner">
				<h4><i class="fa fa-sign-in Aligner-item"></i>Inicio Sesion</h4>
				<img src="assets/images/logo.png" class="Aligner-item logo" alt="Logo HeApp"/>
			</div>

			<form method="post" action="/" id="contact">
				<div class="form-body">

					<div class="section">
						<label class="field prepend-icon">
							<input type="text" name="username" id="username" class="gui-input" placeholder="Email">
							<span class="field-icon"><i class="fa fa-user"></i></span>
						</label>
					</div>

					<div class="section">
						<label class="field prepend-icon">
							<input type="text" name="password" id="password" class="gui-input" placeholder="Contraseña">
							<span class="field-icon"><i class="fa fa-lock"></i></span>
						</label>
					</div>

				</div>
				<div class="form-footer">
<!--					<button type="submit" class="button btn-blue btn-light-blue">Ingresar</button>-->
					<a href="ingreso-muestras.php" class="button btn-blue btn-light-blue">Ingresar</a>
				</div>
			</form>

		</div>
	</div>

<?php
	include('footer.php');
?>

