$(document).ready(function () {
  $(".numBtn").click(function () {
    var value1 = $(this).val();
    var value2 = $("#input").val();
    $("#input").val(value2 + value1).focus();
  });

  // $("#input").keypress(function valid_numbers(e)
  // {
  //       var key=e.which || e.KeyCode;
  //       if  ( key >=48 && key <= 57)
  //        // to check whether pressed key is number or not 
  //         return true; 
  //       else 
  //         return false;
  // });

  // $(".numtxt").on("input", function(evt) {
  //   var self = $(this);
  //   self.val(self.val().replace(/[^0-9\.]/g, ''));
  //   if ((evt.which != 46 || self.val().indexOf('.') != -1) && (evt.which < 48 || evt.which > 57)) 
  //   {
  //     evt.preventDefault();
  //   }
  // });

  $(function () {
    $(document).keyup(function (e) {
      console.log(e.keyCode);
    });
  });

  $(".clrBtn").click(function () {
    $("#input").val("");
  });

  $(".delBtn").click(function () {
    var num = $("#input").val();
    var deletelast = num / 10 | 0;
    $("#input").val(deletelast);
  });

  $(".opBtn").click(function () {
    var value1 = $(this).val();
    var value2 = $("#input").val();
    $("#input").val(value2 + value1);
  });

  $(".calBtn").click(function () {
    var value2 = eval($("#input").val());
    $("#input").val(value2);
  });

  $("#input").keypress(function (evt) {
    if (evt.which == 13) {
      $(".calBtn").trigger('click');
    }
  });
  
  $('#input').on('input', function () {
    var value = $(this).val();
    var regex = /^[0-9+\-*/.]+$/; //allow numbers and arithmetic operators

    if (!regex.test(value)) {
      $(this).val(value.replace(/[^0-9+\-*/.]/g, '')); // Remove invalid characters
    }
  });

});
