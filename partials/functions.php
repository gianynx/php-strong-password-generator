<?php
function getRandomPassword($length) {
    $my_string = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!?@#$%"£&/()=^[]{}°-_:.;,<>';
    $random_string = '';
    while ($length > 0) {
        $random_num = rand(0, strlen($my_string) - 1);
        $random_string .= $my_string[$random_num];
        $length--;
    }
    return $random_string;
}