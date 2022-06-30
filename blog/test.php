<pre>
<?php

print_r( $_SERVER );

// Create two timezone objects, one for Taipei (Taiwan) and one for
// Tokyo (Japan)
$dateTimeZoneTaipei = new DateTimeZone("Asia/Taipei");
$dateTimeZoneJapan = new DateTimeZone("Asia/Tokyo");
$dateTimeZoneJapan = new DateTimeZone("America/Juneau");
$dateTimeZoneJapan = new DateTimeZone("Asia/Dhaka");

// Create two DateTime objects that will contain the same Unix timestamp, but
// have different timezones attached to them.
$dateTimeTaipei = new DateTime("2020-02-02 13:45:17", $dateTimeZoneTaipei);
$dateTimeJapan = new DateTime("now", $dateTimeZoneJapan);

// NOTE: $dateTimeJapan is not used further in this example

// Calculate the GMT offset for the date/time contained in the $dateTimeTaipei
// object, but using the timezone rules as defined for Tokyo
// ($dateTimeZoneJapan).
$timeOffset = $dateTimeZoneJapan->getOffset($dateTimeTaipei);

// Should show int(32400) (for dates after Sat Sep 8 01:00:00 1951 JST).
print("Number of seconds Japan is ahead of GMT at the specific time: ");
var_dump($timeOffset);

print("<br />Number of seconds Taipei is ahead of GMT at the specific time: ");
var_dump($dateTimeZoneTaipei->getOffset($dateTimeTaipei));

print("<br />Number of seconds Japan is ahead of Taipei at the specific time: ");
var_dump($dateTimeZoneJapan->getOffset($dateTimeTaipei)
     -$dateTimeZoneTaipei->getOffset($dateTimeTaipei));

print("<hr />");

?>