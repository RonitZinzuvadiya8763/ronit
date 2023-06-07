<html lang="en">
    <head>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.4.3/jquery.min.js">
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
        .errormsg{
            color: red;
        }
        #myform {
            padding-left: 50px;
        }
        h1 {
            padding-left: 50px;
        }
        input[type=text]:focus {
            /* border-width: 1px; */
            border: 1px solid #555;
        }
        #preview p {
            padding-left: 50px;
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
        .hide{
            display: none;
        }
    </style>

    <body>
        <h1>Registration Form</h1>

        <form type="GET" id="myForm">
            First Name: </p><input type="text" class="myInput" name="fname" id="fname"
                style="width: 50%; height: 30px;">
            <span class="errormsg hide">First Name is Required!</span><br><br>

            Last Name: </p><input type="text" class="myInput" name="lname" id="lname"
                style="width: 50%; height: 30px;">
            <span class="errormsg hide">Last Name is Required!</span><br><br>

            Email: </p><input type="text" class="myInput" name="email" id="email" style="width: 50%; height: 30px;">
            <span class="errormsg hide">Email is Required!</span><br><br>

            Phone: </p><input type="number" class="myInput" name="phone" id="phone"
                style="width: 50%; height: 30px;">
            <span class="errormsg hide">Phone is Required!</span><br><br>

            Gender: </p><input class="gender" type="radio" id="gender" class="myInput" name="gender" value="male" checked>            
            <label for="male">Male</label>
            <input class="gender" type="radio" id="gender" class="myInput" name="gender" value="female">
            <label for="female">Female</label><br><br>

            Hobby: </p>
            <input type="checkbox" id="hobby" class="myInput" name="hobby1" value="Cricket">
            <label for="vehicle1">Cricket</label>
            <input type="checkbox" id="hobby" class="myInput" name="hobby2" value="VollyBall">
            <label for="vehicle2">VollyBall</label>
            <input type="checkbox" id="hobby" class="myInput" name="hobby3" value="Golf">
            <label for="vehicle3">Golf</label><br><br>

            Address: </p>
            <textarea id="address" class="myInput" name="address" style="width: 50%; height: 100px;"></textarea><br><br>
            <span class="errormsg hide">Address is Required!</span><br><br>

            <div class="container">
                <div class="vertical-center">
                    <button id="submit" class="btn">Submit</button>
                </div>
            </div>
        </form>

        <div id="preview">
            <h1>Your Inserted Data </h1>
            <p>First Name: <b id="fname_b" class="mydata"></b>
            <p>Last Name: <b id="lname_b" class="mydata"></b>
            <p>Email: <b id="email_b" class="mydata"></b>
            <p>Phone: <b id="phone_b" class="mydata"></b>
            <p>Gender: <b id="gender_b" class="mydata"></b>
            <p>Hobby: <b id="hobby_b" class="mydata"></b>
            <p>Address: <b id="address_b" class="mydata"></b>
        </div>

        <script>
            $(document).ready(function () {
                
                $("#preview").hide();

                $("#submit").click(function (e) {
                    $("#fname, #lname, #email, #phone, #address").removeClass('error');
                    $(span).removeClass('hide');

                    fname = $('#fname').val();
                    lname = $('#lname').val();
                    email = $('#email').val();
                    phone = $('#phone').val();
                    gender = $(".gender:checked").val();
                    hobby = hobby_value;
                    address = $('#address').val();
                    message = "";

                    if (fname == "") {
                        $("#fname").addClass('error');
                        message += "Please Enter First Name\n";
                    }
                    if (lname == "") {
                        $("#lname").addClass('error');
                        message += "Please Enter Last Name\n";
                    }
                    if (email == "") {
                        $("#email").addClass('error');
                        message += "Please Enter Email\n";
                    }
                    if (phone == "") {
                        $("#phone").addClass('error');
                        message += "Please Enter Phone\n";
                    }
                    if (gender == "") {
                        $("#gender").addClass('error');
                        message += "Please Enter Gender\n";
                    }
                    if (hobby == "") {
                        $("#hobby").addClass('error');
                        message += "Please Enter Hobby\n";
                    }
                    if (address == "") {
                        $("#address").addClass('error');
                        message += "Please Enter Address\n";
                    }
                    if (fname != "" && lname != "" && email != "" && phone != "" && gender != "" && hobby != "" && address != "") {
                        message += "Form Submitted!!";
                        $("#preview").show();
                    }
                    e.preventDefault();
                    var hobby_value = '';

                    $('.hobby:checked').each(function (i, v) {
                        if (hobby_value != '') {
                            hobby_value = hobby_value + ', ' + $(v).val();
                        } else {
                            hobby_value = $(v).val();
                        }
                    });

                    fname = $('#fname').val();
                    lname = $('#lname').val();
                    email = $('#email').val();
                    phone = $('#phone').val();
                    gender = $(".gender:checked").val();
                    hobby = hobby_value;
                    address = $('#address').val();

                    $("#fname_b").html(fname);
                    $("#lname_b").html(lname);
                    $("#email_b").html(email);
                    $("#phone_b").html(phone);
                    $("#gender_b").html(gender);
                    $("#hobby_b").html(hobby);
                    $("#address_b").html(address);

                    myfname = $('#fname').val();
                    myfnamedata = $('#fname_b').val(myfname);

                    mylname = $('#lname').val();
                    mylnamedata = $('#lname_b').val(mylname);

                    myemail = $('#email').val();
                    myemaildata = $('#email_b').val(myemail);

                    myphone = $('#phone').val();
                    myphonedata = $('#phone_b').val(myphone);

                    mygender = $('#gender').val();
                    mygenderdata = $('#gender_b').val(mygender);

                    myhobby = $('#hobby').val();
                    myhobbydata = $('#hobby_b').val(myhobby);

                    myaddress = $('#address').val();
                    myaddressdata = $('#address_b').val(myaddress);
                });
            });
        </script>
    </body>
</html>