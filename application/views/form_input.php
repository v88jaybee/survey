<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>CodeIgniter Survey Form</title>
	<link rel="stylesheet" style ="text/css" href="<?= base_url('assets/css/survey.css') ?>">
</head>
<body>


	<form action="<?= base_url('surveys/process_form') ?>" method="post" class="input_data_form">
<?php 
		if(function_exists('validation_errors') && validation_errors() != '')
		{	?>
		 <p class="errors"> <?=  validation_errors() ?> </p>
<?php	
		}	?>

		<div>
			<label for="">Your Name : </label>
			<input type="text" name="name">
		</div>

		<div>
			<label for="">Dojo Location : </label>
			<select name="location">
				<option>Mountain View</option>
				<option>Seatle WA</option>
				<option>Sea Side CA</option>
			</select>
		</div>

		<div>
			<label for="">Favorite Language : </label>
			<select name="language">
				<option>Html</option>
				<option>PHP</option>
				<option>Javascript</option>
				<option>Ruby on Rails</option>
				<option>Node JS</option>
			</select>
		</div>

		<div>
			<label for="comment">Comment (Optional) : </label>
			<textarea name="comment"></textarea>
		</div>

		<input type="submit">

	</form>
</body>
</html>