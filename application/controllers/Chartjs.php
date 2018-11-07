<?php
/**
 * Created by PhpStorm.
 * User: Ehtezaz
 * Date: 5/3/2018
 * Time: 11:11 AM
 */
defined('BASEPATH') OR exit('No direct script access allowed');

/* @class Admin
 * @extends CI_Controller
 * @numbers_of_functions five
 * */

class Chartjs extends CI_Controller
{
    /* @function __construct(Constructor)
     * @load admin_model
     * */
    public function __construct()
    {
        parent::__construct();
        $this->load->model('chartjs_model');
//        echo '<pre>'; print_r($this->session->all_userdata()); exit;
//        if (!$this->session->userdata('logged_in')) {
//            redirect('home');
//        }
    } /*Constructor Ends*/

    /* @function index
     * 1. check the logged_in session(newdata)
     * 2. if true -> admin home
     * 3. if false -> back to Home page(main)
     * */
    public function index()
    {
        $this->load->view('admin/include/header');
        $this->load->view('chartjs');
        $this->load->view('admin/include/footer');

    }/* Index Ends*/


    public function show_chart()
    {

        $data = $this->chartjs_model->get_data();
//        echo '<pre>'; print_r($data['result']); exit;
        echo json_encode($data);
    }
}