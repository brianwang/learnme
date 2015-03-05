<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of remotejs
 *
 * @author Administrator
 */
class Remotejs extends BaseController {

    //put your code here

    public function config() {
        $this->output->set_content_type('js');
        $output = 'var urls = ' . json_encode(array(
                    'plan' => array('addurl' => base_url('/plan/add'),
                        'rmurl' => base_url('/plan/remove'),
                        'baseurl' => base_url('/plan/'),
                        'addstepurl' => base_url('step/add')),
                    'step_url' => base_url('/step')
                        ), JSON_FORCE_OBJECT | JSON_UNESCAPED_SLASHES) . ';';
        $this->load->model('PlanModel');
        $uid = isset($_SESSION['uid']) ? $_SESSION['uid'] : '33';
        $myplans = $this->PlanModel->getbyuid($uid);
        $output .= 'var gl = ' . json_encode(array(
                    'plans' => $myplans
                )) . ';';
        $this->output->set_output($output);
    }

}
