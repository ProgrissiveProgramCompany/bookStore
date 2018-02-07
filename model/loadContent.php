<?php
$requiredContent =$_GET['requiredContent'];

$content="";

if( $requiredContent == "main"){
    $content="
        
         <!--Main layout-->
    <div class='container'>
        <div class='row mt-4'>

    <!--Sidebar-->
    <div class='col-lg-4 wow fadeIn' id='sideNav' >
    </div>
    <!--/.Sidebar-->

            <!--Main column-->
            <div class='col-lg-8' >
 <div style=\"position:relative;width: 100%;margin-top: 6%;z-index: 999 \" class=\"col-12 bg-dark text-light\" id=\"path\">Book Shop</div>
                <!--First row-->
                <div class='row wow fadeIn' data-wow-delay='0.4s' id='slideShow'>
                    <!--place for slide show here---->
                </div>
                <!--/.First row-->
                
                <br>
                <hr class='extra-margins'>

                <!--Second row-->
                <!--- the books in the home site -->
                <div class='row' id='books'>

                </div>
            </div>
            <!--/.Main column-->
          </div>
        </div>
        ";

}


if($requiredContent == "sideNav"){
$content = "
                                <!--Sidebar-->
                
            <div class=\"widget-wrapper\">
            <h4 class=\"h4-responsive font-bold mb-3\">Categories:</h4>
            <br>
            <div class=\"list-group\">
                <a href=\"#\" class=\"list-group-item active\" style='cursor: pointer' onclick=\"loadBooks('new')\"  id=\"new\">New</a>
                <a onclick=\"loadBooks('programming')\" class=\"list-group-item \" style='cursor: pointer'  id='programming'>Programming</a>
                <a onclick=\"loadBooks('horror')\" class=\"list-group-item\" style='cursor: pointer' id='horror'>Horror</a>
                <a onclick=\"loadBooks('science')\" class=\"list-group-item\" style='cursor: pointer' id=\"science\">Science</a>
                <a onclick=\"loadBooks('novel')\" class=\"list-group-item\"  style='cursor: pointer' id=\"novel\">Novel</a>
            </div>
        </div>

        <div class=\"widget-wrapper\">
            <h4 class=\"h4-responsive font-bold mb-3 mt-4\">Price:</h4>
            <br>
            <div class=\"list-group\">
                <a onclick=\"loadBooks('price1')\" class=\"list-group-item\" style='cursor: pointer' id=\"price1\">0$ - 19$</a>
                <a onclick=\"loadBooks('price2')\" class=\"list-group-item\" style='cursor: pointer' id=\"price2\">20$ - 49$</a>
                <a onclick=\"loadBooks('price3')\" class=\"list-group-item\" style='cursor: pointer' id=\"price3\">50$ - 79$</a>
                <a onclick=\"loadBooks('price4')\" class=\"list-group-item\" style='cursor: pointer' id=\"price4\">80$ - 100$</a>
            </div>
        </div>

        <div class=\"widget-wrapper wow fadeIn\" data-wow-delay=\"0.4s\">
            <h4 class=\"h4-responsive font-bold\">Subscription form:</h4>
            <br>
            <div class=\"card\">
                <div class=\"card-body\">
                    <p>
                        <strong>Subscribe to our newsletter</strong>
                    </p>
                    <p>Once a week we will send you a summary of the most useful news</p>
                    <div class=\"md-form\">
                        <i class=\"fa fa-user prefix grey-text\"></i>
                        <input type=\"text\" id=\"form1\" class=\"form-control\">
                        <label for=\"form1\">Your name</label>
                    </div>
                    <div class=\"md-form\">
                        <i class=\"fa fa-envelope prefix grey-text\"></i>
                        <input type=\"text\" id=\"form2\" class=\"form-control\">
                        <label for=\"form2\">Your email</label>
                    </div>
                    <button class=\"btn btn-info btn-md\">Submit</button>

                </div>
            </div>
        </div>


                        <!--/.Sidebar-->
                
        ";

}


if( $requiredContent== "slidShow") {
        $content = "  
        
         <div class=\"col-lg-12\">
                        <h2 class=\"h2-responsive font-bold mb-5\">What's new?</h2>

                        <!--Carousel Wrapper-->
                        <!-- moving pics -->
                        <div id=\"carousel-example-1z\" class=\"carousel slide carousel-fade\" data-ride=\"carousel\">
                            <!--Indicators-->
                            <ol class=\"carousel-indicators\">
                                <li data-target=\"#carousel-example-1z\" data-slide-to=\"0\" class=\"active\"></li>
                                <li data-target=\"#carousel-example-1z\" data-slide-to=\"1\"></li>
                                <li data-target=\"#carousel-example-1z\" data-slide-to=\"2\"></li>
                                <li data-target=\"#carousel-example-1z\" data-slide-to=\"3\"></li>
                                <li data-target=\"#carousel-example-1z\" data-slide-to=\"4\"></li>
                            </ol>
                            <!--/.Indicators-->

                            <!--Slides-->
                            <div class=\"carousel-inner\" role=\"listbox\">
                                <!--First slide-->
                                <div class=\"carousel-item active\">
                                    <img src=\"../backgrounds/bg5.jpg\"   alt=\"First slide\" class=\"img-fluid rounded movingImage\">
                                    <div class=\"carousel-caption\">
                                        <h3 class=\"font-bold red-text\">
                                            <strong>New products!</strong>
                                        </h3>
                                        <br>
                                    </div>
                                </div>
                                <!--/First slide-->
                                <!--Second slide-->
                                <div class=\"carousel-item\">
                                    <img src=\"../backgrounds/bg2.jpg\" alt=\"Second slide\" class=\"img-fluid rounded movingImage\">
                                    <div class=\"carousel-caption\">
                                        <h3 class=\"font-bold red-text\">
                                            <strong>Get 10% discount!</strong>
                                        </h3>
                                        <br>
                                    </div>
                                </div>
                                <!--/Second slide-->
                                <!--Third slide-->
                                <div class=\"carousel-item\">
                                    <img src=\"../backgrounds/bg3.jpg\" alt=\"Third slide\" class=\"img-fluid rounded movingImage\">
                                    <div class=\"carousel-caption\">
                                        <h3 class=\"font-bold red-text\">
                                            <strong>All products 20% OFF</strong>
                                        </h3>
                                        <br>
                                    </div>
                                </div>
                                <!--/Third slide-->

                                <!--4th slide-->
                                <div class=\"carousel-item \">
                                    <img src=\"../backgrounds/bg6.jpg\"   alt=\"4th slide\" class=\"img-fluid rounded movingImage\">
                                    <div class=\"carousel-caption\">
                                        <h3 class=\"font-bold red-text\">
                                            <strong>New products!</strong>
                                        </h3>
                                        <br>
                                    </div>
                                </div>
                                <!--/ 4th slide-->

                                <!--5th slide-->
                                <div class=\"carousel-item \">
                                    <img src=\"../backgrounds/bg7.jpg\"   alt=\"5th slide\" class=\"img-fluid rounded movingImage\">
                                    <div class=\"carousel-caption\">
                                        <h3 class=\"font-bold red-text\">
                                            <strong>New products!</strong>
                                        </h3>
                                        <br>
                                    </div>
                                </div>
                                <!--/5th slide-->

                            </div>
                            <!--/.Slides-->
                            <!-- this is the end of the slide section _________________________________-->

                            <!--Controls-->
                            <a class=\"carousel-control-prev\" href=\"#carousel-example-1z\" role=\"button\"
                               data-slide=\"prev\">
                                <span class=\"carousel-control-prev-icon bg-dark\" aria-hidden=\"true\"></span>
                                <span class=\"sr-only\">Previous</span>
                            </a>
                            <a class=\"carousel-control-next\" href=\"#carousel-example-1z\" role=\"button\"
                               data-slide=\"next\">
                                <span class=\"carousel-control-next-icon  bg-dark\" aria-hidden=\"true\"></span>
                                <span class=\"sr-only\">Next</span>
                            </a>
                            <!--/.Controls-->
                        </div>
                        <!--/.Carousel Wrapper-->

                        <!------------------------------------------------------------------------------------------------------>

                    </div>
                    
        ";

    }


if($requiredContent == "aboutUs"){
    $content="
            <br><br><br>
<hr>
<center>
<div class=\"col-12\">
    <!-- about the page -->

    <!--paragraph 1 --->
<div class='card'
<div class='card-title'>

<h3 class=\"text-dark\">About the page</h3><br>


<div class='card-body'>
<div class='card-text'>

<p>this page is made so that user can buy books online
    without any struggling in finding the right book for his needs.
 you can find books in this page as fast as
        you can use the search engine to find books that you need.
        it is also possible to browse   the books pages if you don't know what exactly what you are looking for
    </p>
</div>
    <!--new line -->
    <br><br>
    <!-- line separator --->
  
</div>
</div>
</div>
    <!--paragraph 2 --->
    <div class='card'>
    
    <div class='card-title'> 
    <h3 class=\"text-dark\">Privacy</h3><br>
    
    </div>
    <div class='card-text'>
    <p>
        no one can know about what you are buying or about what what you seek for
    </p>
</div>
    <!--new line -->
    <br><br>
    <!-- line separator --->
  
</div>
    <div class='card'>
    <!--paragraph 3 --->
    <div class='card-title'>
    <h3 class=\"text-dark\">Site goals</h3><br>
    </div>
    <div class='card-text'>
    <p>this site goal is to provide the most quantity of books for the readers and the sudents with the
        least effort the is possible and so that the people can learn in peace
    </p>
</div>

</div>
</div>
</center>

    ";
}



if($requiredContent=="book"){
    $content="

                <br><br><br><br><br>
<!--place for the book to be here ----->
<center>
 <div style=\"position:relative;width: 100%;margin-top: 6%;z-index: 999 \" class=\"col-9 bg-dark text-light\" id=\"path\">Book Shop</div>
</center>

<div id=\"book\">

</div>
<!--/place for the book to be here ----->


<!--------this is comments container ----------->

<div class=\"container\">

    <div class=\"offset-0\">
        <div class=\"card\">
            <center><h2>Comments</h2></center>
            <br><br>
            <!----comments container--->
            <div class=\"container\" id=\"comments\">

            </div>
            <br><br>
            <center>
            <div class='card'>
            <div class='card-title'>
            <h4>write your comment</h4>
            </div>
            <div class='card-body'>
            <textarea id='commentField' type='text' class='input input-group'></textarea>
            
</div>
<div class='card-footer'>
<button class='btn btn-primary' onclick='insertComment()'>comment</button>
</div>
</div>
            </center>
        </div>
    </div>
</div>

    ";
}
echo $content;
?>