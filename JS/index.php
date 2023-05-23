<html>
<h2>JavaScript</h2>

Name: <input type="text" id="name" name="name"><br>
Phone: <input type="number" id="phone" name="phone"><br>
Message: <input type="textarea" id="msg" name="msg"><br><br>
<button onclick="change_text()">Submit</button>

<p id="demo"></p>

<script>
  function change_text() {
    var name = document.getElementById("name").value;
    var phone = document.getElementById("phone").value;
    var msg = document.getElementById("msg").value;

    document.getElementById("demo").innerHTML = 'Name: ' +  name + '<br>' + 'Phone: ' + phone + '<br>' + 'Message: ' + msg;
  }
</script>
</html>