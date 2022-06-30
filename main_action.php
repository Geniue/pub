<?php

//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
$connection = mysqli_connect("localhost","pg_auto_dv_live" ,"U9rec6*3","pg_auto_dv_live");
if( isset( $_POST['request-callback'] ) && isset( $_POST['your-number'] ) && !empty( $_POST['your-number'] ) ){

	//Load Composer's autoloader
	require __DIR__.'/assets/libs/phpmailer/vendor/autoload.php';

	//Instantiation and passing `true` enables exceptions
	$mail = new PHPMailer(true);

	try {

		//Server settings
    $mail->SMTPDebug = SMTP::DEBUG_OFF;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = "email-smtp.us-east-1.amazonaws.com";                //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                //Enable SMTP authentication
    $mail->Username   = 'AKIA4UG65YUSSDD4O75Y';              //SMTP username
    $mail->Password   = "BOBAAhYnUZNgvz5nKl9uinicVWgFrcKc3fD0/bmYEszG";                          //SMTP password
    $mail->SMTPSecure = "ssl";
    //$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;    //Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    //$mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;         //Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 465;                                 //TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

    //Recipients
    $mail->setFrom('noreply@stueysgreenautoclean.com', 'stueysgreenautoclean.com');
    $mail->addAddress('sales@stueysgreenautoclean.com', "Sales - Stuey's Green Auto Clean");     //Add a recipient
    //$mail->addAddress('zkrony001@gmail.com', 'Sales - pgautodetailing.com');     //Add a recipient

		$time = date("Y-m-d H:i:s");
		$phone = $_POST['your-number'];
		$service = isset($_POST['need-service'])?$_POST['need-service']:'';

		//Content
		$mail->isHTML(true);                                  //Set email format to HTML
		$mail->Subject = "Call Back Request - Stuey's Green Auto Clean";
		$mail->Body    = "<h1>Callback request</h1><br/>
		<b>Callback Number:</b> $phone
		<br/>
		<b>Need Service:</b> $service";

		$mail->AltBody = "Callback request == Callback Number: $phone,
		Need Service: $service";

    $mail->send();
		$mail_resp = '<div id="successmsg" style="color:green;padding:5px 0;">Request has been sent successfully</div>';

	} catch (Exception $e) {

		$mail_resp = '<div id="errormsg" style="color:green;padding:5px 0;">Request could not be sent.</div>';

	}

}


//Homepage action

if( isset( $_POST['request-submit'] ) && isset( $_POST['your-number'] ) && !empty( $_POST['your-number'] ) ){

	//Load Composer's autoloader
	require './assets/libs/phpmailer/vendor/autoload.php';

	//Instantiation and passing `true` enables exceptions
	$mail = new PHPMailer(true);

	try {
		//Server settings
		$mail->SMTPDebug = SMTP::DEBUG_OFF;                      //Enable verbose debug output
		$mail->isSMTP();                                         //Send using SMTP
		$mail->Host       = "email-smtp.us-east-1.amazonaws.com";                //Set the SMTP server to send through
		$mail->SMTPAuth   = true;                                //Enable SMTP authentication
		$mail->Username   = 'AKIA4UG65YUSSDD4O75Y';              //SMTP username
		$mail->Password   = "BOBAAhYnUZNgvz5nKl9uinicVWgFrcKc3fD0/bmYEszG";                          //SMTP password
		$mail->SMTPSecure = "ssl";
		//$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;    //Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
		//$mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;         //Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
		$mail->Port       = 465;                                 //TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

		//Recipients
		$mail->setFrom('noreply@stueysgreenautoclean.com', 'stueysgreenautoclean.com');
		$mail->addAddress('sales@stueysgreenautoclean.com', "Sales - Stuey's Green Auto Clean");     //Add a recipient
		//$mail->addAddress('zkrony001@gmail.com', 'Sales - pgautodetailing.com');     //Add a recipient


		//Attachments
		//$mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
		//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

		$time = date("Y-m-d H:i:s");
		$phone = $_POST['your-number'];
		//Content
		$mail->isHTML(true);                                    //Set email format to HTML
		$mail->Subject = 'Call Back Request';
		$mail->Body    = "<h1>Callback request</h1><b>Callback Number:</b> $phone";

		$mail->AltBody = "Callback Number: $phone";

		$mail->send();

		$mail_resp = '<div style="color:green; padding:16px;">Request has been sent successfully</div>';

	} catch (Exception $e) {

		$mail_resp = '<div id="errormsg" style="color:green">Request could not be sent.</div>';

	}

}



//Get coupon

if( isset( $_POST['get_coupon'] ) && isset( $_POST['your-email'] ) && !empty( $_POST['your-email'] ) && filter_var( @strtolower(trim($_POST['your-email'])), FILTER_VALIDATE_EMAIL ) ){

	//Load Composer's autoloader
	require __DIR__.'/assets/libs/phpmailer/vendor/autoload.php';

	//Instantiation and passing `true` enables exceptions
	$mail = new PHPMailer(true);

	$your_email = @strtolower(trim($_POST['your-email']));
	$your_phone = @strtolower(trim($_POST['your-phone']));
	$your_item = @strtolower(trim($_POST['your-item']));
	
	
	try {

		//Server settings
		$mail->SMTPDebug = SMTP::DEBUG_OFF;                      //Enable verbose debug output
		$mail->isSMTP();                                         //Send using SMTP
		$mail->Host       = "email-smtp.us-east-1.amazonaws.com";                //Set the SMTP server to send through
		$mail->SMTPAuth   = true;                                //Enable SMTP authentication
		$mail->Username   = 'AKIA4UG65YUSSDD4O75Y';              //SMTP username
		$mail->Password   = "BOBAAhYnUZNgvz5nKl9uinicVWgFrcKc3fD0/bmYEszG";                          //SMTP password
		$mail->SMTPSecure = "ssl";
		//$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;    //Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
		//$mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;         //Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
		$mail->Port       = 465;                                 //TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

		//Recipients
		$mail->setFrom('noreply@stueysgreenautoclean.com', 'stueysgreenautoclean.com');
		$mail->addAddress('sales@stueysgreenautoclean.com', 'Sales - stueysgreenautoclean.com');     //Add a recipient
		//$mail->addAddress('zkrony001@gmail.com', 'Sales - pgautodetailing.com');     //Add a recipient

		//Attachments
		//$mail->addAttachment('/var/tmp/file.tar.gz');          //Add attachments
		//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');     //Optional name

		$time = date("Y-m-d H:i:s");
		$coupon_code = "PGC10PFC";
		$service = isset($_POST['need-service'])?$_POST['need-service']:'';

		//Content
		$mail->isHTML(true);                                  //Set email format to HTML
		$mail->Subject = "Coupon - Stuey's Green Auto Clean";
		$mail->Body    = "<h1>Coupon Code</h1><br/>
		<b>Coupon code:</b> $coupon_code <br/>
		<b>Email:</b> $your_email <br/>
		<b>Phone:</b> $your_phone <br/>
		<b>Item need to be cleaned:</b> 	$your_item
		<br/>";

		$mail->AltBody = "Coupon - Stuey's Green Auto Clean
		Coupon code: $coupon_code";

		$mail->send();

		$coupon_resp = '<div id="successmsg" style="color:green;padding:12px;">Coupon code sent successfully</div>';

		if(isset($_POST['ajaxRequest'])){
			echo "ok"; exit;
		}

	} catch (Exception $e) {

		if(isset($_POST['ajaxRequest'])){
			echo "error"; exit;
		}

		$coupon_resp = '<div id="errormsg" style="color:green;padding:12px;">Coupon code could not be sent.</div>';

	}

}


//Contact us

if( isset( $_POST['contact-us'] ) && isset( $_POST['your-phone'] ) && !empty( $_POST['your-phone'] ) && isset( $_POST['your-message'] ) && !empty( $_POST['your-message'] ) ){

$your_phone = trim($_POST['your-phone']);
$your_message = trim($_POST['your-message']);

$your_name = isset($_POST['your-name']) ? trim($_POST['your-name']) : '';
$your_email = isset($_POST['your-email']) ? trim($_POST['your-email']) : '';


$message_subject = "Contact Message - Stuey's Green Auto Clean";

$message_body = "<h1>Contact US</h1>
<br>
<table style='border:none; width:100%;'>
	<tr>
		<td style='border:none;width:80%;'>
      <table style='border:none; width:100%;'>
        <tr>
          <td style='border:none;width:auto;font-weight:bold;'><b>NAME</b></td>
          <td style='border:none;width:auto;'>:</td>
          <td style='border:none;width:auto;'>{$your_name}</td>
        </tr>
        <tr>
          <td style='border:none;width:auto;font-weight:bold;'><b>PHONE</b></td>
          <td style='border:none;width:auto;'>:</td>
          <td style='border:none;width:auto;'>{$your_phone}</td>
        </tr>
        <tr>
          <td style='border:none;width:auto;font-weight:bold;'><b>E-MAIL</b></td>
          <td style='border:none;width:auto;'>:</td>
          <td style='border:none;width:auto;'>{$your_email}</td>
        </tr>
        <tr>
          <td style='border:none;width:auto;font-weight:bold;'><b>MESSAGE</b></td>
          <td style='border:none;width:auto;'>:</td>
          <td style='border:none;width:auto;'>{$your_message}</td>
        </tr>
      </table>
		</td>
	</tr>
</table>
";

//Load Composer's autoloader
require '../assets/libs/phpmailer/vendor/autoload.php';

//Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

try {

    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_OFF;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = "email-smtp.us-east-1.amazonaws.com";                //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                //Enable SMTP authentication
    $mail->Username   = 'AKIA4UG65YUSSDD4O75Y';              //SMTP username
    $mail->Password   = "BOBAAhYnUZNgvz5nKl9uinicVWgFrcKc3fD0/bmYEszG";                          //SMTP password
    $mail->SMTPSecure = "ssl";
    //$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;    //Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    //$mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;         //Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
	  $mail->Port       = 465;                                 //TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

    //Recipients
    $mail->setFrom('noreply@stueysgreenautoclean.com', 'stueysgreenautoclean.com');
    $mail->addAddress('sales@stueysgreenautoclean.com', "Sales - Stuey's Green Auto Clean");     //Add a recipient
    //$mail->addAddress('zkrony001@gmail.com', 'Sales - pgautodetailing.com');     //Add a recipient

      //Attachments
      //$mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
      //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name


      $mail->isHTML(true);                                  //Set email format to HTML
      $mail->Subject = $message_subject;
      $mail->Body    = $message_body;
      $mail->AltBody = strip_tags( str_replace( '<br>', ',', $message_body ) );

      $mail->send();

      $message_resp = '<div class="thumbnail text-success text-left">Message has been sent</div>';

} catch (Exception $e) {

    $message_resp = '<div class="thumbnail text-warning text-left">Message could not be sent. Mailer Error: ' . $mail->ErrorInfo;

}

}


// Free Quote

if( isset( $_POST['get-quote'] ) && isset( $_POST['your-phone'] ) && !empty( $_POST['your-phone'] ) && isset( $_POST['your-email'] ) && !empty( $_POST['your-email'] ) ){
//exit();
$your_phone = trim($_POST['your-phone']);

$your_name = isset($_POST['your-name']) ? trim($_POST['your-name']) : '';
$your_email = isset($_POST['your-email']) ? trim($_POST['your-email']) : '';


$message_subject = "Quote Message - Stuey's Green Auto Clean";

$message_body = "<h1>Get a free Quote request</h1>
<br>
<table style='border:none; width:100%;'>
	<tr>
		<td style='border:none;width:80%;'>
		
		
<table style='border:none; width:100%;'>
	<tr>
		<td style='border:none;width:auto;font-weight:bold;'><b>NAME</b></td>
		<td style='border:none;width:auto;'>:</td>
		<td style='border:none;width:auto;'>{$your_name}</td>
	</tr>
	<tr>
		<td style='border:none;width:auto;font-weight:bold;'><b>PHONE</b></td>
		<td style='border:none;width:auto;'>:</td>
		<td style='border:none;width:auto;'>{$your_phone}</td>
	</tr>
	<tr>
		<td style='border:none;width:auto;font-weight:bold;'><b>E-MAIL</b></td>
		<td style='border:none;width:auto;'>:</td>
		<td style='border:none;width:auto;'>{$your_email}</td>
	</tr>
</table>


		</td>
	</tr>
</table>
";

//Load Composer's autoloader
require '../assets/libs/phpmailer/vendor/autoload.php';

//Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_OFF;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = "email-smtp.us-east-1.amazonaws.com";                //Set the SMTP server to send through
	$mail->SMTPAuth   = true;                                //Enable SMTP authentication
	$mail->Username   = 'AKIA4UG65YUSSDD4O75Y';              //SMTP username
	$mail->Password   = "BOBAAhYnUZNgvz5nKl9uinicVWgFrcKc3fD0/bmYEszG";                          //SMTP password
	$mail->SMTPSecure = "ssl";
	//$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;    //Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
	//$mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;         //Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
	$mail->Port       = 465;                                 //TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

	//Recipients
	$mail->setFrom('noreply@stueysgreenautoclean.com', 'stueysgreenautoclean.com');
	$mail->addAddress('sales@stueysgreenautoclean.com', "Sales - Stuey's Green Auto Clean");     //Add a recipient
	//$mail->addAddress('zkrony001@gmail.com', 'Sales - pgautodetailing.com');     //Add a recipient

    //Attachments
    //$mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name


    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = $message_subject;
    $mail->Body    = $message_body;
    $mail->AltBody = strip_tags( str_replace( '<br>', ',', $message_body ) );

    $mail->send();

    $message_resp = '<div class="thumbnail text-success text-left">Message has been sent</div>';

} catch (Exception $e) {

    $message_resp = '<div class="thumbnail text-warning text-left">Message could not be sent. Mailer Error: ' . $mail->ErrorInfo;

}

}


?>
