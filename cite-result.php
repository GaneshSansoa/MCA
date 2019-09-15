<?php
	
include "vendor/autoload.php";
use Seboettg\CiteProc\StyleSheet;
use Seboettg\CiteProc\CiteProc;

$get_data = $_POST["data"];
$type = $_POST["formatType"];
//print_r($get_data);die;
//$data = file_get_contents($get_data);
$style = StyleSheet::loadStyleSheet($type);
$citeProc = new CiteProc($style);
$bibliography = $citeProc->render(json_decode($get_data), "bibliography");
$cssStyles = $citeProc->renderCssStyles();
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <script defer src="https://use.fontawesome.com/releases/v5.1.0/js/fontawesome.js"
     integrity="sha384-7ox8Q2yzO/uWircfojVuCQOZl+ZZBg2D2J5nkpLqzH1HY0C1dHlTKIbpRz/LG23c" crossorigin="anonymous"></script>

    <title>Starter Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">
	<link href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" rel="stylesheet">
	<style>

	</style>
	 <style type="text/css" rel="stylesheet">
        <?php echo $cssStyles; ?>
    </style>
  </head>

  <body>
<div class="">
<img src="img/book.jpg" class="img-fluid header-img">
</div>
    <nav class="navbar navbar-expand-sm navbar-dark bg-primary mb-3" id="myHeader">
        <div class="container">
            <a class="navbar-brand" href="/">Logo</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li>
                </ul>
                <ul class="navbar-nav ml-auto">
                        <li class="nav-item dropdown">
                            <a href="" class="nav-link dropdown-toggle"
                            data-toggle="dropdown" id="navbarDropdownMenuLink">Your Ideas</a>
                            <div class="dropdown-menu">
                                <a href="#" class="dropdown-item">Ideas</a>
                                <a href="#" class="dropdown-item">Add</a>
                            </div>
                        </li>
                        <li class="nav-item">
                        <a href="#" class="nav-link">Logout</a>
                    </li>

                        <li class="nav-item">
                            <a href="#" class="nav-link">Login</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">Register</a>
                        </li>
                </ul>
            </div>
        </div>
    </nav>

    <main role="main" class="container content" id="main">

      <section class="container" id="cite-results">
        <h1>Results</h1>
		<div class="row justify-content-center">
		<div class="col-6">
		 <?php echo $bibliography; ?>
		</div>
		</div>
		</section>



		
		<!---</div>
		<a id="add">Add</a>
      </div>-->

    </main><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>
	<script src="js/Sortable.min.js"></script>
	<script>
	$(document).ready(function(){
	
		


function mediaQ(x) {
  if (x.matches) { // If media query matches

  } else {
  window.onscroll = function() {myFunction()};

var header = document.getElementById("myHeader");
var sticky = header.offsetTop;
function myFunction() {

  if (window.pageYOffset > sticky) {
    header.classList.add("sticky");
  } else {
    header.classList.remove("sticky");
  }
}    
  }
}

var x = window.matchMedia("(max-width: 700px)")
mediaQ(x) // Call listener function at run time
x.addListener(mediaQ) // Attach listener function on state changes


		
	});
	</script>
  </body>
</html>
