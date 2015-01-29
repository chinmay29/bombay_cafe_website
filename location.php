<!DOCTYPE html>
<html>
  <head>
      <style>

      </style>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">  
    <!-- Bootstrap -->  
    <link href="bootstrap/css/bootstrap-responsive.css" rel="stylesheet">
    <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen"> 
    <link href="custom.css" rel="stylesheet" media="screen"> 
  <link href="twitter-bootstrap-v2/docs/assets/css/bootstrap.css" rel="stylesheet">
	<link href="twitter-bootstrap-v2/docs/assets/css/example-fluid-layout.css" rel="stylesheet">
    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="twitter-bootstrap-v2/docs/examples/images/favicon.ico">
    <link rel="apple-touch-icon" href="twitter-bootstrap-v2/docs/examples/images/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="twitter-bootstrap-v2/docs/examples/images/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="twitter-bootstrap-v2/docs/examples/images/apple-touch-icon-114x114.png">

    <style>
      #map_canvas {
        width: 500px;
        height: 400px;
      }
    </style>
    <script src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
    <script>
      function initialize() {
        var map_canvas = document.getElementById('map_canvas');
        var map_options = {
          center: new google.maps.LatLng(39.167526, -86.533398),
          zoom: 16,
          mapTypeId: google.maps.MapTypeId.ROADMAP
        }
        var map = new google.maps.Map(map_canvas, map_options);
         var marker = new google.maps.Marker({
      position: new google.maps.LatLng(39.167526, -86.533398),
      map: map,
      title: 'Bombay cafe'
});
      }
      google.maps.event.addDomListener(window, 'load', initialize);
    </script>
<!DOCTYPE html>  
  
<meta charset="utf-8">  
<title>Location</title>  
<meta name="viewport" content="width=device-width, initial-scale=1.0">  
<meta name="description" content="Example of Fixed Layout with Twitter Bootstrap version 2.0 from w3resource.com">  
<meta name="author" content="">  
<!-- Le styles -->  
<link href="twitter-bootstrap-v2/docs/assets/css/bootstrap.css" rel="stylesheet">  
<link href="twitter-bootstrap-v2/docs/assets/css/example-fixed-layout.css" rel="stylesheet">  
<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->  
<!--[if lt IE 9]>  
<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>  
<![endif]-->  
<!-- Le fav and touch icons -->  
<link rel="shortcut icon" href="twitter-bootstrap-v2/docs/examples/images/favicon.ico">  
<link rel="apple-touch-icon" href="twitter-bootstrap-v2/docs/examples/images/apple-touch-icon.png">  
<link rel="apple-touch-icon" sizes="72x72" href="twitter-bootstrap-v2/docs/examples/images/apple-touch-icon-72x72.png">  
<link rel="apple-touch-icon" sizes="114x114" href="twitter-bootstrap-v2/docs/examples/images/apple-touch-icon-114x114.png">  
</head>  
<body>  
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="js/jquery-1.7.2.min.js"><\/script>')</script>
        <script src="//code.jquery.com/jquery.js"></script>
        <script src="bootstrap-3.0.0/dist/js/bootstrap.min.js"></script> 
        <script src="bootstrap/js/bootstrap.min.js"></script>
   
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">  
  <ul class="nav navbar-nav">  
  <li><a href="index.php" class="navbar-brand">  
<img src="logo3.gif" height="100" width="100"></a></li>  
  <li><a href="index.php">Home</a></li>  
   
  <li><a href="Menu.php">Menu</a></li>
  <li class="active"><a href="location.php">Contact us</a></li>
  
  <li><a href="Chin.php">Talk to us</a></li>
  <li><a href="social.php">Social</a></li>
  
          </li>  
       </ul>  
      </li>  
      
      <li>
          <h2><a href="signin.php">Lets order </a></h2>
      </li>
  </ul>  
</nav>

 
  
<!-- Main hero unit for a primary marketing message or call to action -->  

<div><img src="bc.png"></div>
<h1><div class="span8" id="map_canvas"></div>
    </h1>  
  
<div class="span6">
    <p><h2>Contact us</h2>
   <form action="contact.php" method="post">
    Your name<br>
    <input type="text" name="cf_name"><br>
    Your e-mail<br>
    <input type="text" name="cf_email"><br>
    Message<br>
    <textarea name="cf_message"></textarea>
    <br>
<input type="submit" value="Send">
<input type="reset" value="Clear">
</form>

</div>
<hr>  
 
</div> <!-- /container -->  
<!-- Le javascript  
================================================== -->  
<!-- Placed at the end of the document so the pages load faster -->  
<script src="twitter-bootstrap-v2/docs/assets/js/jquery.js"></script>  
<script src="twitter-bootstrap-v2/docs/assets/js/bootstrap-transition.js"></script>  
<script src="twitter-bootstrap-v2/docs/assets/js/bootstrap-alert.js"></script>  
<script src="twitter-bootstrap-v2/docs/assets/js/bootstrap-modal.js"></script>  
<script src="twitter-bootstrap-v2/docs/assets/js/bootstrap-dropdown.js"></script>  
<script src="twitter-bootstrap-v2/docs/assets/js/bootstrap-scrollspy.js"></script>  
<script src="twitter-bootstrap-v2/docs/assets/js/bootstrap-tab.js"></script>  
<script src="twitter-bootstrap-v2/docs/assets/js/bootstrap-tooltip.js"></script>  
<script src="twitter-bootstrap-v2/docs/assets/js/bootstrap-popover.js"></script>  
<script src="twitter-bootstrap-v2/docs/assets/js/bootstrap-button.js"></script>  
<script src="twitter-bootstrap-v2/docs/assets/js/bootstrap-collapse.js"></script>  
<script src="twitter-bootstrap-v2/docs/assets/js/bootstrap-carousel.js"></script>  
<script src="twitter-bootstrap-v2/docs/assets/js/bootstrap-typeahead.js"></script>  
</body>  
</html>
        </div>
    
  </body>
</html>
