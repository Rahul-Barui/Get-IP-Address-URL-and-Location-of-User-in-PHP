<html>
    <head>
        <title> Get IP Address, URL and Location of User in PHP </title>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
    </head>
    <body>
    	<div class="container">
            <h3 style="text-align: center; color: #8A1B03;">Get IP Address, URL and Location of User in PHP</h3>
            <br>
            
            <p align="center" style="color: blue;">
            	<?php
					//___________ Code For URL Tracker ________ @rahul barui

					$url = "https://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];

					//___________ Code For Real or Fake IP Tracker ________ @rahul barui

					function getUserIpAddr(){
					    if(!empty($_SERVER['HTTP_CLIENT_IP'])){
					        //IP from share internet
					        $ip = $_SERVER['HTTP_CLIENT_IP'];
					    }elseif(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){
					        //IP pass from proxy
					        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
					    }else{
					        $ip = $_SERVER['REMOTE_ADDR'];
					    }
					    return $ip;
					}
					
					$getIP = getUserIpAddr();

					//___________ Code For Address Tracker Using IP________ @rahul barui
					
					$ipdat = @json_decode(file_get_contents("http://www.geoplugin.net/json.gp?ip=" . $getIP));

					$country = $ipdat->geoplugin_countryName;
					$city = $ipdat->geoplugin_city;
					$continent = $ipdat->geoplugin_continentName;
					$latitude = $ipdat->geoplugin_latitude;
					$longitude = $ipdat->geoplugin_longitude;
					$currencySymbol = $ipdat->geoplugin_currencySymbol;
					$currencyCode = $ipdat->geoplugin_currencyCode;
					$timezone = $ipdat->geoplugin_timezone;

					echo 'Your Current URL Is : '.$url.'<br>';
					echo 'Your Real IP Is : '.$getIP.'<br>';
					   
					echo 'Country Name: '.$country.'<br>'; 
					echo 'City Name: '.$city.'<br>'; 
					echo 'Continent Name: '.$continent.'<br>'; 
					echo 'Latitude: '.$latitude.'<br>'; 
					echo 'Longitude: '.$longitude.'<br>'; 
					echo 'Currency Symbol: '.$currencySymbol.'<br>'; 
					echo 'Currency Code: '.$currencyCode.'<br>'; 
					echo 'Timezone: '.$timezone;
					
				?>
            </p>

            <br>
            <p align="center">
	            <strong>
	            	<br>
	            	<a href="https://www.facebook.com/rahul.barui.37" target="_blank">Facebook</a>
	            	<br>
	            	<a href="https://github.com/Rahul-Barui" target="_blank">Github</a>
	            	<br>
	            	<a href="https://in.linkedin.com/in/rahul-barui-555651177" target="_blank">LinkedIn</a>
	            	<br>
	            	<a href="https://stackoverflow.com/users/10754963/rahul-barui" target="_blank"> Stackoverflow</a>
	            	<br>
	            	<a href="https://www.google.com/search" target="_blank">In Google - Type "RAHUL BARUI"</a>
	            </strong>
	        </p>

        </div>

    </body>
</html>
