$("#ajax_form").validate({
	rules: {
		name: {
			required: true,
			minlength: 2,
			maxlength: 20
		},
		phone: {
			required: true,
			number: true
		},
		email: {
			email: true
		}
	},

	messages: {
		name: {
			required: "Обов'язкове поле для заповнення",
			minlength: "Ім'я не повинно містити менше 2 символів",
			maxlength: "Ім'я не повинно містити більше 20 символів"
		},
		phone: {
			required: "Обов'язкове поле для заповнення",
			number: "Введіть телефон у форматі ххх-ххх-хх-хх"
		},
		email: {
			required: "Обов'язкове поле для заповнення",
			email: "Введіть коректний e-mail"
		}
	 },

	submitHandler: function(form) {
	  $(form).ajaxSubmit({
		success: function(data) {
			$(form).trigger('reset');
			$('.modal').removeClass('modal__show');
			$('#form-success').addClass('modal__show');
	  }});
	}
});

$("#ajax_partners").validate({
	rules: {
		name: {
			required: true,
			minlength: 2,
			maxlength: 20
		},
		phone: {
			required: true,
			number: true
		},
		email: {
			email: true
		}
	},

	messages: {
		name: {
			required: "Обов'язкове поле для заповнення",
			minlength: "Ім'я не повинно містити менше 2 символів",
			maxlength: "Ім'я не повинно містити більше 20 символів"
		},
		phone: {
			required: "Обов'язкове поле для заповнення",
			number: "Введіть телефон у форматі ххх-ххх-хх-хх"
		},
		email: {
			required: "Обов'язкове поле для заповнення",
			email: "Введіть коректний e-mail"
		}
	 },

	submitHandler: function(form) {
	  $(form).ajaxSubmit({
		success: function(data) {
			$(form).trigger('reset');
			$('.modal').removeClass('modal__show');
			$('#form-success').addClass('modal__show');
	  }});
	}
  });

$("#ajax_buy").validate({
	rules: {
		name: {
			required: true,
			minlength: 2,
			maxlength: 20
		},
		phone: {
			required: true,
			number: true
		},
		email: {
			email: true
		}
	},

	messages: {
		name: {
			required: "Обов'язкове поле для заповнення",
			minlength: "Ім'я не повинно містити менше 2 символів",
			maxlength: "Ім'я не повинно містити більше 20 символів"
		},
		phone: {
			required: "Обов'язкове поле для заповнення",
			number: "Введіть телефон у форматі ххх-ххх-хх-хх"
		},
		email: {
			required: "Обов'язкове поле для заповнення",
			email: "Введіть коректний e-mail"
		}
	 },

	submitHandler: function(form) {
	  $(form).ajaxSubmit({
		success: function(data) {
			$(form).trigger('reset');
			$('.modal').removeClass('modal__show');
			$('#form-success').addClass('modal__show');
	  }});
	}
});

$("#ajax_feedback").validate({
	rules: {
		name: {
			required: true,
			minlength: 2,
			maxlength: 20
		},
		phone: {
			required: true,
			number: true
		},
		email: {
			email: true
		}
	},

	messages: {
		name: {
			required: "Обов'язкове поле для заповнення",
			minlength: "Ім'я не повинно містити менше 2 символів",
			maxlength: "Ім'я не повинно містити більше 20 символів"
		},
		phone: {
			required: "Обов'язкове поле для заповнення",
			number: "Введіть телефон у форматі ххх-ххх-хх-хх"
		},
		email: {
			required: "Обов'язкове поле для заповнення",
			email: "Введіть коректний e-mail"
		}
	 },

	submitHandler: function(form) {
	  $(form).ajaxSubmit({
		success: function(data) {
			$(form).trigger('reset');
			$('#overlay').addClass('modal__show');

			$('#form-success').addClass('modal__show');
	  }});
	}
});
 

// $('#ajax_form').submit(function (e) {
// 	e.preventDefault();
// 	var $_form = $(this);
// 	var formData = $_form.serialize();

// 	$.ajax({
// 		type: 'POST',
// 		url: $_form.attr('action'),
// 		data: formData,
// 		success: function (formData) {
// 			if(formData !='') {
// 				$_form.trigger('reset');
// 			$('.modal').removeClass('modal__show');
// 			// $_form.find('.form-success').stop(true, true).fadeIn(300).delay(2000).fadeOut(300);
// 			$('#form-success').addClass('modal__show');
// 			}
			
// 		},
// 		error: function (xhr, str) {
// 			$_form.find('.form-error').stop(true, true).fadeIn(300).delay(2000).fadeOut(300);
// 		}
// 	});

// 	return false;
// });


// $('#ajax_partners').submit(function (e) {
// 	e.preventDefault();
// 	var $_form = $(this);
// 	var formData = $_form.serialize();

// 	$.ajax({
// 		type: 'POST',
// 		url: $_form.attr('action'),
// 		data: formData,
// 		success: function (data) {
// 			$_form.trigger('reset');
// 			$('.modal').removeClass('modal__show');
// 			// $_form.find('.form-success').stop(true, true).fadeIn(300).delay(2000).fadeOut(300);
// 			$('#form-success').addClass('modal__show');
// 		},
// 		error: function (xhr, str) {
// 			$_form.find('.form-error').stop(true, true).fadeIn(300).delay(2000).fadeOut(300);
// 		}
// 	});

// 	return false;
// });

// $('#ajax_buy').submit(function (e) {
// 	e.preventDefault();
// 	var $_form = $(this);
// 	var formData = $_form.serialize();

// 	$.ajax({
// 		type: 'POST',
// 		url: $_form.attr('action'),
// 		data: formData,
// 		success: function (data) {
// 			$_form.trigger('reset');
// 			$('.modal').removeClass('modal__show');
// 			// $_form.find('.form-success').stop(true, true).fadeIn(300).delay(2000).fadeOut(300);
// 			$('#form-success').addClass('modal__show');
// 		},
// 		error: function (xhr, str) {
// 			$_form.find('.form-error').stop(true, true).fadeIn(300).delay(2000).fadeOut(300);
// 		}
// 	});

// 	return false;
// });

// $('#ajax_feedback').submit(function (e) {
// 	e.preventDefault();
// 	var $_form = $(this);
// 	var formData = $_form.serialize();

// 	$.ajax({
// 		type: 'POST',
// 		url: $_form.attr('action'),
// 		data: formData,
// 		success: function (data) {
// 			$_form.trigger('reset');
// 			$('.modal').removeClass('modal__show');
// 			// $_form.find('.form-success').stop(true, true).fadeIn(300).delay(2000).fadeOut(300);
// 			$('#form-success').addClass('modal__show');
// 		},
// 		error: function (xhr, str) {
// 			$_form.find('.form-error').stop(true, true).fadeIn(300).delay(2000).fadeOut(300);
// 		}
// 	});

// 	return false;
// });