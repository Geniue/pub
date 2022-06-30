<?php
$to = 'junaidaliansaree@gmail.com';
$subject = 'New order from germesteks';
$message = '<html>
					<head>
						<title>New order Request</title>
						<style>
						table, td, th {
						  border: 1px solid black;
							text-align: center;
						}

						table {
						  border-collapse: collapse;
						  width: 100%;
						}

						th {
						  height: 50px;
						}
						</style>
					</head>
					<body>
					<div style="text-align: center;margin-bottom: 2em;">
						<img src="https://mjcoders.com/germestack/assets/img/logofooter.png" style="width: 100px;"> 
						<p> Hello Admin<br> A new order query has been submitted</p>
					</div>
					<table>
						<tr>
							<th>The contact person:</th>
							<td>333</td>
							<th>Phone number:</th>
							<td>33</td>
						</tr>
					
						
					</table>
						<p>Warm Regards,<br>
						MJCoders
						</p>
					</body>
				</html>
		';
		
$from = "From: germesteks <admin@mjcoders.com>";
$headers[] = 'MIME-Version: 1.0';
$headers[] = 'Content-type: text/html; charset=iso-8859-1';

$headers[] = 'To: germesteks <pristinegreencleaning@pristinegreencleaning.com>, Kelly <kelly@germesteks.com>';
$headers[] = 'From: germesteks Reminder <pristinegreencleaning@example.com>';
$result = mail($to, $subject, $message, implode("\r\n", $headers));
if($result){
	echo 'send';
  //  header("Location: order.html?redirect=success");
}else{
	echo 'not';
  //  header("Location: order.html?redirect=fail");
}
exit;
?>