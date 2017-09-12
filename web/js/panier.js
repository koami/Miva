$(document).ready(function () {
	$('.produitAjax').click(function() {
		var id = $(this).attr('id');
		var path = $(this).attr('data-path');
		$.ajax({
			type: 'POST',
			url: path,
			success: function (data) {
				$('.produitRefersh').empty().html(data.articles);
				$('#'+id).hide();
				console.log(data);
			}
		});
		return false;
	});
});