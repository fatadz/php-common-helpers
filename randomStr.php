function randomStr($lower_n = 5, $upper_n = 1, $number_n = 2, $punct_n = 0) { //default return $lower_n + $upper_n + $number_n length
    $lower  = 'abcdefghijklmnopqrstuvwxyz';
    $upper  = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $number = '0123456789';
    $punct  = '!@#$%^&*()_-=+;:,.?';

    $lower_p  = substr (str_shuffle ($lower), 0, $lower_n);
    $upper_p  = substr (str_shuffle ($upper), 0, $upper_n);
    $number_p = substr (str_shuffle ($number), 0, $number_n);
    $punct_p  = substr (str_shuffle ($punct), 0, $punct_n);

    return str_shuffle ($lower_p.$upper_p.$number_p.$punct_p);
}