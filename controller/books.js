
function LoadBooks() {
var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function (ev) {
        if (this.readyState === 4 && this.status === 200) {
            document.getElementById("books").innerHTML=this.responseText;
        }
    };
    var category = queries[1];
    var url;
    //document.getElementById("path").innerHTML="->Books->"+category;
    if(category == ""){
        var url = "../model/books.php?category=new";
    }
    else{
        var url = "../model/books.php?category="+category;

    }

   var active =  document.getElementById(category);
    console.log("id is   "+active.id);
    active.classList = "list-group-item active";
    document.getElementById("path").innerHTML="->Books->"+category;
    xhr.open("GET", url, true);
    xhr.send();

}
