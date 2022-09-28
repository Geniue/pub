<?php


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;



//Load Composer's autoloader
require __DIR__.'/../assets/libs/phpmailer/vendor/autoload.php';

//Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);
/**
 * Generate a random string, using a cryptographically secure 
 * pseudorandom number generator (random_int)
 *
 * This function uses type hints now (PHP 7+ only), but it was originally
 * written for PHP 5 as well.
 * 
 * For PHP 7, random_int is a PHP core function
 * For PHP 5.x, depends on https://github.com/paragonie/random_compat
 * 
 * @param int $length      How many characters do we want?
 * @param string $keyspace A string of all possible characters
 *                         to select from
 * @return string
 */
$connection = mysqli_connect("localhost","softipi_new-prestine-invoice" ,"51?7iy4>B","softipi_new-prestine-invoice");
try {

	//Server settings
	$mail->SMTPDebug = SMTP::DEBUG_OFF;                      //Enable verbose debug output
	$mail->isSMTP();                                            //Send using SMTP
	$mail->Host       = "smtp.gmail.com";                // email-smtp.us-east-1.amazonaws.com Set the SMTP server to send through
	$mail->SMTPAuth   = true;                                //Enable SMTP authentication
	$mail->Username   = 'mostagenius@gmail.com';              //SMTP username
	$mail->Password   = "tldeopfqnnjmocno";                          //BOBAAhYnUZNgvz5nKl9uinicVWgFrcKc3fD0/bmYEszG SMTP password
	$mail->SMTPSecure = "ssl";
	//$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;    //Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
	//$mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;         //Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
	$mail->Port       = 465;                                 //TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above stuart.emmons@gmail.com mostagenius@gmail.com

	//Recipients
	$mail->setFrom('stuart.emmons@gmail.com', 'pristinegreencleaning.com');
	$mail->addAddress('stuart.emmons@gmail.com', 'Sales - pristinegreencleaning.com');       //Add a recipient
	//		$mail->addAddress('zkrony001@gmail.com', 'Sales - pristinegreencleaning.com');     //Add a recipient

	//Attachments
	//$mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
	//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

	//$date = new \DateTime();
	//$created_at = $date->format('Y-m-d H:i:s');
	//$updated_at = $created_at;
	// $connection->query("INSERT INTO booking (type, email, created_at, updated_at) VALUES ('Call Back Request', '<h1>Callback request</h1><br/>
	//<b>Callback Number:</b> $phone
	// <br/>
	// <b>Need Service:</b> $service', '$created_at', '$updated_at')");
	$token = $_GET['token'];
	$result = $connection->query("SELECT * FROM stripe_payments WHERE uniqId='${token}'");
	$main = $result->fetch_array();
	
	//var_dump($connection);
	//return;
	
	//Content
	$mail->isHTML(true);                                  //Set email format to HTML
	$mail->Subject = 'Invoice from PristinGreen Cleaning';
	$mail->Body    = $main["content"];
	$mail->AltBody = "Callback request == Callback Number:,
		Need Service:";

	$mail->send();
	

} catch (Exception $e) {

	$mail_resp = '<div id="errormsg" style="color:green;padding:5px 0;">Request could not be sent.</div>';

}
mysqli_close($connection);
?>

