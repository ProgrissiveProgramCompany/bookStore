function LoadBook(isbn) {

    setTimeout(function () {

    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function (ev) {
        if(this.readyState===4 && this.status===200){
            //var response = JSON.parse(this.responseText);
            console.log(this.responseText);
            document.getElementById("book").innerHTML=this.responseText;
            //setBookValues(response);


        }
    };
    // document.getElementById("path").innerHTML="->book->Book Number"+isbn;
    var url = "../model/book.php?"+"isbn="+isbn;
    console.log("the url is "+url);
    xhr.open("GET", url , true);
    xhr.send();
    },100);
}

function setBookValues(book) {

    var title = document.getElementById("bookTitle");
    title.innerHTML = book['title'];
    var title2 = document.getElementById("title");
    title2.innerHTML = book['title'];
    var author = document.getElementById("author");
    author.innerText = book['author'];
    var price = document.getElementById("price");
    console.log("the price is "+book['price']);
    price.innerHTML=book['price'];
    var category = document.getElementById("category");
    category.innerHTML = book['category'];
    var description = document.getElementById("description");
    description.innerHTML = book['description'];
    var img = document.getElementById("img");
    var src = "../covers/"+book['category']+"/"+book['pic'];
    console.log("src is "+src+"your cach is cach");
    img.src =src;

}


function addToCart(isbn) {

    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function (ev) {
        if(this.readyState===4 && this.status===200){
            console.log(this.responseText)

        }
    };
    var url = "../model/add Item.php?"+"isbn="+isbn;
    console.log("the url is "+url);
    xhr.open("GET", url , true);
    xhr.send();


}