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
.input-group-prepend{
	margin-left:-1px;
}
#inputGroupPrepend{
	border-top-right-radius: 10%;
    border-bottom-right-radius: 10%;
}
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
		<?php if($_POST["type"] == "book")
		{
		?>
		<form class="needs-validation" novalidate method="post" action="cite-result.php" id="frm-submit" onsubmit="return false;">
  <div class="form-row" id="contrib">
   
  </div>
  <div class="form-row col-12">
		<a href="#" id="add_another"> Add Another Contributor +</a>
	</div>
  <div class="form-row">
    <div class="col-md-12 mb-3">
      <div class="input-group">
	    <input type="text" class="form-control" id="validationCustom03" placeholder="Title" name="title" required>
        <div class="input-group-prepend">
          <span class="input-group-text" id="inputGroupPrepend">*</span>
        </div>
	  <div class="invalid-feedback">
        Please enter a title.
      </div>
		</div>


    </div>
    <div class="col-md-4 mb-3">
      <div class="input-group">
	    <input type="text" class="form-control" id="validationCustom03" placeholder="Published Year" name="issued" required>
        <div class="input-group-prepend">
          <span class="input-group-text" id="inputGroupPrepend">*</span>
        </div>
		<div class="invalid-feedback">
        Please provide a valid year.
      </div>
    </div>
	</div>
    <div class="col-md-3 mb-3">
      <input type="text" class="form-control" id="validationCustom05" placeholder="Edition" name="edition">
      <div class="invalid-feedback">
        Please provide a valid edition.
      </div>
    </div>
    <div class="col-md-5 mb-3">
      <input type="text" class="form-control" id="validationCustom05" placeholder="City" name="city">
      <div class="invalid-feedback">
        Please provide a valid city.
      </div>
    </div>
    <div class="col-md-8 mb-3">
      <input type="text" class="form-control" id="validationCustom05" placeholder="Publisher" name="publisher">
      <div class="invalid-feedback">
        Please provide a valid publisher.
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <input type="text" class="form-control" id="validationCustom05" placeholder="Pages Used" name="pages">
    </div>
  </div>
  <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required >
      <label class="form-check-label" for="invalidCheck">
        Agree to terms and conditions
      </label>
      <div class="invalid-feedback">
        You must agree before submitting.
      </div>
    </div>
  </div>
  <button class="btn btn-primary" type="submit">Submit form</button>
</form>
	<?php
		}
		else if($_POST["type"] == "journal"){
	?>
		<form class="needs-validation" novalidate method="post" action="cite-result.php" id="frm-submit" onsubmit="return false;">
  <div class="form-row" id="contrib">
   
  </div>
  <div class="form-row col-12">
		<a href="#" id="add_another"> Add Another Contributor +</a>
	</div>
  <div class="form-row">
    <div class="col-md-12 mb-3">
      <div class="input-group">
	    <input type="text" class="form-control" id="validationCustom03" placeholder="Article Title" name="title" required>
        <div class="input-group-prepend">
          <span class="input-group-text" id="inputGroupPrepend">*</span>
        </div>
	  <div class="invalid-feedback">
        Please enter a title.
      </div>
		</div>


    </div>
    <div class="col-md-4 mb-3">
      <div class="input-group">
	    <input type="text" class="form-control" id="validationCustom03" placeholder="Published Year" name="issued" required>
        <div class="input-group-prepend">
          <span class="input-group-text" id="inputGroupPrepend">*</span>
        </div>
		<div class="invalid-feedback">
        Please provide a valid year.
      </div>
    </div>
	</div>
    <div class="col-md-8 mb-3">
      <input type="text" class="form-control" id="validationCustom05" placeholder="Name of the Journal" name="container-title">
    </div>
    <div class="col-md-4 mb-3">
      <input type="text" class="form-control" id="validationCustom05" placeholder="Volume No." name="volume">
    </div>
    <div class="col-md-4 mb-3">
      <input type="text" class="form-control" id="validationCustom05" placeholder="Issue No." name="issue">

    </div>
    <div class="col-md-4 mb-3">
      <input type="text" class="form-control" id="validationCustom05" placeholder="Pages Used" name="pages">
    </div>
	<div class="col-md-6 mb-3">
      <input type="text" class="form-control" id="validationCustom05" placeholder="DOI" name="doi">
    </div>
	<div class="col-md-6 mb-3">
      <input type="text" class="form-control" id="validationCustom05" placeholder="ISSN" name="issn">
    </div>
	<div class="col-md-12 mb-3">
      <input type="text" class="form-control" id="validationCustom05" placeholder="URL: http://" name="url">
    </div>
  </div>
  <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required >
      <label class="form-check-label" for="invalidCheck">
        Agree to terms and conditions
      </label>
      <div class="invalid-feedback">
        You must agree before submitting.
      </div>
    </div>
  </div>
  <button class="btn btn-primary" type="submit">Submit form</button>
</form>			
			
	<?php
		}
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
	<script src="js/jquery.redirect.js"></script>
	<script>
	$(document).ready(function(){
	
		var id = 0;
	var add_contri = (id) => {
	
		var contrib = $("#contrib");
		contrib.append('<div class="col-md-6 mb-3">'+
'    <div class="input-group">'+
'      <input type="text" class="form-control" id="validationCustom01" placeholder="First name" name="given-'+id+'"  required>'+
'        <div class="input-group-prepend">'+
'          <span class="input-group-text" id="inputGroupPrepend">*</span>'+
'        </div>'+
'		<div class="invalid-feedback">'+
'          Please enter first name.'+
'        </div>'+
'    </div>'+
'	</div>'+
'    <div class="col-md-6 mb-3">'+
'		'+
'		<div class="input-group">'+
'		<input type="text" class="form-control" id="validationCustom02" placeholder="Last name" name="family-'+id+'" required>'+
'			<div class="input-group-prepend">'+
'				<span class="input-group-text" id="inputGroupPrepend">*</span>'+
'			</div>'+
'		<div class="invalid-feedback">'+
'          Please enter Last name.'+
'        </div>'+
'		</div>'+
'	</div>');
	}
	add_contri(id);
$("#add_another").click(function(){
  id++;
  add_contri(id);
});
//media query JavaScript
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


		function capitalize(str){
			return str.charAt(0).toUpperCase() + str.slice(1);
		}

	function sendJson(){
		var formData = $("#frm-submit");
			var inputArray = formData.serializeArray();
			var newarr = {};
				for (var i = 0; i < inputArray.length; i++){
					newarr[inputArray[i]["name"]] = inputArray[i]["value"];
				}
			console.log(newarr);
	<?php if($_POST["type"] == "book"){?>
				var book = [];
				book[0] = {};
				book[0].title = newarr["title"];
				book[0].author = [];
				book[0].author.push({});
				
				if(id > 0){
				book[0].author.unshift({});
				for (var im = 0; im <= id; im++){
					console.log(i);
				book[0].author[im]["given"] = capitalize(newarr["given-"+im]);
				book[0].author[im]["family"] = capitalize(newarr["family-"+im]);
				}
				}
				else{
				book[0].author[id]["given"] = capitalize(newarr["given-"+id]);
				book[0].author[id]["family"] = capitalize(newarr["family-"+id]);
//				console.log("yooo");
				}
				book[0].issued = {};

				book[0].issued["date-parts"] = [];
				book[0].issued["date-parts"][0] = [];
				book[0].issued["date-parts"][0][0] = newarr["issued"];
				book[0]["publisher-place"] = newarr["city"];
				book[0].publisher = newarr["publisher"];
				book[0].page = newarr["pages"];
				book[0].edition = newarr["edition"];
				book[0].type = "book";
				book = JSON.stringify(book,null,4);
				console.log(book);
				var formatType = '<?php echo $_POST["formatType"]?>'
				$.redirect('cite-result.php', {'formatType': formatType, 'data': book});
				<?php }
				else if($_POST["type"] == "journal"){
					?>
				var journal = [];
				journal[0] = {};
				journal[0].title = newarr["title"];
				journal[0].author = [];
				journal[0].author.push({});
				
				if(id > 0){
				journal[0].author.unshift({});
				for (var im = 0; im <= id; im++){
					console.log(i);
				journal[0].author[im]["given"] = capitalize(newarr["given-"+im]);
				journal[0].author[im]["family"] = capitalize(newarr["family-"+im]);
				}
				}
				else{
				journal[0].author[id]["given"] = capitalize(newarr["given-"+id]);
				journal[0].author[id]["family"] = capitalize(newarr["family-"+id]);
//				console.log("yooo");
				}
				journal[0].issued = {};

				journal[0].issued["date-parts"] = [];
				journal[0].issued["date-parts"][0] = [];
				journal[0].issued["date-parts"][0][0] = newarr["issued"];
				journal[0]["issue"] = newarr["issue"];
				journal[0]["container-title"] = newarr["container-title"];
				journal[0].page = newarr["pages"];
				journal[0].volume = newarr["volume"];
				journal[0].DOI = newarr["doi"];
				journal[0].ISSN = newarr["issn"];
				journal[0].url = newarr["url"];
				journal[0].type = "article-journal";
				journal = JSON.stringify(journal,null,4);
				console.log(journal);
				var formatType = '<?php echo $_POST["formatType"]?>'
				$.redirect('cite-result.php', {'formatType': formatType, 'data': journal});
					
					<?php
					
				}
				?>

	}
 // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
		else{
			sendJson(id);
		}
        form.classList.add('was-validated');
		

      }, false);
    });
		});
	</script>
	<script>
// Example starter JavaScript for disabling form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
   
  }, false);
})();
</script>
  </body>
</html>
