// $(document).ready(function () {
//     $("#changename").click(function () {
//         alert("Name: " + $("#name").val());
//     });
// });

// Topic: jQuery Add and Remove:

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

// Topic: JQuery CSS classes

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


// Topic: JQuery CSS

// $(document).ready(function(){
//     $("button").click(function(){
//       $("p").css({"background-color": "yellow", "font-size": "200%"});
//     });
//   });


// Topic: JQuery Dimensions

// $(document).ready(function () {
//   $("button").click(function () {
//     var txt = "";
//     txt += "Width of div: " + $("#div1").width() + "</br>";
//     txt += "Height of div: " + $("#div1").height() + "</br>";
//     txt += "Inner width of div: " + $("#div1").innerWidth() + "</br>";
//     txt += "Inner height of div: " + $("#div1").innerHeight() + "</br>";
//     txt += "Outer width: " + $("#div1").outerWidth() + "</br>";
//     txt += "Outer height: " + $("#div1").outerHeight() + "<br>";
//     txt += "Outer width (+margin): " + $("#div1").outerWidth(true) + "</br>";
//     txt += "Outer height (+margin): " + $("#div1").outerHeight(true) + "</br>";

//     txt += "Document width/height: " + $(document).width();
//     txt += "x" + $(document).height() + "\n";
//     txt += "Window width/height: " + $(window).width();
//     txt += "x" + $(window).height();

//     $("#div1").html(txt);
//   })

//   $("#resize").click(function () {
//     $("#div1").width(500).height(500);
//   });
// });


// Topic: JQuery Traversing - Ancestors

// parent() Method: returns the direct parent element of the selected element.
// $(document).ready(function(){
  //   $("span").parent().css({"color": "red", "border": "2px solid red"});
  // });
  
// parents() Method: returns all ancestor elements of the selected element, all the way up to the document's root element (<html>).
// $(document).ready(function(){
  //   $("span").parents().css({"color": "red", "border": "2px solid red"});
  // });
  
// parentsUntil() Method: returns all ancestor elements between two given arguments.
// $(document).ready(function(){
//   $("span").parentsUntil("div").css({"color": "red", "border": "2px solid red"});
// });


// Topic: JQuery Traversing - Descendants

// children() method: returns all direct children of the selected element.
// $(document).ready(function(){
//   $("div").children().css({"color": "red", "border": "2px solid red"});
// });

// $(document).ready(function(){
//   $("div").children("p.first").css({"color": "red", "border": "2px solid red"});
// });

// find() method returns descendant elements of the selected element, all the way down to the last descendant.
// $(document).ready(function(){
//   $("div").find("span").css({"color": "red", "border": "2px solid red"});
// });


// Topic: JQuery Load

// $(document).ready(function(){
//   // $("button").click(function(){
//   //   $("#div1").load("demo_test.html");
//   // });

//   // $("#btn2").click(function(){
//   //   $("#div1").load("demo_test.html #p1");
//   // });
// });

// $(document).ready(function(){
//   $("button").click(function(){
//     $("#div1").load("demo_test.html", function(responseTxt, statusTxt, xhr){
//       if(statusTxt == "success")
//         alert("External content loaded successfully!");
//       if(statusTxt == "error")
//         alert("Error: " + xhr.status + ": " + xhr.statusText);
//     });
//   });
// });


// Topic: JQuery Get/Post
// Get
// $(document).ready(function(){
//   $("button").click(function(){
//     $.get("demo_test.html", function(data, status){
//       alert("Data: " + data + "\nStatus: " + status);
//     });
//   });
// });

//Post
// $(document).ready(function(){
//   $("button").click(function(){
//     $.post("demo_test.php",
//     {
//       name: "Donald Duck",
//       city: "Duckburg"
//     },
//     function(data,status){
//       console.log(data);
//       alert("Data: " + data + "\nStatus: " + status);
//     });
//   });
// });

// Topic: JQuery - The noConflict() Method
$.noConflict();
jQuery(document).ready(function($){
  $("button").click(function(){
    $("p").text("jQuery is still working!");
  });
});