var queryString = decodeURIComponent(window.location.search);
queryString = queryString.substring(1);
var queries = queryString.split("=");
console.log(queries[1]);
var isbn = queries[1];
var xhr = new XMLHttpRequest();
xhr.onreadystatechange = function (ev) {
    if (this.readyState === 4 && this.status === 200) {

        var response = JSON.parse(this.responseText);
        console.log(response);
        fillFields(response);
    }
};
var url = "../model/getBook.php?" + "isbn=" + isbn;
xhr.open("GET", url, true);
xhr.send();

function fillFields(book) {
    document.getElementById("newBookTitle").value = book['title'];
    document.getElementById("author").value = book['author'];
    document.getElementById("description").value = book['description'];
    document.getElementById("price").value = "$" + book['price'];
    document.getElementById("category").value = book['category'];

}

function save() {
    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function (ev) {
        if (this.readyState === 4 && this.status === 200) {
            alert("asdads");
            window.location.href="Admin.html";
        }
    };

var title =document.getElementById("newBookTitle").value;
    var author =document.getElementById("author").value ;
    var desc =document.getElementById("description").value;
    var price =document.getElementById("price").value ;
    var cat =document.getElementById("category").value ;

    var url = "../model/updateBook.php?title="+title+"&author="+author+"&desc="+desc+"&price="+price+"&cat="+cat+"&isbn="+isbn;
    xhr.open("GET", url, true);
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
    window.location.href="login.html";

}