$(document).ready(function () {
	$('.produitAjax').click(function() {
		var id = $(this).attr('id');
		var path = $(this).attr('data-path');
		if (!path) {
			var path = $('.formul').attr('action');
			var qte = $('.qte').val();
			var data = {qte : qte};
		}

		$.ajax({
			type: 'get',
			url: path,
			data: data,
			beforeSend: function(){
				$('#'+id).empty().html('<img src="' + window.loader + '" alt="" />');
			},
			success: function (data) {
				$('.produitRefersh').empty().html(data.articles);
				$('#'+id).hide();;
			}
		});
		return false;
	});

	/** Suppression des produits dans le panier**/

        var options = {
          valueNames: [ 'id', 'nom', 'prix', 'quantite' ]
        };

        // Init list
        var panierList = new List('paniers', options);

        var removeBtns = $('.remove-item-btn');

        // Sets callbacks to the buttons in the list
        refreshCallbacks();

        function refreshCallbacks() {
          // Needed to add new buttons to jQuery-extended object
          	removeBtns = $(removeBtns.selector);
          
          	removeBtns.click(function() {
          		var path = $(this).attr('data-path');
          		var id = $(this).attr('id');
          		var itemId = $(this).closest('tr').find('.id').text();
	          	$.ajax({
					type: 'get',
					url: path,
					beforeSend: function(){
						$('#'+id).empty().html('<img src="' + window.loader + '" alt="" />');
					},
					success: function (data) {
						$('.produitRefersh').empty().html(data.articles);
						$('.message').empty().html(data.success);
            			console.log(itemId);
            			panierList.remove('id', itemId);
					}
				});
				return false;
     		});
        }

});