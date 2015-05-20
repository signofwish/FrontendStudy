jQuery(document).ready(function($){
    $('.js-subscribe-form').validate({
        rules: {
            country: {
                required: function(){
                    return ($('[name="domestic"]:checked').val() == '해외');
                }
            }
        },
        messages: {
            country: {
                required: '해외로 선택한 경우 필수입니다.'
            }
        }
    });
});
