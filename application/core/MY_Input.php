<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of BaseController
 *
 * @author Administrator
 */
class MY_Input extends CI_Input {

    function is_post() {
        $method = $this->server('REQUEST_METHOD');
        return strtolower($method) == 'post';
    }

    function is_get() {
        $method = $this->server('REQUEST_METHOD');
        return strtolower($method) == 'get';
    }

}
