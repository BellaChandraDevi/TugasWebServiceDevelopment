<!DOCTYPE html>
<html>
<head>
<left><h3>Laporan Condition,Astronomy dan Geolookup Kota Mumbai,India</h3></left>
</head>
<br>  
  
  <?php

  $json_string = file_get_contents("http://api.wunderground.com/api/2055f4ccf15515f1/conditions/q/indonesia/mumbai.json");
  $parsed_json = json_decode($json_string);
  $location= $parsed_json->current_observation->display_location->state_name;
  $city= $parsed_json->current_observation->display_location->city;
  $location1= $parsed_json->current_observation->observation_location->city;
  $time= $parsed_json->current_observation->observation_time_rfc822;


  echo
  "Negara : $location </br>
  Kota : $city </br>
  Lokasi Observasi : $location1 </br>
  Waktu lokal : $time \n";
  
     echo "<br>";

  $json_string = file_get_contents("http://api.wunderground.com/api/9506a6b0b3836cc0/astronomy/q/Indonesia/mumbai.json");
  $parsed_json = json_decode($json_string);
  $name= $parsed_json->moon_phase->hemisphere;
  $age= $parsed_json->moon_phase->ageOfMoon;
  $clock= $parsed_json->sun_phase->sunrise->hour;
  $clock1= $parsed_json->sun_phase->sunset->hour;
  $clock2= $parsed_json->moon_phase->moonrise->hour;
  $clock3= $parsed_json->moon_phase->moonset->hour;
 
  echo
  "Belahan bumi : $name </br>
  Fase Bulan : $age </br>
  Matahari Terbit jam : $clock </br>
  Matahari Tenggelam jam : $clock1 </br>
  Bulan Terbit jam : $clock2 </br>
  Bulan Tenggelam jam : $clock3 </br>";

  $json_string = file_get_contents("http://api.wunderground.com/api/9506a6b0b3836cc0/geolookup/q/India/mumbai.json");
  $parsed_json = json_decode($json_string);
  $location= $parsed_json->location->tz_long;
   $lat= $parsed_json->location->lat;
   $lon= $parsed_json->location->lon;
   $location1= $parsed_json->location->zip;
  echo
  "Tz Long: $location </br>
  Garis Lintang: $lat </br>
  Garis Bujur : $lon </br>
  Zip: $location1 </br>";
  
  
?>
</pre>
 </body>
</html>