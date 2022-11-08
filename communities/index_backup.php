<?php include_once("../includes/header.php"); ?>
<?php include_once("../includes/functions.php"); ?>

<section style="background-image: url(/images/background/docks.jpg);" class="bg-center">
	<div class="container-fluid">
		<div class="row vh-100 com-bg-purple p-relative">
			<div class="col-md-12 align-self-sm-end align-self-start mt-4 mt-md-0">
				<div class="com-content desktop-spacing mb-0 mb-md-5">
					<h2 class="text-white wow fadeInUp animated" data-wow-delay="0s">WE COVER THE</h2>
					<h1 class="g-pink text-shadow wow fadeInUp animated" data-wow-delay="0.2s">REGION</h1>
					<div class="underline dash-pink mt-2"></div>
					<p class="text-white mt-2 wow fadeInUp animated" data-wow-delay="0.4s">The Washington-Baltimore region offers excellent employment opportunities, schools and universities, culture, recreation, transportation networks, and natural beauty. Our new homes in the area’s most sought-after locations allow you to live, work, and play in this dynamic sector of the Mid-Atlantic.</p>
					<div class="p-relative">
						<img src="images/region_girldancing_cropped.jpg" class="img-fluid mt-4 mt-md-0 d-block d-sm-none z-depth-1" alt="Elm Street Communities">
						<div class="img-caption img-caption-mobile">
							Caption
						</div>
					</div>
				</div>
			</div>
			<div class="img-absolute c-img-1">
				<img src="images/region_girldancing.jpg" class="img-fluid d-none d-sm-block z-depth-1 wow slideInRight animated" alt="Elm Street Communities">
				<div class="img-caption">
					Caption
				</div>
			</div>
		</div>
	</div>
</section>

<section style="background-image: url(/images/background/20140504_Gibsons-Grant_0402.jpg);" class="bg-center">
	<div class="container-fluid">
		<div class="row vh-100 com-bg-green p-relative">
			<div class="col-md-12 align-self-sm-end align-self-start">
				<div class="com-content desktop-spacing mb-0 mb-md-5">
					<h2 class="text-white wow fadeInUp animated" data-wow-delay="0s">COME HOME TO</h2>
					<h1 class="g-green wow fadeInUp animated" data-wow-delay="0.2s">ELM STREET</h1>
					<div class="underline dash-green mt-2"></div>
					<p class="text-white mt-2 wow fadeInUp animated" data-wow-delay="0.4s">Whether it’s affordable waterfront living near the Chesapeake Bay or a cozy condo in an exciting urban setting, Elm Street Communities offers a wide range of for-sale homes in our new communities located in the Baltimore/Washington corridor. We partner with leading national and regional homebuilders to bring you state-of-the-art home options and designs.</p>
					<!-- <div class="p-relative">
						<img src="images/Easton-Village-014.jpg" class="img-fluid mt-4 mt-md-0 d-block d-sm-none z-depth-1">
						<div class="img-caption img-caption-mobile">
							Easton Village
						</div>
					</div> -->
				</div>
			</div>
			<!-- <div class="img-absolute c-img-2">
				<img src="images/Easton-Village-014.jpg" class="img-fluid d-none d-sm-block z-depth-1 wow slideInRight animated">
				<div class="img-caption">
					Easton Village
				</div>
			</div> -->
		</div>
	</div>
</section>

<section style="background-image: url(/images/background/GettyImages-849237828.jpg);" class="bg-center" id="community-list">
	<div class="container-fluid">
		<div class="row com-bg-green">
			<div class="col-md-12">
				<div class="com-content community-content">
					<h2 class="text-white">COMMUNITIES</h2>
					<h1 class="g-orange">NOW SELLING</h1>
					<div class="underline dash-orange mt-2"></div>
					<!-- <p class="text-white">
						Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad.
					</p> -->
				</div>
				<div class="switchWrap mt-3 row justify-content-between align-items-center no-margin">
					<div class="d-flex mb-3">
						<div class="text-white align-self-center">
							<div class="title">Filter:</div>
						</div>
						<div class="d-flex flex-wrap">
							<div class="mb-1 mb-md-0">
								<select id="select-state" class="mdb-select md-form md-custom-select">
								  	<option disabled selected>State</option>
								  	<option value="ClearAll">Clear All</option>
								  	<option value="MD">Maryland</option>
								  	<option value="VA">Virginia</option>
								  	<option value="DC">Washington, D.C.</option>
								</select>
							</div>
							<div>
								<select id="select-county" class="mdb-select md-form md-custom-select" disabled>
								  	<option value="" disabled selected>County</option>
								</select>
							</div>
						</div>
				    </div>
					<div class="d-flex mb-3">
						<div class="text-white">
							<div class="title">View As:</div>
						</div>
						<div class="switch switch-yellow">
					      	<input type="radio" class="switch-input" name="listingView" value="listings" id="listings" checked>
					      	<label for="listings" class="switch-label switch-label-off">Listings</label>
					      	<input type="radio" class="switch-input" name="listingView" value="map" id="map">
					      	<label for="map" class="switch-label switch-label-on">Map</label>
					      	<span class="switch-selection"></span>
					    </div>
					</div>
				</div>
			</div>
			
			<div class="tab-content w-100" id="community-tab">
				<div class="tab-pane fade show active" id="listings-tab">
					<div class="container-fluid">
						<div id="filterContainer" class="row listingsWrap">
							<?php 
							$communities = get_communitites();
							for ($k = 0; $k < sizeof($communities); $k++) {
								if ($communities[$k]['status'] == "Now Selling") {
							 ?>
							<div id="community-<?php echo $k; ?>" class="col-xl-3 col-md-4 col-sm-6 no-padding wow fadeInUp animated listWrap" data-name="<?php echo $communities[$k]['name']; ?>" data-state="<?php echo $communities[$k]['county'][1]; ?>" data-county="<?php echo $communities[$k]['county'][0]; ?>">
								<div class="listings-column z-depth-1-half">
									<div class="view">
										<img src="images/communities/<?php echo $communities[$k]['image']; ?>" class="img-fluid w-100">
										<div class="mask listings">
											<h4><?php echo $communities[$k]['name']; ?></h4>
											<p class="text-white"><?php echo $communities[$k]['location']; ?></p>
											<?php if ($communities[$k]['desc'] != "") { ?>
											<p class="text-white desc fadeInUp"><?php echo $communities[$k]['desc']; ?></p>
											<?php } ?>
											<?php if ($communities[$k]['website'] != "") { ?>
											<a href="<?php echo $communities[$k]['website']; ?>" target="_blank" class="btn-custom desc fadeInUp animated">VISIT US <img src="/images/arrow-right.svg" width="10px;" class="vertical-align-center"></a>
											<?php } ?>
										</div>
									</div>
								</div>
							</div>
							<?php if ($k == 3) { ?>
							<div class="col-xl-6 col-md-8 col-sm-12 no-padding" id="testimonials-1Wrap">
								<div class="row no-margin">
									<div id="testimonialsWrap-1" class="col-xl-12 col-md-12 no-padding">
										<div class="listings-column z-depth-1-half">
											<div id="testimonials-1" class="carousel slide" data-ride="carousel" data-interval="5000">
											  	<div class="carousel-inner" role="listbox">
											    	<div class="carousel-item active">
											    		<div class="listingComment listingComment-1">
															<p>"We moved to Pondview in September and have truly enjoyed this community! My boys have fun fishing and today we went sledding and enjoyed the fire pit! It's such a great place to live!"</p>
															<!-- <p class="text-right">- Stephanie Haller</p> -->
														</div>
											    	</div>
											    	<div class="carousel-item">
											      		<div class="listingComment listingComment-1">
															<p>"Living here is like being on vacation. People like coming home and getting outside to visit with neighbors and enjoying the beautiful community that we are now part of."</p>
															<!-- <p class="text-right">- Kristin & Jerry</p> -->
														</div>
											    	</div>
											    	<div class="carousel-item">
											      		<div class="listingComment listingComment-1">
															<p>The Zeitlins agree that living in their new community is "better than they could have imagined" – "Everything we hoped for and more than we imagined."</p>
															<!-- <p class="text-right">- Paul & Nicole Zeitlin</p> -->
														</div>
											    	</div>
											    	<div class="carousel-item">
											      		<div class="listingComment listingComment-1">
															<p>"I moved in Tanyard Cove in the Summer of 2014. I love the walking trails and my friendly neighbors. The perfect place to raise a family!"</p>
															<!-- <p class="text-right">- Rogelle Michele Marquis-LeBrun</p> -->
														</div>
											    	</div>
											    	<div class="carousel-item">
											      		<div class="listingComment listingComment-1">
															<p>"We have such great conversations. We also love to go to all the parties at the picnic pavilion."</p>
															<!-- <p class="text-right">- Ryan & Kim Mannion</p> -->
														</div>
											    	</div>
											  	</div>
											  	<a class="carousel-control-prev" href="#testimonials-1" role="button" data-slide="prev">
												    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
												    <span class="sr-only">Previous</span>
												</a>
												<a class="carousel-control-next" href="#testimonials-1" role="button" data-slide="next">
												    <span class="carousel-control-next-icon" aria-hidden="true"></span>
												    <span class="sr-only">Next</span>
												</a>
											</div>
										</div>
									</div>
									<div id="community-<?php echo $k+1; ?>" class="col-xl-6 col-md-6 col-sm-6 no-padding wow fadeInUp animated listWrap">
										<div class="listings-column z-depth-1-half">
											<div class="view">
												<img src="images/communities/<?php echo $communities[$k+1]['image']; ?>" class="img-fluid w-100">
												<div class="mask listings">
													<h4><?php echo $communities[$k+1]['name']; ?></h4>
													<p class="text-white"><?php echo $communities[$k+1]['location']; ?></p>
													<?php if ($communities[$k+1]['desc'] != "") { ?>
													<p class="text-white desc fadeInUp"><?php echo $communities[$k+1]['desc']; ?></p>
													<?php } ?>
													<?php if ($communities[$k+1]['website'] != "") { ?>
													<a href="<?php echo $communities[$k+1]['website']; ?>" target="_blank" class="btn-custom desc fadeInUp animated">VISIT US <img src="/images/arrow-right.svg" width="10px;" class="vertical-align-center"></a>
													<?php } ?>
												</div>
											</div>
										</div>
									</div>
									<div id="community-<?php echo $k+2; ?>" class="col-xl-6 col-md-6 col-sm-6 no-padding wow fadeInUp animated listWrap">
										<div class="listings-column z-depth-1-half">
											<div class="view">
												<img src="images/communities/<?php echo $communities[$k+2]['image']; ?>" class="img-fluid w-100">
												<div class="mask listings">
													<h4><?php echo $communities[$k+2]['name']; ?></h4>
													<p class="text-white"><?php echo $communities[$k+2]['location']; ?></p>
													<?php if ($communities[$k+2]['desc'] != "") { ?>
													<p class="text-white desc fadeInUp"><?php echo $communities[$k+2]['desc']; ?></p>
													<?php } ?>
													<?php if ($communities[$k+2]['website'] != "") { ?>
													<a href="<?php echo $communities[$k+2]['website']; ?>" target="_blank" class="btn-custom desc fadeInUp animated">VISIT US <img src="/images/arrow-right.svg" width="10px;" class="vertical-align-center"></a>
													<?php } ?>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<?php $k = $k + 2; } if ($k == 5) { ?>
							<div class="col-xl-6 col-md-8 col-sm-12 no-padding" id="testimonialsWrap-2Wrap">
								<div class="row no-margin">
									<div id="community-<?php echo $k+1; ?>" class="col-xl-6 col-md-6 col-sm-6 no-padding wow fadeInUp animated listWrap">
										<div class="listings-column z-depth-1-half">
											<div class="view">
												<img src="images/communities/<?php echo $communities[$k+1]['image']; ?>" class="img-fluid w-100">
												<div class="mask listings">
													<h4><?php echo $communities[$k+1]['name']; ?></h4>
													<p class="text-white"><?php echo $communities[$k+1]['location']; ?></p>
													<?php if ($communities[$k+1]['desc'] != "") { ?>
													<p class="text-white desc fadeInUp"><?php echo $communities[$k+1]['desc']; ?></p>
													<?php } ?>
													<?php if ($communities[$k+1]['website'] != "") { ?>
													<a href="<?php echo $communities[$k+1]['website']; ?>" target="_blank" class="btn-custom desc fadeInUp animated">VISIT US <img src="/images/arrow-right.svg" width="10px;" class="vertical-align-center"></a>
													<?php } ?>
												</div>
											</div>
										</div>
									</div>
									<div id="community-<?php echo $k+2; ?>" class="col-xl-6 col-md-6 col-sm-6 no-padding wow fadeInUp animated listWrap">
										<div class="listings-column z-depth-1-half">
											<div class="view">
												<img src="images/communities/<?php echo $communities[$k+2]['image']; ?>" class="img-fluid w-100">
												<div class="mask listings">
													<h4><?php echo $communities[$k+2]['name']; ?></h4>
													<p class="text-white"><?php echo $communities[$k+2]['location']; ?></p>
													<?php if ($communities[$k+2]['desc'] != "") { ?>
													<p class="text-white desc fadeInUp"><?php echo $communities[$k+2]['desc']; ?></p>
													<?php } ?>
													<?php if ($communities[$k+2]['website'] != "") { ?>
													<a href="<?php echo $communities[$k+2]['website']; ?>" target="_blank" class="btn-custom desc fadeInUp animated">VISIT US <img src="/images/arrow-right.svg" width="10px;" class="vertical-align-center"></a>
													<?php } ?>
												</div>
											</div>
										</div>
									</div>
									<div id="testimonialsWrap-2" class="col-xl-12 col-md-12 col-sm-12 no-padding">
										<div class="listings-column z-depth-1-half">
											<div id="testimonials-2" class="carousel slide" data-ride="carousel" data-interval="6000">
											  	<div class="carousel-inner" role="listbox">
											    	<div class="carousel-item active">
											    		<div class="listingComment listingComment-2">
															<p>"The amenities really hit it out of the park for me."</p>
															<!-- <p class="text-right">- Blair Cresawn</p> -->
														</div>
											    	</div>
											    	<div class="carousel-item">
											      		<div class="listingComment listingComment-2">
															<p>"Great place to live and call home."</p>
															<!-- <p class="text-right">- Yancy Cobb</p> -->
														</div>
											    	</div>
											    	<div class="carousel-item">
											      		<div class="listingComment listingComment-2">
															<p>"It's a wonderful community."</p>
															<!-- <p class="text-right">- The Friedman Family</p> -->
														</div>
											    	</div>
											    	<div class="carousel-item">
											      		<div class="listingComment listingComment-2">
															<p>"The people here are fun and nice."</p>
															<!-- <p class="text-right">- Laura Pells</p> -->
														</div>
											    	</div>
											    	<div class="carousel-item">
											      		<div class="listingComment listingComment-2">
															<p>"Love this community."</p>
															<!-- <p class="text-right">- Sharon Lowry</p> -->
														</div>
											    	</div>
											    	<div class="carousel-item">
											      		<div class="listingComment listingComment-2">
															<p>"There is always something to do here because of all the neighborhood activities."</p>
															<!-- <p class="text-right">- Susan Darling</p> -->
														</div>
											    	</div>
											  	</div>
											  	<a class="carousel-control-prev" href="#testimonials-2" role="button" data-slide="prev">
												    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
												    <span class="sr-only">Previous</span>
												</a>
												<a class="carousel-control-next" href="#testimonials-2" role="button" data-slide="next">
												    <span class="carousel-control-next-icon" aria-hidden="true"></span>
												    <span class="sr-only">Next</span>
												</a>
											</div>
											
										</div>
									</div>
								</div>
							</div>
							<?php $k= $k + 2; } } }?>
							<div class="col-md-12 text-white nowSellingResult" style="display: none; font-size: 20px;">No Results</div>
						</div>
						<div class="row listingsWrap">
							<div class="col-sm-12 px-sm-0">
								<div class="com-content community-content pl-0 pt-0 my-3">
									<h2 class="text-white">COMMUNITIES</h2>
									<h1 class="g-b-green">COMING SOON</h1>
									<div class="underline dash-orange mt-2"></div>
								</div>
							</div>
						</div>
						<div id="filterContainerComingSoon" class="row listingsWrap">
							<?php 
							for ($k = 0; $k < sizeof($communities); $k++) {
								if ($communities[$k]['status'] == "Coming Soon") {
							 ?>
							<div id="community-<?php echo $k; ?>" class="col-xl-3 col-md-4 col-sm-6 no-padding wow fadeInUp animated listWrap" data-name="<?php echo $communities[$k]['name']; ?>" data-state="<?php echo $communities[$k]['county'][1]; ?>" data-county="<?php echo $communities[$k]['county'][0]; ?>">
								<div class="listings-column z-depth-1-half">
									<div class="view">
										<img src="images/communities/<?php echo $communities[$k]['image']; ?>" class="img-fluid w-100">
										<div class="mask listings">
											<h4><?php echo $communities[$k]['name']; ?></h4>
											<p class="text-white"><?php echo $communities[$k]['location']; ?></p>
											<?php if ($communities[$k]['desc'] != "") { ?>
											<p class="text-white desc fadeInUp"><?php echo $communities[$k]['desc']; ?></p>
											<?php } ?>
											<?php if ($communities[$k]['website'] != "") { ?>
											<a href="<?php echo $communities[$k]['website']; ?>" target="_blank" class="btn-custom desc fadeInUp animated">VISIT US <img src="/images/arrow-right.svg" width="10px;" class="vertical-align-center"></a>
											<?php } ?>
										</div>
									</div>
								</div>
							</div>
							<?php } }?>
							<div class="col-md-12 text-white comingSoonResult" style="display: none; font-size: 20px;">No Results</div>
						</div>
					</div>
				</div>
			  	<div class="tab-pane fade" id="map-tab">
			  		<div class="container-fluid">
						<div class="row listingsWrap">
					    	<div id="google-map" class="locationMap col-sm-12" style="height: 600px;">
		                	</div>
		                </div>
		            </div>
			  	</div>
			</div>
		</div>
	</div>
</section>

<section style="background-image: url(/images/background/GettyImages-909457386.jpg);" class="bg-center">
	<div class="container-fluid">
		<div class="row vh-100 com-bg-purple p-relative">
			<div class="col-md-12 align-self-sm-end align-self-start">
				<div class="com-content desktop-spacing mb-0 mb-md-5">
					<h2 class="text-white wow fadeInUp animated" data-wow-delay="0s">MIXED-USE</h2>
					<h1 class="g-orange wow fadeInUp animated" data-wow-delay="0.2s">LIFESTYLE</h1>
					<div class="underline dash-red mt-2"></div>
					<p class="text-white mt-2 wow fadeInUp animated" data-wow-delay="0.4s">Many of the larger communities that we develop incorporate a carefully planned mix of uses including shopping, dining, and entertainment. These sophisticated walkable neighborhoods increasingly attract both homebuyers and renters.</p>
					<div class="link waves-effect wow fadeInUp animated" data-wow-delay="0.6s">
						<a href="mailto:lbauer@elmstreetdev.com" class="g-orange font-weight-bold">Learn more about our retail and commercial property opportunities.</a>
					</div>
					<div class="p-relative">
						<img src="images/10-Exterior-Night2.jpg" class="img-fluid mt-4 mt-md-0 d-block d-sm-none z-depth-1">
						<div class="img-caption img-caption-mobile">
							Caption
						</div>
					</div>
				</div>
			</div>
			<div class="img-absolute c-img-2">
				<img src="images/10-Exterior-Night2.jpg" class="img-fluid d-none d-sm-block z-depth-1 wow slideInRight animated">
				<div class="img-caption">
					Caption
				</div>
			</div>
		</div>
	</div>
</section>

<section style="background-image: url(/images/background/GettyImages-904109778.jpg);" class="bg-center">
	<div class="container-fluid">
		<div class="row vh-100 com-bg-green p-relative">
			<div class="col-md-12 align-self-sm-end align-self-start">
				<div class="com-content desktop-spacing mb-0 mb-md-5">
					<h2 class="text-white wow fadeInUp animated"  data-wow-delay="0s">BUY OR RENT-IT'S</h2>
					<h1 class="g-purple wow fadeInUp animated"  data-wow-delay="0.2s">YOUR CHOICE</h1>
					<div class="underline dash-purple mt-2"></div>
					<div class="p-relative">
						<img src="images/2858895d1405e92_standard-Elms-ShanGlen.jpg" class="img-fluid mt-2 mt-md-0 d-block d-sm-none">
						<div class="img-caption img-caption-mobile">
							Caption
						</div>
					</div>
					<p class="text-white mt-2 wow fadeInUp animated"  data-wow-delay="0.4s">Our award-winning rental communities, developed under The Elms brand, provide convenient, carefree living in amenity-rich settings that are close to major employment centers.</p>
					<div class="link waves-effect wow fadeInUp animated" data-wow-delay="0.6s">
						<a target="_blank" href="https://elmsliving.com/" class="g-orange font-weight-bold">Learn more about The Elms</a>
					</div>
				</div>
			</div>
			<div class="img-absolute c-img-2">
				<img src="images/2858895d1405e92_standard-Elms-ShanGlen.jpg" class="img-fluid d-none d-sm-block wow slideInRight animated">
				<div class="img-caption">
					Caption
				</div>
			</div>
		</div>
	</div>
</section>
<?php include_once("../includes/footer.php"); ?>