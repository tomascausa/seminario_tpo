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



    <div class="container lista-muestras">

        <div id="login">
    		<div class="smart-forms login">
    			<div class="form-header header-primary Aligner">
    				<h4><i class="fa-list-alt Aligner-item"></i>Listado de Muestras</h4>
    			</div>
    		</div>
    	</div>

        <div class="divider-20"></div>

        <div class="row">
            <div class="col-md-12">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>F. de Ingreso</th>
                            <th>Veterinaria</th>
                            <th>Pagado</th>
                            <th>Propietario</th>
                            <th>Paciente</th>
                            <th>Medico Clínico</th>
                            <th>Estudio Solicitado</th>
                            <th>Raza</th>
                            <th>Especie</th>
                            <th>Sexo</th>
                            <th>E/C</th>
                            <th>Edad</th>
                            <th>Peso</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>10/10/10</td>
                            <td>Pepe</td>
                            <td>$10</td>
                            <td>Martin</td>
                            <td>Rocky</td>
                            <td>Lucas</td>
                            <td>Citologia</td>
                            <td>Schanuzer</td>
                            <td>Canino</td>
                            <td>Masculino</td>
                            <td>Entero</td>
                            <td>8</td>
                            <td>20.5</td>
                        </tr>
                        <tr>
                            <td>10/10/10</td>
                            <td>Pepe</td>
                            <td>$10</td>
                            <td>Martin</td>
                            <td>Rocky</td>
                            <td>Lucas</td>
                            <td>Citologia</td>
                            <td>Schanuzer</td>
                            <td>Canino</td>
                            <td>Masculino</td>
                            <td>Entero</td>
                            <td>8</td>
                            <td>20.5</td>
                        </tr>
                        <tr>
                            <td>10/10/10</td>
                            <td>Pepe</td>
                            <td>$10</td>
                            <td>Martin</td>
                            <td>Rocky</td>
                            <td>Lucas</td>
                            <td>Citologia</td>
                            <td>Schanuzer</td>
                            <td>Canino</td>
                            <td>Masculino</td>
                            <td>Entero</td>
                            <td>8</td>
                            <td>20.5</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
<?php
	include('footer.php');
?>
