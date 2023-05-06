<?php
function getRandomPassword($length) {
    $my_string = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!?@#$%"£&/()=^[]{}°-_:.;,<>';
    $unique_str = implode(',', array_unique(explode(',', $my_string)));
    $random_string = '';
    while ($length > 0) {
        $random_num = rand(0, strlen($unique_str) - 1);
        $random_string .= $unique_str[$random_num];
        $length--;
    }
    return $random_string;
}