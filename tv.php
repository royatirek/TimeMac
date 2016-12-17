<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>gifplayer. Customizable jquery plugin to play and stop animated gifs. Similar to 9gag's</title>
	<link rel="stylesheet" href="css/normalize.css" />
	<link rel="stylesheet" href="css/index.css" />
	<link rel="stylesheet" href="../dist/gifplayer.css" />
	<link rel="icon" type="image/png" href="media/banana.png" />
</head>

<body id="home">

		<section>
			<h2>Custom size 1:</h2>
			<img id="tv" class="gifplayer" src="media/banana.png" data-gif="" data-wait="true" width="500px" height="auto" />
		</section>

		

		<script src="https://code.jquery.com/jquery-1.11.2.min.js"></script>
		<script src="../dist/jquery.gifplayer.js"></script>
		<script>
		  
			$(document).ready( function(){
				$('.gifplayer').gifplayer();
			});
			
		</script>
        <script>
		var rand;
		var pausecontent = new Array();
		<?php 
                    $dir = "media/";
                    
                    // Open a directory, and read its contents
                    if (is_dir($dir)){
                      if ($dh = opendir($dir)){
                        while ((($file = readdir($dh)) !== false)) {
                            $files[] = $file;
                        }
                        $images=preg_grep('/\.(jpg|jpeg|gif)(?:[\?\#].*)?$/i', $files);
                        $images=preg_grep('/\.gif/i', $files); 

                        $images = array_splice($images,0);

                        $rand_image = array_rand($images);
               
                
                        closedir($dh);
                      }
                  }
         ?>
		//feeding data of server to a javascript array pausecontent
				<?php foreach($images as $key => $val){ ?>
							  pausecontent.push('<?php echo $val; ?>');
				<?php } ?>
		
		$("#tv").attr("data-gif","media/<?php echo($images[$rand_image])?>");
		 the_timer=setInterval(function()
			{
				
				
				rand=Math.floor(Math.random()*(pausecontent.length))	
				   
				$(".gp-gif-element").attr("src","media/"+pausecontent[rand]);
				$("#tv").attr("data-gif","media/"+pausecontent[rand]);
				
			},5000);
		</script>
        

	</body>
</html>
