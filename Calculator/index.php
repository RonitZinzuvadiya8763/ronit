<html>

<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="Script.js"></script>
</head>

<style>
    .mycalculator {
        background-color: silver;
        width: 400px;
        height: 450px;
        border-style: solid;
        border-width: 2px;
        padding: 25px;
        margin-left: 500px;
        margin-top: 40px;
        border-radius: 25px;
    }

    .numBtn {
        color: black;
        width: 50px;
        height: 50px;
        border-radius: 50px;
    }

    .numBtn:hover {
        background-color: black;
        color: white;
    }

    .opBtn {
        background-color: dimgrey;
        color: white;
        font-size: 24px;
        width: 50px;
        height: 50px;
        border-radius: 50px;
    }

    .opBtn:hover {
        color: black;
    }

    .calBtn {
        background-color: black;
        color: white;
        font-size: 24px;
        width: 200px;
        height: 50px;
        margin-left: 1px;
        margin-top: 15px;
        margin-bottom: 10px;
        border-radius: 50px;
        margin-left: 60px;
    }

    .calBtn:hover {
        background-color: #4CAF50;
        color: white;
    }

    .clrBtn {
        background-color: red;
        color: white;
        font-size: 18px;
        width: 50px;
        height: 50px;
        border-radius: 50px;
    }

    .clrBtn:hover {
        color: black;
    }

    .delBtn {
        background-color: red;
        color: white;
        font-size: 18px;
        width: 50px;
        height: 50px;
        border-radius: 50px;
    }

    .delBtn:hover {
        color: black;
    }

    .numtxt {
        background-color: grey;
        color: white;
        font-size: 40;
        height: 40px;
        width: 345px;
        text-align: right;
        margin-bottom: 15px;
    }

    button {
        margin-left: 10px;
    }

    h1 {
        color: slategrey;
        padding-left: 650px;
    }

    ::placeholder {
        color: white;
        opacity: 1;
        /* Firefox */
    }

    /* remove up/down arrow from input screen */
    /* input[type=number]::-webkit-inner-spin-button,
    input[type=number]::-webkit-outer-spin-button {
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none;
        margin: 0;
    } */
</style>

<body style="font-family:arial">
    <h1>Calculator</h1>
    <div class="mycalculator">
        <table>
            <tr>
                <td colspan="3"><input type="varchar" class="numtxt" id="input" placeholder="0" autofocus="autofocus"></td>
            </tr>
            <tr>
                <td><button class="clrBtn" id="cancle" value="c">AC</button></td>
                <td><button class="delBtn" id="delete" value="d">DEL</button></td>
            </tr>
            <tr>
                <td><button class="opBtn" id="div" value="/">/</button></td>
                <td><button class="opBtn" id="mul" value="*">*</button></td>
                <td><button class="opBtn" id="add" value="+">+</button></td>
                <td><button class="opBtn" id="sub" value="-">-</button></td>
            </tr>
            <tr>
                <td><button class="numBtn" id="7" value="7">7</button></td>
                <td><button class="numBtn" id="8" value="8">8</button></td>
                <td><button class="numBtn" id="9" value="9">9</button></td>
            </tr>
            <tr>
                <td><button class="numBtn" id="4" value="4">4</button></td>
                <td><button class="numBtn" id="5" value="5">5</button></td>
                <td><button class="numBtn" id="6" value="6">6</button></td>
            </tr>
            <tr>
                <td><button class="numBtn" id="1" value="1">1</button></td>
                <td><button class="numBtn" id="2" value="2">2</button></td>
                <td><button class="numBtn" id="3" value="3">3</button></td>
            </tr>
            <tr>
                <td><button class="numBtn" id="0" value="0">0</button></td>
                <td><button class="numBtn" id="." value=".">.</button></td>
            </tr>

            <tr>
                <td colspan="3"><button class="calBtn" id="calculate" value="=">=</button></td>
            </tr>
        </table>
    </div>
</body>

</html>