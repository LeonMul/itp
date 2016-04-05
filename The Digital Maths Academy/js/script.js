
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

function loadAdditionData(){
$.ajax({
	url: "addition.php"
}).done(function(data) { // data what is sent back by the php page
  $('#testDiv').html(data); // display data
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












/*g
function submitConfirm(){

    alert("Thanks for your submission, your details shall be added to our database and we shall email you shortly!");
}
*/
