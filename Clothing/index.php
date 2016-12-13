


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>TimeMac Originals</title>

<!-- Bootstrap -->
<link href="css/bootstrap.css" rel="stylesheet">

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
 <link href="css/style.css" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-default">
  <div class="container-fluid"> 
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#defaultNavbar1"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
      <a class="navbar-brand" href=""><img class="img-responsive icon" alt="logo" src="image/newLogo.png" /></a></div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="defaultNavbar1">
      
<ul class="nav navbar-nav navbar-right">
  <!--<li><a href="#" class="menu">Hey Guys-></a></li>-->
  <li ><a href="../index.php" class="menu">GIFs</a></li>
  <li class="dropdown"><a href="#" class="dropdown-toggle menu" data-toggle="dropdown" role="button" aria-expanded="false">CLOTHING<span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#" class="b_men menu">Men</a></li>
            <li><a href="#" class="b_women menu">Women</a></li>
            
          </ul>
        </li>
      </ul>
    </div>
    <!-- /.navbar-collapse --> 
  </div>
  <!-- /.container-fluid --> 
</nav>

<div id="top" class="visible-lg">
   <div class="col-md-6 ">
    
        <a href="#"><h3 class="heading b_men">MEN</h3></a>
    </div>
    <div class="col-md-6" >
        <a href="#"><h3 class="heading b_women">WOMEN</h3></a>
    </div>
</div>
<div id="header">
</div>
<hr>
<div class="container">
<div class="scontainer">
              
	

</div>

<div>
            <hr>
            <!--footer of the page-->
            <div class="row">
              <a href="https://www.facebook.com/triginals" target="_blank"><img class="img img-responsive" src="image/facebook.png" width="70" height="70" alt="facebook" class="img"/></a>
              <a href="https://www.instagram.com/triginals" target="_blank"><img class="img img-responsive" src="image/instagram.jpg" width="70" height="70" alt="instagram"/></a>
              <div class="text-center col-md-offset-0 col-md-10">
              
                <h4>Built by #TeamTimeMac</h4>
                <p>Copyright &copy; 2016 &middot; All Rights Reserved &middot; </p>
              </div>
             </div>
            
    
 </div>
  <hr>
</div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 


<script id="topper" type="text/x-handlebars-template">
<div>
    <div class="col-md-6 " >
    
        <a href="#"><h3 class="heading b_men">MEN</h3></a>
    </div>
    <div class="col-md-6" >
        <a href="#"><h3 class="heading b_women">WOMEN</h3></a>
    </div>
</div>
</script>



<script id="snap" type="text/x-handlebars-template">

 
    
    <div class="row ">
    {{#each images}}
        <div class="col-md-3 col-xs-6" >
            <a href="#" >
            <div class="img-responsive thumbnail thumb3" data-id="{{@index}}">
            <img alt="{{alt}}" src="{{src}}">
            </div>
            </a>
        </div>
    {{/each}}
        
        
   </div>
</script>




<script id="snap2" type="text/x-handlebars-template">
 
    
    <div class="row ">
    {{#each images}}
        <div class="col-md-3 col-xs-6" >
            <a href="#" >
            <div class="img-responsive thumbnail thumb4" data-id="{{@index}}">
            <img alt="{{alt}}" src="{{src}}">
            </div>
            </a>
        </div>
    {{/each}}
        
        
   </div>
</script>






<script id="homepage" type="text/x-handlebars-template">
<!--men cloths-->

<em><h2 class="text-center">TimeMac Originals exclusive T-shirts</h2></em>
 
<div class="row well">
<h3 class="text-center heading">MEN</h3>
		 <div class="col-md-3">	
         <div class="thumbnail">
		    <img alt="beast mode activated photo" src="Tees Medium 4/tm_1.jpg">
			<h4 class="text-center">Beast Mode Activated T-Shirt</h4>
            <a class="btn btn-default btn-block thumb1" data-id="0">VIEW</a>
           </div> 
            
         
		</div> 
		<div class="col-md-3">	
         <div class="thumbnail"><img alt="holy shift" src="Tees Medium 4/tm_2.jpg">
			
            
           <h4 class="text-center">HOLY SHIFT T-Shirt</h4> 
           <a class="btn btn-default btn-block thumb1" data-id="1">VIEW</a>
         </div>
         
		</div> 
		<div class="col-md-3">	
         <div class="thumbnail"><img alt="teen spirit" src="Tees Medium 4/tm_3.jpg">
			<h4 class="text-center">Teen Spirit Tee</h4>
            
            <a class="btn btn-default btn-block thumb1" data-id="2">VIEW</a>
         </div>
         
		</div> 
		<div class="col-md-3 s_img">	
         <div class="thumbnail"><img alt="be preposition" src="Tees Medium 4/tm_4.jpg">
			<h4 class="text-center">'Be' Preposition T-Shirt</h4>
            <a class="btn btn-default btn-block thumb1" data-id="3">VIEW</a> 
         </div>
        
		</div> 
        <hr>
 </div>
 
 <div class="row well">
        <!--women cloths-->
        <h3 class="text-center heading">WOMEN</h3>
        <div class="col-md-3">	
         <div class="thumbnail"><img alt="inside my head photo" src="Women Medium 4/tmf_1.jpg">
			
            <h4 class="text-center">Inside my Head Tee</h4>
            <a class="btn btn-default btn-block thumb2" data-id="0">VIEW</a>
            
         </div>
         
		</div> 
		<div class="col-md-3">	
         <div class="thumbnail"><img alt="Nature Tee" src="Women Medium 4/tmf_2.jpg">
			
            
           <h4 class="text-center">Nature Tee</h4>
           <a class="btn btn-default btn-block thumb2" data-id="1">VIEW</a>
         </div>
          
		</div> 
		<div class="col-md-3">	
         <div class="thumbnail"><img alt="Owl Geometric Art Tee" src="Women Medium 4/tmf_3.jpg">
			
         <h4 class="text-center">Owl Geometric Art Tee</h4>   
           <a class="btn btn-default btn-block thumb2" data-id="2">VIEW</a> 
         </div>
          
		</div> 
		<div class="col-md-3">	
         <div class="thumbnail"><img alt="Lady in a Garden Tee" src="Women Medium 4/tmf_4.jpg">
			<h4 class="text-center">Lady in a Garden Tee</h4>
            <a class="btn btn-default btn-block thumb2" data-id="3">VIEW</a>
         </div>
         
		</div> 
       
        </div>
</script>











<script id="main" type="text/x-handlebars-template">
    <div class="row">
        <div class="col-md-6">
        <img id="zoom_01" src="{{src}}" data-zoom-image="{{src}}" alt="{{alt}}" class="img-medium img-responsive thumbnail"/>  
        </div>
        
        <div class="col-md-6">
        <h2> {{title}}</h2>
		
		
        
		<em><p>High quality 100% cotton T-shirt</p></em>
		<p><strong>TimeMac</strong> branded T-Shirts</p>
		
		<p>Designed by some of the best designers from <strong>Speaking Walls</strong></p>
		
		    <div class="well">
		        <p>Get to know first about our first ever sale</p>
				<br>
				<form action="thank-you.php"  method="post" >
					<div class="form-group">
					  <!--<label for="email"></label>-->
					  <input type="email" class="form-control" id="email" placeholder="Email" name="email" required>
					</div>
					<div class="form-group">
					  <!--<label for="country"></label>-->
					  <input type="country" class="form-control" id="country" placeholder="Country" name="country" required>
					</div>
					<input type="submit" class="btn btn-success" value="Subscribe">
				 </form>
			 </div>	 
		 <p>Launching soon in your country...</p>
		 <p><strong>Note-</strong> We gurantee that you will be only one with this T-shirt in your city because we know you are special.</p>
	  </div>
			
			<div>
					<div id="collapse-tab1" class="tab-pane fade in active">
							    <div class="col-md-1">
								</div>
							    <div class="col-md-11">
								<p><strong><img src="https://cdn.shopify.com/s/files/1/1128/2136/files/size_chart_grande.jpg?741940960496817679" alt=""></strong></p>
								<p><strong> Fit Details:</strong></p>
								<p> Regular Fit</p>
								<p><strong> Fabric Details:</strong></p>
								<p> 100% Cotton, Pre-washed to impart a softer texture</p>
								<p><strong> Wash &amp; Care:</strong></p>
								<p> Do not iron directly on print</p>
								<p> Machine wash cold, tumble dry low</p>
								<p> Product color may vary slightly</p>
								
				
							  
							</div>
			</div>
			
			
</script>








<!-- Include all compiled plugins (below), or include individual files as needed --> 
<script src="js/jquery-1.11.2.min.js"></script>
<script src="js/handlebars-v4.0.5.js"></script>
<script src="js/data_homep.js"></script>
<script src="js/bootstrap.js"></script>


<script src="js/jquery.elevateZoom-3.0.8.min.js"></script>
<script src="js/toRun.js"></script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-86221035-1', 'auto');
  ga('send', 'pageview');

</script>
</body>
</html>

