<?php 

$token =  $_GET['intent'];

$connection = mysqli_connect("localhost","softipi_new-prestine-invoice" ,"51?7iy4>B","softipi_new-prestine-invoice");
$result = $connection->query("UPDATE stripe_payments SET success='yes' WHERE uniqId='${token}'");
// $productCount = mysqli_num_rows($result);
$result = $connection->query("SELECT * FROM stripe_payments WHERE uniqId='${token}'");
$main = $result->fetch_array();


$email = 'yes';


if ($main['email'] == 'Not found') {
	$email = 'no';
}


mysqli_close($connection);

?>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<div class="container" style="margin-top:5%;">
	<div class="row">
        <div class="jumbotron" style="box-shadow: 2px 2px 4px #000000;">
            <h2 class="text-center">YOUR ORDER HAS BEEN RECEIVED</h2>
          <h3 class="text-center">Thank you for your payment</h3>
          
          <p class="text-center">Your order # is: <?= $main['uniqId']?> , Please save this!</p>
            <center><div class="btn-group" style="margin-top:50px;">
                <a href="/" class="btn btn-lg btn-warning">CONTINUE</a>
            </div></center>
        </div>
	</div>
</div>

<input id="token" value="<?=$token?>" hidden>
<input id="email" value="<?=$email?>" hidden>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script type="text/javascript">
	const token = document.getElementById("token").value;

	if (document.getElementById("email").value === 'yes') {
	 	$.ajax({
			type:"get",
			url:"https://pristinegreencleaning.com/payment/notify_user.php",
			data:{
				token:token
			},
			success:function(){
				console.log("email sent successfully")
			}
		});
	}

	$.ajax({
		type:"get",
		url:"https://pristinegreencleaning.com/payment/notify.php",
		data:{
			token:token
		},
		success:function(){
			console.log("email sent successfully")
		}
	});
</script>