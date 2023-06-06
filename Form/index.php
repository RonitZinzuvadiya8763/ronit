<html lang="en">
   <head>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.4.3/jquery.min.js">
   </script>
      <title>HTML Form</title>
   </head>
   <body>
      <h1>Form</h1>
      <form type="POST">
         First Name: </p><input type="text" name="fname" id="fname" style="width: 50%;height: 30px;"><br><br>

         Last Name: </p><input type="text" name="lname" id="lname" style="width: 50%; height: 30px;"><br><br>

         Email: </p><input type="text" name="email" id="email" style="width: 50%;height: 30px;"><br><br>

         Phone: </p><input type="number" name="phone" id="phone" style="width: 50%;height: 30px;"><br><br>

         Gender: </p><input class = "gender" type="radio" id="gender" name="gender" value="male">
         <label for="male" >Male</label>
         <input class = "gender" type="radio" id="gender" name="gender" value="female">
         <label for="femal">Female</label><br><br>

         Hobby: </p>
         <input type="checkbox" id="hobby" class="hobby" name="hobby1" value="Cricket">
         <label for="vehicle1">Cricket</label>
         <input type="checkbox" id="hobby" class="hobby" name="hobby2" value="VollyBall">
         <label for="vehicle2">VollyBall</label>
         <input type="checkbox" id="hobby" class="hobby" name="hobby3" value="Golf">
         <label for="vehicle3">Golf</label><br><br>

         Address: </p>
         <textarea id="address" name="address" rows="4" cols="85"></textarea><br><br>

         <button id="submit">submit</button>
      </form>

      <div id="preview">
        <p>First Name: <input id="fname_b"></input>
        <p>Last Name: <b id="lname_b"></b>
        <p>Email: <b id="email_b"></b>
        <p>Phone: <b id="phone_b"></b>
        <p>Gender: <b id="gender_b"></b>
        <p>Hobby: <b id="hobby_b"></b>
        <p>Address: <b id="address_b"></b>
      </div>

      <script>
        $(document).ready(function(){   
            $("#preview").hide();

            $("#submit").click(function (e) {

                e.preventDefault();
                $("#preview").show();
                var hobby_value = '';

                $('.hobby:checked').each(function (i, v) {
                    if (hobby_value != '') {
                        hobby_value = hobby_value + ', ' + $(v).val();
                    } else {
                        hobby_value = $(v).val();
                    }
                });

                $fname = $('#fname').val();
                $lname = $('#lname').val();
                $email = $('#email').val();
                $phone = $('#phone').val();
                $gender = $(".gender:checked").val();
                $hobby = hobby_value;
                $address = $('#address').val();

                $("#fname_b").html($fname);
                $("#lname_b").html($lname);
                $("#email_b").html($email);
                $("#phone_b").html($phone);
                $("#gender_b").html($gender);
                $("#hobby_b").html($hobby);
                $("#address_b").html($address);
                
                console.log("first name: "+$fname);
                console.log("last name: "+$lname);
                console.log("email: "+$email);
                console.log("phone: "+$phone);
                console.log("gender: "+$gender);
                console.log("hobby: "+$hobby);
                console.log("address: "+$address);
            });
        });
      </script>
   </body>
</html>