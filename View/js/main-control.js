/**
 * 
 */



$(document).delegate('#lenguage','click',function () {
	var sbIdioma= $("#lenguage").text();
	if(sbIdioma=="English"){
	  window.location.href = 'main.php?action=FormMain&lenguage=ENG';
	}else{
	  window.location.href = 'main.php?action=FormMain&lenguage=SPA';
	}	
});



$(document).delegate('#sendMail','click',function(){
	
	$("#cargando").show();
	
	var sbName = $("#contact_name").val();
	var sbEmail = $("#contact_email").val();
	var sbSubject = "Contacto";//$("#subject").val();
	var sbMessage = $("#contact_message").val();

	/*
	$.fancybox.init();
	$.fancybox.showActivity(); 
	$.fancybox("../Controller/email.php?action=SendMail&sbName="+sbName+"&sbEmail="+sbEmail+"&sbSubject="+sbSubject+"&sbMessage="+sbMessage,
	{
		'width'                   : '20%',
		'height'                  : '10%',
		'autoScale'               : false,
		'transitionIn'            : 'none',
		'transitionOut'           : 'none',
		'type'                    : 'iframe',
		'showCloseButton'         : true,
		'hideOnContentClick'      : false,
		'hideOnOverlayClick'      : false

    });
    */
	
	
	$.ajax({
		type: "POST",
		url: "../Controller/email.php?action=SendMail",
		dataType: 'html',
		data: "sbName="+sbName+"&sbEmail="+sbEmail+"&sbSubject="+sbSubject+"&sbMessage="+sbMessage,
		beforeSend:function(){
		},
		success: function(data){ 
			//Modal Bootstrap
			$("#content1").html(data);
			$("#message1").modal('show');
			
			$("#contact_name").val("");
			$("#contact_email").val("");
			//$("#subject").val("");
			$("#contact_message").val("");
			
			var div = document.getElementById("cargando");
			div.style.display="none";
		},
		complete: function(){
			var div = document.getElementById("cargando");
			div.style.display="none";
		}
     });//$.ajax({
     
    
	
});//("#sendMail").click(function(){
