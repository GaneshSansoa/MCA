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
	<link href="css/bootstrap-select.min.css" rel="stylesheet">
	<style>
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

      <section class="container" id="cite-type">
        <h1>Type of Document</h1>
		<div class="row justify-content-center">
		<div class="col-6">
		<select class="form-control selectpicker" data-live-search="true" id="format" title="Select Format..." required>
		<?php
		$directory = 'vendor/citation-style-language/styles-distribution';

			// Will exclude everything under these directories
			$exclude = array('.git', 'dependent');
			$filter = function ($file, $key, $iterator) use ($exclude) {
				if ($iterator->hasChildren() && !in_array($file->getFilename(), $exclude)) {
					return true;
				}
				return $file->isFile();
			};

			$innerIterator = new RecursiveDirectoryIterator(
				$directory,
				RecursiveDirectoryIterator::SKIP_DOTS
			);
			$iterator = new RecursiveIteratorIterator(
				new RecursiveCallbackFilterIterator($innerIterator, $filter)
			);

			foreach ($iterator as $pathname => $fileInfo) {
				// do your insertion here
				$file = $fileInfo->getFilename();
				$without_extension = substr($file, 0, strrpos($file, "."));
				$string = str_replace('-', ' ', $without_extension);
				$formatted = ucwords($string);
				$words = explode(" ", $formatted);
					$acronym = "";

					foreach ($words as $w) {
					  $acronym .= $w[0];
					}
				echo "<option value=".$without_extension." data-tokens=".$acronym.">" . ucwords($string) . "</option>";
			}	
			?>
		</select>
		<div class="invalid-feedback">
          Please choose a format.
        </div>
		<button class="btn btn-primary" id="submit"> Submit</button>
		<?php
/*		$rii = new RecursiveIteratorIterator(new RecursiveDirectoryIterator('vendor/citation-style-language/styles-distribution'));

$files = array(); 

foreach ($rii as $file) {

    if ($file->isDir()){ 
        continue;
    }

    $files[] = $file->getFilename(); 

}
var_dump($files);
foreach ($files as $file){
	if($file != ""){
	$without_extension = substr($file, 0, strrpos($file, "."));
	$string = str_replace('-', ' ', $without_extension);
	echo ucwords($string) . "</br>";
	}
}*/

		?>
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
	<script src="js/bootstrap-select.min.js"></script>
		<script src="js/jquery.redirect.js"></script>
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
	$("#submit").click(function(){
		var type = "<?php echo $_GET["type"];?>";
		var format = $(".selectpicker").val();
	if(format == ""){
		$('.bootstrap-select').addClass('border border-danger');
		$('.invalid-feedback').css("display","block");
	}
	else{
		$('.bootstrap-select').removeClass('border border-danger');
		$('.invalid-feedback').css("display","none");
		
		$.redirect('cite-form.php', {'formatType': format, 'type': type});
	}

	})
	</script>
  </body>
</html>
