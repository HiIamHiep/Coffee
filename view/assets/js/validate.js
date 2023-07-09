$(document).ready(function() {
    $("#signin-form").validate({
        rules: {
            "email": {
                required: true,
                email: true
            },
            "password": {
                required: true,
                minlength: 1
            }
        },
        messages: {
            "email": {
                required:"Bắt buộc nhập email",
                email: " *@gmail.com"
            },
            "password": {
                required: "Bắt buộc nhập password",
                minlength: "Hãy nhập ít nhất 1 ký tự"
            }
        },
        submitHandler: function() {
            $.ajax({
                url: '?controller=signin&action=dosignin',
                type: 'POST',
                dataType: 'html',
                data: $('#signin-form').serializeArray(),
            })
                .done(function (response ) {
                    if(response !== '1'){
                        $('#div-notice-signin').text(response);
                        $('#div-notice-signin').show();
                    } else {
                        $('#modal-signin').toggle();
                        $('.modal-backdrop').hide();
                        $('#name-user').text($("input[name='name']").val());
                        $('#menu-guest').hide();
                        $('#name-user').show();
                    }
                });
        }
    });
});
$(document).ready(function () {
    $("#register-form").validate({
        rules: {
            "first_name": {
                required: true,
                minlength: 2
            },
            "last_name": {
                required: true,
                minlength: 2
            },
            "birth_date": {
                required: true,
                date: true
            },
            "email": {
                required: true,
                email: true
            },
            "gender": {
                required: true
            },
            "password": {
                required: true,
                minlength: 8
            },
            "re_password": {
                required: true,
                equalTo: "#password"
            },
            "phone_number": {
                required: true,
                pattern: /^\d{10,12}$/ // số điện thoại từ 10 đến 12 chữ số
            }
        },
        messages: {
            "first_name": {
                required: "Vui lòng nhập tên.",
                minlength: "Tên phải có ít nhất 2 ký tự."
            },
            "last_name": {
                required: "Vui lòng nhập họ.",
                minlength: "Họ phải có ít nhất 2 ký tự."
            },
            "birth_date": {
                required: "Vui lòng nhập ngày sinh.",
                date: "Ngày sinh không hợp lệ."
            },
            "email": {
                required: "Vui lòng nhập địa chỉ email.",
                email: "Địa chỉ email không hợp lệ."
            },
            "gender": {
                required: "Vui lòng chọn giới tính."
            },
            "password": {
                required: "Vui lòng nhập mật khẩu.",
                minlength: "Mật khẩu phải có ít nhất 8 ký tự."
            },
            "re_password": {
                required: "Vui lòng nhập lại mật khẩu.",
                equalTo: "Mật khẩu không khớp."
            },
            "phone_number": {
                required: "Vui lòng nhập số điện thoại.",
                pattern: "Số điện thoại không hợp lệ."
            }
        },
        submitHandler: function () {
            $.ajax({
                url: '?controller=signup&action=dosignup',
                type: 'POST',
                dataType: 'html',
                data: $('#register-form').serializeArray(),
            })
                .done(function (response) {
                    if (response !== '1') {
                        $('#div-notice-signup').text(response);
                        $('#div-notice-signup').show();
                    } else {
                        $('#modal-signup').toggle();
                        $('.modal-backdrop').hide();

                    }
                });
        }
    });
});