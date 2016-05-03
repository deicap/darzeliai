<?php

	if (isset($_GET['template'])) {

		$filename = $_GET['template'].'.php';

	} else {

		$filename = 'default.php';

	}

	include ('templates/pages/'.$filename);

?>