<?php

// Create Jan 2021 Calendar in an array

// if 20th is passed into the array, it should display the full day of the month and the current time.

$date_array = [
    "1st" => date("h:i:sa"),
    "2nd" => date("h:i:sa"),
];

echo $date_array["1st"];
?>