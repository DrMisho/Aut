$(function () {
    $('form .html5Validate').on('change invalid', function() {
        var textfield = $(this).get(0);
        textfield.setCustomValidity('');
        if (!textfield.validity.valid) {
            textfield.setCustomValidity($(textfield).data('trans-required'));
        }
    });
});
