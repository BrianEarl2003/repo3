function focusFirstName() { //focuses the first name input field
    document.getElementById("firstName").focus();
}

function filledFirstName() {
    var FN = document.forms["orderForm"]["first_name"].value;

    if (FN == "") {/*If First Name field isn't filled, display error message*/
        text = "&#10060 This field cannot be empty";
        document.getElementById("firstNameP").innerHTML = text;
        document.getElementById("firstNameP").style="color:red";
        document.getElementById("firstName").focus();
        return false;
    } else { /*If First Name field is filled, display check mark*/
        text = "&#10004";
        document.getElementById("firstNameP").innerHTML = text;
        document.getElementById("firstNameP").style="color:green";
        return true;
    }
}

function filledLastName() {
    var LN = document.forms["orderForm"]["last_name"].value;

    if (LN == "") {/*If Last Name field isn't filled, display error message*/
        text = "&#10060 This field cannot be empty";
        document.getElementById("lastNameP").innerHTML = text;
        document.getElementById("lastNameP").style="color:red";
        document.getElementById("lastName").focus();
        return false;
    } else { /*If Last Name field is filled, display check mark*/
        text = "&#10004";
        document.getElementById("lastNameP").innerHTML = text;
        document.getElementById("lastNameP").style="color:green";
        return true;
    }
}

function filledAddress() {
    var address = document.forms["orderForm"]["address"].value;

    if (address == "") {/*If Address field isn't filled, display error message*/
        text = "&#10060 This field cannot be empty";
        document.getElementById("addressP").innerHTML = text;
        document.getElementById("addressP").style="color:red";
       document.getElementById("addressField").focus();
        return false;
    } else { /*If Address field is filled, display check mark*/
        text = "&#10004";
        document.getElementById("addressP").innerHTML = text;
        document.getElementById("addressP").style="color:green";
        return true;
    }
}

function validatePhoneNumber() {
    var phoneNumber = document.forms["orderForm"]["phone"].value;
    /*If phone number field isn't valid, display error message*/
    if (phoneNumber == "" || !/\d\d\d\u002d\d\d\d\u002d\d\d\d\d/.test(phoneNumber)
        || phoneNumber.length != 12) {
        text = "&#10060 Phone format: ###-###-####";
        document.getElementById("phoneP").innerHTML = text;
        document.getElementById("phoneP").style="color:red";
        document.getElementById("phoneNumber").focus();
        return false;
    } else { /*If phone number field is valid, display check mark*/
        text = "&#10004";
        document.getElementById("phoneP").innerHTML = text;
        document.getElementById("phoneP").style="color:green";
        return true;
    }
}

function total() {
    var H   = document.forms["orderForm"]["item_0"];
    var DBC = document.forms["orderForm"]["item_1"];
    var BH  = document.forms["orderForm"]["item_2"];
    var TS  = document.forms["orderForm"]["item_3"];
    var total = 0;
    // if none of the boxes are checked, display error message
    if (H.checked == false && DBC.checked == false && BH.checked == false &&
        TS.checked == false) {
        text = "&#10060 Select at least one box";
        document.getElementById("totalP").innerHTML = text;
        document.getElementById("totalP").style="color:red";
        document.forms["orderForm"]["item_0"].focus();
        return false;
    } else {//if a box is checked, then the corresponding amount is added to total
        if (H.checked == true){
            total += 24;
    }
        if (DBC.checked == true){
            total += 24;
    }
        if (BH.checked == true){
            total += 2.5; 
    }
        if (TS.checked == true){
            total += 50;
    }
    total = "&#10004 $" + total.toFixed(2);
    document.getElementById("totalP").innerHTML = total;
    document.getElementById("totalP").style="color:green";
    return true;
    }
}

function validateCardName() {
    var card1 = document.getElementById("visa");
    var card2 = document.getElementById("mastercard");
    var card3 = document.getElementById("americanExpress");
// if a radio buttons is not selected, display error message
    if (card1.checked == false && card2.checked == false && card3.checked == false) {
        text = "&#10060 Select one option";
        document.getElementById("cardNameP").innerHTML = text;
        document.getElementById("cardNameP").style="color:red";
        document.getElementById("visa").focus();
        return false;
    } else {// if a radio button is selected, display check mark
        text = "&#10004";
        document.getElementById("cardNameP").innerHTML = text;
        document.getElementById("cardNameP").style="color:green";
        return true;
    }
}

function validateCardNumber() {
    var cardNumber = document.forms["orderForm"]["credit_card"].value;
/*If card number field isn't valid, display error message*/
    if (cardNumber == "" || !/\d\d\d\d\d\d\d\d\d\d\d\d\d\d\d\d/.test(cardNumber)
        || cardNumber.length != 16) {
        text = "&#10060 Credit Card Number must be 16 digits";
        document.getElementById("creditCardP").innerHTML = text;
        document.getElementById("creditCardP").style="color:red";
        document.getElementById("creditCard").focus();
        return false;
    } else { /*If card number field is valid, display check mark*/
        text = "&#10004";
        document.getElementById("creditCardP").innerHTML = text;
        document.getElementById("creditCardP").style="color:green";
        return true;
    }
}

function validateExpDate() {
    var expDate = document.forms["orderForm"]["exp_date"].value;
    var re = /^(\d{1,2})\u002d(\d{4})$/;
    regs = expDate.match(re)
/*if input doesn't match regEx or month isn't 1-12 or year is < 2018,
display error message*/
    if(!re.test(expDate) || regs[1] < 1 || regs[1] > 12 || regs[2] < 2018) {
        text = "&#10060 Exp. Date Format: (MM-YYYY)<br>Month (1-12) Year > 2017";
        document.getElementById("expDateP").innerHTML = text;
        document.getElementById("expDateP").style="color:red";
        document.getElementById("expDate").focus();
        return false;
    } else {//otherwise display check mark
        text = "&#10004";
        document.getElementById("expDateP").innerHTML = text;
        document.getElementById("expDateP").style="color:green";
        return true;
    }
}

function clr() {
    var defaultInput = "";
//clears all error and validation messages and focus on first name field
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

    focusFirstName();
}
//if the total, filled and validate functions return true, the form is submitted
function validateForm() {
    if (filledFirstName() && filledLastName() && filledAddress() &&
        validatePhoneNumber() && total() && validateCardName() &&
        validateCardNumber() && validateExpDate()) {
        text = "&#10004Your order has been submitted";
        document.getElementById("validateP").innerHTML = text;
        document.getElementById("validateP").style="color:green";
        return true;
    } else {
        return false;
    }
}
