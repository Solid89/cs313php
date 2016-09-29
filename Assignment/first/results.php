<?php

session_start([
	// If we know we don't need to change anything in the
	// session, we can just read and close rightaway to avoid
	// locking the session file and blocking other pages. 2 lines below are limiters.
	'cookie_lifetime' => 864000,
	'read_and_close' => true,
]);
?>
<!DOCTYPE html>
<html>
<body>

<?php
// Echo session variables that were set on previous page
echo "I would vote for" . $_SESSION["election"] . ".<br>";
echo "I'm leaning toward driving the " . $_SESSION["car"] . ".<br>";
echo "I like to eat ". $_SESSION["chip"] . ".<br>";
echo "My personal thoughts on movies: ". $_SESSION["movies"] ".<br>;"
?>

</body>
</html>
<?php
	session_s
