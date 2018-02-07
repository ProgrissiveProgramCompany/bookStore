function save() {
console.log("i am inside the function");
 var title =   document.getElementById("newBookTitle").value;
   var author = document.getElementById("author").value;
   var desc = document.getElementById("description").value;
  var price =  document.getElementById("price").value;
  var category =  document.getElementById("category").value;

   var pic1 = document.getElementById("pic");
   var pic;
   for (var i = 0; i <= pic1.files.length - 1; i++) {
	 pic = pic1.files.item(i).name;
 }



    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function (ev) {
        if (this.readyState === 4 && this.status === 200) {

             console.log("there is some response");
             console.log(this.responseText);
             alert("insertion is done successfully");
             window.location.href = "Admin.html";

            }
        };
        var url = "../model/addBook.php?title="+title+"&author="+author+"&description="+desc+"&price="+price+"&category="+category+"&pic="+pic;
    xhr.open("GET", url , true);
    xhr.send();
    }