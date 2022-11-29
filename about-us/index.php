<?php include_once("../includes/seo-insert.php"); ?>
<?php include_once("../includes/header.php"); ?>
<?php include_once("../includes/functions.php"); ?>

<section class="about-us bg-center mt-4 mt-md-0" style="background-image: url(/images/background/tree.svg);">
	<div class="container-fluid">
		<div class="row vh-100">
			<div class="col-md-12 mt-2 mt-md-0 align-self-md-center align-self-start">
				<div class="row no-margin about-spacing">
					<div class="about-number col-md-6 order-1 wow fadeInUp animated">
						<h3 class="green-gredient-text">45+</h3>
						<p class="green-gredient-text">YEARS CREATING GREAT COMMUNITIES</p>
					</div>
					<div class="about-number col-md-6 order-2 order-md-3 wow fadeInUp animated" data-wow-delay="0.2s">
						<h3 class="green-gredient-text">62,000+</h3>
						<p class="green-gredient-text">HOMESITES</p>
					</div>
					<div class="about-number col-md-6 order-3 order-md-2 wow fadeInUp animated" data-wow-delay="0.1s">
						<h3 class="green-gredient-text">325+</h3>
						<p class="green-gredient-text">COMMUNITIES</p>
					</div>
					<div class="about-number col-md-6 order-4 wow fadeInUp animated" data-wow-delay="0.3s">
						<h3 class="green-gredient-text">700+</h3>
						<p class="green-gredient-text">YEARS OF COMBINED ELM STREET TEAM EXPERIENCE</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section id="legacy" style="background-image: url(/images/background/20140504_Gibsons-Grant_0397.jpg);" class="bg-center">
	<div class="container-fluid">
		<div class="row vh-100 about-bg-blue">
			<div class="col-md-12">
				<div class="com-content">
					<h1 class="g-blue">LEGACY</h1>
					<div class="underline dash-blue mt-2"></div>
					<p class="text-white mt-2">Founded in 1977, Elm Street Communities has grown into one of the region’s largest privately-owned developers. Over the last four decades, we have developed over 300 distinguished communities with more than 62,000 homes. We have the proven ability to withstand fluctuations in the economy and the financial strength to see all of our developments through to completion, providing enduring value for generations of homeowners.</p>
				</div>
			</div>
		</div>
	</div>
</section>

<section id="environment" style="background-image: url(/images/background/enviroment_checkcopyright.jpg);" class="bg-center">
	<div class="container-fluid">
		<div class="row vh-100 about-bg-green">
			<div class="col-md-12">
				<div class="com-content">
					<h2 class="text-white">AT HOME WITH THE</h2>
					<h1 class="g-green">ENVIRONMENT</h1>
					<div class="underline dash-green mt-2"></div>
					<p class="text-white mt-2">Elm Street considers itself fortunate to operate in the heart of the Chesapeake Bay watershed, but we also recognize the enormous stewardship responsibility that goes along with this spectacular location. Environmentally sensitive planning is at the heart of every Elm Street community.</p>
				</div>
			</div>
		</div>
	</div>
</section>
<section id="elm-team" style="background-image: url(/images/background/team.jpg);" class="bg-center">
	<div class="container-fluid about-bg-purple pb-5">
		<div class="row">
			<div class="col-md-12">
				<div class="com-content">
					<h2 class="text-white">MEET</h2>
					<h1 class="g-purple">OUR TEAM</h1>
					<div class="underline dash-purple mt-2"></div>
					<p class="text-white mt-2">You will not find more community development experience in one company in the Washington-Baltimore region. Period. The seasoned development teams at Elm Street Communities have an astounding 700+ years of combined experience. Elm Street provides in-depth expertise to our thousands of prospective homebuyers. All of us live and work locally; we are deeply invested in the long-term viability of the communities that we develop.</p>
				</div>
			</div>
		</div>
		<div class="row team mt-3">
			<?php 
			$employees = get_employes();
			foreach ($employees as $k => $employee) { ?>
			<div class="col-xl-4 col-sm-6 no-padding teamWrapper" id="member-<?php echo $k; ?>">
				<div class="d-flex flex-wrap team-member z-depth-2">
					<div class="portrait no-padding">
						<img src="images/team/<?php echo $employee['image']; ?>" class="img-fluid">
					</div>
					<div class="disc d-flex">
						<div class="align-self-center">
							<h4><?php echo $employee['name']; ?></h4>
							<p><?php echo $employee['title']; ?></p>
							<p><?php echo $employee['title2']; ?></p>
						</div>
					</div>
				</div>
				<div class="member-hover closed">
					<div class="content">
						<?php echo $employee['bio']; ?>
						<div>
							<?php if ($employee['email'] != "") { ?>
							<a href="mailto:<?php echo $employee['email']; ?>"><img src="images/email.svg"></a>
							<?php } ?>
							<?php if ($employee['linkedin'] != "") { ?>
							<a target="_blank" href="<?php echo $employee['linkedin']; ?>"><img src="images/linkedin.svg"></a>
							<?php } ?>
						</div>
					</div>
				</div>
			</div>
			<?php } ?>
		</div>
	</div>
</section>

<?php include_once("../includes/footer.php"); ?>