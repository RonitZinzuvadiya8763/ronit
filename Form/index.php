<html lang="en">

<head>
    <link rel="stylesheet" href="style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js">
    </script>
    <script src="Script.js">
    </script>
    <title>HTML Form</title>
</head>

<body>
    <h1>Employee Registration Form</h1>

    <form type="GET" id="myForm">
        First Name: </p><input type="text" class="myInput" name="fname" id="fname" style="width: 50%; height: 30px;" autofocus="autofocus">
        <span id="fnanmeerrormessage" class="errormsg hide">First Name is Required!</span><br><br>

        Last Name: </p><input type="text" class="myInput" name="lname" id="lname" style="width: 50%; height: 30px;">
        <span id="lnameerrormessage" class="errormsg hide">Last Name is Required!</span><br><br>

        Email: </p><input type="text" class="myInput" name="email" id="email" style="width: 50%; height: 30px;">
        <span id="emailerrormessage" class="errormsg hide">Email is Required!</span><br><br>

        Phone: </p><input type="number" class="myInput mobile-valid" name="phone" id="phone" style="width: 50%; height: 30px;">
        <span id="phoneerrormessage" class="errormsg hide">Phone is Required!</span>
        <!-- <span id="mobile-valid"><i class="errormsg"></i>Valid Mobile No</span>  -->
        <!-- <span id="mobile-invalid" >Invalid mobile No</span> -->
        <br><br>

        Gender: </p><input class="gender" type="radio" id="gender1" class="myInput" name="gender" value="Male" checked>
        <label for="male">Male</label>
        <input class="gender" type="radio" id="gender2" class="myInput" name="gender" value="Female">
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
                <button id="reset" class="btn">Reset</button>
            </div>
        </div>
    </form>

    <h2>Employee Data</h2>

    <table style="width:100%" id="table">
        <tbody id="tbody">
            <td>First Name</td>
            <td>Last Name</td>
            <td>Email</td>
            <td>Phone</td>
            <td>Gender</td>
            <td>Hobby</td>
            <td>Address</td>
        </tbody>
    </table>

</body>

</html>