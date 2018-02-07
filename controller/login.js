function validation() {


    var xhr = new XMLHttpRequest();
    var userName = document.getElementById("userName").value;
    var password = document.getElementById("password").value;
    xhr.onreadystatechange = function (ev) {
        if (this.readyState === 4 && this.status === 200) {
            var responnse = JSON.parse(xhr.responseText);
            console.log("the result is "+responnse);
            if(responnse == 0 ){
                alert("welcome Admin");

            }
            if(responnse == 1){
                alert("Hello user");

                window.location= "home.html";

            }
            if(responnse==2){
            alert("wrong user name or password!!");
            }

        }
    };
    var url = "check.php?userName=" + userName+
    "&password="+password;
    xhr.open("GET", url , true);
    xhr.send();
}