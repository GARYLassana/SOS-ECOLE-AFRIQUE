
<?php

// Header
include 'modules/header.php';

// Pages
if (empty($_GET['page'])) {
	include('pages/home.php');
} else if ($_GET['page'] == "conciergieMajeustueuse") {
	include('pages/conciergieMajeustueuse.php');
} else if ($_GET['page'] == "services") {
	include('pages/services.php');
} else if ($_GET['page'] == "devenirPartenaire") {
	include('pages/devenirPartenaire.php');
} else if ($_GET['page'] == "contact") {
	include('pages/contact.php');
} else {
	http_response_code(404);
	die();
}

// Footer
include 'modules/footer.php';

?>
