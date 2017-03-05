$(document).ready(function() {
    $(".validateForm").each(function() {
        $(this).submit(function() {
            var valid = 0;
            $(".required").each(function() {
                var fieldVal = $.trim($(this).val());
                if(fieldVal === '' || fieldVal === null) {
                    var fieldId = $(this).prop("id");
                    $("#error_"+fieldId).show();
                    valid++;
                } else {
                    $("#error_"+fieldId).hide();
                }
            });
            if(valid) {
                return false;
            }
        });
    });
});
