
function LoadBooks() {
    alert("adsdsadsa");
    console.log("asddddddddddddddddddddddddddddddddd");
     alert("adsdsadsa");
    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function (ev) {
        if (this.readyState === 4 && this.status === 200) {
//            console.log(this.responseText);



            document.getElementById("books").innerHTML=this.responseText;

        }
    };

    var queryString = decodeURIComponent(window.location.search);
    queryString = queryString.substring(1);
    var queries = queryString.split("=");
    console.log(queries[1]);
    var category = queries[1];
    var url;
    if(category == ""){
        var url = "../model/books.php?category=new";
    }
    else{
        var url = "../model/books.php?category="+category;

    }

   var active =  document.getElementById(category);
    console.log("id is   "+active.id);
    active.classList = "list-group-item active";

    xhr.open("GET", url, true);
    xhr.send();

}
