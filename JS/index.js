// function change_text() {
//     var name = document.getElementById("name").value;
//     var phone = document.getElementById("phone").value;
//     var msg = document.getElementById("msg").value;

//     document.getElementById("demo").innerHTML = 'Name: ' +  name + '<br>' + 'Phone: ' + phone + '<br>' + 'Message: ' + msg;
//   }


// ----------Arithmetic operator----------
// var price1 = 5;
// const price2 = 6;
// // document.write(price1);
// // exit;
// alert(price1);
// price1 = 5+7;
// alert(price1);
// let total = price1 + price2;
// document.getElementById("demo").innerHTML =
// "The total is: " + total;


// --------Assignment operator------------
// var x = 10;
// // x += 5;
// // x -= 5;
// // x *= 5;
// // x /= 5;
// // x %= 5;
// // x **= 5;
// document.getElementById("demo").innerHTML = x;


// --------------JS Function-------------------
// function myFunction(p1, p2) {
//   return p1 * p2;
// }
// let result = myFunction(4, 3);
// document.getElementById("demo").innerHTML = result;


// function used as variable
// let text = "The temperature is " + toCelsius(77) + " Celsius.";
// document.getElementById("demo").innerHTML = text;
// function toCelsius(fahrenheit) {
//   return (5/9) * (fahrenheit-32);
// } 


// ----------------JS Object---------------------
// let car = 'Skoda';
// document.getElementById("demo").innerHTML = car;


// Display some data from the object:
// const cars = {type:"Fiat", model:"500", color:"white"};
// document.getElementById("demo").innerHTML = "The car type is " + cars.type;
// document.getElementById("demo1").innerHTML = "The car model is " + cars.model;
// document.getElementById("demo2").innerHTML = "The car color is " + cars.color;

// Access const members
// const person = {
//   firstName: "John",
//   lastName : "Doe",
//   id       : 5566
// };
// document.getElementById("demo").innerHTML = "FirstName is: " +  person.firstName;
// document.getElementById("demo1").innerHTML = "FirstName is: " +  person.lastName;
// document.getElementById("demo2").innerHTML = "FirstName is: " +  person.id;


// ---------------JS Events------------------------
// onchange, onclick, onmouseover, onmouseout, onkeydown, onload
// function displayDate() {
//   document.getElementById("demo").innerHTML = Date();
// }


// ---------------JS String------------------------
// let carName1 = "Volvo XC60"; // Double quotes
// let carName2 = 'Volvo XC60'; // Single quotes
// let text = "We are the so-called \"Vikings\" from the north."; // escape character
// let answer1 = "It's alright";
// let answer2 = "He is called 'Johnny'";
// let answer3 = 'He is called "Johnny"'; 

// document.getElementById("demo").innerHTML = carName1 + " " + carName2; 
// document.getElementById("demo1").innerHTML = text; 
// document.getElementById("demo2").innerHTML = answer3;
// document.getElementById("demo3").innerHTML = answer3.length; // return length


// ---------------JS String Methods------------------------
// let str = "Apple, Banana, Kiwi, Apple";
// let str1 = "string2"; 
// document.getElementById("demo").innerHTML = str.length;
// document.getElementById("demo").innerHTML = str.slice(7,13);
// document.getElementById("demo").innerHTML = str.substring(7, 13);
// document.getElementById("demo").innerHTML = str.substr(7, 13);
// document.getElementById("demo").innerHTML = str.replace("Apple", "Ronit");
// document.getElementById("demo").innerHTML = str.replaceAll("Apple", "Ronit");
// document.getElementById("demo").innerHTML = str.toUpperCase(str);
// document.getElementById("demo").innerHTML = str.concat(" ",str1);
// document.getElementById("demo").innerHTML = str.trim(str1);

// ---------------JS String Search------------------------
// let text = "Please locate where 'locate' occurs!";
// let index = text.search("locate");
// document.getElementById("demo").innerHTML = index;

// ---------------JS Array------------------------------
// const cars = ["Saab", "Volvo", "BMW"];
// // cars[0] = "Ronit";     change array value
// // document.getElementById("demo").innerHTML = cars;
// // document.getElementById("demo").innerHTML = cars[0];
// // document.getElementById("demo1").innerHTML = cars[1];
// // document.getElementById("demo1").innerHTML = cars[2];
// // document.getElementById("demo").innerHTML = cars[3];
// document.getElementById("demo").innerHTML = cars.toString();





// function getName(){
//   let name = "ABC";
//   var surname = 'hello';
// }

// console.log(name);
// console.log(surname);
