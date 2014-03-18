<?php

$parse_uri = explode( 'wp-content', $_SERVER['SCRIPT_FILENAME'] );
require( $parse_uri[0] . 'wp-load.php' );

$contactemail = get_option('ublflati');

$post = (!empty($_POST)) ? true : false;

if($post){
	
	function ValidateEmail($value){
	
		$regex = '/^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i';
	
		if($value == '') { 
			return false;
		} else {
			$string = preg_replace($regex, '', $value);
		}
	
		return empty($string) ? true : false;
	}
	
	$name = stripslashes($_POST['name']);
	$email = trim($_POST['email']);
	$subject = stripslashes($_POST['subject']);
	$message = stripslashes($_POST['message']);
	
	
	$error = '';
	
	// Check name
	if(!$name){$error .= __('Please enter your name.<br />','ublflati');}
	
	// Check email
	if(!$email){$error .= __('Please enter an e-mail address.<br />','ublflati');}
	
	if($email && !ValidateEmail($email)){$error .= __('Please enter a valid e-mail address.<br />','ublflati');}
	
	// Check message (length)
	
	if(!$message || strlen($message) < 10){$error .= __('Please enter your message. It should have at least 10 characters.<br />','ublflati');}
	
	if(isset($contactemail['contactemail'])){$contactemail = $contactemail['contactemail'];}
	
	if(!$error){
		$mail = mail($contactemail, $subject, $message,
			 "From: ".$name." <".$email.">\r\n"
			."Reply-To: ".$email."\r\n"
			."X-Mailer: PHP/" . phpversion());
	
	
		if($mail){
			
			echo 'OK';
		
		} else {
			
			echo '<div class="notification_error">'.__('There was a problem sending your email, please try again!','ublflati').'</div>';
			
		}
	
	} else {
		
		echo '<div class="notification_error">'.$error.'</div>';
	
	}

}