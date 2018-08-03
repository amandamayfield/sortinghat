<?php
require_once('model.php');
// 
if (isset($_GET['a'])) {
    $action = $_GET['a'];
} elseif (isset($_POST['a'])) { // Forms
    $action = $_POST['a'];
} else {
    $action = 'greathall';
}
// Determine what page to display:
switch ($action) {
    case 'greathall':
		require('views/header.html');
		require('controllers/greathall.php');
		require('views/footer.html');
        break;
	case 'slytherin':
		require('views/header.html');
		require('controllers/slytherin.php');
		require('views/footer.html');
		break;
	case 'ravenclaw':
		require('views/header.html');
		require('controllers/ravenclaw.php');
		require('views/footer.html');
      	break;
    case 'gryffindor':
		require('views/header.html');
		require('controllers/gryffindor.php');
		require('views/footer.html');
      	break;
    case 'hufflepuff':
		require('views/header.html');
		require('controllers/hufflepuff.php');
		require('views/footer.html');
      	break;
    // Default is to include the main page.
    default:
		require('views/header.html');
		require('views/error.html');
		require('views/footer.html');
        break;
} // End of main switch.

?>