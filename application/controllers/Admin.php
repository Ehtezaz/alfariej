<?php
/**
 * Created by PhpStorm.
 * User: Ehtezaz
 * Date: 04/12/2018
 * Time: 9:51 PM
 */
defined('BASEPATH') OR exit('No direct script access allowed');

/* @class Admin
 * @extends CI_Controller
 * @numbers_of_functions five
 * */
class Admin extends CI_Controller
{
    /* @function __construct(Constructor)
     * @load admin_model
     * */
    public function __construct()
    {
        parent::__construct();
        $this->load->model('admin_model');
//        echo '<pre>'; print_r($this->session->all_userdata()); exit;
        if (!$this->session->userdata('logged_in')) {
            redirect('home');
        }
    } /*Constructor Ends*/

    /* @function index
     * 1. check the logged_in session(newdata)
     * 2. if true -> admin home
     * 3. if false -> back to Home page(main)
     * */
    public function index()
    {
        $this->load->view('admin/include/header');
        $this->load->view('admin/dashboard');
        $this->load->view('admin/include/footer');

    }/* Index Ends*/



    /* @function logout
     * @session_destroy logged_in
     * @redirect admin or @load admin(admin home page)
     * */
    public function logout()
    {
        $new_data = array('fname', 'lname', 'email', 'logged_in');
        $this->session->unset_userdata($new_data);
        redirect('home');
    }/* Logout Ends*/

    /* @function signin
     * @load admin/login
     * */
    public function signin()
    {
        $this->load->view('home');
    }/* Sign-In Ends*/

}// Admin Class Ends