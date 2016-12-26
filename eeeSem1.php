<!DOCTYPE html>
<html lang="en">
<head>
  <title>NJR Study Notes</title>
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
				<a id="a" href="EEEUnit1Sem1.php" class="btn btn-default btn-lg btn-block" role="button"><h4>Unit I</h4></a>
				<a id="b" href="EEEUnit2Sem1.php" class="btn btn-default btn-lg btn-block" role="button"><h4>Unit II</h4></a>
				<a id="c" href="EEEUnit3Sem1.php" class="btn btn-default btn-lg btn-block" role="button"><h4>Unit III</h4></a>
          		<a id="d" href="EEEUnit4Sem1.php" class="btn btn-default btn-lg btn-block" role="button"><h4>Unit IV</h4></a>
				<a id="e" href="EEEUnit5Sem1.php" class="btn btn-default btn-lg btn-block" role="button"><h4>Unit V</h4></a>
          		
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
	
	
	$("#b").mouseout(function(){
		$("#b").removeClass("btn btn-success").addClass("btn btn-default");
	});
	$("#b").mouseover(function(){
		$("#b").removeClass("btn btn-default").addClass("btn btn-success");
	});
	
	
	$("#c").mouseout(function(){
		$("#c").removeClass("btn btn-success").addClass("btn btn-default");
	});
	$("#c").mouseover(function(){
		$("#c").removeClass("btn btn-default").addClass("btn btn-success");
	});
	
	
	$("#d").mouseout(function(){
		$("#d").removeClass("btn btn-success").addClass("btn btn-default");
	});
	$("#d").mouseover(function(){
		$("#d").removeClass("btn btn-default").addClass("btn btn-success");
	});
	
	
	$("#e").mouseout(function(){
		$("#e").removeClass("btn btn-success").addClass("btn btn-default");
	});
	$("#e").mouseover(function(){
		$("#e").removeClass("btn btn-default").addClass("btn btn-success");
	});
	
	

	
 </script>


</body>
</html>
