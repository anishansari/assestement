
function changeClass(el){
    document.getElementById(el).classList.add('change');
}

function getDataset(el){
    var element = document.getElementById(el);
    alert('Dataset of Test is'+element.dataset.name + ' and  Dataset of name is ' + element.dataset.message);
}

function injectDomElement(div){
    const paragraph = document.createElement("p");
    const text = document.createTextNode("Hi,New paragraph element is appended to DOM.");
    paragraph.appendChild(text);
    const element = document.getElementById(div);
    element.appendChild(paragraph);
}


function ajax(){
    const url = "response.php"
    fetch(url).then(function(response) {
        return response.json();
    }).then(function(data) {
        document.getElementById('get_val').innerHTML=data.message+' this response is from get request you made';
    }).catch(function() {
        console.log("Error");
    });

}
function getRequest(){
    const url = "response.php"
    fetch(url).then(function(response) {
        return response.json();
    }).then(function(data) {
        document.getElementById('get_val').innerHTML=data.message+' this response is from get request you made';
    }).catch(function() {
        console.log("Error");
    });

}

function postRequest(){
    var first_response;
    var second_response;
    var third_response;
    const url = "response.php"
    //1st request
    fetch(url,{method:'POST'}).then(function(response) {
        return response.json();
    }).then(function(data) {

        document.getElementById('res1').innerHTML = data.message +' this response is from first request you made';
    }).catch(function() {
        console.log("Error");
    });
    //2nd request
    fetch(url,{method:'POST'}).then(function(response) {
        return response.json();
    }).then(function(data) {

        document.getElementById('res2').innerHTML = data.message+' this response is from Second request you made';
    }).catch(function() {
        console.log("Error");
    });
    //3rd request
    fetch(url,{method:'POST'}).then(function(response) {
        return response.json();
    }).then(function(data) {

        document.getElementById('res3').innerHTML = data.message+' this response is from third request you made';
    }).catch(function() {
        console.log("Error");
    });
}

function getInputVal(el){
    var element = document.getElementById(el)
    alert(element.value);
}

function setInputValue(el){
    var val  = prompt("Please enter your value");
    var element = document.getElementById(el);
    element.value = val;

}

