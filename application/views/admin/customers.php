<?php
/**
 * Created by PhpStorm.
 * User: Ehtezaz
 * Date: 5/15/2018
 * Time: 1:40 PM
 */

defined('BASEPATH') OR exit('No direct script access allowed');

/* @class Users
 * @extends CI_Controller
 * @numbers_of_functions seven
 * */
class Users extends CI_Controller
{
    /* @function __construct(Constructor)
     * @param
     * @load user_model
     * @session logged_in(newdata)(if false -> back to login(signin page))
     * */
    public function __construct()
    {
        parent::__construct();
        $this->load->model('user_model');
        if(!$this->session->userdata('logged_in'))
        {
            $this->load->view('admin/signin');
        }
    } /*Constructor Ends*/

    /* @function index
     * @load users/listing
     * */
    public function index()
    {
        $data['show'] = $this->user_model->show_list_informaton();
        $this->load->view('admin/include/header');
        $this->load->view('users/listing', $data);
        $this->load->view('admin/include/footer');
    }/* Index Ends*/

    /* @function create
     * @param
     * @load users/add(adding new user)
     * */
    public function create()
    {
        $this->load->view('admin/include/header');
        $this->load->view('users/add');
        $this->load->view('admin/include/footer');
    }/* Add new User Ends */

    /* @function ajax_save
     * @param
     * @return $my_json_text(json object or echo $my_json_text)
     * 1. create an array of data
     * 2. insert data into database(insert_user)
     * 3. return json text
     * */
    public function ajax_save()
    {
        /* user data array to send in database */
        $data = array(
            'user_name' => $this->input->post('uname'),
            'email' => $this->input->post('email'),
            'password' => $this->input->post('password')
        );
        $this->user_model->insert_user($data);
        $my_json_text = json_encode($data);
        echo $my_json_text;
    }/*  add_user Ends*/

    /* @function delete
     * @param id
     * @redirect users or @load users
     * 1. Delete the data(row) of the given id from the database.
     * */
    public function delete($id)
    {
        $this->user_model->delete_user($id);
        redirect('users');
    }/* Delete User Ends*/

    /* @function update
     * @param id
     * @load users/update
     * */
    public function update($id)
    {
        $data['result'] = $this->user_model->get_data_by_id($id);
        $data['id'] = $id;

        $this->load->view('admin/include/header');
        $this->load->view('users/update',$data);
        $this->load->view('admin/include/footer');
    }/* update User Ends*/

    /* @function edit
     * return $my_json_text
     * 1. create an array of data
     * 2. Update data into database(update_user)
     * 3. return json text($my_json_text)
     * */
    public function edit()
    {   /* user data array to send in database */
        $data = array(
            'user_name' => $this->input->post('uname'),
            'email' => $this->input->post('email'),
            'password' => $this->input->post('password')
        );
        $id = $this->input->post('user_id');
        $this->user_model->update_user($data,$id);
        $result['type'] = "success";
        $result{'data'} = $data;
        $result['message'] = "Updated successfully!";
        $my_json_text = json_encode($result);
        echo $my_json_text;
    }/* Edit User Ends*/
}