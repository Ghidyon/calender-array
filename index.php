<?php

// Create Jan 2021 Calendar in an array

// if 20th is passed into the array, it should display the full day of the month and the current time.

class Calender {
    public $date_array = [
        "1st" => "Date is Friday 1st January, ",
        "2nd" => "Date is Saturday 2nd January, ",
        "3rd" => "Date is Sunday 3rd January, ",
        "4th" => "Date is Monday 4th January, ",
        "5th" => "Date is Tuesday 5th January, ",
        "6th" => "Date is Wednesday 6th January, ",
        "7th" => "Date is Thursday 7th January, ",
        "8th" => "Date is Friday 8th January, ",
        "9th" => "Date is Saturday 9th January, ",
        "10th" => "Date is Sunday 10th January, ",
        "11th" => "Date is Monday 11th January, ",
        "12th" => "Date is Tuesday 12th January, ",
        "13th" => "Date is Wednesday 13th January, ",
        "14th" => "Date is Thursday 14th January, ",
        "15th" => "Date is Friday 15th January, ",
        "16th" => "Date is Saturday 16th January, ",
        "17th" => "Date is Sunday 17th January, ",
        "18th" => "Date is Monday 18th January, ",
        "19th" => "Date is Tuesday 19th January, ",
        "20th" => "Date is Wednesday 20th January, ",
        "21st" => "Date is Thursday 21st January, ",
        "22nd" => "Date is Friday 22nd January, ",
        "23rd" => "Date is Saturday 23rd January, ",
        "24th" => "Date is Sundaty 24th January, ",
        "25th" => "Date is Monday 25th January, ",
        "26th" => "Date is Tuesday 26th January, ",
        "27th" => "Date is Wednesday 27th January, ",
        "28th" => "Date is Thursday 28th January, ",
        "29th" => "Date is Friday 29th January, ",
        "30th" => "Date is Saturday 30th January, ",
        "31st" => "Date is Sunday 31st January, "
    ];
    
    public function getDate($day) {
        echo $this->date_array[$day] . date("h:i:sa");
    }
}

$jan = new Calender;
$jan->getDate("21st");

// print_r($date_array);
// var_dump($date_array);
// echo $date_array["1st"];
?>