<?php 
	$title = 'Membership Information';
	require('header.php'); 
?>


<div class="">
	<h2 class="pt-3">Membership Information</h2>
	<p>The endorsement of educating pet owner operators and their staff via industry specific training and the acknowledgement/accreditation of members that exceed the National Code of Practice has been the major focus of the association for some time. The Pet owner Association Accreditation scheme is in place for members to gain national recognition of their high standards.</p>

	<div class="card mb-3">
		<div class="card-body p-4">
			<div class="row mb-2">
				<div class="col-md-10">
					<h5> Adult Membership (Half Yearly Membership)</h5>	
				</div>
				<div class="col-md-2 text-right">
					<a class="btn btn-info" href="register.php">Register</a>
				</div>
			</div>
			<div class="bg-secondary rounded p-2">
				<div class="row">
					<div class="col-sm-6">
						<h6 class="text-white"><b>Duration</b></h6>
						<p> 6 Months </p>
						<p> <?php
						 	$date = new DateTime();
						 	$today = $date->format('d-M-Y');
							$today = strtotime($today); 
							$new_date = strtotime('+ 6 month', $today); 
							echo $date->format('d-M-Y').' to '.date('d-M-Y', $new_date);

						?> </p>
					</div>
					<div class="col-sm-6">
						<p class="text-white"><b>Price</b></p>
						<p> $50.00 </p>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="card">
		<div class="card-body p-4">
			<div class="row mb-2">
				<div class="col-md-10">
					<h5> Adult Membership (Yearly Membership)</h5>	
				</div>
				<div class="col-md-2 text-right">
					<a class="btn btn-info" href="register.php">Register</a>
				</div>
			</div>
			<div class="bg-secondary rounded p-2">
				<div class="row">
					<div class="col-sm-6">
						<h6 class="text-white"><b>Duration</b></h6>
						<p> 12 Months </p>
						<p> <?php
						 	$date = new DateTime();
						 	$today = $date->format('d-M-Y');
							$today = strtotime($today); 
							$new_date = strtotime('+ 1 year', $today); 
							echo $date->format('d-M-Y').' to '.date('d-M-Y', $new_date);

						?> </p>
					</div>
					<div class="col-sm-6">
						<p class="text-white"><b>Price</b></p>
						<p> $90.00 </p>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="card">
		<div class="card-body p-4">
			<div class="row mb-2">
				<div class="col-md-10">
					<h5> Adult Membership (2 Years Membership)</h5>	
				</div>
				<div class="col-md-2 text-right">
					<a class="btn btn-info" href="register.php">Register</a>
				</div>
			</div>
			<div class="bg-secondary rounded p-2">
				<div class="row">
					<div class="col-sm-6">
						<h6 class="text-white"><b>Duration</b></h6>
						<p> 24 Months </p>
						<p> <?php
						 	$date = new DateTime();
						 	$today = $date->format('d-M-Y');
							$today = strtotime($today); 
							$new_date = strtotime('+ 2 year', $today); 
							echo $date->format('d-M-Y').' to '.date('d-M-Y', $new_date);
						?> </p>
					</div>
					<div class="col-sm-6">
						<p class="text-white"><b>Price</b></p>
						<p> $160.00 </p>
					</div>
				</div>
			</div>
		</div>
	</div>

<div class="card">
		<div class="card-body p-4">
			<div class="row mb-2">
				<div class="col-md-10">
					<h5> Concession Membership (Yearly Membership)</h5>	
				</div>
				<div class="col-md-2 text-right">
					<a class="btn btn-info" href="register.php">Register</a>
				</div>
			</div>
			<div class="bg-secondary rounded p-2">
				<div class="row">
					<div class="col-sm-6">
						<h6 class="text-white"><b>Duration</b></h6>
						<p> 24 Months </p>
						<p> <?php
						 	$date = new DateTime();
						 	$today = $date->format('d-M-Y');
							$today = strtotime($today); 
							$new_date = strtotime('+ 1 year', $today); 
							echo $date->format('d-M-Y').' to '.date('d-M-Y', $new_date);
						?> </p>
					</div>
					<div class="col-sm-6">
						<p class="text-white"><b>Price</b></p>
						<p> $25.00 </p>
					</div>
				</div>
			</div>
		</div>
	</div>

</div>

<?php require('footer.php'); ?>

