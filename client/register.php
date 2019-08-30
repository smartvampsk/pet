<?php 
	$title = 'Register';
	require('header.php'); 
?>

<?php 
	require 'connect.php';
	if (isset($_POST['register'])) {
		$password = $_POST['password'];
		$confPassword = $_POST['confPassword'];
		if ($password != $confPassword) {
			echo "Password don't match. Please Try again!";
		}
		else{
			$stmt = $pdo->prepare("INSERT INTO members(firstname, surname, gender, username, password)
				VALUES(:firstname, :surname, :gender, :username, :password)");
			$criteria = [
				'firstname' => $_POST['firstname'],
				'surname' => $_POST['surname'],
				'gender' => $_POST['gender'],
				'username' => $_POST['username'], 
				'password' => password_hash($_POST['password'], PASSWORD_DEFAULT)
			];
			$stmt->execute($criteria);
			header('location:login.php');
		}
	}
?>

<div class="pt-2">
	<div class="row">
		<div class="col-md-3"></div>
		<div class="col-md-6">
			<form method="POST" action="">
				<h2 class="pt-3 text-center">Membership Registration</h2>
				<p class="text-center text-muted">Fill the form to apply for membership!</p>
				<hr>
				<div class="form-group">
					<label for="">First Name</label>
					<input type="text" class="form-control" name="firstname">
				</div>
				<div class="form-group">
					<label>Surname</label>
					<input type="text" class="form-control" name="surname">
				</div>
				<div class="form-check form-check-inline">
					
				</div>
				<fieldset class="form-group">
					<div class="row">
						<legend class="col-form-label col-sm-2 pt-0">Gender</legend>
						<div class="col-sm-10">
							<div class="form-check">
								<input class="form-check-input" type="radio" name="gender" id="genderM" value="Male">
								<label class="form-check-label" for="genderM">Male</label>
							</div>
							<div class="form-check">
								<input class="form-check-input" type="radio" name="gender" id="genderF" value="Female">
								<label class="form-check-label" for="genderF">Female</label>
							</div>
						</div>
					</div>
				</fieldset>
				<div class="form-group">
					<label>Username <span class="text-danger">*</span></label>
					<input type="text" name="username" class="form-control" required="">
				</div>
				<div class="form-group">
					<label>Password <span class="text-danger">*</span></label>
					<input type="password" name="password" class="form-control" required="">
				</div>
				<div class="form-group">
					<label>Confirm Password <span class="text-danger">*</span></label>
					<input type="password" name="confPassword" class="form-control" required="">
				</div>
				<div class="text-center">
					<button type="submit" name="register" class="btn btn-lg btn-primary text-center">Register</button>
				</div>
				<br>
				<div class="form-group text-center loginLogo">
					<h4 class="text-muted">Or Register with</h4>
					<a target="_blank" href="https://gmail.com"><img src="../images/logogoog.png"></a>
					<a target="_blank" href="https://facebook.com"><img src="../images/logoface.png"></a>
					<a target="_blank" href="https://twitter.com"><img src="../images/logotwi.png"></a>
				</div>
				
			</form>
			<div class="pt-3 text-center">
				<p class="text-muted">Already have an Account? <a href="login.php">Log in</a></p>
			</div>
		</div>
	</div>
</div>

<?php require('footer.php'); ?>

