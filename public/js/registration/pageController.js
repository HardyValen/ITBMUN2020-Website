var rollbackPage = ["#form-landing"];
const pages = document.querySelectorAll(".form-page");
var data = {};
var inputs = document.querySelectorAll("input.form-input");
var inputsDelegation = document.querySelectorAll("input.form-input-delegation");
var radioButtons = document.querySelectorAll("input[type=radio] + .radio-button");
var radioInputs = document.querySelectorAll('input[type=radio]');


function backToSetDelegates(){
    tabWrapper.innerHTML = "";
    tabs = tabs = document.querySelectorAll(".form-tab");
    viewTab = 1;
    back();
}

function backtoMain(){
    var r = confirm("We will remove all data from the input fields if you proceed");
    if (r){
        data = {};
        removeAllData();
        back();
        
        document.querySelector(".summary").innerHTML = "";
    }
}

function printAllData(data){
    var a = Object.keys(data);
    var b = Object.values(data);
    var c = [];
    for (var i = 0; i < a.length; i++){ //Zipping array
        c.push([a[i], b[i]]);
    }

    for (var i = 0; i < c.length; i++){
        document.querySelector(".summary").innerHTML += ("<p>" + dictionary(c[i][0]) + ": " + c[i][1] + "</p>");
    }
}

function printAllDataDelegations(data){
    var a = Object.keys(data);
    var b = Object.values(data);
    var c = [];
    for (var i = 0; i < a.length; i++){ //Zipping array
        c.push([a[i], b[i]]);
    }

    for (var i = 0; i < c.length; i++){
        document.querySelector(".summary-delegation").innerHTML += ("<p>" + dictionary(c[i][0]) + ": " + c[i][1] + "</p>");
    }
}

function removeActivePages() {
    pages.forEach( page => {
        page.classList.remove("is-active");
    })
}

function revealActivePage(page) {
    document.querySelector(page).classList.add("is-active");
}

function back(){
    rollbackPage.pop();
    removeActivePages();
    revealActivePage(rollbackPage.slice(-1)[0]);
}

function showPage(page){
    radioButtonsSelector();
    removeActivePages();
    revealActivePage(page);
    rollbackPage.push(page);
}

function radioButtonsSelector(){
    radioButtons = document.querySelectorAll("input[type=radio] + .radio-button");

    radioButtons.forEach(button => {
        button.innerHTML = "<span></span>";
    });
}

// Assign All Data
    // Set all data on the input field to object "data"
    // 1. Individual delegate assign all data

    function assignAllData(){
        radioInputs.forEach(input => {
            if(input.checked){
                input.classList.add("form-input")
            } else {
                input.classList.remove("form-input")
            }
        });

        inputs = document.querySelectorAll("input.form-input");

        inputs.forEach(input => {
            data[input.getAttribute("name")] = input.value;
        });
    }

    //2. Delegations assign all data

    function assignAllDataDelegations(){
        radioInputs = document.querySelectorAll('input[type=radio]');
        
        radioInputs.forEach(input => {
            if(input.checked){
                input.classList.add("form-input-delegation")
            } else {
                input.classList.remove("form-input-delegation")
            }
        });

        inputsDelegation = document.querySelectorAll("input.form-input-delegation");

        inputsDelegation.forEach(input => {
            data[input.getAttribute("name")] = input.value;
        });
    }

function removeAllData(){
    inputs.forEach(input => {
        input.value = "";
    });
}

function summary(page){
    assignAllData();
    printAllData(data);
    showPage(page);
}

function summaryDelegation(page){
    assignAllDataDelegations();
    printAllDataDelegations(data);
    showPage(page);
}