<?php

// Create Jan 2021 Calendar in an array

// if 20th is passed into the array, it should display the full day of the month and the current time.

class Calender {
    public $date_array = [
        "1" => "Date is Friday, ",
        "2" => "Date is Saturday, ",
        "3" => "Date is Sunday, ",
        "4" => "Date is Monday, ",
        "5" => "Date is Tuesday, ",
        "6" => "Date is Wednesday, ",
        "7" => "Date is Thursday, "
    ];
    
    public function getDate($day) {
        $key = intval($day) % 7;

        if ($key === 0) {
            $key = 7;
            echo $this->date_array[$key] . date("h:ia");
        } else {
            echo $this->date_array[$key] . date("h:ia");
        }
    }
}

$january = new Calender;
$january->getDate("31");
?>