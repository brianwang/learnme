<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of PlanModel
 *
 * @author Administrator
 */
class PlanModel extends MY_Model {

    protected $_table = 'plans';

    /**
     * Insert a new row into the table. $data should be an associative array
     * of data to be inserted. Returns newly created ID.
     */
    public function insert($data, $tags = array()) {
        $data = $this->trigger('before_create', $data);
        $this->_database->trans_begin();

        $this->_database->insert($this->_table, $data);
        $insert_id = $this->_database->insert_id();
        if (!empty($tags)) {
            $tagsdata = array();
            foreach ($tags as $tag) {
                array_push($tagsdata, array(
                    'plan_id' => $insert_id,
                    'tag' => $tag,
                    'uid' => $data['author']
                ));
            }
            $this->_database->insert_batch('plan_tags', $tagsdata);
        }

        if ($this->_database->trans_status() === FALSE) {
            $this->_database->trans_rollback();
        } else {
            $this->_database->trans_commit();
        }
        $this->trigger('after_create', $insert_id);

        return $insert_id;
    }

    //插入标签
    public function inserttags($planid, $tags) {
        $tagsdata = array();
        foreach ($tags as $tag) {
            array_push($tagsdata, array(
                'plan_id' => $planid,
                'tag' => $tag
            ));
        }
        $this->_database->insert_batch('plan_tags', $tagsdata);
        return $tags;
    }

    //获得最热门的plan，分页
    public function getHot() {
        $result = $this->get_many_by(array(''));
        return $result;
    }

    public $after_get = array('after_get');
    public $timearr = array('month' => '月计划', 'week' => '周计划', 'year' => '年计划', 'long' => '长期计划');

    public function after_get($plan) {
        //$t = $this->timearr['week'];
        if (is_object($plan)) {
            $t = $plan->type;
            $type = $this->timearr[$t];
            $plan->type = $type;
        }
        if (is_array($plan)) {
            $t = $plan['type'];
            $type = $this->timearr[$t];
            $plan['type'] = $type;
        }
        return $plan;
    }

    public function getbyuid($uid = '') {
        $result = array();
        if ($uid == '')
            return $result;
        //$this->_database->select('p.*');
        //$this->_database->from('plans as p');
        //$this->_database->join('plans_steps', 'plans_steps.plan_id = p.id');
        //$plans = $this->_database->get_where('plans', array('author'=>$uid))->join('plans_steps');
        $plans = $this->get_many_by(array('author' => $uid));
        $result = $plans;
        return $result;
    }

    //获得top5
    public function getTop5() {
        return array();
    }

}
