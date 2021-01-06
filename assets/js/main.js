jQuery(document).ready(function($){
    if($('body').hasClass('page-id-6') && !$('body').hasClass('logged-in')){
        $('input#email, input#password').addClass('form-control');
        var forgotPassUrl = $('input#forgotPasswordUrl').val();
        $('input#password').after('<div class="forgot_pass"><a href="'+forgotPassUrl+'">Forgot Password?</a></div>');
        $('input#wp-submit').addClass('btn btn-primary btn-round btn-block btn-circle');
    }
});