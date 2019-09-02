<!--
    INI BUAT INDIVIDUAL DELEGATES
    ==============================

    <form action="/test/delegations" method="post">
    @csrf

    ===========================================================================
1   <label for="fullName">Full Name</label>
    <input type="text" name="fullName" id="fullName" /><br>

1   <label for="institution">Institution</label>
    <input type="text" name="institution" id="institution" /><br>

1   <label for="nationality">Nationality</label>
    <input type="text" name="nationality" id="nationality" /><br>

1   <label for="idNumber">ID Number</label>
    <input type="text" name="idNumber" id="idNumber" /><br>

1   <label for="gender">Gender</label>
    <input type="text" name="gender" id="gender" /><br>

1   <label for="medicalConditions">Medical Conditions</label>
    <input type="text" name="medicalConditions" id="medicalConditions" /><br>

1   <label for="foodRestrictions">Food Restrictions</label>
    <input type="text" name="foodRestrictions" id="foodRestrictions" /><br>

1   <label for="accomodation">Accomodation</label>
    <input type="text" name="accomodation" id="accomodation" /><br>
    ===========================================================================

    ===========================================================================
2   <label for="contactNumber">Contact Number</label>
    <input type="text" name="contactNumber" id="contactNumber" /><br>

2   <label for="lineId">Line ID</label>
    <input type="text" name="lineId" id="lineId" /><br>

2   <label for="email">Email</label>
    <input type="email" name="email" id="email" /><br>
    ===========================================================================

    ===========================================================================
3   <label for="munExperiences">MUN Experiences</label>
    <input type="text" name="munExperiences" id="munExperiences" /><br>

3   <label for="firstCouncilPreference">First Council Preference</label>
    <input type="text" name="firstCouncilPreference" id="firstCouncilPreference" /><br>

3   <label for="firstCouncilCountryPreference">First Council Country Preferences</label>
    <input type="text" name="firstCouncilCountryPreference" id="firstCouncilCountryPreference" /><br>

3   <label for="firstCouncilReason">Reason</label>
    <input type="text" name="firstCouncilReason" id="firstCouncilReason" /><br>

3   <label for="secondCouncilPreference">Second Council Preference</label>
    <input type="text" name="secondCouncilPreference" id="secondCouncilPreference" /><br>

3   <label for="secondCouncilCountryPreference">Second Council Country Preferences</label>
    <input type="text" name="secondCouncilCountryPreference" id="secondCouncilCountryPreference" /><br>

3   <label for="secondCouncilReason">Reason</label>
    <input type="text" name="secondCouncilReason" id="secondCouncilReason" /><br>

3   <label for="thirdCouncilPreference">Third Council Preference</label>
    <input type="text" name="thirdCouncilPreference" id="thirdCouncilPreference" /><br>

3   <label for="thirdCouncilCountryPreference">Third Council Country Preferences</label>
    <input type="text" name="thirdCouncilCountryPreference" id="thirdCouncilCountryPreference" /><br>

3   <label for="thirdCouncilReason">Reason</label>
    <input type="text" name="thirdCouncilReason" id="thirdCouncilReason" /><br>
    ===========================================================================

    <input type="submit" value="Submit" />
</form> -->


<body>
    <div class="form-page is-active" id='form-landing'>
        <h2>Landing Form</h2>
        <button onclick="showPage('#form-individual-page-1')">Individual Delegate</button>
        <button onclick="showPage('#form-delegation-page-1')">Delegations</button>
    </div>

    <form action="/test/individual-delegate" method="post">
        @csrf

        <div class="form-page" id='form-individual-page-1'>
            <h2>Personal Identity</h2>  
        
                <label for="fullName">Full Name</label>
                <input type="text" class='form-input' name="fullName" id="fullName" /><br>

                <label for="institution">Institution</label>
                <input type="text" class='form-input' name="institution" id="institution" /><br>

                <label for="nationality">Nationality</label>
                <input type="text" class='form-input' name="nationality" id="nationality" /><br>

                <label for="idNumber">ID Number</label>
                <input type="text" class='form-input' name="idNumber" id="idNumber" /><br>

                <label for="gender">Gender</label>
                <input type="text" class='form-input' name="gender" id="gender" /><br>

                <label for="medicalConditions">Medical Conditions</label>
                <input type="text" class='form-input' name="medicalConditions" id="medicalConditions" /><br>

                <label for="foodRestrictions">Food Restrictions</label>
                <input type="text" class='form-input' name="foodRestrictions" id="foodRestrictions" /><br>

                <label for="accomodation">Accomodation</label>
                <input type="text" class='form-input' name="accomodation" id="accomodation" /><br>

            <a class="button" onclick='back()'>Back</a>
            <a class="button" onclick="showPage('#form-individual-page-2')">next</a>
        </div>

        <div class="form-page" id='form-individual-page-2'>
            <h2>Contact</h2>

                <label for="contactNumber">Contact Number</label>
                <input type="text" class='form-input' name="contactNumber" id="contactNumber" /><br>

                <label for="lineId">Line ID</label>
                <input type="text" class='form-input' name="lineId" id="lineId" /><br>

                <label for="email">Email</label>
                <input type="email" class='form-input' name="email" id="email" /><br>

            <a class="button" onclick='back()'>Back</a>
            <a class="button" onclick="showPage('#form-individual-page-3')">next</a>
        </div>

        <div class="form-page" id='form-individual-page-3'>
            <h2>Individual Delegate Page 3</h2>
                <label for="munExperiences">MUN Experiences</label>
                <input type="text" class='form-input' name="munExperiences" id="munExperiences" /><br>

                <label for="firstCouncilPreference">First Council Preference</label>
                <input type="text" class='form-input' name="firstCouncilPreference" id="firstCouncilPreference" /><br>

                <label for="firstCouncilCountryPreference">First Council Country Preferences</label>
                <input type="text" class='form-input' name="firstCouncilCountryPreference" id="firstCouncilCountryPreference" /><br>

                <label for="firstCouncilReason">Reason</label>
                <input type="text" class='form-input' name="firstCouncilReason" id="firstCouncilReason" /><br>

                <label for="secondCouncilPreference">Second Council Preference</label>
                <input type="text" class='form-input' name="secondCouncilPreference" id="secondCouncilPreference" /><br>

                <label for="secondCouncilCountryPreference">Second Council Country Preferences</label>
                <input type="text" class='form-input' name="secondCouncilCountryPreference" id="secondCouncilCountryPreference" /><br>

                <label for="secondCouncilReason">Reason</label>
                <input type="text" class='form-input' name="secondCouncilReason" id="secondCouncilReason" /><br>
                
                <label for="thirdCouncilPreference">Third Council Preference</label>
                <input type="text" class='form-input' name="thirdCouncilPreference" id="thirdCouncilPreference" /><br>

                <label for="thirdCouncilCountryPreference">Third Council Country Preferences</label>
                <input type="text" class='form-input' name="thirdCouncilCountryPreference" id="thirdCouncilCountryPreference" /><br>

                <label for="thirdCouncilReason">Reason</label>
                <input type="text" class='form-input' name="thirdCouncilReason" id="thirdCouncilReason" /><br>
                
            <a class="button" onclick='back()'>Back</a>
            <a class="button" onclick='summary()'>next</a>
        </div>

        <div class="form-page" id='form-individual-page-4'>
            <h2>Submit Data</h2>
                <div class="summary">

                </div>
            <a class="button" onclick='back()'>Back</a>
            <input type="submit" value="Send Data" />
        </div>

    </form>

    <form action="/test/delegations" method="post">
        <div class="form-page" id='form-delegation-page-1'>
            <h2>Delegation Form</h2>
            <a class="button" onclick='back()'>Back</a>
        </div>
    </form>
</body>

<style>
    .form-page{
        display: none;
    }

    .form-page.is-active{
        display: block;
    }

    a.button {
        cursor: pointer;
        color: red;
    }

    a.button:hover{
        color: coral;
    }
</style>

<script>
var rollbackPage = ["#form-landing"];
var data = {};
const pages = document.querySelectorAll(".form-page");
const inputs = document.querySelectorAll("input.form-input");

function dictionary(x){
    var e = "";
    switch(x){
        case "fullName":
            e = "Full Name";
            break;
        case "institution":
            e = "Institution";
            break;
        case "nationality":
            e = "Nationality";
            break;
        case "idNumber":
            e = "ID Number";
            break;
        case "gender":
            e = "Gender";
            break;
        case "medicalConditions":
            e = "Medical Conditions";
            break;
        case "foodRestrictions":
            e = "Food Restrictions";
            break;
        case "accomodation":
            e = "Accomodation";
            break;
        case "contactNumber":
            e = "Contact Number";
            break;
        case "lineId":
            e = "Line ID";
            break;
        case "email":
            e = "Email";
            break;
        case "munExperiences":
            e = "MUN Experiences";
            break;
        case "firstCouncilPreference":
            e = "Council Preference";
            break;
        case "firstCouncilCountryPreference":
            e = "Country";
            break;
        case "firstCouncilReason":
            e = "Reason";
            break;
        case "secondCouncilPreference":
            e = "Council Preference";
            break;
        case "secondCouncilCountryPreference":
            e = "Country";
            break;
        case "secondCouncilReason":
            e = "Reason";
            break;
        case "thirdCouncilPreference":
            e = "Council Preference";
            break;
        case "thirdCouncilCountryPreference":
            e = "Country";
            break;
        case "thirdCouncilReason":
            e = "Reason";
            break;  
        default:
            e = x;
            break;
    }

    return e;
}

function printAllData(data){
    document.querySelector(".summary").innerHTML = textData();
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
    removeActivePages();
    revealActivePage(page);
    rollbackPage.push(page);
}


//Set all object's name
function assignAllData(){
    inputs.forEach(input => {
        data[input.getAttribute("name")] = input.value;
    });
}

function summary(){
    assignAllData();
    printAllData(data);
    showPage('#form-individual-page-4');
}

// Empty an Object
function emptyObject(data){
    var data = {};
}
</script>