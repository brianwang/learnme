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
                    'tag' => $tag
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

    //获得top5
    public function getTop5() {
        return array();
    }

}
