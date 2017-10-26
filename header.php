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
	<link rel="stylesheet" type="text/css"  href="assets/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css"  href="assets/css/main.css">

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
			$("#datepicker1").datepicker({
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
					guestname: {
						required: true
					},
					guestemail: {
						required: true,
						email: true
					},
					adults: {
						required: true,
						number: true
					},
					children: {
						required: true,
						number: true
					},
					checkin:{
						required:true
					},
					checkout:{
						required:true
					},
					comment:{
						required:true
					}
				},
				messages:{
					guestname: {
						required: 'Enter your name'
					},
					guestemail: {
						required: 'Enter your email address',
						email: 'Enter a VALID email address'
					},
					adults: {
						required: 'Enter the number of adult guests',
						number: 'Please enter a VALID number'
					},
					children: {
						required: 'Confirm the number of child guests',
						number: 'Please enter a VALID number'
					},
					checkin:{
						required: 'Please select checkin date'
					},
					checkout:{
						required:'Please select checkout date'
					},
					comment:{
						required:'Please enter your comments'
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