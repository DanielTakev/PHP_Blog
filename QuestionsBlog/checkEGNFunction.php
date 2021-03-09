<?php

function checkEGN($userEgn) {
    $weightsOfAllDigits = array(2,4,8,5,10,9,7,3,6);
    // Check for exactly 10-digit input
    if (!preg_match("/^[0-9]{10}$/", $userEgn)) {
        return "Your input doesn't contains 10-digit number. Please fill only 10 digits!";
    // Specific checks for date
    } else {
        $year = substr($userEgn,0,2);
        $mon  = substr($userEgn,2,2);
        $day  = substr($userEgn,4,2);
        if ($mon > 40) {
            // checkdate function is valid from PHP version 4
            if (!checkdate($mon-40, $day, $year+2000)) {
                return "Your EGN contains invalid date.";
            }
        } else if ($mon > 20) {
            if (!checkdate($mon-20, $day, $year+1800)) {
                return "Your EGN contains invalid date.";
            }
        } else {
            if (!checkdate($mon, $day, $year+1900)) {
                return "Your EGN contains invalid date.";
            }
        }
        // Checking the control digit
        $checksum = substr($userEgn,9,1);
        $digitsSum = 0;
        for ($i = 0; $i < 9; $i++) {
            $digitsSum += substr($userEgn, $i, 1) * $weightsOfAllDigits[$i];
        }
        $valid_checksum = $digitsSum % 11;
        if ($valid_checksum == 10) {
            $valid_checksum = 0;
        }
        if ($checksum == $valid_checksum) {
            return true;
        } else {
            return "Invalid control number!";
        }
    }
}
// Valid EGN:
$userInput = "6101057509";
// Return true with valid EGN and string error message with invalid EGN:
var_dump(checkEGN($userInput));
