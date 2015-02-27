<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Page extends BaseController {

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     * 	- or -  
     * 		http://example.com/index.php/welcome/index
     * 	- or -
     * Since this controller is set as the default controller in 
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see http://codeigniter.com/user_guide/general/urls.html
     */
    public function index() {
        $this->smarty->view('plans.tpl');
    }

    public function status() {
        $this->smarty->view('status.tpl');
    }

    public function mytask() {
        $this->smarty->view('mytask.tpl');
    }

    public function dashboard() {
        $this->smarty->view('dashboard.tpl');
    }
    
    public function myplan() {
        $this->smarty->view('myplan.tpl');
    }
    

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */