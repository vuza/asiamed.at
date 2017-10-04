$(window).resize(function(){
	$("#title").height(0);
	$("#title").height($("#titleContent").height() + 200);
})

$(document).ready(function(){

	function sendEmail(from, text){
		$.ajax({
			url:"mail.php",
			tpye:"GET",
			data:{mail:from,text:text, captcha: grecaptcha.getResponse()},
			success:function(result){
				if(result != '')
					emailNot(result);
				else
					emailOk();
			},
			error:function(){
				emailNot();
			}
		})
	}

	function emailOk(){
		$("#emailErrorGlyphicon").addClass("invisible");
		$("#emailFormGroup").removeClass("has-error");
		$("#emailWarning").addClass("invisible");
		$("#emailSuccess").removeClass("invisible");
	}

	function emailNot(message){
		if(message != ''){
			$('#emailWarning').html(message);
			grecaptcha.reset();
		}else{
			$('#emailWarning').html('&Uuml;berpr&uuml;fen Sie Ihre E-Mail-Adresse.');
			$("#emailErrorGlyphicon").removeClass("invisible");
			$("#emailFormGroup").addClass("has-error");
		}
		$("#emailWarning").removeClass("invisible");
		$("#emailSuccess").addClass("invisible");
	}

	function validateEmail(email) { 
	    var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
	    return re.test(email);
	}

	$("#sendContact").click(function(e){
		e.preventDefault();
		if(validateEmail($("#inputEmail3").val()) == true){
			sendEmail($("#inputEmail3").val(),$("#emailText").val());
		} else{
			emailNot();
		}
	})

	$(window).scroll(function(){
		$("#titleContent").css("margin-top",$(window).scrollTop()/2+"px");
	})

	$(window).resize();
});

function captchaSet(){
	$('#sendContact').removeAttr('disabled');
}

function captchaExpired(){
	$('#sendContact').attr('disabled', '');
}