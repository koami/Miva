function rateMedia(mediaId, rate, numStar, starWidth) {
    $('#group' + mediaId + ' .star_bar #' + rate).removeAttr('onclick'); // Remove the onclick attribute: prevent multi-click
    $('.box' + mediaId).html('<img src="' + window.loader + '" alt="" />');
    var data = {mediaId: mediaId, rate: rate}; // Create JSON which will be send via Ajax

    $.ajax({ // JQuery Ajax
        type: 'POST',
        url: ROOT_URL + 'ajax/starrating/update/data', // URL to the PHP file which will insert new value in the database
        data: data, // We send the data string
        dataType: 'json',
        timeout: 3000,
        beforeSend: function(){
            //$('.box' + mediaId).html('<img src="' + window.loader + '" alt="" />'); // Display a processing icon
            //$('.box' + mediaId).parent().append('<img src="' + window.loader + '" alt="" />');
        },
        success: function(response) {
            $.cookie("symfonyRatingSystem" + mediaId, "Rated", { expires : 1 }); // Add jQuery Cookie Plugin to use this function
            $('.box' + mediaId).remove(); // suppression de l'image loading
            // We update the rating score and number of rates
            $('.resultMedia' + mediaId).html('<div style="font-size: small; color: grey">'+ response.avg + '/' + numStar + '(' + response.nbrRate + 'vote)</div>');
            // We recalculate the star bar with new selected stars and unselected stars
            var nbrPixelsInDiv = numStar * starWidth;
            var numEnlightedPX = Math.round(nbrPixelsInDiv * response.avg / numStar);
            $('#group' + mediaId + ' .star_bar').attr('style', 'width:' + nbrPixelsInDiv + 'px; height:' + starWidth + 'px; background: linear-gradient(to right, #5E0F0F 0%,#5E0F0F ' + numEnlightedPX + 'px,#ccc ' + numEnlightedPX + 'px,#ccc '+ nbrPixelsInDiv +'px);');
            $.each($('#group' + mediaId + ' .star_bar > div'), function () {
                $(this).removeAttr('onmouseover onclick');
            });
        },
        error: function() {
            $('#box').text('Problem');
        }
    });
}

function overStar(mediaId, myRate, numStar) {
    for ( var i = 1; i <= numStar; i++ ) {
        if (i <= myRate) $('#group' + mediaId + ' .star_bar #' + i).attr('class', 'star_hover');
        else $('#group' + mediaId + ' .star_bar #' + i).attr('class', 'star');
    }
}

function outStar(mediaId, myRate, numStar) {
    for ( var i = 1; i <= numStar; i++ ) {
        $('#group' + mediaId + ' .star_bar #' + i).attr('class', 'star');
    }
}