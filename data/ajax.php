<?php
	include $_SERVER['DOCUMENT_ROOT'].'/lib/wrapper.php';
	if (isset($_POST['action']) && $_POST['action'] == 'contact_form') {
		if($_POST['email'] == 'honeypot_trap') {
			$data['sent'] = false;
			$data['contact']['email'] = $_POST['c_email_1'];
			$data['contact']['user'] = $_POST['fname'].' '.$_POST['lname'];
			$data['contact']['subject'] = $_POST['subject'];
			$data['contact']['msg'] = preg_replace('/\v+|\\\r\\\n/','<br/>',$_POST['message']);
			if(
				strlen($data['contact']['email']) == 0 || 
				strlen($_POST['fname']) == 0 || 
				strlen($_POST['lname']) == 0 || 
				strlen($data['contact']['subject']) == 0
			) echo $data['contact']['empty_fields'];
			else {
				$patern = $data['email']['regex'];
				preg_match($patern,$_POST['c_email_1'],$matches);
				if(!empty($matches)) { // email is valid
					include $_SERVER['DOCUMENT_ROOT'].'/data/send_mail.php';
					echo $data['sent'];
				} else echo $data['contact']['invalid_email'];
			}
		}
	}
	die();
?>