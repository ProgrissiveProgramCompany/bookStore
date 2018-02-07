var xhr = new XMLHttpRequest();
xhr.onreadystatechange = function (ev) {
    if (this.readyState === 4 && this.status === 200) {
        console.log(this.responseText);
        var response = JSON.parse(this.responseText);
        alert(response);
        reDirect(response);
    }
};

var img;

var url = "model/Session.php";
xhr.open("GET", url, true);
xhr.send();

function reDirect(response) {

    if(response==0){
        window.location.href="view/home.html";
    }
    else if(response==1){
        window.location.href="view/login.html";
    }
    else{
        console.log("wrong user name or password");
    }


}