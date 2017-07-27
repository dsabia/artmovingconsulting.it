<?php
// These lines are mandatory.
require_once 'Mobile_Detect.php';
$detect = new Mobile_Detect;

// Check for mobile environment.
if ($detect->isMobile()) {
	header( 'Location: https://artmovingconsulting.herokuapp.com/content.php' );
}

?>

<?php include 'content.php';?>
