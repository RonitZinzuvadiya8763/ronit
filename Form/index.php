<html lang="en">

<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js">
    </script>
    <title>HTML Form</title>
</head>

<style>
    .mydata {
        font-weight: bold;
    }

    .error {
        outline: 1px solid red;
    }

    .errormsg {
        color: red;
    }

    #myform {
        padding-left: 50px;
    }

    h1 {
        padding-left: 50px;
    }

    h2 {
        padding-left: 50px;
        text-align: center;
        color: Grey;
    }

    input[type=text]:focus {
        border: 1px solid #555;
    }

    .btn {
        width: 200px;
        height: 50px;
        background-color: black;
        color: white;
    }

    .btn:hover {
        background-color: green;
        color: white;
    }

    .hide {
        display: none;
    }

    table {
        border-collapse: collapse;
        height: 200px;
        width: 20px;
    }

    th,
    td {
        border: 1px solid black;
        text-align: center;
    }
</style>

<body>
    <h1>Emloyee Registration Form</h1>

    <form type="GET" id="myForm">
        First Name: </p><input type="text" class="myInput" name="fname" id="fname" style="width: 50%; height: 30px;">
        <span id="fnanmeerrormessage" class="errormsg hide">First Name is Required!</span><br><br>

        Last Name: </p><input type="text" class="myInput" name="lname" id="lname" style="width: 50%; height: 30px;">
        <span id="lnameerrormessage" class="errormsg hide">Last Name is Required!</span><br><br>

        Email: </p><input type="text" class="myInput" name="email" id="email" style="width: 50%; height: 30px;">
        <span id="emailerrormessage" class="errormsg hide">Email is Required!</span><br><br>

        Phone: </p><input type="number" class="myInput" name="phone" id="phone" style="width: 50%; height: 30px;">
        <span id="phoneerrormessage" class="errormsg hide">Phone is Required!</span><br><br>

        Gender: </p><input class="gender" type="radio" id="gender" class="myInput" name="gender" value="Male" checked>
        <label for="male">Male</label>
        <input class="gender" type="radio" id="gender" class="myInput" name="gender" value="Female">
        <label for="female">Female</label><br><br>

        Hobby: </p>
        <input type="checkbox" id="hobby" class="myInput hobby" name="hobby1" value="Cricket">
        <label for="vehicle1">Cricket</label>
        <input type="checkbox" id="hobby" class="myInput hobby" name="hobby2" value="VollyBall">
        <label for="vehicle2">VollyBall</label>
        <input type="checkbox" id="hobby" class="myInput hobby" name="hobby3" value="Golf">
        <label for="vehicle3">Golf</label><br><br>

        Address: </p>
        <textarea id="address" class="myInput" name="address" style="width: 50%; height: 100px;"></textarea><br><br>
        <span id="addresserrormessage" class="errormsg hide">Address is Required!</span><br><br>

        <div class="container">
            <div class="vertical-center">
                <button id="submit" class="btn">Submit</button>
            </div>
        </div>
    </form>

    <h2>Emloyee Data</h2>

    <table style="width:100%" id="table">
        <tbody id="tbody">
            <td>Firstname</td>
            <td>Lastname</td>
            <td>Email</td>
            <td>Phone</td>
            <td>Gender</td>
            <td>Hobby</td>
            <td>Address</td>
        </tbody>
    </table>

    <script>
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

                if (address == "") {
                    $("#address").addClass('error');
                    $('#addresserrormessage').removeClass('hide');
                    is_error = true;
                }

                if (is_error) {
                    return false;
                }

                var hobby = '';
                $('.hobby:checked').each(function (i, v) {
                    if (hobby == '') {
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
            });
        });
    </script>
</body>

</html>