<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

// ------------------------------------------------------------------------
if (!function_exists('cur_uri')) {

    function cur_uri() {
        $CI = & get_instance();
        return '/'. $CI->uri->uri_string();
    }

}
if (!function_exists('is_in_array')) {

    function is_in_array($array, $key, $key_value) {
        $result = false;
        foreach ($array as $k => $v) {
            if (is_array($v)) {
                $result = is_in_array($v, $key, $key_value);
                if ($result) {
                    break;
                }
            } else {
                if ($v == $key_value && $k == $key) {
                    $result = true;
                    break;
                }
            }
        }
        return $result;
    }

}

/* End of file url_helper.php */
/* Location: ./system/helpers/url_helper.php */