jQuery(document).ready(function($){
    $('.js-subscribe-form').validate({
        debug: true,
        rules: {
            country: {
                required: function(){
                    return ($('[name="domestic"]:checked').val() == '해외');
                }
            },
            start_hosoo: {
                required: function(){
                    return ($('[name="gigan"]:checked').length > 0)
                }
            },
            gigan: {
                required: true
            },
            pay_method: {
                required: function(){
                    return ($('[name="pay_method"]:checked').val() == '');
                }
            },
            hobby: {
                minlength: function(){
                    return ($('[name="hobby"]:checked').length > 0) ? 2 : 0;
                }
            },
            UserEmail: {
                remote: "subscribe-ajax-validation.php"
            },
            pw2: {
                required: true,
                equalTo: '#pw'
            }
        },
        messages: {
            country: {
                required: '해외로 선택한 경우 필수입니다.'
            },
            start_hosoo: {
                required: '기간을 선택했으면 해당 항목은 필수입니다.'
            },
            gigan: {
                required: '기간은 필수입니다.'
            },
            pay_method: {
                required: '결제를 선택한 경우 필수입니다.'
            },
            hobby: {
                minlength: '2개 이상 선택하세요.'
            }
        }
        //,
        //submitHandler: function(){
        //    if($('[name="hobby"]:checked').length > 0 && $('[name="hobby"]:checked').length < 2){
        //        alert('취미는 2개 이상 선택하셔야 합니다.');
        //        return false;
        //    }
        //    return true;
        //}
    });
});

