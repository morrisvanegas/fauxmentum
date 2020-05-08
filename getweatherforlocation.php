<?php
if (isset($_REQUEST["owapikey"]) && isset($_REQUEST["units"]) &&  isset($_REQUEST["location"])){
 
    $owapikey = $_REQUEST['owapikey'];
    $units = $_REQUEST['units'];
    $location = $_REQUEST['location'];
 
    $request = json_decode(file_get_contents("http://api.openweathermap.org/data/2.5/weather?q={$location}&units={$units}&APPID={$owapikey}"));
 
    $weather = array(
        "latitude" => $latitude,
        "longitude" => $longitude,
        "city" => $request->name,
        "weather" => array(
            "simple" => $request->weather[0]->main,
            "description" => $request->weather[0]->description,
            "temperature" => $request->main->temp
        ),
        "source" => "smart-ip.net, openweathermap.org"
    );
 
    header('Content-type: application/json');
    echo json_encode($weather);
}
else{
    echo "<!doctype html><html><head><style>body{font-family:Arial, sans-serif;}</style></head><body><h1>Hello</h1><p>This is a wrapper service for <a href='http://smart-ip.net/'>smart-ip.net</a> and <a href='http://openweathermap.org/'>openweathermap.org</a> that I made for a <a href='https://fourtonfish.makes.org/thimble/make-your-own-web-mashup'>tutorial on web mashups</a>.</p><p><a href='http://fourtonfish.com/'>Back to the main page.</a></body></html>";
}
?>
