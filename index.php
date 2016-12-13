<?php 
session_start();

if (isset($_SESSION['logged']) && $_SESSION['logged'] == true ) {
    
    $btn_login = '<a href="logoff.php?redirect=./index.php">Log Off <span class="sr-only">(current)</span></a>';
    $btn_upload = '<a href="uploader.php">Upload</a>';
    
} else {
    
    $btn_login = '<a href="login.php?redirect=./index.php">Log In <span class="sr-only">(current)</span></a>';
    $btn_upload = '';

}

?>

<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="A GIF sharing site with lot of cool and funny GIFs.">
    
    <!--<link rel="icon" href="assets/img/favicon.ico">-->
    
    <title>TimeMac Originals</title>
	
	<meta name="Website" content="http://triginals.com"/>
	<link rel="stylesheet" type="text/css" href="assets/css/styles.css">
</head>
<body>   
   <div class="main">
      
        <header>
           <!-- Fixed navbar -->
            <nav class="navbar navbar-reverse navbar-fixed-top">
              <div class="container">
                <div class="navbar-header">
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
                  <a class="navbar-brand" href="index.php"><span class="logo"><img class="img-responsive icon" alt="logo"src="media/img/newLogo.png"</span></a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                  <ul class="nav navbar-nav navbar-right">
                    <li ><a href="Clothing/index.php">Clothing</a></li>
                    <li class="active"><a href="index.php">GIFs</a></li>
                    <li><?php echo($btn_upload);?></li>
                    <!--<li><?php echo($btn_login);?></li>-->
                  </ul>
                </div><!--/.nav-collapse -->
              </div>
            </nav>            
        </header>
        <section id="primary-slider">
            <div class="container">
                <h1 class="page-title text-center">TimeMac Originals</h1>
            </div>
        </section>

        <section id="secondary">
            <div class="container">
              <div class="grid">
                  
               <?php
                    $dir = "media/gifs/";
                    
                    // Open a directory, and read its contents
                    if (is_dir($dir)){
                      if ($dh = opendir($dir)){
                        while (($file = readdir($dh)) !== false) {
                            $files[] = $file;
                        }
                        
                        $images=preg_grep('/\.(jpg|jpeg|png|gif)(?:[\?\#].*)?$/i', $files);
                        $images=preg_grep('/\.gif/i', $files);
                            foreach($images as $image) {
                ?>
                          <div class="grid-item">
                              <a href="media.php?img=<?php echo($image);?>"><img src="<?php echo($dir.$image);?>" class="img-responsive"></a>
                          </div>
                <?php
                        }
                        closedir($dh);
                      }
                    }
                ?>
                </div>
            </div>
            
        </section>
    </div>
    <hr>
        <div class="container-fluid"> 
        <div class="row">
              <a href="https://www.facebook.com/triginals" target="_blank"><img style="display:block;float:left;padding:1px 10px 10px 1px;" class="img-responsive" src="media/img/facebook.png" width="70" height="70" alt="facebook" /></a>
              <a href="https://www.instagram.com/triginals" target="_blank"><img style="display:block;float:left;padding:1px 10px 10px 1px;"  class="img-responsive" src="media/img/instagram.jpg" width="70" height="70" alt="instagram"/></a>
              <div class="text-center col-md-offset-0 col-md-10">
              
                <h4>Built by #TeamTimeMac</h4>
                <p>Copyright &copy; 2016 &middot; All Rights Reserved &middot; </p>
              </div>
             </div>
       </div>
    
<!---------------------
        Scripts
----------------------->
<!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="assets/js/jquery-2.1.4.min.js"><\/script>')</script>
    <script src="assets/js/bootstrap.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="assets/js/ie10-viewport-bug-workaround.js"></script>    
    <script src="assets/js/jquery.masonry.3.2.1.min.js"></script>   
    <script src="assets/js/imagesloaded.3.1.8.min.js"></script>
    <script>
        $(document).ready(function(){
            //Init jQuery Masonry layout
            init_masonry();
        });


        function init_masonry(){
            var $container = $('.grid');

            $container.imagesLoaded( function(){
                $container.masonry({
                  itemSelector: '.grid-item',
                  isAnimated: true
                });
            });
        }
    </script>
</body>
</html>
