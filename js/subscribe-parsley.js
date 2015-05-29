$(document).ready(function () {
    $('.js-subscribe-form').parsley().subscribe('parsley:form:validate', function (formInstance) {

        // if one of these blocks is not failing do not prevent submission
        // we use here group validation with option force (validate even non required fields)
        if (formInstance.isValid('block1', true) || formInstance.isValid('block2', true)) {
            $('.invalid-form-error-message').html('');
            return;
        }
        // else stop form submission
        formInstance.submitEvent.preventDefault();

        // and display a gentle message
        $('.error')
            .html("해당 필드를 처리하셔야 됩니다.")
            .addClass("filled");
        return;
    });
});