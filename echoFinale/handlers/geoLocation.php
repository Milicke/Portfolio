<?php
function getGeoCode($address)
{
        // geocoding api url
        $url = "http://maps.google.com/maps/api/geocode/json?address=" . $address;
        // send api request
        $geocode = file_get_contents($url);
        $json = json_decode($geocode);
		echo $geocode;
        $data['lat'] = $json->results[0]->geometry->location->lat;
        $data['lng'] = $json->results[0]->geometry->location->lng;
        return $data;
}