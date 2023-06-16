let pass = "";
let confirmPass = "";

function getPass() {
    
    pass = $("#Password").val();
    if (pass==""){
        pass = "beda";
    }
    getConfirmPass();
    return pass;
}

function getConfirmPass() {
    confirmPass = $("#ConfirmPassword").val();
    if (confirmPass === pass) {
        $("#ConfirmPassword").css("border", "1px solid green");
        $("#Password").css("border", "1px solid green");
        document.querySelector('#btnSubmit').disabled = false;
    }
    else{
        $("#ConfirmPassword").css("border", "1px solid red");
        $("#Password").css("border", "1px solid red");
        document.querySelector('#btnSubmit').disabled = true;
    }
}