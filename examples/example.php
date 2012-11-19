<!doctype html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>	<html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>Data Expand</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width">
</head>
<body>
  <!-- Prompt IE 6 users to install Chrome Frame. Remove this if you support IE 6. chromium.org/developers/how-tos/chrome-frame-getting-started -->
  <!--[if lt IE 7]><p class=chromeframe>Your browser is <em>ancient!</em> <a href="http://browsehappy.com/">Upgrade to a different browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to experience this site.</p><![endif]-->
  <div role="main">
	<div id="sample"></div>
  </div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
  <script src="../src/assemble.js" type="text/javascript" charset="utf-8"></script> 
 
  


  <script type="text/javascript">
	$(document).ready(function () {
		'use strict';
		$.ajax({
			url: 'predictions.csvd', 
            dataType: 'json',
			success: function(d) {
				//assemble data
                console.log(d);
                var data = assemble(d);
                console.log(data);
			}
		});
	});
  </script>

  <!-- end scripts -->
</body>
</html>