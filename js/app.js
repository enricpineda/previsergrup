$(document).foundation();
$("#icona-menu-mobil").click(function(){
    $("#menumobil").toggle();
});

$("#boto-enviar").click(function(event){
	event.preventDefault(); //prevent default action 
	var post_url = $("#formulari-contacte").attr("action"); //get form action url
	var request_method = $("#formulari-contacte").attr("method"); //get form GET/POST method
	var form_data = $("#formulari-contacte").serialize(); //Encode form elements for submission
	
	$.ajax({
		url : post_url,
		type: request_method,
		data : form_data
	}).done(function(response){ //
		$("#resposta-enviament").show();
	});
});

    var videoWidth = 1280;
    var  video = $(".video-container video").attr("srcdesk");
    if($(window).width() < 721) {
      videoWidth = 720;
      video = $(".video-container video").attr("srcmob");
    }
    $(".video-container video").attr("width", videoWidth).append('<source src="' + video + '" type="video/mp4" >');

