<?php

if(!$_POST) exit;

// Email verification, do not edit.
function isEmail($email_contact ) {
	return(preg_match("/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,})$/",$email_contact ));
}

if (!defined("PHP_EOL")) define("PHP_EOL", "\r\n");

$name_contact     = $_POST['name_contact'];
$lastname_contact    = $_POST['lastname_contact'];
$email_contact    = $_POST['email_contact'];
$phone_contact   = $_POST['phone_contact'];
$message_contact = $_POST['message_contact'];
$verify_contact   = $_POST['verify_contact'];

if(trim($name_contact) == '') {
	echo '<div class="error_message">Va rugam sa introduceti numele</div>';
	exit();
} else if(trim($lastname_contact ) == '') {
	echo '<div class="error_message">Va rugam sa introduceti prenumele</div>';
	exit();
} else if(trim($email_contact) == '') {
	echo '<div class="error_message">Adresa de email nu este valida</div>';
	exit();
} else if(!isEmail($email_contact)) {
	echo '<div class="error_message">Adresa de email nu este valida, va rugam sa incercati din nou</div>';
	exit();
	} else if(trim($phone_contact) == '') {
	echo '<div class="error_message">Numarul de telefon nu este valid</div>';
	exit();
} else if(!is_numeric($phone_contact)) {
	echo '<div class="error_message">Numarul de telefon trebuie sa contina numai cifre</div>';
	exit();
} else if(trim($message_contact) == '') {
	echo '<div class="error_message">Va rugam sa introduceti mesajul dvs</div>';
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


// Below the subject of the email
$e_subject = 'Ai fost contactat de catre ' . $name_contact . '.';

// You can change this if you feel that you need to.
$e_body = "Ai fost contactat de catre $name_contact $lastname_contact cu urmatoarele informatii." . PHP_EOL . PHP_EOL;
$e_content = "\"$message_contact\"" . PHP_EOL . PHP_EOL;
$e_reply = "Poti contacta pe $lastname_contact prin email, $email_contact sau telefon $phone_contact";

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
mail($user,$usersubject,$usermessage,$userheaders);

if(mail($address, $e_subject, $msg, $headers)) {

	// Success message
	echo "<div id='success_page' style='padding:20px 20px 20px 0'>";
	echo "<strong >Email trimis.</strong>";
	echo "Multumim <strong>$name_contact</strong>,<br> mesajul tau a fost trimis. Te vom contacta in cel mai scurt timp.";
	echo "</div>";

} else {

	echo 'ERROR!';

}
