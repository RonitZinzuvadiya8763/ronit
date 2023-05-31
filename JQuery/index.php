<html>

<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="Script.js"></script>
</head>

<!-- <body>
    <p>Name: <input type="text" id="name" name="name" value="Ronit"></p>
    <br><br>
    <button id = "changename">Change name</button>
</body> -->


<!-- <body>

<p>This is a paragraph.</p>
<p>This is another paragraph.</p>

<ol>
  <li>List item 1</li>
  <li>List item 2</li>
  <li>List item 3</li>
</ol>

<button id="btn1">Append text</button>
<button id="btn2">Append list items in end</button>
<button id="btn3">Append list items in start</button>
<button id="btn4">remove all List items</button>

</body> -->

<!-- <body>

    <h1>Heading 1</h1>
    <h2>Heading 2</h2>

    <p>This is a paragraph.</p>
    <p>This is another paragraph.</p>

    <div>This is some important text!</div><br>

    <button id = "add">Add classes to elements</button>
    <button id = "remove">Remove classes to elements</button>
    <button id = "toggle">Toggle classes to elements</button>

</body>

<style>
    .important {
        font-weight: bold;
        font-size: xx-large;
    }

    .add {
        color: blue;
    }

    .remove {
        color: black;
    }

    .toggle{
        color: blue;
    }
</style> -->


<!-- <h2>This is a heading</h2>

<p style="background-color:#ff0000">This is a paragraph.</p>
<p style="background-color:#00ff00">This is a paragraph.</p>
<p style="background-color:#0000ff">This is a paragraph.</p>

<p>This is a paragraph.</p>

<button>Set background-color of p</button> -->


<!-- Topic: JQuery Dimensions -->
<!-- <style>
    #div1 {
        height: 200px;
        width: 300px;
        padding: 10px;
        margin: 3px;
        border: 1px solid blue;
        background-color: lightblue;
    }
</style>

<body>
    <div id="div1"></div>
    <br>

    <button>Display dimensions of div</button>
    <button id = "resize">Resize div</button>
    
    <p>width() - returns the width of an element.</p>
    <p>height() - returns the height of an element.</p>
    <p>innerWidth() - returns the width of an element (includes padding).</p>
    <p>innerHeight() - returns the height of an element (includes padding).</p>
    <p>outerWidth() - returns the width of an element (includes padding and border).</p>
    <p>outerHeight() - returns the height of an element (includes padding and border).</p>
    <p>outerWidth(true) - returns the width of an element (includes padding, border, and margin).</p>
    <p>outerHeight(true) - returns the height of an element (includes padding, border, and margin).</p>
    <p>sets the width and height of a specified &lt;div&gt; element </p>
</body> -->


<!-- Topic: JQuery Traversing - Ancestors-->
<!-- <style>
    .ancestors * {
        display: block;
        border: 2px solid black;
        color: black;
        padding: 5px;
        margin: 15px;
    }
</style>

<body>
    <h3 style="color:dimgray">An ancestor is a parent, grandparent, great-grandparent, and so on.</h3>
    <div class="ancestors">
        <div style="width:500px;">div (great-grandparent)
            <ul>ul (grandparent)
                <li>li (direct parent)
                    <span>span</span>
                </li>
            </ul>
        </div>

        <div style="width:500px;">div (grandparent)
            <p>p (direct parent)
                <span>span</span>
            </p>
        </div>
    </div>
</body> -->


<!-- Topic: JQuery Traversing - Descendants
<style>
.descendants * { 
  display: block;
  border: 2px solid lightgrey;
  color: lightgrey;
  padding: 5px;
  margin: 15px;
}
</style> -->

<!-- <body> -->

<!-- <div class="descendants" style="width:500px;">div (current element) -->
<!-- <p>p (child)
    <span>span (grandchild)</span>   
  </p>
  <p>p (child)
    <span>span (grandchild)</span>
  </p>  -->
<!-- <p class="first">p (child)
    <span>span (grandchild)</span>   
  </p>
  <p class="second">p (child)
    <span>span (grandchild)</span>
  </p>  -->
<!-- <p>p (child)
    <span>span (grandchild)</span>   
  </p>
  <p>p (child)
    <span>span (grandchild)</span>
  </p> -->
<!-- </div> -->


<!-- <div class="descendants" style="width:500px;">div (current element) 
  <p>p (child)
    <span>span (grandchild)</span>   
  </p>
  <p>p (child)
    <span>span (grandchild)</span>
  </p> 
</div> -->

<!-- </body> -->


<!-- Topic: JQuery AJAX -->
<!-- Topic: JQuery Load -->

<!-- <body>

    <div id="div1">
        <h2>Let jQuery AJAX Change This Text</h2>
    </div>

    <button style="color:blue;">Get External Content</button>
    <button id="btn2">Get External Content</button>

</body> -->

<!-- <body>

    <div id="div1">
        <h2>Let jQuery AJAX Change This Text</h2>
    </div>

    <button>Get External Content</button>

</body> -->


<!-- Topic: JQuery Get/Post -->

<!-- <body> -->
<!-- <button>Send an HTTP GET request to a page and get the result back</button> -->
<!-- <button>Send an HTTP POST request to a page and get the result back</button>
</body> -->


<!-- Topic: JQuery - The noConflict() Method -->
<!-- <body>
    <p>This is a paragraph.</p>
    <button>Test jQuery</button>
</body> -->


<!-- Topic: JQuery Filers (Filter Tables) -->
<!-- <style>
    table {
        font-family: arial, sans-serif;
        border-collapse: collapse;
        width: 100%;
    }

    td,
    th {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
    }

    tr:nth-child(even) {
        background-color: #dddddd;
    }
</style>
</head>

<body>

    <h2>Filterable Table</h2>
    <p>Type something in the input field to search the table for first names, last names or emails:</p>
    <input id="myInput" type="text" placeholder="Search..">
    <br><br>

    <table>
        <thead>
            <tr>
                <th>Firstname</th>
                <th>Lastname</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody id="myTable">
            <tr>
                <td>John</td>
                <td>Doe</td>
                <td>john@example.com</td>
            </tr>
            <tr>
                <td>Mary</td>
                <td>Moe</td>
                <td>mary@mail.com</td>
            </tr>
            <tr>
                <td>July</td>
                <td>Dooley</td>
                <td>july@greatstuff.com</td>
            </tr>
            <tr>
                <td>Anja</td>
                <td>Ravendale</td>
                <td>a_r@test.com</td>
            </tr>
        </tbody>
    </table>

    <p>Note that we start the search in tbody, to prevent filtering the table headers.</p>

</body> -->


<!-- Topic: JQuery Filers (Filter Lists) -->

<body>

    <h2>Filterable List</h2>
    <p>Type something in the input field to search the list for specific items:</p>
    <input id="myInput" type="text" placeholder="Search..">
    <br>

    <ul id="myList">
        <li>First item</li>
        <li>Second item</li>
        <li>Third item</li>
        <li>Fourth</li>
    </ul>

</body>

</html>