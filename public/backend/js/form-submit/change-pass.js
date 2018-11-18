$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
})

$(document).ready(function () {
	$('#submit-changepass').click(function () {
		var old_pass = $('input[name="old_pass"]').val();
		var new_pass = $('input[name="new_pass"]').val();
		var re_pass = $('input[name="re_pass"]').val();
		$.ajax({
			type: 'post',
			url: 'admin/change-password',
			data: {
				old_pass:old_pass,
				new_pass:new_pass,
				re_pass:re_pass,
			},
			success:function (result) {
				// remove class validate
				$('form .invalid-feedback').remove();
				$('input[name="old_pass"]').removeClass('is-invalid');
				$('input[name="new_pass"]').removeClass('is-invalid');
				$('input[name="re_pass"]').removeClass('is-invalid');

				// check validate
				if (result.old_pass) {
					$('input[name="old_pass"]').val('');
					$('input[name="old_pass"]').addClass('is-invalid');
					$('form #old-pass').append('<div class="invalid-feedback">'+ result.old_pass +'</div>');
				}
				if (result.new_pass) {
					$('input[name="new_pass"]').val('');
					$('input[name="new_pass"]').addClass('is-invalid');
					$('form #new-pass').append('<div class="invalid-feedback">'+ result.new_pass +'</div>');
				}
				if (result.re_pass) {
					$('input[name="re_pass"]').val('');
					$('input[name="re_pass"]').addClass('is-invalid');
					$('form #re-pass').append('<div class="invalid-feedback">'+ result.re_pass +'</div>');
				}
				if (result.success_password) {
					$('input[name="old_pass"]').val('');
					$('input[name="new_pass"]').val('');
					$('input[name="re_pass"]').val('');
					$('#title-notify-change-password').empty();
					$('#title-notify-change-password').append('<div class="alert alert-success" role="alert">'+ result.success_password +'</div>');
					setTimeout(function(){ $('#title-notify-change-password').empty(); }, 3000);
				}
			}
		});
	});
});