$('document').ready(function(){
	$('.searchAjax').keyup(function(){
		var motCle = $(this).val();
		if (motCle.length >= 1) {
			$('.loading').remove();
			var subCategorie = $('.subCategorie').val();
			data = {chaine: motCle, subCategorie: subCategorie};
			var path = $('.formAjax').attr('data-action');
			$.ajax({
				type: 'get',
				url : path,
				data: data,
				dataType: 'json',
				beforeSend: function(){
					$("form .searchAjax").parent().append('<div class="loading"></div>');
				},
				success: function(data){
					$(".aja").empty();
					if (data.message) {
						$(".aja").append("<li><a href='#'>" +data.message+ "</a></li>");
					}
					else{
						$.each(data.produits, function(index, produit) {
							$(".aja").append("<li><a href="+ROOT_URL+"produit/"+produit.id+ ">" +produit.nom+ "</a></li>");
                   		});
					}
					
					$('.loading').remove();
					
				}
			});
			return false;
		}else{
			$(".aja").empty();
		}
		
	});

});
