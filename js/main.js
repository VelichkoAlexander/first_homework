(function () {

    var app = {
        initialize: function () {
            this.modules();
            this.setUpListeners();
        },
        modules: function () {

        },
        setUpListeners: function () {
            $('form').on('submit', app.submitForm);
            $('button').on('submit', app.submitForm);
            $('.sent').on('submit', app.submitForm);
            $('form').on('keydown', 'input', app.removeError);


        },
        submitForm: function (e) {
            e.preventDefault();

            form = $(this);
            console.log(form);

            if (app.validateForm(form) === false) return false;
        },
        validateForm: function () {
            var inputs = form.find('input');
            valid = true;

            inputs.tooltip('destroy');

            $.each(inputs, function (index, val) {
                var input = $(val),
                    val = input.val(),
                    formGroup = input.parents('.form-group'),
                    label = formGroup.find('label').text().toLowerCase(),
                    textError = label;
                    if (val.length === 0) {
                        if(label==="email"){
                            formGroup.addClass('has-error').removeClass('has-success');
                            input.tooltip({
                                trigger: "manual",
                                placement: "right",
                                title: textError

                            }).tooltip('show');
                        }
                    formGroup.addClass('has-error').removeClass('has-success');
                    input.tooltip({
                        trigger: "manual",
                         placement: "left",
                        title: textError

                    }).tooltip('show');
                    valid = false
                } else {
                    formGroup.addClass('has-success').removeClass('has-error');
                }

            });
            return valid;
        },
        removeError: function () {
            $(this).tooltip('destroy').parents('.form-group').removeClass('has-error');
        },
        clearFeedback: function () {

        }

    }
    app.initialize();
}());

