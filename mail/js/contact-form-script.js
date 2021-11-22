// Reservation Form 
$("#reservation-form, #reservation-form-home").validator().on("submit", function (event) {
    if(event.isDefaultPrevented()) {
		formError(this);
    } else {
        event.preventDefault();
        reservationSubmitForm(this);
    }
});
function reservationSubmitForm(formName){
	var dataString = $(formName).serialize();
    $.ajax({
        type: "POST",
        url: "ajax-submissions.php",
        data: dataString,
        success : function(text){
			var result = JSON.parse(text);
            if(result.status == "success"){
                reservationFormSuccess(result.aptid);
            } else {
                formError(this);
                reservationSubmitMSG(false, result.errorMsg);
            }
        }
    });
}
function reservationFormSuccess(aptId){
    $("#reservation-form")[0].reset();
	var msg = "Thank you! ";
	msg += "Your appointment id: " + aptId;
    reservationSubmitMSG(true, msg);
	setTimeout(function() {
		if($('#appointment').hasClass('show')) {
			$('#appointment').modal('hide');
		} else {
			$('#appointment2').modal('hide');
		}
	}, 3000);
}
function reservationFormError(){
    $("#reservation-form").removeClass().addClass('animated').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
        $(this).removeClass();
    });
}
function reservationSubmitMSG(valid, msg){
    if(valid){
        var notifType = "success";
    } else {
        var notifType = "error";
    }
	console.log(msg);
	notif({
		msg: msg,
		type: notifType,
		position: "center"
	});
    //$("#msgSubmitRes").removeClass().addClass(msgClasses).text();
}
// Contact Form
$("#contactForm").validator().on("submit", function (event) {
    if (event.isDefaultPrevented()) {
		formError(this);
    } else {
        event.preventDefault();
        submitForm();
    }
});
function submitForm(){
    // Initiate Variables With Form Content
    var fname = $("#fname").val();
	var lname = $("#lname").val();
    var email = $("#email").val();
    var message = $("#message").val();
	var dataString = $('#contactForm').serialize();
	//alert(dataString);
    $.ajax({
        type: "POST",
        url: "mail/php/form-process.php",
        data: dataString,
        success : function(text){
            if (text == "success"){
                formSuccess();
            } else {
                formError(this);
                submitMSG(false,text);
            }
        }
    });
}
function formSuccess(){
    $("#contactForm")[0].reset();
    submitMSG(true, "Message Submitted!")
}
function formError(element){
    $(element).removeClass().addClass('wow animated flash').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
        $(this).removeClass();
    });
}
function submitMSG(valid, msg){
    if(valid){
        var msgClasses = "h3 text-center tada animated text-success";
    } else {
        var msgClasses = "h3 text-center text-danger";
    }
    $("#msgSubmit").removeClass().addClass(msgClasses).text(msg);
}
