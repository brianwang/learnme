<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Page extends BaseController {

    //首页
    public function index() {
        $this->smarty->view('plans.tpl');
    }

    //首页
    public function status() {
        $this->smarty->view('status.tpl');
    }

//    //我的任务
//    public function mytask() {
//        $this->smarty->view('mytask.tpl');
//    }
    //面板
    public function dashboard() {
        $this->smarty->view('dashboard.tpl');
    }

    //我的计划
    public function myplan() {
        $this->smarty->view('myplan.tpl');
    }

    
     public function login() {
        $this->smarty->view('login.tpl');
    }
    
    public function register() {
        $this->smarty->view('register.tpl');
    }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */