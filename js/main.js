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
            $('form').on('keydown', 'input', app.removeError);
        },
        submitForm: function (e) {
            e.preventDefault();

            form = $(this);

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
                    lable = formGroup.find('lable').text().toLowerCase(),
                    textError = "Введите" + lable;
                console.log(input);
                if (val.length === 0) {
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
        removeError:function() {
            $(this).tooltip('destroy').parents('.form-group').removeClass('has-error')
        }
    }
    app.initialize();
}());

