//search function
function search() {
    var search = document.getElementById("search").value;
    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function (ev) {
        if (this.readyState === 4 && this.status === 200) {
            if (this.responseText != "") {

                console.log(this.responseText);
                document.getElementById("result").innerHTML = this.responseText;


            }

        }
    };
    //if nothing is wrote , then hide the search div
    if (search == "") {
        document.getElementById("result").innerHTML = "";
    }
    //else, show the search div
    else {
        var url = "../model/search.php?search=" + search;
        xhr.open("GET", url, true);
        xhr.send();
    }
}

function goToBook(isbn) {

    window.location.href = "book.html?isbn="+isbn;

}