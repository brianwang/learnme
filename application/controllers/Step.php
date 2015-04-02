<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of step
 *
 * @author Administrator
 */
class Step extends ModelController {

    public function add() {
        if ($this->input->is_post()) {
            $validatename = strtolower($this->modelname . '_valid');
            if ($this->form_validation->run($validatename) == TRUE) {
                $data = $this->input->post();
                if (!isset($_SESSION['user'])) {
                    $this->output->json(array('error' => '请登录'));
                } else {
                    $data['uid'] = isset($_SESSION['user']) ? $_SESSION['user']['id'] : '';
                    $id = $this->{$this->modelclass}->insert($data, true);
                    $data['id'] = $id;
                    $data['important'] = -1;
                    $data['emergency'] = -1;
                    $this->output->json(array('result' => 'success', 'step' => $data));
                }
            } else {
                $errors = validation_errors();
                $this->output->json($errors);
            }
        } else {
            $this->output->json(array('error' => '必须使用post'));
        }
    }

}
