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
class StepModel extends MY_Model {

    protected $_table = 'plan_steps';

    public function getbyuid($uid = '') {
        $result = array();
        if ($uid == '')
            return $result;
        //$this->_database->select('p.*');
        //$this->_database->from('plans as p');
        //$this->_database->join('plans_steps', 'plans_steps.plan_id = p.id');
        //$plans = $this->_database->get_where('plans', array('author'=>$uid))->join('plans_steps');
        $plans = $this->get_many_by(array('uid' => $uid));
        $result = $plans;
        return $result;
    }

}
