
//Greyscale Icons on hover
$(".footerIcon").hover(function() {
  $(".footerIcon").fadeIn(500);
});



/*Subjects Image Fade-in on hover
$(document).ready(function(){
	$('.subjectHomeImg').mouseenter(function(){
		$(this).fadeTo('Slow',1);
	});	
});

$(document).ready(function(){
	$('.subjectHomeImg').mouseleave(function(){
		$(this).fadeTo('Slow',0.7);
	});	
});
*/



/*ajax xml thing*/
function loadGamesData(){
$.ajax({
	url: "Games.php"
}).done(function(data) { // data what is sent back by the php page
  $('#testDiv').html(data); // display data
});
}

function loadBreakData(){
$.ajax({
	url: "Break.php"
}).done(function(data) { // data what is sent back by the php page
  $('#testDiv').html(data); // display data
});
}

function loadWaterData(){
$.ajax({
	url: "Water.php"
}).done(function(data) { // data what is sent back by the php page
  $('#testDiv').html(data); // display data
});
}

function loadLinksData(){
$.ajax({
	url: "links.php"
}).done(function(data) { // data what is sent back by the php page
  $('#testDiv').html(data); // display data
});
}

function loadAboutData(){
$.ajax({
	url: "about.php"
}).done(function(data) { // data what is sent back by the php page
  $('#testDivOne').html(data); // display data
});
}

function loadSpecialData(){
$.ajax({
	url: "special.php"
}).done(function(data) { // data what is sent back by the php page
  $('#testDivTwo').html(data); // display data
});
}

function loadInformationData(){
$.ajax({
	url: "information.php"
}).done(function(data) { // data what is sent back by the php page
  $('#testDivThree').html(data); // display data
});
}

function loadSecureData(){
$.ajax({
	url: "secure.php"
}).done(function(data) { // data what is sent back by the php page
  $('#testDivFour').html(data); // display data
});
}

function loadTimeData(){
$.ajax({
	url: "time.php"
}).done(function(data) { // data what is sent back by the php page
  $('#testDivFive').html(data); // display data
});
}

function loadCookiesData(){
$.ajax({
	url: "cookie.php"
}).done(function(data) { // data what is sent back by the php page
  $('#testDivSix').html(data); // display data
});
}

function loadMoreData(){
$.ajax({
	url: "more.php"
}).done(function(data) { // data what is sent back by the php page
  $('#testDivSeven').html(data); // display data
});
}


$(document).ready(function(){
	$('.imgContact').mouseenter(function(){
		$(this).fadeTo('Slow',1.0);
	});	
});

$(document).ready(function(){
	$('.imgContact').mouseleave(function(){
		$(this).fadeTo('Slow',0.6);
	});	
});


function newsletterConfirmation(){
	alert("Thank you for signing up to our newsletter, your details shall be posted to our database and you shall recieve our newsletters in the coming weeks");
}

  function Refresh() {
       window.parent.location = window.parent.location.href;
    }
    


//map stuff geolocation
var x = document.getElementById("demo");
								
	function getLocation() {
		if (navigator.geolocation) {
								        navigator.geolocation.getCurrentPosition(showPosition, showError);
								    } else {
								        x.innerHTML = "Geolocation is not supported by this browser.";
								    }
								}
								
								function showPosition(position) {
								    var latlon = position.coords.latitude + "," + position.coords.longitude;
								    var img_url = "http://maps.googleapis.com/maps/api/staticmap?center="+latlon+"&zoom=18&size=800x300&sensor=false";
								    document.getElementById("mapholder").innerHTML = "<img src='"+img_url+"'>";
								}
								
								function showError(error) {
								    switch(error.code) {
								        case error.PERMISSION_DENIED:
								            x.innerHTML = "User denied the request for Geolocation."
								            break;
								        case error.POSITION_UNAVAILABLE:
								            x.innerHTML = "Location information is unavailable."
								            break;
								        case error.TIMEOUT:
								            x.innerHTML = "The request to get user location timed out."
								            break;
								        case error.UNKNOWN_ERROR:
								            x.innerHTML = "An unknown error occurred."
								            break;
								    }
								}



