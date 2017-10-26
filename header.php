<!DOCTYPE html>
<html lang="en">
<head>
	<title> Smart Forms - Calender + Date Picker </title>
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


			/* @veterinaria
			 ------------------------------------------------------------------ */
			$("#veterinaria").combobox();


			/* @estudio solicitado
			 ------------------------------------------------------------------ */
			$("#estudio").combobox();


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
			$("#ec").combobox();


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



			$( "#smart-form" ).validate({

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
                    veterinaria: {
						required: true
					},
                    pagado: {
						required: true,
						number: true
					},
                    propietario:{
						required:true
					},
                    paciente:{
						required:true
					},
					medico:{
						required:true
					},
                    estudio:{
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
                    ec:{
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
                    propietario:{
						required: 'Ingrese un propietario.'
					},
                    paciente:{
						required:'Ingrese un paciente.'
					},
                    medico:{
						required:'Ingrese un medico clínico.'
					},
                    estudio:{
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
                    ec:{
                        required:'Please una E/C.'
                    },
                    edad:{
                        required:'Please una edad.'
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