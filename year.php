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

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">NJR Study Portal</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
      <li><a href="#">About us</a></li>
	  <li><a href="#">contact us</a></li>
	 
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign out</a></li>
     
    </ul>
  </div>
</nav>
  


<div class="container">
 

	

	<br/>
	<br/>
	<br/>
	<div>
		<div class="col-lg-2">
		</div>
	   <div class="col-lg-8">
				<a id="a" href="trysem.php" class="btn btn-default btn-lg btn-block" role="button"><h4>1st Year</h4></a>
				<a id="b" href="" class="btn btn-default btn-lg btn-block" role="button"><h4 id="coming2">2nd Year</h4></a>
				<a id="c" href="" class="btn btn-default btn-lg btn-block" role="button"><h4 id="coming3">3rd Year</h4></a>
          		<a id="d" href="" class="btn btn-default btn-lg btn-block" role="button"><h4 id="coming4">4th Year</h4></a>
			</h4></a>
      
		</div>	
	</div>
 <script>
	$("#a").mouseover(function(){
		$("#a").removeClass("btn btn-default").addClass("btn btn-success");
	});
	
	$("#a").mouseout(function(){
		$("#a").removeClass("btn btn-success").addClass("btn btn-default");
	});
	
	
	$("#b").mouseover(function(){
		
		$("#coming2").html("Coming Soon");
		$("#b").removeClass("btn btn-default").addClass("btn btn-danger");
		
	});
	
	$("#b").mouseout(function(){
		
		$("#coming2").html("2nd Year");
		$("#b").removeClass("btn btn-danger").addClass("btn btn-default");
	});
	
	
	$("#c").mouseover(function(){
		$("#c").removeClass("btn btn-default").addClass("btn btn-danger");
		$("#coming3").html("Coming Soon");
	});
	
	$("#c").mouseout(function(){
		$("#c").removeClass("btn btn-danger").addClass("btn btn-default");
		$("#coming3").html("3rd Year");
	});
	
	
	$("#d").mouseover(function(){
		$("#d").removeClass("btn btn-default").addClass("btn btn-danger");
		$("#coming4").html("Coming Soon");
	});
	
	$("#d").mouseout(function(){
		$("#d").removeClass("btn btn-danger").addClass("btn btn-default");
		$("#coming4").html("4th Year");
	});

	
	
	
	
 </script>


</body>
</html>
