<?php
if( ! defined('BASEPATH'))  exit('No direct script access allowed'); // BASEPATH путь к корневой папке мы указали в файле config
class Rules_models extends CI_Model
{
    public $reg_rules = array( //reg rules
        array(
            'field' => 'u-email',
            'label' => 'Email',
            'rules' => 'required|max_length[30]|trim|valid_email'
        ),
        array(
            'field' => 'u-pass',
            'label' => 'Password',
            'rules' => 'required|max_length[30]|trim|prep_for_form|encode_php_tags|md5'
        ),
    );
    public $login_rules = array(               //правила для формы авторизации пользывателей
        array(
            'field' => 's-email',
            'label' => 'Email',
            'rules' => 'required|trim|prep_for_form|encode_php_tags'
        ),
        array(
            'field' => 's-pass',
            'label' => 'Password',
            'rules' => 'required|trim|prep_for_form|encode_php_tags'
        )
    );





    public $addcomments_rules = array(
        array(
            'field' => 'desc',
            'label' => '',
            'rules' => 'required|trim|prep_for_form|encode_php_tags'
        )
    );
    public $passback_rules = array(     //правила проверки полей формы вида  passback_view
        array(
            'field' => 'email',
            'label' => '',
            'rules' => 'required|trim|prep_for_form|encode_php_tags|valid_email|max_length[30]'
        ),
        array(
            'field' => 'pass',
            'label' => '',
            'rules' => 'required|trim|prep_for_form|encode_php_tags|min_length[5]|max_length[20]'
        ),
        array(
            'field' => 'pass1',
            'label' => '',
            'rules' => 'required|trim|prep_for_form|encode_php_tags|min_length[5]|max_length[20]'
        )
    );
    public $config_rules = array(       //правила проверки полей формы вида config_view
        array(
            'field' => 'email',
            'label' => '',
            'rules' => 'required|trim|prep_for_form|encode_php_tags|valid_email|max_length[30]'
        ),
        array(
            'field' => 'pass',
            'label' => '',
            'rules' => 'required|trim|prep_for_form|encode_php_tags|min_length[5]|max_length[20]'
        ),
        array(
            'field' => 'pass1',
            'label' => '',
            'rules' => 'required|trim|prep_for_form|encode_php_tags|min_length[5]|max_length[20]'
        )
    );
}