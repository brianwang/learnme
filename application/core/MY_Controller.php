<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of BaseController
 *
 * @author Administrator
 */
class BaseController extends CI_Controller {
    //put your code here
}

class ModelController extends BaseController {

    protected $modelname = '';
    protected $modelclass = '';

    //put your code here

    public function __construct() {
        parent::__construct();
        if ($this->modelname == '') {
            $this->modelname = get_class($this);
        }
        $this->modelclass = ucfirst($this->modelname) . 'Model';
        $this->load->model($this->modelclass);
    }

    //添加计划
    public function add() {
        if ($this->input->is_post()) {
            $validatename = strtolower($this->modelname . '_valid');
            if ($this->form_validation->run($validatename) == TRUE) {
                $data = $this->input->post();
                $data = $this->{$this->modelclass}->insert($data, true);
                $this->output->json(array('result' => 'success'));
            } else {
                $errors = validation_errors();
                $this->output->json($errors);
            }
        } else {
            $this->output->json(array('error' => '必须使用post'));
        }
    }

    public function get($id = null) {
        if ($id == NULL) {
            show_404('不存在');
        } else {
            try {
                $data = $this->{$this->modelclass}->get($id);
                $this->output->json($data);
            } catch (Exception $err) {
                $this->output->json($err);
                return;
            }
        }
    }

    public function remove($id = null) {
        if ($id == null) {
            $this->output->json(array('error' => 'No pk id'));
        } else {
            $this->{$this->modelclass}->delete($id);
            $this->output->json(array('result' => 'success'));
        }
    }

    public function update() {
        if ($this->input->is_post()) {
            if ($this->modelname == '') {
                show_error('$modelname is wrong');
            } else {
                $validatename = strtolower($this->modelname . '_valid');
                if ($this->form_validation->run($validatename) == TRUE) {
                    $data = $this->input->post();
                    $pk = isset($data['id']) ? $data['id'] : '';
                    if ($pk === '') {
                        $this->output->json(array('error' => 'No pk id'));
                    } else {
                        try {
                            $this->{$this->modelclass}->update($data, $pk);
                            $this->output->json(array('result' => 'success'));
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
