<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of plan
 *
 * @author Administrator
 */
class Plan extends ModelController {

    public function add() {
        if ($this->input->is_post()) {
            $validatename = strtolower($this->modelname . '_valid');
            if ($this->form_validation->run($validatename) == TRUE) {
                $data = $this->input->post();
                if (isset($data['tags'])) {
                    $tags = explode(',', $data['tags']);
                    unset($data['tags']);
                }
                if ($data['type'] == 'week') {
                    $data['duration'] = 7 * 24 * 60;
                } elseif ($data['type'] == 'month') {
                    $data['duration'] = 30 * 24 * 60;
                } elseif ($data['type'] == 'year') {
                    $data['duration'] = 365 * 24 * 60;
                } else {
                    $data['duration'] = -1;
                }
                $id = $this->{$this->modelclass}->insert($data, $tags, true);
                $data['id'] = $id;
                $this->output->json(array('result' => 'success', 'plan' => $data));
            } else {
                $errors = validation_errors();
                $this->output->json($errors);
            }
        } else {
            $this->output->json(array('error' => '必须使用post'));
        }
    }

    public function update() {
        if ($this->input->is_post()) {
            if ($this->modelname == '') {
                show_error('$modelname is wrong');
            } else {
                $validatename = strtolower($this->modelname) . '_updatevalid';
                if ($this->form_validation->run($validatename) == TRUE) {
                    $data = $this->input->post();
                    $pk = isset($data['id']) ? $data['id'] : '';
                    if ($pk === '') {
                        $this->output->json(array('error' => 'No pk id'));
                    } else {
                        try {
                            $this->{$this->modelclass}->update($pk, $data, TRUE);
                            $plan = $this->{$this->modelclass}->as_array()->get_by(array('id' => $pk));
                            $this->output->json(array('result' => 'success', 'plan' => $plan));
                        } catch (Exception $err) {
                            $this->output->json($err);
                        }
                    }
                } else {
                    $errors = validation_errors();
                    show_error($errors);
                }
            }
        } else {
            $this->output->json(array('error' => '必须使用post'));
        }
    }

}
