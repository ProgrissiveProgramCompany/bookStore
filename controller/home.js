
function HomeLoadBooks() {

    setTimeout(function () {


    document.getElementById("home").classList="nav-link js-scroll-trigger active";
    document.getElementById("navBooks").classList="nav-link js-scroll-trigger ";
    document.getElementById("aboutUs").classList="nav-link js-scroll-trigger ";


    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function (ev) {
        if (this.readyState === 4 && this.status === 200) {
            console.log(this.responseText);
            document.getElementById("books").innerHTML=this.responseText;

        }
    };
    var url = "../model/returnBooks.php";
    xhr.open("GET", url, true);
    xhr.send();
    },50);
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