$(document).ready(function(e) {

	

	initListeners();



});

function initListeners() {
	$('.team-member').click(function(e){
		$('#team-photos').addClass('bio-showing');
		$('#team-description').addClass('bio-showing');
		$(this).addClass('showing');
		var img = new Image();
		img.src=$(this)[0].childNodes[0].src;
		img.height=180;
		img.width=180;
		console.log(img);
		$('#team-description-photo').html(img);
		var name=$(this).children('.team-text').children('.team-name').html();
		$('#team-description-name').html(name);
		var name=$(this).children('.team-text').children('.team-subteam').html();
		$('#team-description-team').html(name);
		var name=$(this).children('.team-text').children('.team-description').html();
		$('#team-description-description').html(name);
	});
	$('#s').keypress(function(e){
		//console.log(e);
		//$('#searchform').submit();
	
	
	
	});
}