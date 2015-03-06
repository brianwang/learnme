<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of form_validation
 *
 * @author Administrator
 */
$config = array(
    'plan_valid' => array(
        array(
            'field' => 'title',
            'label' => '学习计划名称',
            'rules' => 'required'
        ),
        array(
            'field' => 'content',
            'label' => '计划内容',
            'rules' => 'required'
        ),
        array(
            'field' => 'author',
            'label' => '创始人信息',
            'rules' => 'required'
        ),
        array(
            'field' => 'tags',
            'label' => '标签内容',
            'rules' => 'required'
        ),
    ),
    'step_valid' => array(
        array(
            'field' => 'plan_id',
            'label' => '计划名称',
            'rules' => 'required'
        ),
        array(
            'field' => 'title',
            'label' => '标题',
            'rules' => 'required'
        ),
        array(
            'field' => 'idx',
            'label' => '索引',
            'rules' => 'required'
        ),
    ),
    'register' => array(
        array(
            'field' => 'email',
            'label' => '邮箱/用户名/密码',
            'rules' => 'required'
        ),
        array(
            'field' => 'password',
            'label' => '密码',
            'rules' => 'required'
        ),
        array(
            'field' => 'confirm_password',
            'label' => '确认密码',
            'rules' => 'required'
        ),
    ),
    'login' => array(
        array(
            'field' => 'email',
            'label' => '邮箱/用户名/密码',
            'rules' => 'required'
        ),
        array(
            'field' => 'password',
            'label' => '密码',
            'rules' => 'required'
        )
    )
);
