<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">

	<link rel="stylesheet" href="bootstrap-social.css">
	<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body style="background-color:black">

<div class="container">
 
		
 
  <!-- Modal -->
  
   
  <div class="modal fade modal-content" id="myModal">
			<div class="col-lg-3">
				<a><button type="button" class="btn btn-success btn-lg btn-block">Home</button></a>
			</div>
			<div class="col-lg-3">
				<button type="button" class="btn btn-success btn-lg btn-block">About Us</button>
			</div>
			<div class="col-lg-3">
				<button type="button" class="btn btn-success btn-lg btn-block">Contact</button>
			</div>
			<div class="col-lg-3">
				<button type="button" class="btn btn-success btn-lg btn-block">Sign out</button>
			</div>
	</div>
	
	
    
  <div class="modal fade" id="myModal2" role="dialog">
    <div class="modal-dialog">
		
      <!-- Modal content-->
	  <br/>
	  <br/>
	  <br/>
	
	  
	   <div class="modal-content">
				<button type="button" class="btn btn-default btn-lg btn-block"><h4>Semester I<h4/></button>
				  
      </div>
	   <div class="modal-content">
				<button type="button" class="btn btn-default btn-lg btn-block"><h4>Semester II<h4/></button>
				  
      </div>
	   <div class="modal-content">
				<button type="button" class="btn btn-default btn-lg btn-block"><h4>Semester III<h4/></button>
				  
      </div>
	   <div class="modal-content">
				<button type="button" class="btn btn-default btn-lg btn-block"><h4>Semester IV<h4/></button>
				  
      </div>
	   <div class="modal-content">
				<button type="button" class="btn btn-default btn-lg btn-block"><h4>Semester V<h4/></button>
				  
      </div>
	   <div class="modal-content">
				<button type="button" class="btn btn-default btn-lg btn-block"><h4>Semester VI<h4/></button>
				  
      </div>
	   <div class="modal-content">
				<button type="button" class="btn btn-default btn-lg btn-block"><h4>Semester VII<h4/></button>
				  
      </div>
	   <div class="modal-content">
				<button type="button" class="btn btn-default btn-lg btn-block"><h4>Semester VIII<h4/></button>
				  
      </div>
	  	  
	  
     
    </div>
  </div>
  
</div>
<script>
	$('#myModal').modal({
  backdrop: 'static',
  keyboard: false
})
$('#myModal2').modal({
  backdrop: 'static',
  keyboard: false
})
$(document).ready(function(){$('#mymodal').open();$('#mymodal2').open() })
</script>

</body>
</html>
