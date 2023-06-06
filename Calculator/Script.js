$(document).ready(function () {
  var operators = ['+', '-', '*', '/'];
  var operator = '';

  $(".numBtn").click(function () {
    var value1 = $(this).val();
    var value2 = $("#input").val();
    let arithmaticCheckerInvalidInput = $("#input").val()[$("#input").val().length - 1];

    $("#input").val(value2 + value1).focus();

    // var enableOperator = $("#input").val()[$("#input").val().length];
    // console.log(enableOperator);
    
    //var disableOperator = $("#input").val()[$("#input").val().length - 1];
    // debugger;

    if (operators.includes(arithmaticCheckerInvalidInput)) {
      $(".opBtn").attr('disabled', 'disabled');
    }
  });

  $(".opBtn").click(function () {
    var value1 = $(this).val();
    var value2 = $("#input").val();
    operator = value1;
    console.log(value1);
    $("#input").val(value2 + value1).focus();
    let arithmaticCheckerInvalidInput = $("#input").val()[$("#input").val().length - 1];
    //console.log(arithmaticCheckerInvalidInput);

    if(['+','-','*','/'].includes(arithmaticCheckerInvalidInput)){
      var replacedValue = value1.replace("value1","arithmaticCheckerInvalidInput");
      arithmaticCheckerInvalidInput = replacedValue;
    }
    //div mul add sub
    // $("#div").click(function () {
      // let arithmaticCheckerInvalidInput = $("#input").val()[$("#input").val().length - 1];
    //  arithmaticCheckerInvalidInput = '/'; 
  });

  $(".clrBtn").click(function () {
    $("#input").val("").focus();
  });

  $(".delBtn").click(function () {
    let num = $("#input").val();
    num = num.substring(0, num.length - 1);
    $("#input").val(num).focus();
  });

  $(".calBtn").click(function () {
    $(".opBtn").removeAttr('disabled', 'disabled');
    let arithmaticCheckerInvalidInput = $("#input").val()[$("#input").val().length - 1];
    let arithmaticChecker = $("#input").val();

    
    //debugger;
    if (operators.includes(arithmaticCheckerInvalidInput)) {
      window.alert("Can not use operator in the ending !!!");
      return false;
    }
    var arithmaticCheckerValues = arithmaticChecker.split(/[-+*/]/);
    console.log(arithmaticCheckerValues);

    switch (operator) {
      case '+':
        var finalOutput = parseInt(arithmaticCheckerValues[0]) + parseInt(arithmaticCheckerValues[1]);
        break;

      case '-':
        var finalOutput = parseInt(arithmaticCheckerValues[0]) - parseInt(arithmaticCheckerValues[1]);
        break;

      case '*':
        var finalOutput = parseInt(arithmaticCheckerValues[0]) * parseInt(arithmaticCheckerValues[1]);
        break;

      case '/':
        var finalOutput = parseInt(arithmaticCheckerValues[0]) / parseInt(arithmaticCheckerValues[1]);
        break;
    }

    $('#input').val(finalOutput);

    let result = eval_calculation();
    $("#input").val(result).focus();
    $('#input').removeAttr('disabled');

    function eval_calculation() {
      console.log($("#input").val());
      return $("#input").val();
    }
  });

  $(document).on('keypress', function (e) {
    e.preventDefault();
    var value = $(this).val();
    if(e.which>='42' && e.which<='47'){
      operator =  e.originalEvent.key
      $('#input').val(
        $('#input').val() + e.originalEvent.key
      );
    }
    if (e.which >= '48' && e.which <= "57") {
      e.originalEvent.key
      $('#input').val(
        $('#input').val() + e.originalEvent.key
      );
    }

    if (e.which == 13) {
      e.preventDefault();
      //debugger;
      $(".calBtn").trigger('click');
    }
  });
});