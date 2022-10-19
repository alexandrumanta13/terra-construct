<?php

if(!$_POST) exit;

// Email verification, do not edit.
function isEmail($email_contact ) {
	return(preg_match("/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,})$/",$email_contact ));
}

if (!defined("PHP_EOL")) define("PHP_EOL", "\r\n");

$name_contact     = $_POST['name_contact'];
$phone_contact   = $_POST['phone_contact'];
$interest   = $_POST['interest'];


if(trim($name_contact) == '') {
	echo '<div class="error_message">Va rugam sa introduceti numele</div>';
	exit();
} else if(trim($phone_contact) == '') {
	echo '<div class="error_message">Numarul de telefon nu este valid</div>';
	exit();
} else if(!is_numeric($phone_contact)) {
	echo '<div class="error_message">Numarul de telefon trebuie sa contina numai cifre</div>';
	exit();
} else if($interest == -1) {
	echo '<div class="error_message">Va rugam sa alegeti un domeniu de interes</div>';
	exit();
} 
// else if(!isset($verify_contact) || trim($verify_contact) == '') {
// 	echo '<div class="error_message"> Please enter the verification number.</div>';
// 	exit();
// } else if(trim($verify_contact) != '4') {
// 	echo '<div class="error_message">The verification number you entered is incorrect.</div>';
// 	exit();
// }

if(get_magic_quotes_gpc()) {
	$message_contact = stripslashes($message_contact);
}


//$address = "HERE your email address";
$address = "office@terrageneralcontractor.ro";
$email_contact = "info@terrageneralcontractor.ro";

// Below the subject of the email
$e_subject = 'Ai fost contactat de catre ' . $name_contact . '.';

// You can change this if you feel that you need to.
$e_body = "Ai fost contactat de catre $name_contact $lastname_contact cu urmatoarele informatii." . PHP_EOL . PHP_EOL;
$e_content = "\"$interest\"" . PHP_EOL . PHP_EOL;
$e_reply = "Poti contacta pe $lastname_contact la telefon $phone_contact";

$msg = wordwrap( $e_body . $e_content . $e_reply, 70 );

$headers = "From: $email_contact" . PHP_EOL;
$headers .= "Reply-To: $email_contact" . PHP_EOL;
$headers .= "MIME-Version: 1.0" . PHP_EOL;
$headers .= "Content-type: text/plain; charset=utf-8" . PHP_EOL;
$headers .= "Content-Transfer-Encoding: quoted-printable" . PHP_EOL;

$user = "$email_contact";
$usersubject = "Multumim!";
$userheaders = "From: info@terrageneralcontractor.ro\n";
$usermessage = "Multumim ca ati contactat Terra General Contractor. Revenim cu raspuns in cel mai scurt timp!";
//mail($user,$usersubject,$usermessage,$userheaders);

if(mail($address, $e_subject, $msg, $headers)) {

	// Success message
	echo "<div id='success_page' style='padding:20px 20px 20px 0'>";
	echo "<strong >Email trimis.</strong>";
	echo "Multumim <strong>$name_contact</strong>,<br> mesajul tau a fost trimis. Te vom contacta in cel mai scurt timp.";
	echo "</div>";

} else {

	echo 'ERROR!';

}
