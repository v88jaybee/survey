<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>CodeIgniter Survey Form</title>
	<link rel="stylesheet" style ="text/css" href="assets/css/survey.css">
</head>
<body>

	<p class="top_text">Thanks for submitting this form! You have submitted this form <span class="counter"><?= $this->session->userdata('count') ?></span> times now.</p>

	<div id="result_box">
		<h3>Submitted Information</h3>

		<label>Name: </label>
		<p><?= $data['name'] ?></p>

		<label>Dojo Location: </label>
		<p><?= $data['location'] ?></p>

		<label>Favorite Language: </label>
		<p><?= $data['language'] ?></p>

		<label>Comment:</label>
		<p><?= $data['comment'] ?></p>

		<a href="<?= base_url('surveys') ?>">Go back</a>

	</div>

</body>
</html>