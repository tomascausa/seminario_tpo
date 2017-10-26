<?php
	include('header.php');
?>

	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<img src="assets/images/logo.png" class="logo" alt="Logo HeApp"/>
			</div>

			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav navbar-right">
					<li><a href="index.php" class="cerrar-sesion">Cerrar Sesion</a></li>
				</ul>
			</div>
		</div>
	</nav>

	<div class="smart-wrap">
		<div class="smart-forms ingreso-muestra smart-container wrap-2">

			<div class="form-header header-primary">
				<h4><i class="fa fa-flask"></i>Ingreso Muestra</h4>
			</div>

			<form method="post" action="/" id="smart-form">
				<div class="form-body">

					<div class="frm-row">
						<div class="section colm colm6">
							<label for="protocolo" class="field-label">Protocolo</label>
							<label class="field prepend-icon">
								<input type="text" name="protocolo" id="protocolo" class="gui-input" placeholder="Protocolo">
								<span class="field-icon"><i class="fa fa-file-text"></i></span>
							</label>
						</div>

						<div class="section colm colm6">
							<label for="fecha" class="field-label">Fecha de Ingreso</label>
							<label for="fecha" class="field prepend-icon">
								<input type="text" id="fecha" name="fecha" class="gui-input" placeholder="Fecha de Ingreso">
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
								<span class="field-icon"><i class="fa fa-paw"></i></i></span>
							</label>
						</div>


						<div class="section colm colm6">
							<label for="pagado" class="field-label">Pagado</label>
							<label for="pagado" class="field prepend-icon">
								<input type="text" id="pagado" name="pagado" class="gui-input" placeholder="Ingrese el monto">
								<span class="field-icon"><i class="fa fa-usd"></i></span>
							</label>
						</div>
					</div>

					<div class="frm-row">
						<div class="section colm colm6">
							<label for="propietario" class="field-label">Propietario</label>
							<label class="field prepend-icon">
								<input type="text" name="propietario" id="propietario" class="gui-input" placeholder="Propietario">
								<span class="field-icon"><i class="fa fa-user"></i></span>
							</label>
						</div>

						<div class="section colm colm6">
							<label for="paciente" class="field-label">Paciente</label>
							<label class="field prepend-icon">
								<input type="text" name="paciente" id="paciente" class="gui-input" placeholder="Paciente">
								<span class="field-icon"><i class="fa fa-user"></i></span>
							</label>
						</div>
					</div>

					<div class="frm-row">
						<div class="section colm colm6">
							<label for="medico" class="field-label">Medico Clínico</label>
							<label class="field prepend-icon">
								<input type="text" name="medico" id="medico" class="gui-input" placeholder="Medico Clínico">
								<span class="field-icon"><i class="fa fa-user-md"></i></span>
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
						</div>
					</div>

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
						</div>

						<div class="section colm colm6">
							<label for="especie" class="field-label">Especie</label>
							<label class="field prepend-icon">
								<select id="especie" data-cb-widget-placeholder="Especie">
									<option value="">Seleccione una especie</option>
									<option class="east" value="AL">Alabama</option>
									<option class="north" value="AK">Alaska</option>
									<option class="west" value="AZ">Arizona</option>
									<option class="south" value="AR">Arkansas</option>
								</select>
								<span class="field-icon"><i class="fa fa-globe"></i></span>
							</label>
						</div>
					</div>

					<div class="frm-row">
						<div class="section colm colm3">
							<label for="sexo" class="field-label">Sexo</label>
							<label class="field prepend-icon">
								<select id="sexo" data-cb-widget-placeholder="Sexo">
									<option value="">Seleccione un sexo</option>
									<option class="east" value="M">Masculino</option>
									<option class="north" value="F">Femenino</option>
								</select>
								<span class="field-icon"><i class="fa fa-venus-mars"></i></span>
							</label>
						</div>

						<div class="section colm colm3">
							<label for="ec" class="field-label">E/C</label>
							<label class="field prepend-icon">
								<select id="ec" data-cb-widget-placeholder="E/C">
									<option value="">Seleccione un E/C</option>
									<option class="east" value="AL">Alabama</option>
									<option class="north" value="AK">Alaska</option>
									<option class="west" value="AZ">Arizona</option>
									<option class="south" value="AR">Arkansas</option>
								</select>
								<span class="field-icon"><i class="fa fa-globe"></i></span>
							</label>
						</div>

						<div class="section colm colm3">
							<label for="edad" class="field-label">Edad</label>
							<label class="field">
								<input type="text" name="edad" id="edad" placeholder="20" class="gui-input">
							</label>
						</div>

						<div class="section colm colm3">
							<label for="peso" class="field-label">Peso</label>
							<label class="field">
								<input type="text" name="peso" id="peso" placeholder="3.6" class="gui-input">
							</label>
						</div>

					</div>

					<div class="frm-row">
						<div class="section colm colm12">
							<label for="observaciones" class="field-label">Observaciones</label>
							<label for="observaciones" class="field prepend-icon">
								<textarea class="gui-textarea" id="observaciones" name="observaciones" placeholder="Observaciones"></textarea>
								<span class="field-icon"><i class="fa fa-comments"></i></span>
							</label>
						</div>
					</div>

				</div>
				<div class="form-footer">
					<button type="submit" class="button btn-light-blue">Ingresar Muestra</button>
					<button type="reset" class="button">Cancelar</button>
				</div>
			</form>

		</div>
	</div>

<?php
	include('footer.php');
?>