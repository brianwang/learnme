<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Auth extends BaseController {

    //首页
    public function login() {
        $this->smarty->view('plans.tpl');
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
        unset($userdata['sessiontime']);
        //unset($_POST['sessiontime'])
        if ($this->form_validation->run('register') == true) {
            if ($userdata['password'] == $userdata['confirm_password']) {
                $this->load->model('UserModel');
                unset($userdata['confirm_password']);
                $userdata['password'] = md5($userdata['password']);
                $this->UserModel->insert($userdata, TRUE);
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