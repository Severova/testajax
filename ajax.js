$(function() {

    $('.js-calculate').click(function() {

        var width = ($('input.js-width').val());
        var length = ($('input.js-length').val());
        var area = width * length;

        var material = $('.js-material--radio:checked').data('name');
        var options = [];

        $('.js-option').each(function () {
            if ($(this).val()) {
                options[parseInt($(this).data('id'))] = parseInt($(this).val())//начинается с 1
            }
        });

        $.ajax({
            url:"calc.php",
            type: "POST",
            data: {area:area, material:material, options:options},
            dataType: 'html',

            success: function (result) {
                $('.js-result').html(result);
                console.log(result);
                
            }
        }).fail(function() {
            console.log( "ajax error" );
        });
    });


});