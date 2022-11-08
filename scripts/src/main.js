// About Us Wow Delay
// $(function() {
// 	function checkWidth() {
// 		var windowsize = $(window).width();
// 		if(windowsize > 1199) {
// 			$('.teamWrapper:nth-child(3n+1) .team-member').attr('data-wow-delay', '0s');
// 			$('.teamWrapper:nth-child(3n+2) .team-member').attr('data-wow-delay', '0.2s');
// 			$('.teamWrapper:nth-child(3n) .team-member').attr('data-wow-delay', '0.4s');
// 		}
// 		if(windowsize < 1199 && windowsize > 575) {
// 			$('.teamWrapper:nth-child(2n) .team-member').attr('data-wow-delay', '0.2s');
// 		}
// 	}
// 	checkWidth();
// 	$(window).resize(checkWidth);
// });
// Community Wow Delay
// $(function() {
// 	function checkWidth_com() {
// 		var windowsize = $(window).width();
// 		if(windowsize > 1199) {
// 			$(".listingsWrap .listWrap").each(function(index) {
// 				if (index % 4 == 0) { $(this).attr('data-wow-delay', '0s'); }
// 				if (index % 4 == 1) { $(this).attr('data-wow-delay', '0.2s'); }
// 				if (index % 4 == 2) { $(this).attr('data-wow-delay', '0.4s'); }
// 				if (index % 4 == 3) { $(this).attr('data-wow-delay', '0.6s'); }
// 			})
// 		}
// 		if(windowsize > 768 && windowsize < 1199) {
// 			$(".listingsWrap .listWrap").each(function(index) {
// 				if (index % 3 == 0) { $(this).attr('data-wow-delay', '0s'); }
// 				if (index % 3 == 1) { $(this).attr('data-wow-delay', '0.2s'); }
// 				if (index % 3 == 2) { $(this).attr('data-wow-delay', '0.4s'); }
// 			})
// 		}
// 		if(windowsize < 768 && windowsize > 575) {
// 			$(".listingsWrap .listWrap").each(function(index) {
// 				if (index % 2 == 0) { $(this).attr('data-wow-delay', '0s'); }
// 				if (index % 2 == 1) { $(this).attr('data-wow-delay', '0.2s'); }
// 			})
// 		}
// 	}
// 	checkWidth_com();
// 	$(window).resize(checkWidth_com);
// });


// Disable Full page Scroll on Mobile
var $window = $(window);
function checkWidth() {
	var windowsize = $window.width();
	if (windowsize < 767) {
		$("#fullpage").removeAttr("id");
	}
}
// Execute on load
checkWidth();
// Bind event listener
$(window).resize(checkWidth);

// Add Class When Scrolls
$(window).scroll(function () {
	var nav = $('.custom-navbar');
	var top = 40;
	if ($(window).scrollTop() >= top) {

		nav.addClass('white-bg');

	} else {
		nav.removeClass('white-bg');
	}
});

// Black Hanburger Menu
$(function () {
	var loc = window.location.href; // returns the full URL
	if (/about-us/.test(loc)) {
		$('.custom-navbar').addClass('white-bg-1');
	}
});

$(document).ready(function () {

	wow = new WOW().init();

	// ===== Main menu Active color. ==== 
	$(function () {
		var page = window.location.pathname.split('/');
		$("header .navbar li a").parent().removeClass("active");
		$("header .navbar li a").filter('[href="/' + page[1] + '"]').parent().addClass('active');
	});

	$(".navbar-toggler").on("click dblclick", function () {
		$('.custom-navbar').toggleClass('bg-menu nav-closed');
		$('.animated-icon1').toggleClass('open');
	});

	$(".navbar-nav .nav-link").on("click dblclick", function () {
		$(".navbar-toggler").click();
	});
	// $('.first-button').on('click', function () {

	// });

	$("input[type='radio']").on('change', function () {
		var selectedValue = $("input[name='listingView']:checked").val();
		$('.tab-content .tab-pane').removeClass('show active');
		$('#' + selectedValue + '-tab').addClass('show active');
	});

	// // ScrollMagic Init
	// var controller = new ScrollMagic.Controller();
	// // ScrollMagic Swipe Wipe
	// $(function () { // wait for document ready
	// 	// init
	// 	var controller = new ScrollMagic.Controller({
	// 		globalSceneOptions: {
	// 			triggerHook: 'onLeave',
	// 		}
	// 	});

	// 	// get all slides
	// 	var slides = document.querySelectorAll(".sectionWipes");

	// 	// create scene for every slide
	// 	for (var i = 0; i < slides.length; i++) {
	// 		new ScrollMagic.Scene({
	// 				triggerElement: slides[i]
	// 			})
	// 			.setPin(slides[i])
	// 			// .addIndicators() // add indicators (requires plugin)
	// 			.addTo(controller);
	// 	}
	// });

	// Full Page Scroll Initialize
	var myFullpage = new fullpage("#fullpage", {
		licenseKey: "9ADD49FC-6C8740EE-A128C721-15FCFAEC",
		navigation: true,
		// navigationTooltips: [
		// 	"Elm Street Development",
		// 	"Thrive",
		// 	"Grow",
		// 	"Play",
		// 	"Connect",
		// 	"Communities",
		// 	"About Us",
		// 	"Locations",
		// 	"Contact Us"
		// ],
		showActiveTooltip: true,
		onLeave: function (anchorLink, index) {
			// console.log("after Load  " + index.index);
			if (index.index != 0) {
				$(".custom-navbar").addClass("white-bg");
			} else {
				$(".custom-navbar").removeClass("white-bg");
			}
		}
	});

	var controller_1 = new ScrollMagic.Controller();

	$('.teamWrapper').each(function (i, obj) {
		var member = "#" + $(this).attr("id") + " .team-member";
		new ScrollMagic.Scene({
				triggerElement: member,
				duration: 230
			})
			.triggerHook(0.4)
			.setClassToggle("#" + $(this).attr("id") + " .member-hover", "active") // add class toggle
			// .addIndicators() // add indicators (requires plugin)
			.addTo(controller_1);
	});

	var controller_2 = new ScrollMagic.Controller();
	$('.listWrap').each(function (i, obj) {
		var member = "#" + $(this).attr("id");
		new ScrollMagic.Scene({
				triggerElement: member,
				duration: 280
			})
			.triggerHook(0.4)
			.setClassToggle("#" + $(this).attr("id") + " .listings", "active") // add class toggle
			// .addIndicators() // add indicators (requires plugin)
			.addTo(controller_2);
	});
	// Background Slider

	$("#first-slider").vegas({
		firstTransition: 'none',
		delay: 5000,
		transitionDuration: 3000,
		slides: [{
				src: "/images/background/home-girl.jpg"
			},
			{
				src: "/images/background/georgia_row.jpg"
			},
			{
				src: "/images/background/883C6613.jpg"
			},
			{
				src: "/images/background/9-Exterior-Night1-edit.jpg"
			}
		],
		animation: ['kenburns', 'kenburnsUpRight', 'kenburnsDownLeft', 'kenburnsDownRight', 'kenburnsUpLeft', 'kenburnsUp', 'kenburnsDown', 'kenburnsLeft', 'kenburnsRight']
	});

	$("#second-slider").vegas({
		firstTransition: 'none',
		delay: 5000,
		transitionDuration: 3000,
		slides: [{
				src: "/images/background/thrive_fit.jpg"
			},
			{
				src: "/images/background/thrive_painting.jpg"
			}
		],
		animation: ['kenburns', 'kenburnsUpRight', 'kenburnsDownLeft', 'kenburnsDownRight', 'kenburnsUpLeft', 'kenburnsUp', 'kenburnsDown', 'kenburnsLeft', 'kenburnsRight']
	});

	$("#third-slider").vegas({
		firstTransition: 'none',
		delay: 5000,
		transitionDuration: 3000,
		slides: [{
				src: "/images/background/grow_garden.jpg"
			},
			{
				src: "/images/background/familyonsteps.jpg"
			}
		],
		animation: ['kenburns', 'kenburnsUpRight', 'kenburnsDownLeft', 'kenburnsDownRight', 'kenburnsUpLeft', 'kenburnsUp', 'kenburnsDown', 'kenburnsLeft', 'kenburnsRight']
	});

	$("#forth-slider").vegas({
		firstTransition: 'none',
		delay: 5000,
		transitionDuration: 3000,
		slides: [{
				src: "/images/background/play_goat.jpg"
			},
			{
				src: "/images/background/play_bikes.jpg"
			},
			{
				src: "/images/background/play_kayak.jpg"
			}
		],
		animation: ['kenburns', 'kenburnsUpRight', 'kenburnsDownLeft', 'kenburnsDownRight', 'kenburnsUpLeft', 'kenburnsUp', 'kenburnsDown', 'kenburnsLeft', 'kenburnsRight']
	});

	$("#fifth-slider").vegas({
		firstTransition: 'none',
		delay: 5000,
		transitionDuration: 3000,
		slides: [{
				src: "/images/background/connect.jpg"
			},
			{
				src: "/images/background/gibsongrantrelaxing.jpg"
			}
		],
		animation: ['kenburns', 'kenburnsUpRight', 'kenburnsDownLeft', 'kenburnsDownRight', 'kenburnsUpLeft', 'kenburnsUp', 'kenburnsDown', 'kenburnsLeft', 'kenburnsRight']
	});



	// ======== Google Map =======
	if ($("#google-map").length > 0) {
		map_initialize();

		function map_initialize() {
			mapOptions = {
				maxZoom: 16,
				scrollwheel: false,
				mapTypeId: google.maps.MapTypeId.ROADMAP
			};

			map = new google.maps.Map(document.getElementById("google-map"), mapOptions);

			bounds = new google.maps.LatLngBounds();

			markers = [];

			infowindow = new google.maps.InfoWindow();

			mapPinparks = {
				url: '/images/map-pin.png',
				scaledSize: new google.maps.Size(35, 47),
				origin: new google.maps.Point(0, 0),
				anchor: new google.maps.Point(17.5, 23.5)
			};

			// Close info box when click on map
			google.maps.event.addListener(map, "click", function (event) {
				infowindow.close();
			});

			// Google Map Info Box Styling
			google.maps.event.addListener(infowindow, 'domready', function () {
				var iwOuter = $('.gm-style-iw');
				$(".gm-style-iw").next("div").hide();
				var iwBackground = iwOuter.prev();
				iwBackground.children(':nth-child(2)').css({
					'display': 'none'
				});
				iwBackground.children(':nth-child(4)').css({
					'display': 'none'
				});
			});
		}


		function pushMarkers(coordx, coordy, image, name, website) {

			if (website != "") {
				var website_link = '<div class="text-center"><a target="_blank" href="' + website + '">Visit</a></div>';
			} else {
				var website_link = '';
			}

			var contentString = '<div class="mapinfo position-relative">\
							<img src="/communities/images/communities/' + image + '" class="img-fluid w-100">\
							<p class="text-center">' + name + '</p>\
							' + website_link + '\
                            <a class="dir-btn" target="_blank" href="https://www.google.com/maps/dir/?api=1&destination=' + coordx + ',' + coordy + '">\
                                <img src="/images/direction-icon.svg" class="">\
                            </a>\
						</div>';

			var latLng = new google.maps.LatLng(coordx, coordy);

			var marker = new google.maps.Marker({
				position: latLng,
				animation: google.maps.Animation.DROP,
				icon: mapPinparks
			});

			markers.push(marker);

			bounds.extend(marker.position);
			marker.setMap(map);
			map.fitBounds(bounds);

			google.maps.event.addListener(marker, 'click', function () {
				infowindow.setContent(contentString);
				infowindow.open(map, marker);
				toggleBounce(marker);
			});

		}

		//  Bounce function 
		function toggleBounce(marker) {
			if (marker.getAnimation() != null) {
				marker.setAnimation(null);
			} else {
				marker.setAnimation(google.maps.Animation.BOUNCE);
				setTimeout(function () {
					marker.setAnimation(null);
				}, 750);
			}
		}

	} /* Google Map End */

	// Community Json File
	var jsonPath = "/data/communities.json";

	$("input[type='radio']").on('change', function () {
		var selectedValue = $("input[name='listingView']:checked").val();
		if (selectedValue == "map") {
			map_initialize();
			$.getJSON(jsonPath, function (data) {
				$.each(data.communities, function (k, v) {
					if (v.coords[0] != "") {
						pushMarkers(v.coords[0], v.coords[1], v.image, v.name, v.website);
					}
				});
			});
		}
	});

	// Material Select Initialization
	var countyVA = ["ClearAll", "Culpeper", "Fairfax", "Loudoun", "Prince William", "Stafford"];
	var countyMD = ["ClearAll", "Anne Arundel", "Baltimore", "Carroll", "Charles", "Frederick", "Harford", "Howard", "Montgomery", "Prince George's", "Queen Anne's", "Talbot"];

	$('.mdb-select').materialSelect();
	$('#select-state').on('change', function () {

		// Now Selling Filter
		var state = this.value;
		var filtered = [];
		$('#filterContainer .listWrap, #testimonials-1Wrap, #testimonialsWrap-2Wrap').hide();
		$('#community-6, #community-7').addClass('mt-0');
		$('#filterContainer')
			.children()
			.filter(function () {
				if ($(this).data("state") == state) {
					filtered.push($(this).attr("id"));
					return filtered;
				}
				if (state == "ClearAll") {
					filtered.push($(this).attr("id"));
					return filtered;
				}
			}).show().css('animation-delay', '0s').css('animation-name', 'fadeInUp').css('visibility', 'visible');
		console.log(filtered);
		if (state == "MD") {
			// $("#community-4, #community-5, #community-6, #community-7").show();
		}
		// Coming Soon Filter
		var filtered2 = [];
		$('#filterContainerComingSoon .listWrap, #filterContainerRecentlyCompleted .listWrap, #testimonials-1Wrap, #testimonialsWrap-2Wrap').hide();
		$('#community-6, #community-7').addClass('mt-0');
		$('#filterContainerComingSoon')
			.children()
			.filter(function () {
				if ($(this).data("state") == state) {
					filtered2.push($(this).attr("id"));
					return filtered2;
				}
				if (state == "ClearAll") {
					filtered2.push($(this).attr("id"));
					return filtered2;
				}
			}).show().css('animation-delay', '0s').css('animation-name', 'fadeInUp').css('visibility', 'visible');
		// Recently Completed
		var filtered3 = [];
		$('#filterContainerRecentlyCompleted')
			.children()
			.filter(function () {
				if ($(this).data("state") == state) {
					filtered3.push($(this).attr("id"));
					return filtered3;
				}
				if (state == "ClearAll") {
					filtered3.push($(this).attr("id"));
					return filtered3;
				}
			}).show().css('animation-delay', '0s').css('animation-name', 'fadeInUp').css('visibility', 'visible');

		map_initialize();

		$.getJSON(jsonPath, function (data) {
			$.each(data.communities, function (k, v) {
				if (v.coords[0] != "" && v.county[1] == state) {
					pushMarkers(v.coords[0], v.coords[1], v.image, v.name, v.website);
				} else if (v.coords[0] != "" && "ClearAll" == state) {
					pushMarkers(v.coords[0], v.coords[1], v.image, v.name, v.website);
				}
			});
		});

		if (state == "MD") {
			// $('.mdb-select-county').materialSelect('destroy');
			$('.mdb-select-county').materialSelect({
				destroy: true
			});
			$('#select-county').find('option').not(':first').remove();
			$('#select-county').removeAttr('disabled');
			for (var i = 0; i < countyMD.length; i++) {
				var option = $('<option>' + countyMD[i] + '</option>');
				$('#select-county').append(option);
			}
			$('.mdb-select-county').materialSelect();
		} else if (state == "VA") {
			// $('.mdb-select-county').materialSelect('destroy');
			$('.mdb-select-county').materialSelect({
				destroy: true
			});
			$('#select-county').removeAttr('disabled');
			$('#select-county').find('option').not(':first').remove();
			for (var i = 0; i < countyVA.length; i++) {
				var option = $('<option>' + countyVA[i] + '</option>');
				$('#select-county').append(option);
			}
			$('.mdb-select-county').materialSelect();
		} else {
			// $('.mdb-select-county').materialSelect('destroy');
			$('.mdb-select-county').materialSelect({
				destroy: true
			});
			$('#select-county').find('option').not(':first').remove();
			$('#select-county').attr('disabled', true);
			$('.mdb-select-county').materialSelect();
		}
		if (($('#filterContainerComingSoon').height()) == 0) {
			$('.comingSoonResult').show();
		}
		if (($('#filterContainerRecentlyCompleted').height()) == 0) {
			$('.recentlyCompletedResult').show();
		}
	})

	$('#select-county').on('change', function () {
		$('.nowSellingResult').hide();
		$('.comingSoonResult').hide();
		$('.recentlyCompletedResult').hide();
		$('#testimonials-1Wrap').show();
		$('#testimonials-2Wrap').show();
		var county = this.value;
		var state = $("#select-state").children("option:selected").val();
		var filtered = [];
		$('#filterContainer .listWrap, #testimonials-1Wrap, #testimonialsWrap-2Wrap').hide();
		$('#community-6, #community-7').addClass('mt-0');
		$('#filterContainer')
			.children()
			.filter(function () {
				if ($(this).data("state") == state && $(this).data("county") == county) {
					filtered.push($(this).attr("id"));
					return filtered;
				}
				if ($(this).data("state") == state && county == "ClearAll") {
					filtered.push($(this).attr("id"));
					return filtered;
				}
			}).show().css('animation-delay', '0s').css('animation-name', 'fadeInUp').css('visibility', 'visible');

		var filtered2 = [];
		$('#filterContainerComingSoon .listWrap, #testimonials-1Wrap, #testimonialsWrap-2Wrap').hide();
		$('#filterContainerComingSoon')
			.children()
			.filter(function () {
				if ($(this).data("state") == state && $(this).data("county") == county) {
					filtered2.push($(this).attr("id"));
					return filtered2;
				}
				if ($(this).data("state") == state && county == "ClearAll") {
					filtered2.push($(this).attr("id"));
					return filtered2;
				}
			}).show().css('animation-delay', '0s').css('animation-name', 'fadeInUp').css('visibility', 'visible');

		var filtered3 = [];
		$('#filterContainerRecentlyCompleted .listWrap, #testimonials-1Wrap, #testimonialsWrap-2Wrap').hide();
		$('#filterContainerRecentlyCompleted')
			.children()
			.filter(function () {
				if ($(this).data("state") == state && $(this).data("county") == county) {
					filtered3.push($(this).attr("id"));
					return filtered3;
				}
				if ($(this).data("state") == state && county == "ClearAll") {
					filtered3.push($(this).attr("id"));
					return filtered3;
				}
			}).show().css('animation-delay', '0s').css('animation-name', 'fadeInUp').css('visibility', 'visible');

		map_initialize();

		$.getJSON(jsonPath, function (data) {
			$.each(data.communities, function (k, v) {
				if (v.coords[0] != "" && v.county[1] == state && v.county[0] == county) {
					pushMarkers(v.coords[0], v.coords[1], v.image, v.name, v.website);
				} else if (v.coords[0] != "" && v.county[1] == state && county == "ClearAll") {
					pushMarkers(v.coords[0], v.coords[1], v.image, v.name, v.website);
				}
			});
		});

		if (($('#filterContainerComingSoon').height()) == 0) {
			$('.comingSoonResult').show();
		}
		if (($('#filterContainerRecentlyCompleted').height()) == 0) {
			$('.recentlyCompletedResult').show();
		}
		if (($('#filterContainer').height()) < 5) {
			$('.nowSellingResult').show();
		}
	})



	// Contact Form Thank you note Data validation
	$(document).on('submit', '#contact_form', function (event) {
		event.preventDefault();
		// Disable the submit button while evaluating if the form should be submitted
		$('#contact_button').prop('disabled', true);

		var re = /^([a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+(\.[a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+)*|"((([ \t]*\r\n)?[ \t]+)?([\x01-\x08\x0b\x0c\x0e-\x1f\x7f\x21\x23-\x5b\x5d-\x7e\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|\\[\x01-\x09\x0b\x0c\x0d-\x7f\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))*(([ \t]*\r\n)?[ \t]+)?")@(([a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.)+([a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.?$/i;
		var contact_fname = document.forms["contact_form"]["firstname"].value;
		var contact_lname = document.forms["contact_form"]["lastname"].value;
		var contact_email = document.forms["contact_form"]["email"].value;
		var is_email = re.test(contact_email);
		if (contact_fname == null || contact_fname == "" || contact_lname == null || contact_lname == "" || contact_email == null || contact_email == "") {
			alert("Required field (*) must be filled out");
			// Reactivate the button if the form was not submitted
			$('#contact_button').prop('disabled', false);
			return false;
		}
		if (!is_email) {
			alert("A valid email address is required");
			// Reactivate the button if the form was not submitted
			$('#contact_button').prop('disabled', false);
			return false;
		} else {
			var data = $(this).serialize();
			$.ajax({
				type: 'POST',
				url: '/includes/swift-php-emailer.php',
				data: data,
				success: function (data) {
					$("#contact_form").fadeOut(500).hide(function () {
						$("#success_message").fadeIn(500).show(function () {
							$("#success_message").html(data);
						});
					});

				}
			});
			return false;
		}
	});

}); /*Document Ready*/