<style>
.input-lg {
height: 45px;
padding: 10px 16px;
font-size: 18px;
line-height: 1.33;
border-radius: 6px;
background-color: azure;
}
</style>
<?php
/*$to      = 'arunr@acube.co';
$subject = 'Feedback/Enquiry';
$message = 'hello';
$headers = 'From: admin@acube.co' . "\r\n" .
    
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);*/
?>
	<link rel="icon" href="img/favicon.ico" type="image/x-icon"/>
	<link rel="stylesheet" href="css/bootstrap.css" />
	<link rel="stylesheet" href="css/font-awesome.css" />
<!--	<link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.0/css/font-awesome.css" rel="stylesheet">
-->	<link rel="stylesheet" href="css/style.css" />
	<link rel="stylesheet" href="css/prettyPhoto.css" />
		<div class="row">
			<div class="col-md-6 col-md-offset-3">
			<br /><br /><br /><br />
				<form action="/contact.php" method="post" role="form">
					<div class="form-group">
						<input type="text" class="form-control input-lg" id="nameinput" placeholder="   Mail send successfully, our team will contact you soon" name="contact-name" disabled="disabled">
					</div>

				</form>
			</div>
		</div>

<?php header('Location: index.html');?>