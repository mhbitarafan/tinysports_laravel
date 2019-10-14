<?php // Code within app\Helpers\Helper.php

namespace App;

class Helper
{
    public static function int_flag_tostring($flag_list, $flag)
    {
        return $flag_list[$flag];
    }
}