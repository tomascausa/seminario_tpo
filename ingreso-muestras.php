<?php
	include('header.php');
?>

	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<img src="assets/images/logo.png" class="logo" alt="Logo HeApp"/>
			</div>

			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav navbar-right">
					<li><a href="index.php" class="cerrar-sesion">Cerrar Sesion</a></li>
				</ul>
			</div><!-- /.navbar-collapse -->
		</div><!-- /.container-fluid -->
	</nav>

	<div class="smart-wrap">
		<div class="smart-forms ingreso-muestra smart-container wrap-2">

			<div class="form-header header-primary">
				<h4><i class="fa fa-flask"></i> Ingreso Muestra </h4>
			</div>

			<form method="post" action="/" id="smart-form">
				<div class="form-body">

					<div class="frm-row">
						<div class="section colm colm6">
							<label for="username" class="field-label">Protocolo</label>
							<label class="field prepend-icon">
								<input type="text" name="username" id="username" class="gui-input" placeholder="Protocolo">
								<span class="field-icon"><i class="fa fa-user"></i></span>
							</label>
						</div>

						<div class="section colm colm6">
							<label for="datepicker1" class="field-label">Fecha de Ingreso</label>
							<label for="datepicker1" class="field prepend-icon">
								<input type="text" id="datepicker1" name="datepicker1" class="gui-input" placeholder="Fecha de Ingreso">
								<span class="field-icon"><i class="fa fa-calendar"></i></span>
							</label>
						</div>
					</div>

					<div class="frm-row">
						<div class="section colm colm6">
							<label for="veterinaria" class="field-label">Veterinaria</label>
							<label class="field prepend-icon">
								<select id="veterinaria" data-cb-widget-placeholder="Veterinaria">
									<option value="">Choose City</option>
									<option class="east" value="AL">Alabama</option>
									<option class="north" value="AK">Alaska</option>
									<option class="west" value="AZ">Arizona</option>
									<option class="south" value="AR">Arkansas</option>
								</select>
								<span class="field-icon"><i class="fa fa-globe"></i></span>
							</label>
						</div><!-- end section -->


						<div class="section colm colm6">
							<label for="children" class="field-label">Pagado</label>
							<label for="children" class="field prepend-icon">
								<input type="text" id="children" name="children" class="gui-input" placeholder="Number of children">
								<span class="field-icon"><i class="fa fa-female"></i></span>
							</label>
						</div><!-- end section -->
					</div><!-- end .frm-row section -->

					<div class="frm-row">
						<div class="section colm colm6">
							<label for="propietario" class="field-label">Propietario</label>
							<label class="field prepend-icon">
								<input type="text" name="propietario" id="username" class="gui-input" placeholder="Propietario">
								<span class="field-icon"><i class="fa fa-user"></i></span>
							</label>
						</div>

						<div class="section colm colm6">
							<label for="paciente" class="field-label">Paciente</label>
							<label class="field prepend-icon">
								<input type="text" name="paciente" id="username" class="gui-input" placeholder="Paciente">
								<span class="field-icon"><i class="fa fa-user"></i></span>
							</label>
						</div>
					</div><!-- end .frm-row section -->

					<div class="frm-row">
						<div class="section colm colm6">
							<label for="medico" class="field-label">Medico Clínico</label>
							<label class="field prepend-icon">
								<input type="text" name="medico" id="username" class="gui-input" placeholder="Medico Clínico">
								<span class="field-icon"><i class="fa fa-user"></i></span>
							</label>
						</div>

						<div class="section colm colm6">
							<label for="estudio" class="field-label">Estudio Solicitado</label>
							<label class="field prepend-icon">
								<select id="estudio" data-cb-widget-placeholder="Estudio Solicitado">
									<option value="">Choose City</option>
									<option class="east" value="AL">Alabama</option>
									<option class="north" value="AK">Alaska</option>
									<option class="west" value="AZ">Arizona</option>
									<option class="south" value="AR">Arkansas</option>
								</select>
								<span class="field-icon"><i class="fa fa-globe"></i></span>
							</label>
						</div><!-- end section -->
					</div><!-- end .frm-row section -->

					<div class="frm-row">
						<div class="section colm colm6">
							<label for="raza" class="field-label">Raza</label>
							<label class="field prepend-icon">
								<select id="raza" data-cb-widget-placeholder="Raza">
									<option value="">Choose City</option>
									<option class="east" value="AL">Alabama</option>
									<option class="north" value="AK">Alaska</option>
									<option class="west" value="AZ">Arizona</option>
									<option class="south" value="AR">Arkansas</option>
								</select>
								<span class="field-icon"><i class="fa fa-globe"></i></span>
							</label>
						</div><!-- end section -->

						<div class="section colm colm6">
							<label for="especie" class="field-label">Especie</label>
							<label class="field prepend-icon">
								<select id="especie" data-cb-widget-placeholder="Especie">
									<option value="">Choose City</option>
									<option class="east" value="AL">Alabama</option>
									<option class="north" value="AK">Alaska</option>
									<option class="west" value="AZ">Arizona</option>
									<option class="south" value="AR">Arkansas</option>
								</select>
								<span class="field-icon"><i class="fa fa-globe"></i></span>
							</label>
						</div><!-- end section -->
					</div> <!-- end .frm-row section -->

					<div class="frm-row">
						<div class="section colm colm3">
							<label for="sexo" class="field-label">Sexo</label>
							<label class="field prepend-icon">
								<select id="sexo" data-cb-widget-placeholder="Sexo">
									<option value="">Choose City</option>
									<option class="east" value="AL">Alabama</option>
									<option class="north" value="AK">Alaska</option>
									<option class="west" value="AZ">Arizona</option>
									<option class="south" value="AR">Arkansas</option>
								</select>
								<span class="field-icon"><i class="fa fa-globe"></i></span>
							</label>
						</div><!-- end section -->

						<div class="section colm colm3">
							<label for="ec" class="field-label">E/C</label>
							<label class="field prepend-icon">
								<select id="ec" data-cb-widget-placeholder="E/C">
									<option value="">Choose City</option>
									<option class="east" value="AL">Alabama</option>
									<option class="north" value="AK">Alaska</option>
									<option class="west" value="AZ">Arizona</option>
									<option class="south" value="AR">Arkansas</option>
								</select>
								<span class="field-icon"><i class="fa fa-globe"></i></span>
							</label>
						</div><!-- end section -->

						<div class="section colm colm3">
							<label for="edad" class="field-label">Edad</label>
							<label class="field">
								<input type="text" name="edad" id="edad" value="20" class="gui-input">
							</label>
						</div><!-- end section -->

						<div class="section colm colm3">
							<label for="peso" class="field-label">Peso</label>
							<label class="field">
								<input type="text" name="peso" id="peso" value="3.6" class="gui-input">
							</label>
						</div><!-- end section -->

					</div> <!-- end .frm-row section -->



					<div class="frm-row">
						<div class="section colm colm12">
							<label for="observaciones" class="field-label">Observaciones</label>
							<label for="observaciones" class="field prepend-icon">
								<textarea class="gui-textarea" id="observaciones" name="observaciones" placeholder="observaciones"></textarea>
								<span class="field-icon"><i class="fa fa-comments"></i></span>
                            <span class="input-hint">
                            	<strong>Please:</strong> Be as descriptive as possible
                            </span>
							</label>
						</div>
					</div>




				</div><!-- end .form-body section -->
				<div class="form-footer">
					<button type="submit" class="button btn-primary"> Submit Form </button>
					<button type="reset" class="button"> Cancel </button>
				</div><!-- end .form-footer section -->
			</form>

		</div><!-- end .smart-forms section -->
	</div><!-- end .smart-wrap section -->

<?php
	include('footer.php');
?>