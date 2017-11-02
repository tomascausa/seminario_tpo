<!DOCTYPE html>
<html lang="en">
<head>
	<title> HEAPP </title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" type="text/css"  href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css"  href="assets/css/smart-forms.css">
	<link rel="stylesheet" type="text/css"  href="assets/css/smart-addons.css">
	<link rel="stylesheet" type="text/css"  href="assets/css/smart-themes/blue.css">
<!--	<link rel="stylesheet" type="text/css"  href="assets/css/font-awesome.min.css">-->
	<link rel="stylesheet" type="text/css"  href="assets/css/main.css">

    <script src="https://use.fontawesome.com/aa7909b889.js"></script>

	<script type="text/javascript" src="assets/js/jquery-1.9.1.min.js"></script>
	<script type="text/javascript" src="assets/js/jquery-ui-custom.min.js"></script>
	<script type="text/javascript" src="assets/js/jquery.maskedinput.js"></script>
	<script type="text/javascript" src="assets/js/jquery.validate.min.js"></script>
	<script type="text/javascript" src="assets/js/additional-methods.min.js"></script>
	<script type="text/javascript" src="assets/js/jquery-ui-timepicker.min.js"></script>
	<script type="text/javascript" src="assets/js/jquery-ui-monthpicker.min.js"></script>
	<script type="text/javascript" src="assets/js/jquery-ui-touch-punch.min.js"></script>
	<script type="text/javascript" src="assets/js/jquery.spectrum.min.js"></script>
	<script type="text/javascript" src="assets/js/jquery.stepper.min.js"></script>
	<script type="text/javascript" src="assets/js/jquery-ui-combo.min.js"></script>


	<!--[if lte IE 9]>
	<script type="text/javascript" src="assets/js/jquery.placeholder.min.js"></script>
	<![endif]-->

	<!--[if lte IE 8]>
	<link type="text/css" rel="stylesheet" href="assets/css/smart-forms-ie8.css">
	<![endif]-->


	<script type="text/javascript">

		jQuery(document).ready(function($){

			/* @fecha de ingreso
			 ------------------------------------------------------------------ */
			$("#fecha").datepicker({
				numberOfMonths: 1,
				prevText: '<i class="fa fa-chevron-left"></i>',
				nextText: '<i class="fa fa-chevron-right"></i>',
				showButtonPanel: false
			});


			/* @estudio solicitado
			 ------------------------------------------------------------------ */
			$("#estudioSolicitado").combobox();


			/* @raza
			 ------------------------------------------------------------------ */
			$("#raza").combobox();


			/* @especie
			 ------------------------------------------------------------------ */
			$("#especie").combobox();


			/* @sexo
			 ------------------------------------------------------------------ */
			$("#sexo").combobox();


			/* @ec
			 ------------------------------------------------------------------ */
			$("#e_c").combobox();


			/* @edad
			 ------------------------------------------------------------------ */
			$('#edad').stepper({
				UI: false,
				allowWheel :false
			});


			/* @peso
			 ------------------------------------------------------------------ */
			$('#peso').stepper({
				wheel_step: 0.1,
				arrow_step: 0.2
			});


			$( "#ingreso-muestra-form" ).validate({

				errorClass: "state-error",
				validClass: "state-success",
				errorElement: "em",
				rules: {
                    protocolo: {
						required: true
					},
                    fecha: {
						required: true,
						date: true
					},
                    idveterinaria: {
						required: true
					},
                    pagado: {
						required: true,
						number: true
					},
                    propietario:{
						required:true
					},
                    nombrePaciente:{
						required:true
					},
					medicoClinico:{
						required:true
					},
                    estudioSolicitado:{
                        required:true
                    },
                    raza:{
                        required:true
                    },
                    especie:{
                        required:true
                    },
                    sexo:{
                        required:true
                    },
                    e_c:{
                        required:true
                    },
                    edad:{
                        required:true
                    },
                    peso:{
                        required:true
                    }
				},
				messages:{
                    protocolo: {
						required: 'Ingrese un protocolo.'
					},
                    fecha: {
						required: 'Ingrese una fecha de ingreso.',
						date: 'Ingrese una fecha de ingreso válida.'
					},
					adults: {
						required: 'Enter the number of adult guests',
						number: 'Please enter a VALID number'
					},
                    pagado: {
						required: 'Campo requerido. Ingrese un monto.',
						number: 'Ingrese un número válido.'
					},
					idveterinaria: {
						required: 'Campo requerido. Ingrese una veterinaria.'
					},
                    propietario:{
						required: 'Ingrese un propietario.'
					},
                    nombrePaciente:{
						required:'Ingrese un paciente.'
					},
                    medicoClinico:{
						required:'Ingrese un medico clínico.'
					},
                    estudioSolicitado:{
                        required: 'Ingrese un estudio solicitado.'
                    },
                    raza:{
                        required:'Ingrese una raza.'
                    },
                    especie:{
                        required:'Please una especie.'
                    },
                    sexo:{
                        required:'Ingrese un sexo.'
                    },
                    e_c:{
                        required:'Please una E/C.'
                    },
                    edad:{
                        required:'Ingrese una edad.'
                    },
                    peso:{
                        required:'Ingrese un peso.'
                    }
				},
				highlight: function(element, errorClass, validClass) {
					$(element).closest('.field').addClass(errorClass).removeClass(validClass);
				},
				unhighlight: function(element, errorClass, validClass) {
					$(element).closest('.field').removeClass(errorClass).addClass(validClass);
				},
				errorPlacement: function(error, element) {
					if (element.is(":radio") || element.is(":checkbox")) {
						element.closest('.option-group').after(error);
					} else {
						error.insertAfter(element.parent());
					}
				}

			});

		});

	</script>

</head>

<body class="woodbg">
