var Hisite = (function () {

    var publicMethods = {
        updateCart: function (topcartUrl, callback) {
            $('#top-cart i').replaceWith('<i class="fa fa-refresh fa-spin"></i>');
            $.post(topcartUrl, function(data) {
                $('#top-cart').replaceWith( data );
            }).done(callback());
        }
    };

    return publicMethods;

})();
