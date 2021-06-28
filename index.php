<html>
<head>
    <title>Interview</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        .change {
            background-color: red;
        }
    </style>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
            integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
</head>
<body>
<br>
<div class="row">
    <p align="center"> PHP Section</p>
    <div class="col-md-6" style="border: solid 1px;">
        <label>Q1: Use this link to get XML data and convert those data in more readable JSON format </label> <br><br>
        <a href="xmtltojson.php" class="btn btn-primary" target="_blank">Convert to Json</a>
    </div>

    <div class="col-md-6" style="border: solid 1px;">
        <label>Q2: Functions for Array </label>
        <form action="array.php" method="post" target="_blank">
            <input class="form-control" type="text" value="" name="filter_input" id="filter_input"
                   placeholder="enter value" required>
            <input type="submit" name="submit" value="submit">
        </form>
    </div>

</div>
<br>
<p> JavaScript Questions</p>
<div class="row">
    <div class="col-md-6" style="border: solid 1px;">
        <label> Change the class name of any dom elements </label><br>
            <button name="change_class" id="change_class" class="btn btn-primary" onclick="changeClass('change_class')">Add Class</button>
    </div>

    <div class="col-md-6" style="border: solid 1px;">
        <label> Get datasets from dom elements</label><br>
        <button class="btn btn-primary"  id="dataset" data-name="Test" data-message="Hello World" onclick="getDataset('dataset')" > Get Dataset</button>
    </div>
</div>
<br>
<div class="row">
    <div class="col-md-6" style="border: solid 1px;">
        <p> Inject new dom element</p>
        <button class="btn btn-primary" name="inject_element" id="inject_element" onclick="injectDomElement('div_for_new_element')"> Inject Element</button>
    </div>
    <div class="col-md-6" style="border: solid 1px;" id="div_for_new_element">

    </div>
</div>

<div class="row">
    <div class="col-md-6" style="border: solid 1px;">
        <p> Make both ajax and get request</p>
        <button class="btn btn-primary" name="ajax_request" id="ajax_request" onclick="postRequest()"> Ajax Request</button>
        <button class="btn btn-primary" name="get_request" id="get_request" onclick="getRequest()"> Get Request</button>
    </div>
    <div class="col-md-6" style="border: solid 1px;">
        <p id="get_val"></p>
        <p id="ajax_val"></p>
    </div>
</div>

<div class="row">
    <div class="col-md-6" style="border: solid 1px;">
        <p>  Make 3 POST requests at the same time which needs to be resolved all at the same tim</p>
        <button class="btn btn-primary" name="ajax_request" id="ajax_request" onclick="postRequest()"> POST</button>
    </div>
    <div class="col-md-6" style="border: solid 1px;">
        <p id="res1"></p>
        <p id="res2"></p>
        <p id="res3"></p>
    </div>
</div>


<div class="row">

    <div class="row">
        <div class="col-md-4" style="border: solid 1px;">
            <p>Get and set values from input box/checkbox/select dropdown</p>
            Input : <input type="text" name="inpput" id="inpput">
            <button name="get_inp_val" id="get_inp_val"  class="btn btn-primary" onclick="getInputVal('inpput')">Get Input Val</button>
            <button name="set_inp_val" id="set_inp_val"  class="btn btn-primary" onclick="setInputValue('inpput')">Set Inp </button>
        </div>

        <div class="col-md-4" style="border: solid 1px;">
            Checkbox: <input type="checkbox" name="chbx" value="Check" id="chbx">
            <button name="get_chk_val" id="get_chk_val"  class="btn btn-primary" onclick="getInputVal('chbx')">Get chbx val</button>
            <button name="set_chk_val" id="set_chk_val"  class="btn btn-primary" onclick="setInputValue('chbx')">Set chbx val</button>
        </div>

        <div class="col-md-4" style="border: solid 1px;">
            Select : <select name="slct" id="slct">
                <option value="a"> A</option>
                <option value="b"> B</option>
            </select>
            <button name="get_slct_val" id="get_slct_val"  class="btn btn-primary" onclick="getInputVal('slct')">Get select val</button>
            <button name="set_slct_val" id="set_slct_val"  class="btn btn-primary" onclick="setInputValue('slct')">Set select val</button>

        </div>
    </div>



</div>

<script type="application/javascript" src="scripts.js"></script>

</body>
</html>