<?php


	if ($_SERVER['REQUEST_METHOD'] != "POST") {
		header("Location: /payment");
		die();
	}



	if (!preg_match("/^-?[0-9]+(?:\.[0-9]{1,2})?$/", $_POST['amount'])) {
		header("Location: /payment");
		die();
	}

	$date = new \DateTime();
	$created_at = $date->format('Y-m-d H:i:s');
	$updated_at = $created_at;
	$uniq = uniqid();
	$date_ned = $date->format('Y-m-d H:i A');

	if (!$_POST['describe']) {
		header("Location: /payment");
		die();
	}


	require 'init.php';
	
	$stripe = new \Stripe\StripeClient("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");

	function calculateOrderAmount(array $items): int {
		
		$fee = $items[0] * 2.9 / 100 + .3;
		
		$items[0] = number_format($items[0] + $fee, 2);
		
	    // Replace this constant with a calculation of the order's amount
	    $items[0] *= 100;
	    
	    // Calculate the order total on the server to prevent
	    // people from directly manipulating the amount on the client
	    return $items[0];
	}

	$amount = calculateOrderAmount([$_POST['amount']]);

	$amountnn = number_format($amount / 100, 2);
	$payme= $stripe->paymentIntents->create([
	  'amount' => $amount,
	  'currency' => 'usd',
	  'payment_method_types' => ['card'],
	]);

	$client_secret = $payme->client_secret;
	$intent = $payme->id;

	$email = $_POST['email'] ?? 'Not found';

	$connection = mysqli_connect("localhost","softipi_new-prestine-invoice" ,"51?7iy4>B","softipi_new-prestine-invoice");

	$table =  mysqli_query($connection, "DESCRIBE `stripe_payments`" );
	if (!$table) {
		mysqli_query($connection, "CREATE TABLE `stripe_payments` (
		  `id` bigint(20) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
		  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
		  `total_money` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
		  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
		  `uniqId` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
		  `subId` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
		  `success` enum('yes','no') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'no',
		  `created_at` timestamp NULL DEFAULT NULL,
		  `updated_at` timestamp NULL DEFAULT NULL
		) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;");
	}
	$date_acquired = $date->format("F j Y");
	$content = '
		<div bgcolor="#f6f6f6" style="color: #333; height: 100%; width: 100%;" height="100%" width="100%">
		    <table bgcolor="#f6f6f6" cellspacing="0" style="border-collapse: collapse; padding: 40px; width: 100%;" width="100%">
		        <tbody>
		            <tr>
		                <td width="5px" style="padding: 0;"></td>
		                <td style="clear: both; display: block; margin: 0 auto; max-width: 600px; padding: 10px 0;">
		                    <table width="100%" cellspacing="0" style="border-collapse: collapse;">
		                        <tbody>
		                            <tr>
		                                <td style="padding: 0;">
		                                    <a
		                                        href="#"
		                                        style="color: #348eda;"
		                                        target="_blank"
		                                    >
		                                        <img
		                                            src="https://pristinegreencleaning.com/assets/logo/PGUpholsteryAndCarpetCleaning.png"
		                                            alt="pristinegreencleaning.com"
		                                            style="height: 60px; max-width: 100%; width: 270px;"
		                                            height="50"
		                                            width="157"
		                                        />
		                                    </a>
		                                </td>
		                                <td style="color: #999; font-size: 12px; padding: 0; text-align: right;" align="right">
		                                    Pristinegreencleaning<br />
		                                    Invoice #'.$uniq.'<br />
		                                    '.$date_acquired.'
		                                </td>
		                            </tr>
		                        </tbody>
		                    </table>
		                </td>
		                <td width="5px" style="padding: 0;"></td>
		            </tr>

		            <tr>
		                <td width="5px" style="padding: 0;"></td>
		                <td bgcolor="#FFFFFF" style="border: 1px solid #000; clear: both; display: block; margin: 0 auto; max-width: 600px; padding: 0;">
		                    <table width="100%" style="background: #f9f9f9; border-bottom: 1px solid #eee; border-collapse: collapse; color: #999;">
		                        <tbody>
		                            <tr>
		                                <td width="50%" style="padding: 20px;"><strong style="color: #333; font-size: 24px;">$'.$amountnn.'</strong></td>
		                                <td align="right" width="50%" style="padding: 20px;">Thanks for using <span class="il">pristinegreencleaning.com</span></td>
		                            </tr>
		                        </tbody>
		                    </table>
		                </td>
		                <td style="padding: 0;"></td>
		                <td width="5px" style="padding: 0;"></td>
		            </tr>
		            <tr>
		                <td width="5px" style="padding: 0;"></td>
		                <td style="border: 1px solid #000; border-top: 0; clear: both; display: block; margin: 0 auto; max-width: 600px; padding: 0;">
		                    <table cellspacing="0" style="border-collapse: collapse; border-left: 1px solid #000; margin: 0 auto; max-width: 600px;">
		                        <tbody>
		                            <tr>
		                                <td valign="top"  style="padding: 20px;">
		                                    <h3
		                                        style="
		                                            border-bottom: 1px solid #000;
		                                            color: #000;
		                                            font-family: Helvetica Neue, Helvetica, Arial, Lucida Grande, sans-serif;
		                                            font-size: 18px;
		                                            font-weight: bold;
		                                            line-height: 1.2;
		                                            margin: 0;
		                                            margin-bottom: 15px;
		                                            padding-bottom: 5px;
		                                        "
		                                    >
		                                        Summary
		                                    </h3>
		                                    <table cellspacing="0" style="border-collapse: collapse; margin-bottom: 40px;">
		                                        <tbody>
		                                            <tr>
		                                                <td style="padding: 5px 0;">Service Date</td>
		                                                <td align="right" style="padding: 5px 0;">'.$date_ned.'</td>
		                                            </tr>
		                                            <tr>
		                                                <td style="padding: 5px 0;">Your email</td>
		                                                <td align="right" style="padding: 5px 0;">'.$email.'</td>
		                                            </tr>
		                                            <tr>
		                                                <td style="padding: 5px 0;">Service description</td>
		                                                <td align="right" style="padding: 5px 0;">'.$_POST['describe'].'</td>
		                                            </tr>
		                                            <tr>
		                                                <td style="border-bottom: 2px solid #000; border-top: 2px solid #000; font-weight: bold; padding: 5px 0;">Amount paid</td>
		                                                <td align="right" style="border-bottom: 2px solid #000; border-top: 2px solid #000; font-weight: bold; padding: 5px 0;">$'.$amountnn.'</td>
		                                            </tr>
		                                        </tbody>
		                                    </table>
		                                </td>
		                            </tr>
		                        </tbody>
		                    </table>
		                </td>
		                <td width="5px" style="padding: 0;"></td>
		            </tr>

		            <tr style="color: #666; font-size: 12px;">
		                <td width="5px" style="padding: 10px 0;"></td>
		                <td style="clear: both; display: block; margin: 0 auto; max-width: 600px; padding: 10px 0;">
		                    <table width="100%" cellspacing="0" style="border-collapse: collapse;">
		                        <tbody>
		                            <tr>
		                                <td width="40%" valign="top" style="padding: 10px 0;">
		                                    <h4 style="margin: 0;">Questions?</h4>
		                                    <p style="color: #666; font-size: 12px; font-weight: normal; margin-bottom: 10px;">
		                                        Please visit our
		                                        <a
		                                            href="/contact-us"
		                                            style="color: #666;"
		                                            target="_blank"
		                                        >
		                                            Support Center
		                                        </a>
		                                        with any questions.
		                                    </p>
		                                </td>
		                                <td width="10%" style="padding: 10px 0;">&nbsp;</td>
		                                <td width="40%" valign="top" style="padding: 10px 0;">
		                                    <h4 style="margin: 0;"><span class="il">Pristinegreen Cleaning,</span> LLC</h4>
		                                    <p style="color: #666; font-size: 12px; font-weight: normal; margin-bottom: 10px;">
		                                        <a href="#">115 E 23rd St 3rd floor
New York, NY 10010</a>
		                                    </p>
		                                </td>
		                            </tr>
		                        </tbody>
		                    </table>
		                </td>
		                <td width="5px" style="padding: 10px 0;"></td>
		            </tr>
		        </tbody>
		    </table>
	    </div>
	';

	
	
 	$sql = $connection->query("INSERT INTO stripe_payments (total_money, email, content, uniqId, subId, success, created_at, updated_at)
	VALUES ('${amount}', '${email}', '${content}', '${uniq}', '${intent}', 'no', '${created_at}', '${updated_at}')");
 	mysqli_close($connection);
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>Accept a payment</title>
    <meta name="description" content="A demo of a payment on Stripe" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="../assets/css/checkout.css"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://js.stripe.com/v3/"></script>
    <input id="amount" value="<?= $_POST['amount'] ?>" hidden>
    <input id="secret" value="<?= $client_secret ?>" hidden>
    <input id="uniqid" value="<?= $uniq ?>" hidden>
    <script type="text/javascript">
      const value = $("#amount").val();
      const secret = $("#secret").val();
      let return_url = "https://pristinegreencleaning.com/payment/submit.php?intent="+$("#uniqid").val();
    </script>
    <script src="../assets/js/checkout.js" defer></script>
  </head>
  <body>
  	<div bgcolor="#f6f6f6" style="color: #333; height: 100%; width: 100%;" height="100%" width="100%">
	    <table bgcolor="#f6f6f6" cellspacing="0" style="border-collapse: collapse; padding: 40px; width: 100%;" width="100%">
	        <tbody>
	            <tr>
	                <td width="5px" style="padding: 0;"></td>
	                <td style="clear: both; display: block; margin: 0 auto; max-width: 600px; padding: 10px 0;">
	                    <table width="100%" cellspacing="0" style="border-collapse: collapse;">
	                        <tbody>
	                            <tr>
	                                <td style="padding: 0;">
	                                    <a
	                                        href="#"
	                                        style="color: #348eda;"
	                                        target="_blank"
	                                    >
	                                        <img
	                                            src="https://pristinegreencleaning.com/assets/logo/PGUpholsteryAndCarpetCleaning.png"
	                                            alt="Bootdey.com"
	                                            style="height: 60px; max-width: 100%; width: 270px;"
	                                            height="50"
	                                            width="157"
	                                        />
	                                    </a>
	                                </td>
	                                <td style="color: #999; font-size: 12px; padding: 0; text-align: right;" align="right">
	                                    Pristinegreencleaning<br />
	                                    Invoice #<?= $uniq?><br />
	                                    <?= $date->format("F j Y")?>
	                                </td>
	                            </tr>
	                        </tbody>
	                    </table>
	                </td>
	                <td width="5px" style="padding: 0;"></td>
	            </tr>

	            <tr>
	                <td width="5px" style="padding: 0;"></td>
	                <td bgcolor="#FFFFFF" style="border: 1px solid #000; clear: both; display: block; margin: 0 auto; max-width: 600px; padding: 0;">
	                    <table width="100%" style="background: #f9f9f9; border-bottom: 1px solid #eee; border-collapse: collapse; color: #999;">
	                        <tbody>
	                            <tr>
	                                <td width="50%" style="padding: 20px;"><strong style="color: #333; font-size: 24px;">$<?= $amountnn?></strong></td>
	                                <td align="right" width="50%" style="padding: 20px;">Thanks for using <span class="il">pristinegreencleaning.com</span></td>
	                            </tr>
	                        </tbody>
	                    </table>
	                </td>
	                <td style="padding: 0;"></td>
	                <td width="5px" style="padding: 0;"></td>
	            </tr>
	            <tr>
	                <td width="5px" style="padding: 0;"></td>
	                <td style="border: 1px solid #000; border-top: 0; clear: both; display: block; margin: 0 auto; max-width: 600px; padding: 0;">
	                    <table cellspacing="0" style="border-collapse: collapse; border-left: 1px solid #000; margin: 0 auto; max-width: 600px;">
	                        <tbody>
	                            <tr>
	                                <td valign="top"  style="padding: 20px;">
	                                    <h3
	                                        style="
	                                            border-bottom: 1px solid #000;
	                                            color: #000;
	                                            font-family: 'Helvetica Neue', Helvetica, Arial, 'Lucida Grande', sans-serif;
	                                            font-size: 18px;
	                                            font-weight: bold;
	                                            line-height: 1.2;
	                                            margin: 0;
	                                            margin-bottom: 15px;
	                                            padding-bottom: 5px;
	                                        "
	                                    >
	                                        Summary
	                                    </h3>
	                                    <table cellspacing="0" style="border-collapse: collapse; margin-bottom: 40px;">
	                                        <tbody>
	                                            <tr>
	                                                <td style="padding: 5px 0;">Service Date</td>
	                                                <td align="right" style="padding: 5px 0;"><?=$date_ned?></td>
	                                            </tr>
	                                            <tr>
	                                                <td style="padding: 5px 0;">Your email</td>
	                                                <td align="right" style="padding: 5px 0;"><?=$_POST['email'] ?? 'Not-found'?></td>
	                                            </tr>
	                                            <tr>
	                                                <td style="padding: 5px 0;">Service description</td>
	                                                <td align="right" style="padding: 5px 0;"><?=$_POST['describe']?></td>
	                                            </tr>
	                                            <tr>
	                                                <td style="border-bottom: 2px solid #000; border-top: 2px solid #000; font-weight: bold; padding: 5px 0;">Amount to be paid</td>
	                                                <td align="right" style="border-bottom: 2px solid #000; border-top: 2px solid #000; font-weight: bold; padding: 5px 0;">$<?= $amountnn?></td>
	                                            </tr>
	                                        </tbody>
	                                    </table>
	                                </td>
	                            </tr>
	                        </tbody>
	                    </table>
	                </td>
	                <td width="5px" style="padding: 0;"></td>
	            </tr>

	            <tr style="color: #666; font-size: 12px;">
	                <td width="5px" style="padding: 10px 0;"></td>
	                <td style="clear: both; display: block; margin: 0 auto; max-width: 600px; padding: 10px 0;">
	                    <table width="100%" cellspacing="0" style="border-collapse: collapse;">
	                        <tbody>
	                            <tr>
	                                <td width="40%" valign="top" style="padding: 10px 0;">
	                                    <h4 style="margin: 0;">Questions?</h4>
	                                    <p style="color: #666; font-size: 12px; font-weight: normal; margin-bottom: 10px;">
	                                        Please visit our
	                                        <a
	                                            href="/contact-us"
	                                            style="color: #666;"
	                                            target="_blank"
	                                        >
	                                            Support Center
	                                        </a>
	                                        with any questions.
	                                    </p>
	                                </td>
	                                <td width="10%" style="padding: 10px 0;">&nbsp;</td>
	                                <td width="40%" valign="top" style="padding: 10px 0;">
	                                    <h4 style="margin: 0;"><span class="il">Pristinegreen Cleaning,</span> LLC</h4>
	                                    <p style="color: #666; font-size: 12px; font-weight: normal; margin-bottom: 10px;">
	                                        <a href="#">115 E 23rd St 3rd floor
New York, NY 10010</a>
	                                    </p>
	                                </td>
	                            </tr>
	                        </tbody>
	                    </table>
	                </td>
	                <td width="5px" style="padding: 10px 0;"></td>
	            </tr>
	        </tbody>
	    </table>
	    <!-- Display a payment form -->
	    <form id="payment-form"  style="border-collapse: collapse; padding: 40px; width: 100%;">
	      <div id="payment-element">
	        <!--Stripe.js injects the Payment Element-->
	      </div>
	      <button id="submit">
	        <div class="spinner hidden" id="spinner"></div>
	        <span id="button-text">Pay now</span>
	      </button>
	      <div id="payment-message" class="hidden"></div>
	    </form>
	</div>

    
  </body>
</html>