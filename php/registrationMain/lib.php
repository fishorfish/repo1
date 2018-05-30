<?php session_start();
function is_username_in_file($user) {

    $str = file_get_contents('data.txt');
    $from_file = explode(PHP_EOL, $str);

    foreach ($from_file as $val) {
        $item = explode(";", $val);
        if ($user == $item[0]) {
            return $item;
        }
    }
    return false;
}


