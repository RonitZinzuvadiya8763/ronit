$(document).ready(function () {

    $(document).on('click', '#submit', function (e) {
        e.preventDefault();

        $("#update, #delete").removeClass("hideoperation");
        $("#fname, #lname, #email, #phone, #address").removeClass('error');
        $("#fnanmeerrormessage, #lnameerrormessage, #emailerrormessage, #phoneerrormessage, #mobileInvalid, #addresserrormessage").addClass("hide");

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

        var emailregex = /^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/;
        checkemail = emailregex.test($("#email").val());
        if (!email == "" && !checkemail) {
            $("#email").addClass('error');
            $('#emailInvalid').removeClass('hide');
            is_error = true;
        }

        if (!email == "" && checkemail) {
            $("#email").removeClass('error');
            $('#emailInvalid').addClass('hide');
            is_error = false;
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
            $('#mobileInvalid').removeClass('hide');
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
                // alert(hobby);
                // debugger;
            }
        });

        if (fname != "" && lname != "" && email != "" && phone != "" && gender != "" && address != "") {
            $('#tbody').append(`
                <tr>
                    <td>`+ fname + `</td>
                    <td>`+ lname + `</td>
                    <td>`+ email + `</td>
                    <td>`+ phone + `</td>
                    <td>`+ gender + `</td>
                    <td>`+ hobby + `</td>
                    <td>`+ address + `</td>
                    <td>
                        <button id="edit" style="width: 70px; height: 40px; padding: 10px 10px 10px 10px; background-color: green; color: white;">Edit</button>
                        <button id="delete" style="width: 70px; height: 40px; padding: 10px 10px 10px 10px; background-color: red; color: white;">Delete</button>
                    </td>
                </tr>`);
        }


        $("tbody").on("click", "#edit", function () {

            // var myhobby = [];
            // $("input[type=checkbox]:checked").each(function(){    
            //     myhobby.push($(this).val());    		
            // });
            // alert(myhobby.join(", "));
            // debugger;

            // var fname = $(this).parents("tr").;  
            $('#fname').val(fname);
            $('#lname').val(lname);
            $('#email').val(email);
            $('#phone').val(phone);
            $('#gender').val(gender);
            $('#hobby').val(hobby);
            $('#address').val(address);
            // var phone = $('#phone').val('');
            // var gender = $(".gender:checked").val('');
            // var hobby = '';
            // var address = $('#address').val('');
        });

        $("tbody").on("click", "#delete", function () {
            $(this).parents("tr").remove();
        });

        $('#fname').val('');
        $('#lname').val('');
        $('#email').val('');
        $('#phone').val('');
        $(".gender:checked").val();
        $('#hobby').val('');
        $('input[type=checkbox]').prop('checked', false);
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
        $('input[type=checkbox]').prop('checked', false);
        $("#gender1").prop("checked", true);
        $('#address').val('');
    });

});