

<!DOCTYPE html>
<?php
 include('php.php');
 ?>
<html lang = "en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	  <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>test</title>
<link href="https://fonts.googleapis.com/css?family=Raleway:400,700,700i,800i,900,900i" rel="stylesheet">

<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet"  href="css/fontawesome-all.min.css">
<link rel="stylesheet"  href="css/contact.css">
<link href="https://fonts.googleapis.com/css?family=Playfair+Display:900" rel="stylesheet">
  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->


</head>
<body>
	<div  class="container" id="he">

<h1>
  
The Master</h1>
	</div>
	<div class ="container" id="all">
		<div id="movie">
		<!--
				<img id="poster"  src="data:image/jpeg;base64,'.base64_encode( <?php $name ?> ).'">
			-->
<?php  echo '<img id="poster" src="data:image/jpeg;base64,'.base64_encode( firstposter() ).'"/>';
 ?>
      <span class="movieinfo" >

	<table >

</h1>
    <tr>
      
    
         <th id="moviename" style=""><b style="color: white;"><?php
firstname();
?></b></th>

    </tr>

</table>
	<table id="uuu" >
    <tr >
      <th id="uuu" >Riting</th>
      <th id="uuu" ><?php
getrat();
?></th>
      
    </tr>
  
</table>
	<table id="uuu" >
    <tr style=" margin: 0px;">
      <th id="uuu" >Genres</th>
      <th id="uuu" ><?php getthetype(); ?></th>
     
    </tr>
  
</table>
	<table id="uuu" >
    <tr>
      <th id="uuu" >description</th>
      <th  id="uuu" ><?php
getdis();
?></th>

    </tr>

</table>
<span class=".iframe-container">

  
 

</span>
</span>
<button  class="btn btn-outline-dark"  id = "tra" style=" display: block;margin-left: 9vw; margin-top: 2vw;
" onclick="window.open('<?php getgg(); ?>','_blank')"
> Watch Trailer </button>

		</div>



</div>
</div>
	

















<script src="js/jquery-1.12.4.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>