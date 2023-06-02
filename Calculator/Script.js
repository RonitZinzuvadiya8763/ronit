$(document).ready(function () {
  $(".numBtn, .opBtn").click(function () {
    var value1 = $(this).val();
    var value2 = $("#input").val();
    $("#input").val(value2 + value1).focus();
  });

  $(".clrBtn").click(function () {
    $("#input").val("").focus();
  });

  $(".delBtn").click(function () {
    let num = $("#input").val();
    num = num.substring(0, num.length - 1);
    $("#input").val(num);
  });

  $(".calBtn").click(function () {
    $arithmaticChecker = $("#input").val()[$("#input").val().length - 1];
    if (
      ($arithmaticChecker == '+') ||
      ($arithmaticChecker == '-') ||
      ($arithmaticChecker == '*') ||
      ($arithmaticChecker == '/')
    ) {
      window.alert("Can not use operator in the ending !!!");
    }
    else {
      let result = eval($("#input").val());
      $("#input").val(result).focus();
    }
  });

  $(document).on('keypress', function (e) {
    e.preventDefault();
    var value = $(this).val();


    if (e.which >= '42' && e.which <= "57") {
      e.originalEvent.key
      $('#input').val(
        $('#input').val() + e.originalEvent.key
      );
    }

    if (e.which == 13) {
      $arithmaticChecker = $("#input").val()[$("#input").val().length - 1];
      if (
        ($arithmaticChecker == '+') ||
        ($arithmaticChecker == '-') ||
        ($arithmaticChecker == '*') ||
        ($arithmaticChecker == '/')
      ) {
        window.alert("Can not use operator in the ending !!!");
      }
      else {
        $(".calBtn").trigger('click');
      }
    }

  });

});