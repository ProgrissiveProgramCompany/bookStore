getUseInfo();
loadHome();

function getUseInfo() {
    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function (ev) {
        if(this.readyState===4 && this.status===200){
            console.log(this.responseText);
            var res = JSON.parse(this.responseText);
            document.getElementById("welcome").innerText="welcome "+res;
        }
    };
    var url ="../model/getUserInfo.php";
    xhr.open("GET", url , true);
    xhr.send();
}

function hide() {

    document.getElementById("abc").innerHTML="";
}


function buy() {
    document.getElementById('closeModal').click();
    document.getElementById('showModal').click();
}


function loadMain() {

    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function (ev) {
        if(this.readyState===4 && this.status===200){
            console.log(this.responseText);
            document.getElementById("main").innerHTML=this.responseText;

        }
    };
    var url ="../model/loadContent.php?requiredContent=main";
    xhr.open("GET", url , true);
    xhr.send();

}

function loadSlideShow(){

    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function (ev) {
        if(this.readyState===4 && this.status===200){
            document.getElementById("slideShow").innerHTML=this.responseText;
        }
    };
    var url ="../model/loadContent.php?requiredContent=slidShow";
    xhr.open("GET", url , true);
    xhr.send();
}


function loadSideNav() {
    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function (ev) {
        if(this.readyState===4 && this.status===200){
            document.getElementById("sideNav").innerHTML=this.responseText;

        }
    };
    var url ="../model/loadContent.php?requiredContent=sideNav";
    xhr.open("GET", url , true);
    xhr.send();

}

function loadBooks(category) {
    loadMain();
    setTimeout(function (args) {
       loadSideNav();

        document.getElementById("path").innerHTML="BookShop->Books->"+category;

        },30);
    setTimeout(function (args) {



    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function (ev) {
        console.log("ssssssssssssssssssssssssssssssssssssssssssssssssssssssssss");
        if (this.readyState === 4 && this.status === 200) {
            console.log(this.responseText);
            document.getElementById("books").innerHTML=this.responseText;
        }
    };

    var url;

    if(category == "" || category == null || category==undefined){
        category="new";
        var url = "../model/books.php?category=new";
    }
    else{
        var url = "../model/books.php?category="+category;

    }
    console.log(url);
    //var active =  document.getElementById(category);


    document.getElementById("programming").classList="list-group-item";
    document.getElementById("novel").classList="list-group-item";
    document.getElementById("science").classList="list-group-item";
    document.getElementById("horror").classList="list-group-item";
    document.getElementById("new").classList="list-group-item";
    document.getElementById("price1").classList="list-group-item";
    document.getElementById("price2").classList="list-group-item";
    document.getElementById("price3").classList="list-group-item";
    document.getElementById("price4").classList="list-group-item";


        document.getElementById("home").classList="nav-link js-scroll-trigger ";
        document.getElementById("navBooks").classList="nav-link js-scroll-trigger active";
        document.getElementById("aboutUs").classList="nav-link js-scroll-trigger ";
        var active =  document.getElementById(category);
        active.classList = "list-group-item active";


    xhr.open("GET", url, true);
    xhr.send();
    },50);
}


function loadHome() {

    loadMain();
    setTimeout(loadSlideShow(),10);
    setTimeout(loadSideNav(),20);
    setTimeout(HomeLoadBooks(),30);

}

function aboutUs() {
    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function (ev) {
        if(this.readyState===4 && this.status===200){
            console.log(this.responseText);
            document.getElementById("main").innerHTML=this.responseText;
            document.getElementById("path").innerHTML="Book Shop->About US";
        }
    };
    var url ="../model/loadContent.php?requiredContent=aboutUs";
    xhr.open("GET", url , true);
    xhr.send();
}


function Book(isbn) {
    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function (ev) {
        if(this.readyState===4 && this.status===200){
            document.getElementById("main").innerHTML=this.responseText;
           LoadBook(isbn);
           bookisbn = isbn;
            document.getElementById("path").innerHTML="Book Shop->"+isbn;
           loadComment();
        }
    };
    var url ="../model/loadContent.php?requiredContent=book";
    xhr.open("GET", url , true);
    xhr.send();

}


function buyBook() {
    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function (ev) {
        if(this.readyState===4 && this.status===200){
           alert("aaaaaa");
        }
    };
    var url ="../model/add Item.php?isbn="+bookisbn;
    xhr.open("GET", url , true);
    xhr.send();
}






function insertComment() {
    var comment= document.getElementById("commentField").value;

    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function (ev) {
        if(this.readyState===4 && this.status===200){
            loadComment();
        }
    };
    var url ="../model/insertComment.php?isbn="+bookisbn+"&comment="+comment;
    xhr.open("GET", url , true);
    xhr.send();

}


function loadComment() {
    setTimeout(function () {
    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function (ev) {
        if(this.readyState===4 && this.status===200){
            document.getElementById("comments").innerHTML=this.responseText;
        }
    };
    var url ="../model/getComments.php?isbn="+bookisbn;
    xhr.open("GET", url , true);
    xhr.send();
    },100);
}










var bookisbn;