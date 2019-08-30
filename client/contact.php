<?php 
	$title = 'Contact us';
	require('header.php');
	require('connect.php');
?>

<?php 
	if (isset($_POST['send'])) {
		$stmt = $pdo->prepare("INSERT INTO messages(name, email, contact, message)
				VALUES(:name, :email, :contact, :message)");
		$criteria = [
			'name' => $_POST['name'],
			'email' => $_POST['email'],
			'contact' => $_POST['contact'],
			'message' => $_POST['message']
		];
		$stmt->execute($criteria);
		if ($stmt == true) {
			// header('location:contact.php');
			$msg = "Thank you, \n Your message has been sent. \n We will contact you soon.";
		}
		else{
			$msg = "Failed to send message. Please try again!";
		}
	}
?>

<div class="mt-2">
	<div class="row">
		<div class="col-md-6">
			<!-- <div class="col-md-1"></div> -->
			<div class="col-md-11">
				<form method="POST" action="">
					<h2 class="pt-3 text-center">Contact us</h2>
					<p class="text-muted text-center">Should have any queries? Feel free to contact us!</p><hr>
					<?php 
						if (!empty($msg)) {
							echo '<p class="bg-info text-center p-1">'.$msg.'</p>';
						}
					?>
					<div class="form-group">
						<label for="">Full Name <span class="text-danger">*</span></label>
						<input type="text" name="name" class="form-control" required>
					</div>
					<div class="form-group">
						<label>Email <span class="text-danger">*</span></label>
						<input type="email" name="email" class="form-control" required="">
					</div>
					<div class="form-group">
						<label>Contact no.</label>
						<input type="text" name="contact" class="form-control">
					</div>
					<div class="form-group">
						<label>Your Message <span class="text-danger">*</span></label>
						<textarea class="form-control" rows="5" name="message" required=""></textarea>
					</div>
					<div class="form-group">
                    	<div class="g-recaptcha" data-sitekey="6LfKURIUAAAAAO50vlwWZkyK_G2ywqE52NU7YO0S" data-callback="verifyRecaptchaCallback" data-expired-callback="expiredRecaptchaCallback">
                    	</div>
                    	<input class="form-control d-none" data-recaptcha="true" data-error="Please complete the Captcha">
                    	<div class="help-block with-errors"></div>
                    </div>
					<div class="pb-3">
						<button type="submit" name="send" class="btn btn-lg btn-primary text-center">Send Message</button>
					</div>
				</form>
			</div>
		</div>
		<div class="border-left col-md-6 row">
			<div class="">
				<h2 class="pt-3 text-center">We are here at:</h2>
				<p class="text-muted text-center">Our location</p>
				<hr>
				<div class="mapouter">
				   	<div class="gmap_canvas">
				   		<iframe width="450" height="450" id="gmap_canvas" src="https://maps.google.com/maps?q=sydney&t=k&z=13&ie=UTF8&iwloc=&output=embed" frameborder="1" scrolling="yes" marginheight="0" marginwidth="0">
				   		</iframe>
				   	</div>
				</div>
				<div class="pt-4">
					<h4><i>Phone and Email</i></h4>
					<p>Phone: (555)555-5555</p>
					<p>Email: <a href="mailto:info@patowner.com">info@patowner.com</a></p>
				</div>
			</div>
		</div>
	</div>
</div>

<?php require('footer.php'); ?>


