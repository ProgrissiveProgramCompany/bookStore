testSession();
function testSession(){
    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function (ev) {
        if(this.readyState===4 && this.status===200){
            var response = JSON.parse(this.responseText);
            if(response == "true"){
               console.log("you are a valid user");
            }
            else{
                window.location.href="index.php";
            }
        }
    };
    var url ="../model/session.php";
    xhr.open("GET", url , true);
    xhr.send();
}
function updateData() {
    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function (ev) {
        if(this.readyState===4 && this.status===200){
            console.log(this.responseText);
            document.getElementById('table').innerHTML=this.responseText;


        }
    };
    var url ="../model/shopping Cart.php";
    xhr.open("GET", url , true);
    xhr.send();
}

function removeItem(isbn,quantity) {
    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function (ev) {
        if(this.readyState===4 && this.status===200){
            console.log(this.responseText);
            updateData();
        }
    };
    console.log("the quantity is "+quantity);
    quantity=parseInt(quantity)-1;
    var url ="../model/remove Item.php?isbn="+isbn+"&quantity="+quantity;
    console.log(url);
    xhr.open("GET", url , true);
    xhr.send();

}
function buy() {
    document.getElementById('closeModal').click();
    document.getElementById('showModal').click();
}


//this function buy the books if the
function promotion(){
var free = document.getElementById("free").value;
    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function (ev) {
        if(this.readyState===4 && this.status===200){
            console.log();
            document.getElementById('table').innerHTML=this.responseText;
            document.getElementById('closeModal').click();
            getBelt();
            document.getElementById("beltModalTrigger").click();
        }
    };
    var url ="../model/free.php";
    xhr.open("GET", url , true);
    if(free=="free"){
    xhr.send();
    }else{
        alert("you have to write free in the promotion field");
        document.getElementById("free").focus();

    }
}

function showHistory() {
    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function (ev) {
        if(this.readyState===4 && this.status===200){
            console.log(this.responseText);
            document.getElementById('history').innerHTML=this.responseText;


        }
    };
    var url ="../model/history.php";
    xhr.open("GET", url , true);
    xhr.send();
}


function logout() {
    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function (ev) {
        if(this.readyState===4 && this.status===200){
            console.log(this.responseText);
            document.getElementById('history').innerHTML=this.responseText;


        }
    };
    var url ="../model/logout.php";
    xhr.open("GET", url , true);
    xhr.send();
    window.location.href="index.php";

}

function notRegestered(){
    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function (ev) {
        if(this.readyState===4 && this.status===200){
            console.log(this.responseText);
            var res = JSON.parse(this.responseText);

        }
    };
    var url ="../model/Session.php";
    xhr.open("GET", url , true);
    xhr.send();


}

setUserInfo();
function setUserInfo() {

setTimeout(function () {


    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function (ev) {
        if (this.readyState === 4 && this.status === 200) {
            console.log(this.responseText);
            var info = JSON.parse(this.responseText);
            document.getElementById("welcome").innerText = "welcome " + info["name"];
            document.getElementById("picture").src = "../profiles/"+info["picture"];

        }
    };
    var url = "../model/getUserInfo.php";
    xhr.open("GET", url, true);
    xhr.send();

},150);
}


function getBelt() {
    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function (ev) {
        if (this.readyState === 4 && this.status === 200) {
            document.getElementById("belt").innerHTML=this.responseText;
        }
    };
    var url = "../model/belt.php";
    xhr.open("GET", url, true);
    xhr.send();

}