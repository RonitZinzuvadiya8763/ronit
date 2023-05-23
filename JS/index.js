function change_text() {
    var name = document.getElementById("name").value;
    var phone = document.getElementById("phone").value;
    var msg = document.getElementById("msg").value;

    document.getElementById("demo").innerHTML = 'Name: ' +  name + '<br>' + 'Phone: ' + phone + '<br>' + 'Message: ' + msg;
  }