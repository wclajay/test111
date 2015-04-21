





<?php
//$postcode = $_REQUEST['postcode'];
$postcode = "TN21 0UG";

// Sanitize their postcode:
$search_code = urlencode($postcode);
$url = 'http://maps.googleapis.com/maps/api/geocode/json?address=' . $search_code . '&sensor=false';


$json = json_decode(file_get_contents($url));

$lat = $json->results[0]->geometry->location->lat;
$lng = $json->results[0]->geometry->location->lng;

// Now build the lookup:
$address_url = 'http://maps.googleapis.com/maps/api/geocode/json?latlng=' . $lat . ',' . $lng . '&sensor=false';
$address_json = json_decode(file_get_contents($address_url));




$address_data = $address_json->results[0]->address_components;


//echo $address_data[1]->long_name;die;



$street = str_replace('Dr', 'Drive', $address_data[1]->long_name);
$street2 = str_replace('Dr', 'Drive', $address_data[2]->long_name);

$town   = $address_data[3]->long_name;
$state   = $address_data[4]->long_name;
$county = $address_data[5]->long_name;

$array = array('street' => $street,'street2' => $street2, 'town' => $town,'state' => $state, 'county' => $county);
echo json_encode($array);
?>