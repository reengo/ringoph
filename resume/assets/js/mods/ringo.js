var RINGO = {
	init: function(){
		$(".alert").alert()
	},
	sendMail: function(){
		$('#contactForm').submit(function(){
			alert('sending....');
			$.ajax({
			  type: "POST",
			  url: "mail.php",
			  data: { email: $('input[name="email"]').val(), location: $('textarea[name="message"]').val() },
			  error:function(e){
			  	$(e).each(function(){
			  		alert(this);
			  	})
			  },
			  success:function(msg){
			  	alert(msg);
			  }
			}).done(function( msg ) {
			  alert( "Data Saved: " + msg );
			});
		});
	}
}

$(document).ready(function(){
	RINGO.init();
});