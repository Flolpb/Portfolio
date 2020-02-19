console.log('msg.js activé');
$('.btn-send').on('click',function(){

	console.log('wesh');
	var formData = $('form.form-send-msg').serialize();
	console.log(formData);

	$.ajax({
		url : '/index.php/Contact/sendMsg/attempt',
		type : 'POST',
		data : formData,
		success : function (data) {
			if (data.error) {
				$('.dataError').show();
				Swal.fire({
					position : 'center',
					icon : 'error',
					title : 'Un des champs n\'est pas valide !',
					showConfirmButton : false,
					timer : 1500
				});

			} else {
				$('.dataError').hide();

				Swal.fire({
					position : 'center',
					icon : 'success',
					title : 'Votre Message a bien été envoyé !',
					subtitle: 'Redirection en cours',
					showConfirmButton : false,
					timer : 1500

				});

				var timer = setTimeout(function() { // On crée notre compte à rebours
					document.location.href="http://chabinflorent.com";
				}, 2250);

				console.log(timer);
			}

		}
	});
});

