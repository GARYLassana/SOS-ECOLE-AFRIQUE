
<?php

// Header
include 'modules/header.php';

// Pages
if (empty($_GET['page'])) {
	include('pages/home.php');
} else if ($_GET['page'] == "parrainage") {
	include('pages/parrainage.php');
} else if ($_GET['page'] == "mission-terrain") {
	include('pages/mission-terrain.php');
} else if ($_GET['page'] == "galerie") {
	include('pages/galerie.php');
} else if ($_GET['page'] == "contact") {
	include('pages/contact.php');
} else if ($_GET['page'] == "rgpd") {
	include('pages/rgpd.php');
} else {
	http_response_code(404);
	die();
}

// Footer
include 'modules/footer.php';

?>