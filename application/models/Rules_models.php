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
    public $append_goods = array(     //validate add new goods data
        array(
            'field' => 'm_p_city',
            'label' => 'City',
            'rules' => 'required|max_length[60]|trim|prep_for_form|encode_php_tags'
        ),
        array(
            'field' => 'm_p_region',
            'label' => 'Region',
            'rules' => 'required|max_length[60]|trim|prep_for_form|encode_php_tags'
        ),
        array(
            'field' => 'm_p_brand',
            'label' => 'Car brand',
            'rules' => 'required|max_length[60]|trim|prep_for_form|encode_php_tags'
        ),
        array(
            'field' => 'm_p_model',
            'label' => 'Car model',
            'rules' => 'required|max_length[60]|trim|prep_for_form|encode_php_tags'
        ),
        array(
            'field' => 'm_p_capacity',
            'label' => 'Engine capacity',
            'rules' => 'required|max_length[60]|trim|prep_for_form|encode_php_tags'
        ),
        array(
            'field' => 'm_p_mileage',
            'label' => 'Mileage',
            'rules' => 'required|max_length[50]|trim|prep_for_form|encode_php_tags'
        ),
        array(
            'field' => 'm_p_owners',
            'label' => 'Number of owners',
            'rules' => 'required|max_length[50]|trim|prep_for_form|encode_php_tags'
        ),
    );
}