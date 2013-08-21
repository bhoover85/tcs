<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>World Famous Thin Crust Square at Emma's Brick Oven Pizza</title>
        <meta name="description" content="Thin Crust Square - The perfect pairing of high quality ingredients, an authentic brick oven and the skill of a master pizza chef.">

        <!-- Facebook Open Graph Info -->
        <meta property="og:title" content="World Famous Thin Crust Square at Emma's Brick Oven Pizza" />
        <meta property="og:url" content="http://thincrustsquare.com" />
        <meta property="og:description" content="Thin Crust Square - The perfect pairing of high quality ingredients, an authentic brick oven and the skill of a master pizza chef." />
        <meta property="og:image" content="http://thincrustsquare.com/img/og_image.jpg" />
        <!-- End Facebook Open Graph Info -->

        <link rel="stylesheet" href="css/normalize.min.css">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="/easybox/styles/default/easybox.min.css" type="text/css" media="screen" />
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
		<link rel="icon" href="favicon.ico" type="image/x-icon">
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css'>

        <script src="js/vendor/modernizr-2.6.2.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->

        <div id="container">
        	<div id="header">
        		<div id="home_nav"><a href="/" class="hotspot"></a></div>
        		<div id="photos_nav"><a href="/photos" class="hotspot"></a></div>
        		<div id="retail_nav"><a href="/retail" class="hotspot"></a></div>
    		</div>
	        <div id="content">
		        <?php
		        	$page = $_GET['page'];
					switch($page){
						case '':
							include('page/home.php');
						break;
						
						case 'home':
							include('page/home.php');
						break;

						case 'photos':
							include('page/photos.php');
						break;

						case 'retail':
							include('page/retail.php');
						break;
					};
				?>
				<div id="x4dc">
					<a href="http://x4dc.com">Website design by X4DC</a>
				</div>
                <div style="clear:both"></div>
			</div>
        </div>

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.1.min.js"><\/script>')</script>

        <script src="js/plugins.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/main.js"></script>

        <!-- concatenated -->
		<script type="text/javascript" src="/easybox/distrib.min.js"></script>

		<!-- seperate files -->
		<script type="text/javascript" src="/easybox/easybox.min.js"></script>
		<script type="text/javascript" src="/easybox/handlers.min.js"></script>
		<script type="text/javascript" src="/easybox/extras/autoload.min.js"></script>

        <script>
			(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

			ga('create', 'UA-39292464-2', 'thincrustsquare.com');
			ga('send', 'pageview');
		</script>

	    <script src="http://malsup.github.com/jquery.form.js"></script> 

	    <script> 
	        // wait for the DOM to be loaded 
	        $(document).ready(function() { 
	            // bind 'myForm' and provide a simple callback function 
	            $('#contact_form').ajaxForm(function() {
	                $('#contact_form').fadeOut('default',function() {
	                	$('#contact_form').replaceWith("<span class='small'>Thanks for your email!</span>").fadeIn('slow');
	                });
	            }); 
	        }); 
	    </script> 
    </body>
</html>
