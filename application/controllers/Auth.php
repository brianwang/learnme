<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Auth extends BaseController {

    //首页
    public function login() {
        $this->smarty->view('plans.tpl');
    }

  
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */