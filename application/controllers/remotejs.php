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
        $this->output->set_output('var urls = ' . json_encode(array(
                    'plan' => array('addurl' => base_url('/plan/add'),'rmurl'=>base_url('/plan/remove')),
                    'step_url' => base_url('/step')
                        ), JSON_FORCE_OBJECT | JSON_UNESCAPED_SLASHES)
        );
    }

}
