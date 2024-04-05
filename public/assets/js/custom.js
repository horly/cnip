$('#send-message').click(function(){
    var first_name = $('#first_name');
    var last_name = $('#last_name');
    var phone_number = $('#phone_number');
    var email_addr = $('#email_addr');
    var message_text = $('#message_text');

    var first_name_error = $('#first_name-error');
    var last_name_error = $('#last_name-error');

    if(first_name.val() != "" && /^[a-zA-Z ÀÁÂÃÄÅàáâãäåÒÓÔÕÖØòóôõöøÈÉÊËèéêëÇçÌÍÎÏìíîïÙÚÛÜùúûüÿÑñ]+$/.test(first_name.val())) {
        first_name.removeClass('is-invalid');
        first_name_error.text("");

        if(last_name.val() != "" && /^[a-zA-Z ÀÁÂÃÄÅàáâãäåÒÓÔÕÖØòóôõöøÈÉÊËèéêëÇçÌÍÎÏìíîïÙÚÛÜùúûüÿÑñ]+$/.test(last_name.val())) {
            last_name.removeClass('is-invalid');
            last_name_error.text("");

        } else {
            last_name.addClass('is-invalid');
            last_name_error.text(last_name_error.attr('message'));
        }
    } else {
        first_name.addClass('is-invalid');
        first_name_error.text(first_name_error.attr('message'));
    }
});