
<?php

// Header
include 'modules/header.php';

// Pages
if (empty($_GET['page'])) {
	include('pages/home.php');
} else if ($_GET['page'] == "galerie") {
	include('pages/galerie.php');
} else if ($_GET['page'] == "contact") {
	include('pages/contact.php');
} else {
	http_response_code(404);
	die();
}

// Footer
include 'modules/footer.php';

?>