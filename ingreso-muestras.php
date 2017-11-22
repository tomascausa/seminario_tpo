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

			<form method="post" action="/" id="ingreso-muestra-form">
				<div class="form-body">

					<div class="frm-row">
						<div class="section colm colm6">
							<label for="fecha" class="field-label">Fecha de Ingreso</label>
							<label for="fecha" class="field prepend-icon">
								<input type="text" id="fecha" name="fecha" class="gui-input" placeholder="Fecha de Ingreso">
								<span class="field-icon"><i class="fa fa-calendar"></i></span>
							</label>
						</div>

						<div class="section colm colm6">
							<!-- <label for="protocolo" class="field-label">Protocolo</label>
							<label class="field prepend-icon">
								<input type="text" name="protocolo" id="protocolo" class="gui-input" placeholder="Protocolo">
								<span class="field-icon"><i class="fa fa-file-text"></i></span>
							</label> -->
						</div>
					</div>

					<div class="frm-row">
						<div class="section colm colm6">
							<label for="idveterinaria" class="field-label">Veterinaria</label>
							<label for="idveterinaria" class="field prepend-icon">
								<input type="text" id="idveterinaria" name="idveterinaria" class="gui-input" placeholder="Ingrese una veterinaria">
								<span class="field-icon"><i class="fa fa-paw"></i></span>
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
							<label for="nombrePaciente" class="field-label">Paciente</label>
							<label class="field prepend-icon">
								<input type="text" name="nombrePaciente" id="nombrePaciente" class="gui-input" placeholder="Paciente">
								<span class="field-icon"><i class="fa fa-user"></i></span>
							</label>
						</div>
					</div>

					<div class="frm-row">
						<div class="section colm colm6">
							<label for="medicoClinico" class="field-label">Medico Clínico</label>
							<label class="field prepend-icon">
								<input type="text" name="medicoClinico" id="medicoClinico" class="gui-input" placeholder="Medico Clínico">
								<span class="field-icon"><i class="fa fa-user-md"></i></span>
							</label>
						</div>

						<div class="section colm colm6">
							<label for="estudioSolicitado" class="field-label">Estudio Solicitado</label>
							<label class="field select prepend-icon">
								<select id="estudioSolicitado" name="estudioSolicitado">
									<option disabled>Seleccione un estudio</option>
									<!-- <option>Select one...</option> -->
									<option>Citologia</option>
									<option>Calculo Urinario</option>
									<option>Toxo-Neo</option>
									<option>Orina</option>
								</select>
								<span class="field-icon"><i class="fa fa-globe"></i></span>
							</label>
						</div>
					</div>

					<div class="frm-row">
						<div class="section colm colm6">
							<label for="raza" class="field-label">Raza</label>
							<label class="field select prepend-icon">
								<select id="raza" name="raza" data-cb-widget-placeholder="Raza">
									<option disabled selected>Seleccione una raza</option>
									<option>Schnauzer</option>
									<option>Dogo Argentino</option>
									<option>Ovejero Alem·n</option>
									<option>Ovejero Belga</option>
									<option>Mestizo</option>
									<option>Mestizo</option>
									<option>Afgano</option>
									<option>Airedale Terrier</option>
									<option>Akita Inu</option>
									<option>Affenpinscher</option>
									<option>Alaskan Malamute</option>
									<option>American Pit Bull</option>
									<option>Barbet</option>
									<option>Basenji</option>
									<option>Basset Hound</option>
									<option>Basset GriffÛn Vendeano</option>
									<option>Basset Astesio Normando</option>
									<option>Beagle</option>
									<option>Bearded Collie</option>
									<option>Beauceron</option>
									<option>BichÛn Frise</option>
									<option>BichÛn BoloÒÈs</option>
									<option>BichÛn Habanero</option>
									<option>BichÛn MaltÈs</option>
									<option>Bloodhound</option>
									<option>Boxer</option>
									<option>Boerboel</option>
									<option>Border Collie</option>
									<option>Borzoi</option>
									<option>Boston Terrier</option>
									<option>Bobtail</option>
									<option>Boyero de Berna</option>
									<option>Boyero de Flandes</option>
									<option>Braco Alem·n</option>
									<option>Braco alem·n de pelo corto</option>
									<option>Braco alem·n de pelo duro</option>
									<option>Braco de Auvernia</option>
									<option>Braco de Saint-germain</option>
									<option>Braco de Weimar</option>
									<option>Braco FrancÈs Tipo gascuÒa</option>
									<option>Braco Wire Alem·n</option>
									<option>BretÛn</option>
									<option>Briquet GriffÛn</option>
									<option>Bulldog FrancÈs</option>
									<option>Bull Terrier</option>
									<option>Bulldog InglÈs</option>
									<option>Bullmastiff</option>
									<option>Caniche</option>
									<option>Caniche Toy</option>
									<option>Cairn Terrier</option>
									<option>Cao Da Serra Da Estrela</option>
									<option>Carlino</option>
									<option>Chesapeake Bay Reatriever</option>
									<option>Chihuahua</option>
									<option>Chino Crestado Enano</option>
									<option>Chow - chow</option>
									<option>CimarrÛn del Uruguay</option>
									<option>Clumber Spaniel</option>
									<option>Com˙n Europeo</option>
									<option>Collie</option>
									<option>Cocker</option>
									<option>Coonhound</option>
									<option>Corgi GalÈs Cardigan</option>
									<option>Corgi GalÈs Pembroke</option>
									<option>Coton de Tulear</option>
									<option>D·lmata</option>
									<option>Doberman</option>
									<option>Dogo de Burdeos</option>
									<option>Dogo del Tibet</option>
									<option>Dachshund</option>
									<option>EpaÒeul Azul de PicardÌa</option>
									<option>EpaÒeul Enano</option>
									<option>EpaÒeul FrancÈs</option>
									<option>EpaÒeul Picardo</option>
									<option>EpaÒeul Tibetano</option>
									<option>Eurasier</option>
									<option>Fox Terrier</option>
									<option>Fila BrasileÒo</option>
									<option>Foxhounds</option>
									<option>Golden Retriever</option>
									<option>Gran DanÈs</option>
									<option>Gran Azul de GascuÒa</option>
									<option>Galgo</option>
									<option>GrifÛn Azul de gascuÒa</option>
									<option>GrifÛn de Bruselas</option>
									<option>GrifÛn NivermÈs</option>
									<option>Harrier</option>
									<option>Hovawart</option>
									<option>Jack Russell Terrier</option>
									<option>Kuvasz</option>
									<option>Komodor</option>
									<option>Kromforlander</option>
									<option>Kurzhaar</option>
									<option>King Charles</option>
									<option>Labrador</option>
									<option>Labrel InglÈs</option>
									<option>Labrel IrlandÈs</option>
									<option>Labrel Persa</option>
									<option>Lebrel EscosÈs</option>
									<option>Lebrel InglÈs</option>
									<option>Leonberguer</option>
									<option>Lhassa</option>
									<option>MaltÈs</option>
									<option>MastÌn Napolitano</option>
									<option>MastÌn EspaÒol</option>
									<option>MastÌn de los Pirineos</option>
									<option>MontaÒa de los Pirineos</option>
									<option>Ovejero Alem·n Blanco</option>
									<option>Pastor Alem·n</option>
									<option>Pastor Australiano</option>
									<option>Pastor Belga</option>
									<option>Pastor Blanco Suizo</option>
									<option>Pastor Catal·n</option>
									<option>Pastor de Anatolia</option>
									<option>Pastor de Beauce</option>
									<option>Pastor de Brie</option>
									<option>Pastor de la Llanura</option>
									<option>Pastor de PicardÌa</option>
									<option>Pastor Maremmano-Abruces</option>
									<option>Pastor Vasco</option>
									<option>PequinÈs</option>
									<option>PequeÒo Basset</option>
									<option>PequeÒo Brabantino</option>
									<option>PequeÒo Labrel Italiano</option>
									<option>PequeÒo Perro LeÛn</option>
									<option>PequeÒo Azulde GascuÒa</option>
									<option>Persa</option>
									<option>Perdiguero de pelo liso</option>
									<option>Perdiguero de pelo rizado</option>
									<option>Pediguero dorado</option>
									<option>Perro de Agua IrlandÈs</option>
									<option>Perro de Aguas Espagnol</option>
									<option>Perro de Aguas PortuguÈs</option>
									<option>Perro de los Visigodos</option>
									<option>Perro de Nutrias</option>
									<option>Perro del Atlas</option>
									<option>Perro del FaraÛn</option>
									<option>Perro Lobo Checoeslovaco</option>
									<option>Pinscher</option>
									<option>Pinscher Enano</option>
									<option>Pit Bull</option>
									<option>Podenco</option>
									<option>Podenco Canario</option>
									<option>Podenco PortuguÈs</option>
									<option>Pointer</option>
									<option>Pointer InglÈs</option>
									<option>Pomerania</option>
									<option>Porcelana</option>
									<option>Presa Canario</option>
									<option>Pug</option>
									<option>Puli</option>
									<option>Pumi</option>
									<option>Rottweiler</option>
									<option>Rafeiro Do Alentejo</option>
									<option>Rhodesian</option>
									<option>Ridgeback Rodesiano</option>
									<option>Ratonero Bodequero Andaluz</option>
									<option>Sabueso EspaÒol</option>
									<option>Sabueso Italiano</option>
									<option>Samoyedo</option>
									<option>San Bernardo</option>
									<option>Schipperke</option>
									<option>Schnauzer Gigante</option>
									<option>Schnauzer Miniatura</option>
									<option>Schnauzer Standard</option>
									<option>Sealyham Terrier</option>
									<option>Setter</option>
									<option>Setter InglÈs</option>
									<option>Setter IrlandÈs</option>
									<option>Shar-Pei</option>
									<option>Shih-tzu</option>
									<option>Shiba Inu</option>
									<option>Shetland Sheepdog</option>
									<option>Siberian Husky</option>
									<option>Sloughi</option>
									<option>Spaniel Clumber</option>
									<option>Spaniel de Campo</option>
									<option>Spaniel de Sussex</option>
									<option>Spaniel JaponÈs</option>
									<option>Spaniel King Charles</option>
									<option>Spitz Enano</option>
									<option>Spitz JaponÈs</option>
									<option>Springer GalÈs</option>
									<option>Springer Spaniel InglÈs</option>
									<option>Staffordshire Terrier</option>
									<option>Terrier</option>
									<option>Terranova</option>
									<option>Terrier Azul de Kerry</option>
									<option>Terrier de Bedlington</option>
									<option>Terrier de Bohemia</option>
									<option>Terrier de Dandie Dinmont</option>
									<option>Terrier de Lakeland</option>
									<option>Terrier de Manchester</option>
									<option>Terrier de pelo sedoso</option>
									<option>Terrier de Sealyham</option>
									<option>Terrier de Skye</option>
									<option>Terrier EscocÈs</option>
									<option>Terrier Tibetano</option>
									<option>Terrier IrlandÈs</option>
									<option>Terrier Negro Ruso</option>
									<option>Viszla</option>
									<option>Volpino Italiano</option>
									<option>Weimaraner</option>
									<option>Welsh Terrier</option>
									<option>Whippet</option>
									<option>Xoloitzcuintle</option>
									<option>Viejo Pastor InglÈs</option>
									<option>Abisinio</option>
									<option>American Curl</option>
									<option>Americano Pelo Corto</option>
									<option>Angora Turco</option>
									<option>BalinÈs</option>
									<option>BengalÌ</option>
									<option>Bobtail JaponÈs</option>
									<option>Bombay</option>
									<option>Brit·nico</option>
									<option>BurmÈs</option>
									<option>Burnilla</option>
									<option>Cartujo</option>
									<option>Cornish rex</option>
									<option>Cymric</option>
									<option>Devon rex</option>
									<option>Egipcio</option>
									<option>Esfinge</option>
									<option>Europeo Pelo Corto</option>
									<option>ExÛtico Pelo Corto</option>
									<option>Fold de las tierras altas</option>
									<option>Habana Brown</option>
									<option>Himalayo</option>
									<option>Korat</option>
									<option>Maine Coon</option>
									<option>Manx</option>
									<option>Noruego del Bosque</option>
									<option>Ocicat</option>
									<option>Oriental Pelo Corto</option>
									<option>Pelo de punta americano</option>
									<option>Perdiguero de Burgos</option>
									<option>Ragdoll</option>
									<option>Rex Selkirk</option>
									<option>Ruso Azul</option>
									<option>Sagrado de Birmania</option>
									<option>Scottish Fold</option>
									<option>SiamÈs</option>
									<option>Siberiano</option>
									<option>Singapura - Kucinta</option>
									<option>SomalÌ</option>
									<option>TonquinÈs</option>
									<option>Van Turco</option>
									<option>BretÛn Epagneul</option>
									<option>Yorkshire</option>
									<option>Scottish terrier</option>
									<option>Chassa apso</option>
									<option>Setter Gordon</option>
									<option>Mastiff</option>
									<option>Pastor InglÈs</option>
									<option>Pastor del C·ucaso</option>
									<option>Teckel</option>
									<option>Dogo canario</option>
									<option>Perro de agua espaÒol</option>
									<option>SPC</option>
									<option>MastÌn InglÈs</option>
									<option>Boyero</option>
									<option>Labrador chocolate</option>
									<option>Griffon</option>
									<option>Canario</option>
									<option>Dogo canario</option>
									<option>American Bully</option>
									<option>American Stanford</option>
									<option>American Stanford</option>
									<option>Black Hound</option>
									<option>Cavallier</option>
									<option>Greyland</option>
									<option>Pastor dorado</option>
									<option>West Highland White Terrier</option>
									<option>Pit Bull Terrier</option>
									<option>Yorkshire Terrier</option>
									<option>Cocker Spaniel</option>
									<option>Cocker Spaniel Americano</option>
									<option>Ca De Bou</option>
									<option>Collie pelo corto</option>
									<option>Terrier Australiano</option>
									<option>Springer</option>
									<option>Cane Corso</option>
									<option>Habanero</option>
									<option>Pila</option>
									<option>MastÌn InglÈs</option>
									<option>American bully</option>
									<option>American Stanford</option>
								</select>
								<span class="field-icon"><i class="fa fa-globe"></i></span>
							</label>
						</div>

						<div class="section colm colm6">
							<label for="especie" class="field-label">Especie</label>
							<label class="field prepend-icon">
								<select id="especie" name="especie" data-cb-widget-placeholder="Especie">
									<option disabled selected>Seleccione una especie</option>
									<option>Canino</option>
									<option>Felino</option>
									<option>Equino</option>
									<option>Ave</option>
								</select>
								<span class="field-icon"><i class="fa fa-globe"></i></span>
							</label>
						</div>
					</div>

					<div class="frm-row">
						<div class="section colm colm3">
							<label for="sexo" class="field-label">Sexo</label>
							<label class="field prepend-icon">
								<select id="sexo" name="sexo" data-cb-widget-placeholder="Sexo">
									<option disabled selected>Seleccione un sexo</option>
									<option value="M">Masculino</option>
									<option value="F">Femenino</option>
								</select>
								<span class="field-icon"><i class="fa fa-venus-mars"></i></span>
							</label>
						</div>

						<div class="section colm colm3">
							<label for="e_c" class="field-label">E/C</label>
							<label class="field prepend-icon">
								<select id="e_c" name="e_c" data-cb-widget-placeholder="E/C">
									<option disabled selected>Seleccione un E/C</option>
									<option value="e">Entero</option>
									<option value="c">Castrado</option>
								</select>
								<span class="field-icon"><i class="fa fa-globe"></i></span>
							</label>
						</div>

						<div class="section colm colm3">
							<label for="edad" class="field-label">Edad</label>
							<label class="field">
								<input type="number" name="edad" id="edad" placeholder="0" class="gui-input">
							</label>
						</div>

						<div class="section colm colm3">
							<label for="peso" class="field-label">Peso</label>
							<label class="field">
								<input type="number" name="peso" id="peso" placeholder="0.0" class="gui-input">
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
