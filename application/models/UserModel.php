<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of TaskModel
 *
 * @author Administrator
 */
class UserModel extends MY_Model {

    protected $_table = 'users';

    public function register($userdata = array()) {
        //注册用户信息
        if (!empty($userdata)) {
            $this->insert($userdata, TRUE);
            //$this->_database->insert($this->_table, $userdata);
        }
        //return        
    }

}
