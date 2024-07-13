let surveyForm = document.getElementById("surveyForm");


function hide_form() {
	surveyForm.style.opacity = "0";
	surveyForm.style.visibility = "hidden";
	surveyForm.style.animation = "disappear 1.5s";
}


function delay_form_submission(event) {
	hide_form();
	event.preventDefault();

	setTimeout(function () {
		window.location.href = "process_form.php";
	}, 1500);
}
