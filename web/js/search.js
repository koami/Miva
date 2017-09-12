$('document').ready(function(){
	$('.searchAjax').keyup(function(){
		var motCle = $(this).val();
		if (motCle.length >= 1) {
			var path = $('.formAjax').attr('data-action');
			$.ajax({
				type: 'post',
				url : path,
				data: 'chaine=' +motCle,
				dataType: 'json',
				success: function(data){
					//console.log(data);
					$(".aja").empty();
					$.each(data.produits, function(index, produit) {
						//$(".aja").append($('<a class="nav-link" href="#">',{ value : value.nom , text: value.nom }));
						//var path = {{ path('presentation', { 'id' : produit.id }) }};
						//console.log(path);
						$(".aja").append("<li><a href='#'>" +produit.nom+ "</a></li>");
                       console.log(produit);
                   });
					//console.log(data);
					//$('body').empty().html(data.produits);
				}
			});
			return false;
		}
		
	});

});
