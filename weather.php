
<?php 

	print '
	<h1>Vrijeme</h1>';
	
	$url = "http://api.openweathermap.org/data/2.5/weather?q=Dubrovnik&appid=facc8aed897f9c3f27de10b8c0d1e42b";
			$json = file_get_contents($url);
			$json_data = json_decode($json,true);

			print '<div id="openweathermap-widget-15"></div>';
			

			
	print '</div>';
?>

<script>window.myWidgetParam ? window.myWidgetParam : window.myWidgetParam = [];  window.myWidgetParam.push({id: 15,cityid: <?=$json_data['id']?>,appid: 'facc8aed897f9c3f27de10b8c0d1e42b',units: 'metric',containerid: 'openweathermap-widget-15',  });  (function() {var script = document.createElement('script');script.async = true;script.charset = "utf-8";script.src = "//openweathermap.org/themes/openweathermap/assets/vendor/owm/js/weather-widget-generator.js";var s = document.getElementsByTagName('script')[0];s.parentNode.insertBefore(script, s);  })();</script>