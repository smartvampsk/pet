<?php 
	$title = 'Login';
	require('header.php'); 
?>

<?php 
	require 'connect.php';
	if (isset($_POST['login'])) {
		
		$members = $pdo->prepare("SELECT * FROM members WHERE username = :username");
		$criteria = [
			'username' => $_POST['username']
		];
		$fault = false;
		$members->execute($criteria);
		if ($members->rowCount()>0) {
			$user = $members->fetch();
			if (password_verify($_POST['password'], $user['password'])) {
				$_SESSION['user'] = $user['username'];
				header('location:index.php');
			}
			else
				$fault = true;
		}
		else $fault = true;

		if ($fault == true) {
			$msg = 'Username and Password don\'t matched!';
		}
	}
?>

<div class="pt-2">
	<div class="row">
		<div class="col-md-3"></div>
		<div class="col-md-6">
			<form method="POST">
				<h2 class="pt-3 text-center">Log in to Your Account</h2><hr>
				<?php 
					if (isset($msg)) {
						echo '<p class="text-center bg-info pt-1 pb-1">'.$msg.'</p>';
					}
				?>
				<div class="form-group">
					<label>Username</label>
					<input type="text" name="username" class="form-control" placeholder="Enter username">
				</div>
				<div class="form-group">
					<label>Password</label>
					<input type="password" name="password" class="form-control" placeholder="Password">
				</div>
				<div class="form-group form-check d-flex justify-content-between"> 
					<input type="checkbox" class="form-check-input">
					<label class="form-check-label">Remember Me</label>
					<a href="">Forget Password?</a>
				</div>
				<div class="text-center">
					<button type="submit" name="login" class="btn btn-lg btn-primary text-center">Login</button>
				</div>

				<br>
				<div class="form-group text-center loginLogo">
					<h4 class="text-muted">Or Log in with</h4>
					<a target="_blank" href="https://gmail.com"><img src="../images/logogoog.png"></a>
					<a target="_blank" href="https://facebook.com"><img src="../images/logoface.png"></a>
					<a target="_blank" href="https://twitter.com"><img src="../images/logotwi.png"></a>
				</div>
				
			</form>
			<div class="pt-3 text-center">
				<p class="text-muted">Need an Account? <a href="register.php">Register</a></p>
			</div>
		</div>
	</div>
</div>

<?php require('footer.php'); ?>

