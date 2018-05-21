function validateForm() {
	var name = $("#name").val();
	var author = $("#author").val();
	var YearOfPublish = $("#publishYear").val();
	var language = $("#language").val();
	var category = $("#category").val();
	var status = true;
	if (name === "") {
		status = false;
		$("#name").css("borderColor", "red");
		$("#name_error").text("Name Can't Be Empty");
	} else {
		$("#name").css("borderColor", "");
		$("#name_error").text("");
	}



	if (author === "") {
		status = false;
		$("#author").css("borderColor", "red");
		$("#author_error").text("Please Enter The Author Name");
	} else {
		$("#author").css("borderColor", "");
		$("#author_error").text("");
	}


	if (YearOfPublish === "") {
		status = false;
		$("#publishYear").css("borderColor", "red");
		$("#year_error").text("Please Fill Year Of Publish");
	} else {
		$("#publishYear").css("borderColor", "");
		$("#year_error").text("");
	}

	if (language === "") {
		status = false;
		$("#language").css("borderColor", "red");
		$("#language_error").text("Please Fill Language");
	} else {
		$("#name").css("borderColor", "");
		$("#name_error").text("");
	}



	if (category === "") {
		status = false;
		$("#category").css("borderColor", "red");
		$("#category_error").text("Category Can't Be Empty");
	} else {
		$("#category").css("borderColor", "");
		$("#category_error").text("");
	}

	return status;

}



function validateregister() {
	var email = $("#email").val();
	var password1 = $("#password1").val();
	var password2 = $("#password2").val();
	var title = $("#title").val();
	var name = $("#name").val();
	var mobile = $("#mobile").val();
	var message = $("#heard").val();
	var status = true;

	if (email === "") {
		status = false;
		$("#email").css("borderColor", "red");
		$("#email_error").text("Invalid Email");
	} else {
		$("#email").css("borderColor", "");
		$("#email_error").text("");
	}


	if (password1 === "" || password2 == "") {
		$("#password1").css("borderColor", "red");
		$("#password2").css("borderColor", "red");
		$("#password_match_error").text("Password & Confirm Password must be filled");
		$("#password_match_error").css("color", "red");
	} else if (password1 == password2) {
		$("#password1").css("borderColor", "");
		$("#password2").css("borderColor", "");
		$("#password_match_error").text("Passwords matched");
		$("#password_match_error").css("color", "green");
	} else {
		$("#password1").css("borderColor", "red");
		$("#password2").css("borderColor", "red");
		$("#password_match_error").text("Password and confirm password mismatched");
		$("#password_match_error").css("color", "red");

	}

	if (title === "") {
		status = false;
		$("#title").css("borderColor", "red");
		$("#title_error").text("Choose title");
	} else {
		$("#title").css("borderColor", "");
		$("#title_error").text("");
	}

	if (name === "") {
		status = false;
		$("#name").css("borderColor", "red");
		$("#name_error").text("Invalid Name");
	} else {
		$("#name").css("borderColor", "");
		$("#name_error").text("");
	}

	if (mobile === "") {
		status = false;
		$("#mobile").css("borderColor", "red");
		$("#mobile_error").text("Invalid Mobile");
	} else {
		$("#mobile").css("borderColor", "");
		$("#mobile_error").text("");
	}

	if (message === "") {
		status = false;
		$("#heard").css("borderColor", "red");
		$("#hearderror").text("Enter Message ");
	} else {
		$("#heard").css("borderColor", "");
		$("#hearderror").text("");
	}
	return status;
}



/**************************************************************************************/




function validatelogin() {

	var email = $("#email").val();
	var password = $("#password").val();
	var status = true;
	if (email === "") {
		status = false;
		$("#email").css("borderColor", "red");
		$("#email_error").text("Invalid Email");
	} else {
		$("#email").css("borderColor", "");
		$("#email_error").text("");
	}


	if (password === "") {
		status = false;
		$("#password").css("borderColor", "red");
		$("#password_error").text("Invalid password");
	} else {
		$("#password").css("borderColor", "");
		$("#password_error").text("");
	}
	return status;
}


/******************************************************************************************/


function validatereserve() {
	var email = $("#email").val();
	var bookName = $("#bookName").val();
	var DateOfBooking = $("#DatefBooking").val();
	var bookstatus = $("#bookstatus").val();
	var status = true;


	if (email === "") {
		status = false;
		$("#email").css("borderColor", "red");
		$("#email_error").text("Invalid Email");
	} else {
		$("#email").css("borderColor", "");
		$("#email_error").text("");
	}

	if (bookName === "0") {
		status = false;
		$("#bookName").css("borderColor", "red");
		$("#bookName_error").text("Choose book");
	} else {
		$("#bookName").css("borderColor", "");
		$("#bookName_error").text("");
	}




	if (DateOfBooking === "") {
		status = false;
		$("#DateOfBooking").css("borderColor", "red");
		$("#DateOfBooking_error").text("Please Fill Date Of Booking");
	} else {
		$("#DateOfBooking").css("borderColor", "");
		$("#DateOfBooking_error").text("");
	}

	if (!($('#bookstatus').is(':checked'))) {
		status = false;
		$("#bookstatus").html("false");
	} else {
		return status;
	}
}
