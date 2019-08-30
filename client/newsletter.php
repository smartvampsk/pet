<?php 
	$title = 'Membership Information';
	require('header.php');
	if (!isset($_SESSION['user'])) {
		header('location:login.php');
	}
?>


<div class="pt-2">
	<!-- <h2 class="pt-3">Newsletters</h2> -->
	<div class="row">
		<div class="col-md-4"></div>
		<div class="col-md-4 pt-4">
			<h5 class="d-flex justify-content-center">
				<b style="font-size: 2rem; margin-top: -8px; color:maroon; padding-right: 3px;">"</b> 
				QUOTE OF THE DAY  
				<b style="font-size: 2rem; margin-top: -8px; color:maroon; padding-left: 3px;">"</b>
			</h5>
			<p class="text-center text-success"><i>Hot dogs are our favorite thing and the world needs more of them" – Oscar Mayer is releasing a hot dog-infused ice cream. Sounds like the wurst.</i></p>
			<div class="text-center pt-0">
				<i class="material-icons pr-2 text-primary">thumb_up</i>
				<i class="material-icons pr-2 text-secondary">thumb_down</i>
				<i class="material-icons pb-3 text-dark">comment</i>
			</div>
		</div>
	</div>
		
	</div>
	<div class="container">
		<div class="row pb-3">
			<div class="col-md-2"></div>
			<div class="col-md-8">
				<div class="pt-3">
					<h3><b class="text-success">Read Newsletters</b><hr class="bg-success pt-0 font-weight-bold"></h3>
				</div>
				<div class="pt-2 text-justify">
					<h4 class="text-success">The Story</h4>
					<p>Facebook says it took down a <a href="https://skimmth.is/2YkIhui" target="_blank" style="color:maroon;">secret propaganda campaign</a> tied to the Saudi government.</p><br>

					<h5 class="text-success">Is this a movie plot?</h5>
					<p>Nope, real life. Ever since Russia tried to influence the 2016 election by spreading misinformation online, Facebook's been feeling the pressure to prevent a repeat. It says it's taking steps by improving its tech, hiring more people, and working with law enforcement and security experts.</p><br>
					
					<h5 class="text-success">And how's that been going?</h5>
					<p><a href="https://skimmth.is/2KckLqI" target="_blank" style="color:maroon;">Other countries</a> have gotten caught pulling similar stunts, including Iran (and Russia, yet again). Yesterday, Facebook also announced it recently found a campaign that came from the United Arab Emirates and Egypt. But this was the first time it says it's found a Saudi-linked campaign.</p>
					
					<h5 class="text-success">So what's this all about?</h5>
					<p>The goal seems to be to make Saudi Arabia look good and spread its influence. Specifically, people used Facebook to talk up the country's military campaign in Yemen, as well as discuss the crown prince's economic and social reform plan, and bash its rivals like Iran and Qatar. Their tactic: people associated with the Saudi gov created hundreds of Facebook and Instagram accounts, pages, and groups. Some posed as locals from countries throughout the Middle East and North Africa. They also posed as local news orgs. Unsurprisingly, this violated Facebook's community standards.</p>
					
					<h5 class="text-success">It caught it though. Does that mean the US is safe from another 2016 situation?</h5>
					<p>We're not sure. Facebook says it's "committed to continually improving." But lawmakers and even former special counsel <a href="https://skimmth.is/2K8ojtT" target="_blank" style="color:maroon;">Robert Mueller</a> are worried that Russia or other countries could meddle in 2020. Recently, Senate Majority Leader Mitch McConnell (R-KY) has been getting heat for <a href="https://skimmth.is/2KwK5Xt" target="_blank" style="color:maroon;">blocking bills</a> trying to beef up election security. But Republicans argue that the gov has already done what's needed to prep for 2020. What senators haven't blocked: a <a href="https://skimmth.is/2LTpRtT" target="_blank" style="color:maroon;">budget bill</a>.</p>
					<hr class="bg-success pt-0 font-weight-bold">
				</div>

				<div class="pt-2 text-justify">
					<h4 class="text-success">The Story</h4>
					<p>Facebook says it took down a <a href="https://skimmth.is/2YkIhui" target="_blank" style="color:maroon;">secret propaganda campaign</a> tied to the Saudi government.</p>

					<h5 class="text-success">Is this a movie plot?</h5>
					<p>Nope, real life. Ever since Russia tried to influence the 2016 election by spreading misinformation online, Facebook's been feeling the pressure to prevent a repeat. It says it's taking steps by improving its tech, hiring more people, and working with law enforcement and security experts.</p>
					
					<h5 class="text-success">And how's that been going?</h5>
					<p><a href="https://skimmth.is/2KckLqI" target="_blank" style="color:maroon;">Other countries</a> have gotten caught pulling similar stunts, including Iran (and Russia, yet again). Yesterday, Facebook also announced it recently found a campaign that came from the United Arab Emirates and Egypt. But this was the first time it says it's found a Saudi-linked campaign.</p>

					<h5 class="text-success">It caught it though. Does that mean the US is safe from another 2016 situation?</h5>
					<p>We're not sure. Facebook says it's "committed to continually improving." But lawmakers and even former special counsel <a href="https://skimmth.is/2K8ojtT" target="_blank" style="color:maroon;">Robert Mueller</a> are worried that Russia or other countries could meddle in 2020. Recently, Senate Majority Leader Mitch McConnell (R-KY) has been getting heat for <a href="https://skimmth.is/2KwK5Xt" target="_blank" style="color:maroon;">blocking bills</a> trying to beef up election security. But Republicans argue that the gov has already done what's needed to prep for 2020. What senators haven't blocked: a <a href="https://skimmth.is/2LTpRtT" target="_blank" style="color:maroon;">budget bill</a>.</p>
					<hr class="bg-success pt-0 font-weight-bold">
				</div>
				<nav aria-label="Page navigation example">
					<ul class="pagination justify-content-left">
						<li class="page-item disabled"> <a class="page-link text-success" href="#" tabindex="-1" aria-disabled="true">Previous</a> </li>
						<li class="page-item"><a class="page-link text-success" href="#">1</a></li>
						<li class="page-item"><a class="page-link text-success" href="#">2</a></li>
						<li class="page-item"><a class="page-link text-success" href="#">3</a></li>
						<li class="page-item"><a class="page-link text-success" href="#">4</a></li>
						<li class="page-item"><a class="page-link text-success" href="#">Next</a></li>
					</ul>
				</nav>
			</div>
		</div>
			
	</div>
</div>

<?php require('footer.php'); ?>

