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

    //获得最热门的plan，分页
    public function getHot() {
        return array();
    }

    //获得top5
    public function getTop5() {
        return array();
    }

}
