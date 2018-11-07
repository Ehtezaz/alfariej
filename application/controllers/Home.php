<?php
/**
 * Created by PhpStorm.
 * User: Ehtezaz Ahmed
 * Date: 04/12/2018
 * Time: 9:51 PM
 */
defined('BASEPATH') OR exit('No direct script access allowed');

/* @class Home
 * @extends CI_Controller
 * @numbers_of_functions two
 * */
class Home extends CI_Controller
{
    /* @function __construct(Constructor)
     * @load admin_model
     * */
    public function __construct()
    {
        parent::__construct();
        $this->load->model('home_model');
//        echo '<pre>'; print_r($this->session->all_userdata()); exit;

    } /*Constructor Ends*/

    /* @function index
     * @load dashboard.php
     * */
    public function index()
    {
        $this->load->view('home');
    }

    /* @function login
     * @database tailor_db
     * @database_table admin
     * @load admin_model
     * @session logged_in(new_data)
     * @ajax_var result[type, message]
     */
    public function login()
    {
        $admin_email = $this->input->post('admin_email');
        $admin_password = $this->input->post('admin_password');
        $data = $this->home_model->get_data_by_name($admin_email);
        if ($admin_email == $data['admin_email'] && $admin_password == $data['admin_password']) {
            $new_data = array(
                'fname' => $data['admin_fname'],
                'lname' => $data['admin_lname'],
                'email' => $data['admin_email'],
                'logged_in' => TRUE
            );
            $this->session->set_userdata($new_data);
            $result['type'] = "success";
            $result['message'] = "Logged in successfully!";
            $response = json_encode($result);
            echo $response;
            exit;
        } else {
            $result['type'] = "error";
            $result['message'] = "Login Failed, Please enter correct emial or password";
            $response = json_encode($result);
            echo $response;
            exit;
        }
    } /*Login Ends*/

}