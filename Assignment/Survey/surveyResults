<?php if (!isset($_SESSION)) session_start() ?>
<?php require_once('process-form.php') ?>
<?php require_once('survey-write-file.php') ?>
<!DOCTYPE html>
<html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" type="text/css" href="/cs313/css/style.css">
	<title>CS survey</title>
</head>
<body>
	<header class="container">
		<h1>CS 313 Survey</h1>
	</header>
<div class="idrops-demos cl-1">
	<div class="container">
		<section>
			<div>
				<h2>I could eat a whole bag of:</h2>
					<?php echo get_form_request('chip') ?>

			</div>
			<div>
			<h2>This is how I feel about movies:</h2>
				<?php echo get_form_request('movies') ?>
			</div>
			<div><h2>I would vote for:</h2>
				<?php echo get_form_request('election') ?>... and yes, I have thought this through thank you very much.
			</div>
			<div><h2>I am leaning toward driving the:</h2>
				<?php echo get_form_request('car') ?>
			</div>
				<a href="http://johnsonartistry.com/cs313/index.php" title="Home">Home</a>
		</section>
	</div>
</div>
</body>
</html>
