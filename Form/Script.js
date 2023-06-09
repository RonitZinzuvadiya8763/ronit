$(document).ready(function () {

    $(document).on('click', '#submit', function (e) {
        e.preventDefault();   

        $("#fname, #lname, #email, #phone, #address").removeClass('error');
        $("#fnanmeerrormessage, #lnameerrormessage, #emailerrormessage, #phoneerrormessage, #addresserrormessage").addClass("hide");

        var fname = $('#fname').val();
        var lname = $('#lname').val();
        var email = $('#email').val();
        var phone = $('#phone').val();
        var gender = $(".gender:checked").val();
        var hobby = '';
        var address = $('#address').val();
        var is_error = false;

        if (fname == "") {
            $("#fname").addClass('error');
            $('#fnanmeerrormessage').removeClass('hide');
            is_error = true;
        }
        if (lname == "") {
            $("#lname").addClass('error');
            $('#lnameerrormessage').removeClass('hide');
            is_error = true;
        }
        if (email == "") {
            $("#email").addClass('error');
            $('#emailerrormessage').removeClass('hide');
            is_error = true;
        }
        if (phone == "") {
            $("#phone").addClass('error');
            $('#phoneerrormessage').removeClass('hide');
            is_error = true;
        }

        var phoneregex = /^[0-9]{10}$/;
        check = phoneregex.test($("#phone").val());
        if (!phone == "" && !check) {
            $("#phone").addClass('error');
            $('#phoneerrormessage').removeClass('hide');
            is_error = true;
        }

        if (address == "") {
            $("#address").addClass('error');
            $('#addresserrormessage').removeClass('hide');
            is_error = true;
        }

        if (is_error) {
            return false;
        }

        var hobby = '-';
        $('.hobby:checked').each(function (i, v) {
            if (hobby == '-') {
                hobby = $(v).val();
            } else {
                hobby = hobby + ', ' + $(v).val();
            }
        });

        if (fname != "" && lname != "" && email != "" && phone != "" && gender != "" && address != "") {
            $('#tbody').append(`<tr>
                        <td>`+ fname + `</td>
                        <td>`+ lname + `</td>
                        <td>`+ email + `</td>
                        <td>`+ phone + `</td>
                        <td>`+ gender + `</td>
                        <td>`+ hobby + `</td>
                        <td>`+ address + `</td>
                    </tr>`);
        }

        $('#fname').val('');
        $('#lname').val('');
        $('#email').val('');
        $('#phone').val('');
        $(".gender:checked").val();
        $('#hobby').val('');
        $('input[type=checkbox]').prop('checked',false);
            $("#gender1").prop("checked", true);
        $('#address').val('');
    });

    $(document).on('click', '#reset', function (e) {
        e.preventDefault();

        $('#fname').val('');
        $('#lname').val('');
        $('#email').val('');
        $('#phone').val('');
        $(".gender:checked").val();
        $('#hobby').val('');
        $('input[type=checkbox]').prop('checked',false);
            $("#gender1").prop("checked", true);
        $('#address').val('');
    });
        
});