<?php

/**
 * Foursquare Realtime PHP Example
 * A basic PHP example using foursquare's realtime API
 * 
 * @package foursquare-realtime-php-example 
 * @author Brett Neese <brneese@brneese.com>, @brneese
 * @license MIT
 *
 * Copyright (c) 2012 Brett Neese, http://brneese.com/
 * Permission is hereby granted, free of charge, to any person obtaining
 * a copy of this software and associated documentation files (the
 * "Software"), to deal in the Software without restriction, including
 * without limitation the rights to use, copy, modify, merge, publish,
 * distribute, sublicense, and/or sell copies of the Software, and to
 * permit persons to whom the Software is furnished to do so, subject to
 * the following conditions:
 *
 * The above copyright notice and this permission notice shall be
 * included in all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND,
 * EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF
 * MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND
 * NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE
 * LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION
 * OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION
 * WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
 */



$json = json_decode($_REQUEST["checkin"]);
//this ^^ decodes the checkin POST json data and assigns it to a PHP array


//interpert the php array from above, assigning each element from foursquare it's own variable. I've included the majority of the elements, but if you'd like more, just follow this pattern. A sample push is shown at https://developer.foursquare.com/overview/realtime.

$id = $json->id;
$user_id = $json->user->id;
$user_firstName = $json->user->firstName;
$user_lastName = $json->user->lastName;  //note: foursquare push api test does NOT send last name for some bizzarre reason. a real push will.
$user_gender = $json->user->gender;
$user_homeCity = $json->user->homeCity;

$venue_id = $json->venue->id;
$venue_name = $json->venue->name;
$venue_location_address = $json->venue->location->address;
$venue_location_lat = $json->venue->location->lat;
$venue_location_lng = $json->venue->location->lng;
$venue_location_city = $json->venue->location->city;
$venue_location_state = $json->venue->location->state;
$venue_location_postalCode = $json->venue->location->postalCode;



$con = mysql_connect("MYSQL_SERVER","MYSQL_USERNAME","MYSQL_PASSWORD"); //insert your database connection settings here
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("MYSQL_DATABASE", $con); //insert your database name here

// to make things easy, I labeled each variable with the name of it's appropriate mysql column. I also used the jquery response as an template for naming my variables. For instance, Venue:Location:City == $venue_location_city
 
mysql_query("INSERT INTO `checkins` (`4sq_id`, `user_id`, `user_firstName`, `user_lastname`, `user_gender`, user_homeCity, venue_id, venue_name, venue_location_address, venue_location_lat, venue_location_lng, venue_location_city, venue_location_state, venue_location_postalCode) VALUES ('$id', '$user_id', '$user_firstName', '$user_lastName', '$user_gender', '$user_homeCity', '$venue_id', '$venue_name', '$venue_location_address', '$venue_location_lat', '$venue_location_lng', '$venue_location_city', '$venue_location_state', '$venue_location_postalCode')");

mysql_close($con);

?>
