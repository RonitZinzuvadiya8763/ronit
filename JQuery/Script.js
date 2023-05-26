// $(document).ready(function () {
//     $("#changename").click(function () {
//         alert("Name: " + $("#name").val());
//     });
// });

//jQuery Add and Remove:

// $(document).ready(function(){
//     $("#btn1").click(function(){
//       $("p").append(" <b>Appended text</b>,<b>Appended text</b>");
//     });
  
//     $("#btn2").click(function(){
//       $("ol").append("<li>Appended item end</li>");
//     });

//     $("#btn3").click(function(){
//         $("ol").prepend("<li>Prepended item start</li>");
//     });

//     $("#btn4").click(function(){
//         $("ol").remove();
//     });
        
//     });

//JQuery CSS classes

// $(document).ready(function(){
//     $("#add").click(function(){
//       $("h1, h2, p").addClass("add");
//       $("div").addClass("important");
//     });

//     $("#remove").click(function(){
//       $("h1, h2, p").addClass("remove");
//       $("div").addClass("important");
//     });

//     // $("#toggle").click(function(){
//     //     $("h1, h2, p").toggleClass("toggle");
//     // });

// });


// JQuery CSS
$(document).ready(function(){
    $("button").click(function(){
      $("p").css("background-color", "yellow");
    });
  });