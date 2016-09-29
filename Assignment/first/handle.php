<!DOCTYPE html>
<html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CS survey</title>
</head>
<body>
    <h1>CS 313 Survey</h1>

    <div class="election"><strong>I would vote for:</strong> <?php echo $_POST['election']; ?>
    </div>
    <div class="car"><strong>I am leaning toward driving the:</strong> <?php echo $_POST['car']; ?>
    </div>
    <div class="chip"><strong>I could eat a whole bag of:</strong> <br> <?php
            $chip = $_POST['chip'];
            foreach ($chip as $chips) {
	            echo "$chips<br>"; // how can I put a comma or & sign inbetween each item?
            }
        ?>
    </div>
    <div class="movies">
        <strong>This is how I feel about movies:</strong> <?php echo $_POST['movies']; ?>
    </div>
</body>
</html>
