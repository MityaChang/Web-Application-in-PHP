$(document).ready(function () {
    $("form").submit(function () {
        var message = "";
        if (!$("#idName").val()) {
            message += "- Name is required.<br>";
        }
        if (!$("#selCountry").val()) {
            message += "- Country is required.<br>";
        }
        if (!$("#idPostal").val()) {
            message += "- Postal code is required.<br>";
        }
        if (!$("input[type='radio']:checked").val()) {
            message += "- Gender is required.<br>";
        }
        if (!$("input[type='checkbox']:checked")) {
            message += "- At least one color is required.<br>";
        }
        if (!$("#idPhone").val()) {
            message += "- Phone is required.<br>";
        } else {
            let phoneCheck = new RegExp("[89]\d{7}");
            if (!phoneCheck.test($("#idPhone").val())) {
                message += "- Phone number must be starting with 8 or 9 and containing a total of 8 digits.<br>";
            }
        }
        if (!$("#idEmail").val()) {
            message += "- Email is required.<br>";
        } else {
            let em = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
            if (!em.test($("#idEmail").val())) {
                message += "- Email must be entered correctly.<br>"
            }
        }
        if (!$("#idPwd").val()) {
            message += "- Password is required.<br>";
        } else {
            let pwCheck = new RegExp("^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$");
            if (!pwCheck.test($(this).val())) {
                message += "- Password must have minimum of eight characters, at least one letter and one number.<br>";
            }
        }
        if ($("#idVerifyPwd").val() != $("#idPwd").val()) {
            message += "- Password must be the same.<br>"
        }

        $("#alertBox").html(message);
        return false;
    });
});