	
		</div>
	</section>
</body>
	<footer>
		<div class="container mt-2 text-center clientFoot">
			<h6 class="p-1 pt-2">
			<?php 
				$date = new DateTime();
				echo '<p>'.'&copy; Pet Owners Associations | 2019'.' - '.$date->format('Y');
			?>
			</h6>
		</div>
	</footer>

	<script type="text/javascript" src="../js/jquery.min.js"></script>
	<script type="text/javascript" src="../js/popper.js"></script>
	<script type="text/javascript" src="../js/bootstrap.min.js"></script>
	<script src='https://www.google.com/recaptcha/api.js'></script>
</html>