<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Market extends CI_Controller
{
    public function cars()
    {
        /*
        if (!isset($_SESSION['user'])) {        //has access to only the role == 2
            redirect('', 'refresh');
        }
        if ($_SESSION['user']['role'] == 1) {    //has access to only the role == 2
            redirect('', 'refresh');
        }
        if (isset($_POST['admin_logout'])) {     //logout condition
            unset($_SESSION['user']);
            redirect('', 'refresh');
        }
        */
        //$dara = array to send data in the view
        $data['empty_data'] = 'change in the future';
        $data['market_header'] = $this->load->view('layout/header', $data, true); //load view header and send some data to header (if needed in the future)
        $data['market_footer'] = $this->load->view('layout/footer', $data, true); //load admin view footer
        $data['market_modal'] = $this->load->view('layout/modal',$data, true); //load modal window layout
        if (isset($_POST['order_filter_button'])) {             //if isset filter data
            $this->load->model('rules_model');
            $this->form_validation->set_rules($this->rules_model->filter_orders_data); //load validation ruls
            $check = $this->form_validation->run();  //validate form data
            if ($check == true) {
                $_POST['order_id'] = preg_replace("/\D/", '', $_POST['order_id']);         //only numbers
                $_POST['filter_total'] = preg_replace("/\D/", '', $_POST['filter_total']); //only numbers
                $result_filter_data = array_filter($_POST);
                $order_price = array();                                 //array to the order price cell
                if (array_key_exists('filter_total', $result_filter_data)) {  //if isset an element of the array with key "filter_total" -  we cut out them and move to another array, for database query
                    $order_price['sum'] = $result_filter_data['filter_total'];
                    unset($result_filter_data['filter_total']);



                    $this->load->model('orders_model');



                    //pagination config
                    $config['base_url'] = 'http://localhost/bogdan/STORE/sales/orders';
                    $config['total_rows'] = $this->db->count_all('orders');        // all database table count
                    $config['per_page'] = '10';                                    //rows in one page
                    $config['full_tag_open'] = '<nav><ul style="margin: 0px;padding-right:10px;float: right " class="pagination">'; //start teg
                    $config['full_tag_close'] = '</ul></nav>';                                                                      //end teg
                    $config['prev_link'] = '&lt; Prev';
                    $config['prev_tag_open'] = '<li>';
                    $config['prev_tag_close'] = '</li>';
                    $config['next_link'] = 'Next &gt;';
                    $config['next_tag_open'] = '<li>';
                    $config['next_tag_close'] = '</li>';
                    $config['cur_tag_open'] = '<li class="active"><a href="#">';
                    $config['cur_tag_close'] = '</a></li>';
                    $config['num_tag_open'] = '<li>';
                    $config['num_tag_close'] = '</li>';
                    $config['first_link'] = FALSE;
                    $config['last_link'] = FALSE;
                    $config['uri_segment'] = 3;
                    $page = ($this->uri->segment(3, 0)) ? $this->uri->segment(3, 0) : 0;
                    $this->pagination->initialize($config);                                        //load pagination
                    $data['user_orders'] = $this->orders_model->filter_data($result_filter_data, $order_price, $config['per_page'], $page);//send data to method select_order
                    $data['links'] = $this->pagination->create_links();                            //variable 'links' send pagination config
                    // end pagination config
                    $this->load->view('market/cars', $data);             //load page view
                } else {
                    $this->load->model('orders_model');
                    //pagination config
                    $config['base_url'] = 'http://localhost/bogdan/STORE/sales/orders';
                    $config['total_rows'] = $this->db->count_all('orders');        // all database table count
                    $config['per_page'] = '10';                                    //rows in one page
                    $config['full_tag_open'] = '<nav><ul style="margin: 0px;padding-right:10px;float: right " class="pagination">'; //start teg
                    $config['full_tag_close'] = '</ul></nav>';                                                                      //end teg
                    $config['prev_link'] = '&lt; Prev';
                    $config['prev_tag_open'] = '<li>';
                    $config['prev_tag_close'] = '</li>';
                    $config['next_link'] = 'Next &gt;';
                    $config['next_tag_open'] = '<li>';
                    $config['next_tag_close'] = '</li>';
                    $config['cur_tag_open'] = '<li class="active"><a href="#">';
                    $config['cur_tag_close'] = '</a></li>';
                    $config['num_tag_open'] = '<li>';
                    $config['num_tag_close'] = '</li>';
                    $config['first_link'] = FALSE;
                    $config['last_link'] = FALSE;
                    $config['uri_segment'] = 3;
                    $page = ($this->uri->segment(3, 0)) ? $this->uri->segment(3, 0) : 0;
                    $this->pagination->initialize($config);                                        //load pagination
                    $data['user_orders'] = $this->orders_model->filter_data($result_filter_data, $order_price, $config['per_page'], $page);//send data to method select_order
                    $data['links'] = $this->pagination->create_links();                            //variable 'links' send pagination config
                    // end pagination config
                    $this->load->view('market/cars', $data);             //load page view
                }
            } else {
                echo validation_errors();
                $this->load->view('market/cars', $data);             //load page view
                    
            }
        } else {  //if !isset filter - load default orders data

            //ДОБАВИТЬ ВЫВОД ЗАЯВОК

            //$this->load->model('orders_model');



            //pagination config
            $config['base_url'] = 'http://localhost/bogdan/STORE/sales/orders';
            $config['total_rows'] = $this->db->count_all('orders');        // all database table count
            $config['per_page'] = '10';                                    //rows in one page
            $config['full_tag_open'] = '<nav><ul style="margin: 0px;padding-right:10px;float: right " class="pagination">'; //start teg
            $config['full_tag_close'] = '</ul></nav>';                                                                      //end teg
            $config['prev_link'] = '&lt; Prev';
            $config['prev_tag_open'] = '<li>';
            $config['prev_tag_close'] = '</li>';
            $config['next_link'] = 'Next &gt;';
            $config['next_tag_open'] = '<li>';
            $config['next_tag_close'] = '</li>';
            $config['cur_tag_open'] = '<li class="active"><a href="#">';
            $config['cur_tag_close'] = '</a></li>';
            $config['num_tag_open'] = '<li>';
            $config['num_tag_close'] = '</li>';
            $config['first_link'] = FALSE;
            $config['last_link'] = FALSE;
            $config['uri_segment'] = 3;
            $page = ($this->uri->segment(3, 0)) ? $this->uri->segment(3, 0) : 0;
            $this->pagination->initialize($config);                                        //load pagination
            $data['all_orders'] = $this->db->count_all('orders');        // all database table count


            //$data['user_orders'] = $this->orders_model->select_order($config['per_page'], $page);//send data to method select_order
            //$data['links'] = $this->pagination->create_links();                            //variable 'links' send pagination config



            // end pagination config
            if (isset($_GET['order'])) { //if click button view order ('#order-view-')
                $order_id = (int)$_GET['order'];
                $data['order_view'] = $this->orders_model->view_order($order_id);                 //send order details array to view
                $data['order_view_product'] = $this->orders_model->view_order_product($order_id); //send all order product array to view
                $this->load->view('market/cars', $data);             //load page view
            } else {
                $this->load->view('market/cars', $data);             //load page view
            }
        }
    }
    public function registration_user() {        //registr user
        if (isset($_POST['u-email'])) {
            $this->load->model('registr_model'); //load model
            $this->load->model('rules_models'); //load model rules
            $this->form_validation->set_rules($this->rules_models->reg_rules);
            $check = $this->form_validation->run();
            if ($check == TRUE) {
                $email = $this->input->post('u-email');
                $data1 = $this->registr_model->check_email($email); //check email
                if (!empty($data1)) {
                    $this->session->set_flashdata('message', 'Email already busy');
                    redirect('', 'refresh');
                }
                $add['email'] = $this->input->post('u-email');
                $add['pass'] = $this->input->post('u-pass');
                $this->db->insert('authorization', $add);

                $this->session->set_flashdata('message', 'Congratulations you have successfully registered');

                   // $this->load->view('registration_view');
                redirect('', 'refresh');

            } else {
                $this->session->set_flashdata('message', validation_errors());
                redirect('', 'refresh');
            }
        } else {
            //redirect('Market/cars', 'refresh');
        }
    }
    public function authorization_user() {        //registr user
        
    }
}