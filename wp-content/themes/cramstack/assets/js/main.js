$(document).ready(function () {
    $.validate();
    $("#contactform").submit(function (e) {
        //prevent Default functionality

        var formData = JSON.parse(JSON.stringify($('#contactform').serializeArray()))

        var data = {};
        $(formData).each(function (index, obj) {
            data[obj.name] = obj.value;
        });

        $("#contactSubmitBtn").attr("disabled", true);

        $("#contactSubmitBtn").html(
            `<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>Submitting...`
        );

        $.ajax({
            type: 'POST',
            url: 'http://0.0.0.0:5000/request',
            contentType: "application/json; charset=utf-8",
            dataType: "json",
            data: JSON.stringify(data),
            success: function (data) {
                console.log(data);
                $('#contactform').trigger("reset");
                $("contactSubmitBtn").button('reset');

                $("#contactSubmitBtn").html(
                    `Submitted`
                );

                setTimeout(function () {
                    $("#contactSubmitBtn").html(
                        `Submit`
                    );
                    $("#contactSubmitBtn").attr("disabled", false);
                }, 2000)
            },
            error: function (errMsg) {
                $("#contactSubmitBtn").html(
                    `Submit`
                );
                $("#contactSubmitBtn").attr("disabled", false);
            }
        });
        e.preventDefault();
    });

});
