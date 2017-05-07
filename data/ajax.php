<?php
	include '../lib/wrapper.php';
	if (isset($_POST['action']) && $_POST['action'] == 'contact_form') {
		echo json_encode('ajax');
	}
	die();
?>