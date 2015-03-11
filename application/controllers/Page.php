<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Page extends BaseController {

    //首页
    public function index() {
        $this->smarty->view('index.tpl');
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
        $sessiontime = base64_encode(time());
        $errors = isset($_SESSION['flash_data']) ? $_SESSION['flash_data'] : '';
        $data = array('errors' => $errors, 'sessiontime' => $sessiontime);
        $this->smarty->view('login.tpl', $data);
        unset($_SESSION['flash_data']);
    }

    public function register() {
        $sessiontime = base64_encode(time());
        $errors = isset($_SESSION['flash_data']) ? $_SESSION['flash_data'] : '';
        $data = array('errors' => $errors, 'sessiontime' => $sessiontime);
        $this->smarty->view('register.tpl', $data);
        unset($_SESSION['flash_data']);
    }

    public function profile() {
        $user = $_SESSION['user'];
        $this->smarty->view('profile.tpl', array('user' => $user));
    }

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */