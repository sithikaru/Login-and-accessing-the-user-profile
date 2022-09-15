function signup(){

    var name = document.getElementById("n");
    var email = document.getElementById("e");
    var mobile = document.getElementById("m");
    var password = document.getElementById("p");

    var form = new FormData();
    form.append("n",name.value);
    form.append("e",email.value);
    form.append("m",mobile.value);
    form.append("p",password.value);

    var r = new XMLHttpRequest();

    r.onreadystatechange = function(){
        if(r.readyState == 4){
            var txt = r.responseText;
            if(txt == "success"){
                window.location = "signin.php";
            }else{
                alert (txt);
            }
            
        }
    }

    r.open("POST","signupProcess.php",true);
    r.send(form);

}

function signin(){
    
    var email = document.getElementById("e");
    var password = document.getElementById("p");

    var f = new FormData();
    f.append("e",email.value);
    f.append("p",password.value);

    var r = new XMLHttpRequest();

    r.onreadystatechange = function (){
        if(r.readyState == 4){
            var t = r.responseText;
            if(t == "success"){
                window.location = "home.php";
            }else{
                alert (t);
            }
            
        }
    }

    r.open("POST","signinProcess.php",true);
    r.send(f);

}

function signout(){

    var r = new XMLHttpRequest();

    r.onreadystatechange = function(){
        if(r.readyState == 4){
            var t = r.responseText;

            if(t == "success"){
                window.location = "signin.php";
            }else{
                alert (t);
            }

        }
    }

    r.open("GET","signoutProcess.php",true);
    r.send();


}
