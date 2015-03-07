<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Auth extends BaseController {

    //首页
    public function login() {
        //$this->smarty->view('plans.tpl');
        $userdata = $this->input->post();
        $sessiontime = isset($userdata['sessiontime']) ? $userdata['sessiontime'] : '';
        if ($sessiontime != '') {
            $lasttime = base64_decode($sessiontime);
            $duration = time() - $lasttime;
            if ($duration <= 5) {
                $error = '不要重复登录';
                redirect_back($error);
            }
        }
        unset($userdata['sessiontime']);
        unset($_SESSION['user']);
        if ($this->form_validation->run('login') == true) {
            $this->load->model('UserModel');
            $user = $this->UserModel->as_array()->get_by(array('email' => $userdata['email']));
            if (!empty($user)) {
                if (md5($userdata['password']) == $user['password']) {
                    $_SESSION['user'] = $user;
                    $this->smarty->view('register_success.tpl', array('frompage' => '登录'));
                } else {
                    $error = '密码错误';
                    redirect_back($error);
                }
            } else {
                $error = '用户不存在';
                redirect_back($error);
            }
        } else {
            $errors = validation_errors();
            redirect_back($errors);
        }
    }

    public function register() {
        $userdata = $this->input->post();
        $sessiontime = isset($userdata['sessiontime']) ? $userdata['sessiontime'] : '';
        if ($sessiontime != '') {
            $lasttime = base64_decode($sessiontime);
            $duration = time() - $lasttime;
            if ($duration <= 5) {
                $error = '不要重复注册';
                redirect_back($errors);
            }
        }
        unset($_SESSION['user']);
        unset($userdata['sessiontime']);
        if ($this->form_validation->run('register') == true) {
            if ($userdata['password'] == $userdata['confirm_password']) {
                $this->load->model('UserModel');
                unset($userdata['confirm_password']);
                $userdata['password'] = md5($userdata['password']);
                $this->UserModel->insert($userdata, TRUE);
                $_SESSION['user'] = $userdata;
                $this->smarty->view('register_success.tpl');
            } else {
                $error = '确认密码不一致';
                redirect_back($errors);
            }
        } else {
            $errors = validation_errors();
            redirect_back($errors);
        }
    }

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */