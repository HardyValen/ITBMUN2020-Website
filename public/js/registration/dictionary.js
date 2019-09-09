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
        case "accommodation":
            e = "Accommodation";
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