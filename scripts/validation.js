function userRegVal() {

var name = document.forms["userReg"]["p-name"].value;
var email = document.forms["userReg"]["email"].value;
var address = document.forms["userReg"]["address"].value;
var mobile = document.forms["userReg"]["mobile"].value;
var p_license_no = document.forms["userReg"]["p-license-no"].value;
var password = document.forms["userReg"]["password"].value;
var confirmPassword = document.forms["userReg"]["confirmPassword"].value;

if(password != confirmPassword){
    alert("Passwords do not match");
    return false;
}
    
}