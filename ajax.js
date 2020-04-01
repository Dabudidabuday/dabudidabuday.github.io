// $( document ).ready(function() {
//     $("#consultBtn").click(
// 		function(){
// 			sendAjaxForm('result_form', 'ajax_form', 'action_ajax_form.php');
// 			return false; 
// 		}
// 	);
// });


// $('#ajax_form').submit(function(e) {
// 	e.preventDefault()
// 	let self = $(this)
// 	console.log(self.serialize());
// 	$.ajax({
// 		url: '/mail.php',//url страницы (action_ajax_form.php)
// 		type: "POST", //метод отправки //формат данных
// 		data: self.serialize(),  // Сеарилизуем объект
// 		success: function (response) { //Данные отправлены успешно
// 			result = jQuery.parseJSON(response);
// 			document.getElementById('result_form').innerHTML = "Имя: " + result.name + "<br>Телефон: " + result.phonenumber;

// 		},
// 		error: function (response) { // Данные не отправлены
// 			document.getElementById('result_form').innerHTML = "Ошибка. Данные не отправленны.";
// 		}
// 	});
// });
 

$('#ajax_form').submit(function (e) {
	e.preventDefault();
	var $_form = $(this);
	var formData = $_form.serialize();

	$.ajax({
		type: 'POST',
		url: $_form.attr('action'),
		data: formData,
		success: function (data) {
			$_form.trigger('reset');
			$('.modal').removeClass('modal__show');
			// $_form.find('.form-success').stop(true, true).fadeIn(300).delay(2000).fadeOut(300);
			$('#form-success').addClass('modal__show');
		},
		error: function (xhr, str) {
			$_form.find('.form-error').stop(true, true).fadeIn(300).delay(2000).fadeOut(300);
		}
	});

	return false;
});

