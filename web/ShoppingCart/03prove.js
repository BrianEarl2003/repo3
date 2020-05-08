function focusStreetAddress() { //focuses the street address input field
    document.getElementById("streetAddress").focus();
}

function filledStreetAddress() {
    var SA = document.forms["orderForm"]["street_address"].value;

    if (SA == "") {/*If street address field isn't filled, display error message*/
        text = "&#10060 This field cannot be empty";
        document.getElementById("streetAddressP").innerHTML = text;
        document.getElementById("streetAddressP").style="color:red";
        document.getElementById("streetAddress").focus();
        return false;
    } else { /*If street address field is filled, display check mark*/
        text = "&#10004";
        document.getElementById("streetAddressP").innerHTML = text;
        document.getElementById("streetAddressP").style="color:green";
        return true;
    }
}

function filledCity() {
    var LN = document.forms["orderForm"]["city"].value;

    if (LN == "") {/*If city field isn't filled, display error message*/
        text = "&#10060 This field cannot be empty";
        document.getElementById("cityP").innerHTML = text;
        document.getElementById("cityP").style="color:red";
        document.getElementById("city").focus();
        return false;
    } else { /*If city field is filled, display check mark*/
        text = "&#10004";
        document.getElementById("cityP").innerHTML = text;
        document.getElementById("cityP").style="color:green";
        return true;
    }
}

function filledState() {
    var state = document.forms["orderForm"]["state"].value;

    if (state == "") {/*If state field isn't filled, display error message*/
        text = "&#10060 This field cannot be empty";
        document.getElementById("stateP").innerHTML = text;
        document.getElementById("stateP").style="color:red";
       document.getElementById("state").focus();
        return false;
    } else { /*If state field is filled, display check mark*/
        text = "&#10004";
        document.getElementById("stateP").innerHTML = text;
        document.getElementById("stateP").style="color:green";
        return true;
    }
}

function validateZip() {
    var zip = document.forms["orderForm"]["zip"].value;
    /*If zip field isn't valid, display error message*/
    if (zip == "" || !/\d\d\d\d\d/.test(zip)
        || zip.length != 5) {
        text = "&#10060 Zip format: #####";
        document.getElementById("zipP").innerHTML = text;
        document.getElementById("zipP").style="color:red";
        document.getElementById("zip").focus();
        return false;
    } else { /*If zip field is valid, display check mark*/
        text = "&#10004";
        document.getElementById("zipP").innerHTML = text;
        document.getElementById("zipP").style="color:green";
        return true;
    }
}

function clr() {
    var defaultInput = "";
//clears all error and validation messages and focus on street address field
    var msg = document.getElementsByClassName("message");
    msg[0].innerHTML = defaultInput;
    msg[1].innerHTML = defaultInput;
    msg[2].innerHTML = defaultInput;
    msg[3].innerHTML = defaultInput;
    msg[4].innerHTML = defaultInput;
    msg[5].innerHTML = defaultInput;
    msg[6].innerHTML = defaultInput;
    msg[7].innerHTML = defaultInput;
    msg[8].innerHTML = defaultInput;

    focusStreetAddress();
}
//if the total, filled and validate functions return true, the form is submitted
function validateForm() {
    if (filledStreetAddress() && filledCity() && filledState() &&
        validateZip()) {
        text = "&#10004Your order has been submitted";
        document.getElementById("validateP").innerHTML = text;
        document.getElementById("validateP").style="color:green";
        return true;
    } else {
        return false;
    }
}


