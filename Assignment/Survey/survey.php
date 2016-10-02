<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="/cs313/css/style.css">

    <title>CS 313 03.5</title>
</head>
<body>
	<div class="container">
<header id="title">
	<h1>PHP Survey</h1>
</header>
	</div>
	<div class="idrops-demos cl-1">
	<div class="container">
		<section>
<form action="surveyResults.php" method="post">
	<div class="box">
	  <label>Who is MORE qualified to run our country?</label>
	  	<br>
			  <p><input type="radio" name="election" value="Hillary Clinton"> Hillary Clinton aka <q>Hacking Hillary</q><br></p>
			  <p><input type="radio" name="election" value="Donald Trump"> Donald Trump aka <q>Build it HUGE</q><br></p>
			  <p><input type="radio" name="election" value="Me, cause who else is more qualified?"> Me <q>Pick me, pick me!</q><br></p>
			  <p><input type="radio" name="election" value="Jesus, the sooner the better."> Jesus <q> Don't make me come down there</q><br></p>
		<br>
	</div>
	<div class="box">
		<label>Which car would you drive?</label>
		  <br>
				<select name="car" required>
				  <option disabled selected value>  -- select an option --</option><br>
				  <option  value="Golf Cart aham! I mean Golf Car">Golf</option><br>
				  <option  value="Geo Metro">Geo Metro</option><br>
				  <option  value="Smart Fortwo">Smart Fortwo</option><br>
				  <option  value="Fiat 500">Fiat 500</option><br>
					<option  value="Mini Cooper">Mini Cooper</option><br>
				  <option  value="Chevrolet Spark">Chevrolet Spark</option>
		  	</select>
				<br>
		  <br>
	</div>
	<div class="box">
		<label>What chips do you like?</label>
	  	<br>
			  <p><input type="radio" name="chip" value="Quinoa chips"> Quinoa Chips<br></p>
			  <p><input type="radio" name="chip" value="Hummus chips"> Hummus Chips<br></p>
			  <p><input type="radio" name="chip" value="Bean Chips"> Bean Chips<br></p>
			  <p><input type="radio" name="chip" value="Corn chips"> Corn Chips<br></p>
				<p><input type="radio" name="chip" value="Potato chips"> Potato Chips<br></p>
			<br>
	</div>
	<div class="box">
		<label>Do you like movies?</label>
	  	<br>
	  <p><input type="radio" name="movies" value="Movies are basically my 2nd life!"> Yes, movies are my 2<sup>nd</sup> life<br></p>
	  <p><input type="radio" name="movies" value="I really enjoy reading the novelization of them"> I really enjoy reading the novelization of them<br></p>
	  <p><input type="radio" name="movies" value="I like critiquing them"> I like critiquing them<br></p>
	  <p><input type="radio" name="movies" value="No, I don't waste my time on that!"> No, I don't waste my time on that!<br></p>
	</div>
  <h1><span><input type="submit" value="submit survey"></span></h1>
</form>
		</section>
	</div> <!-- container -->
	</div>
</body>
</html>
