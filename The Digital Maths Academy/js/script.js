
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



/*-----onclick functions for xml content to div------*/
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

/*-----fade to functions for images/image classes -----*/
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

/*-----alert function for when newsletter in subscribed too -----*/
function newsletterConfirmation(){
	alert("Thank you for signing up to our newsletter, your details shall be posted to our database and you shall recieve our newsletters in the coming weeks");
}
/*-----refresh page function for on buttons etc-----*/
  function Refresh() {
       window.parent.location = window.parent.location.href;
    }
    






