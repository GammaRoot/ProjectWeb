function loginValidation(){
    var regexUsername= /[a-zA-Z0-9_\-\.]+/;
    var regexPass=/[A-Z]\w{7,}/;

    var username =document.getElementById('login-username');
    var validusername =document.getElementById('login-username-valid');
    var password =document.getElementById('login-password');
    var validPassword =document.getElementById('login-password-valid');
    
    
    if(username.value==""||!regexUsername.test(username.value)){
         validusername.innerHTML=" Username Not Valid";
    }
    else{
        validusername.innerHTML="";
    }
    if(password.value==""||!regexPass.test(password.value)){
         validPassword.innerHTML=" Password Not Valid";
    }
    else{
        validPassword.innerHTML="";
    }
    
}