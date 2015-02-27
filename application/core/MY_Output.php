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
class MY_Output extends CI_Output {
    //put your code here
    // --------------------------------------------------------------------

    /**
     * Set JSON output
     *
     * Sets the json output string
     *
     * @access	public
     * @param	string
     * @return	void
     */
    function json($output) {
        $this->set_content_type('json');
        $this->final_output = json_encode($output);

        return $this;
    }

    // --------------------------------------------------------------------
}
