function validate(){
console.log("asasssssssss");
     var userName =document.getElementById("userName");
    if(userName.value == "") {
        alert("Error: Username cannot be blank!");
        userName.focus();
        return false;
    }
    var password =document.getElementById("password");
    if(password.value == "") {
        alert("Error: password cannot be blank!");
        password.focus();
        return false;
    }

    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function (ev) {
        if (this.readyState === 4 && this.status === 200) {
           console.log(this.responseText);
            var resp = JSON.parse(this.responseText);

            // if the user is have admin permissions then go to admin page
            if(resp == "0"){
                console.log("you are Admin user");
            }
            /// if the user is a normal user then go to home page
            else if(resp == "1"){
                console.log("you are a normal user");
                window.location.href="home.html";

            }
            //if the user name or password is not correct
            else{
                console.log("wrong name or password");
                alert("wring user name or password");
            }
        }
    };

    var url = "../model/check.php?userName=" + userName.value+
        "&password="+password.value;
    console.log(url);
    xhr.open("GET", url , true);
    xhr.send();
}