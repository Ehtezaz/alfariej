<?php
/**
 * Created by PhpStorm.
 * User: Ehtezaz
 * Date: 5/19/2018
 * Time: 3:09 PM
 */

class Customer_model extends CI_Model
{
    /* Constructor Starts*/
    public function __construct()
    {
        parent::__construct();
    }/* Constructor Ends*/


    /* Add a user data to the database*/
    public function insert_user($data)
    {
        $this->db->insert('customers',$data);
    }/*Add Ends*/


    /* Get users_records table(data) from database*/
    public function show_list_informaton()
    {
        $query = $this->db->get('customers');
        return $query;
    }/* show_list_informaton Ends*/


    /* Delete user from the database*/
    public function delete_user($id)
    {
        $this->db->delete('customers',array('id'=>$id));
    }/* delete_user Ends*/


    /* update user of selected id from the database*/
    public function update_user($data,$id)
    {
        $this->db->update('customers', $data, array('id'=>$id));
    }/* update user Ends*/


    /* get the row(by name) from users_records table */
    public function get_data_by_name($name)
    {
        $this->db->select("*");
        $this->db->where('user_name',$name);
        $this->db->from('customers');

        $query = $this->db->get();
        $result = $query->row_array();
        return $result;
    }/* get_data_by_name Ends*/


    /* get the row(by id) from users_records table */
    public function get_data_by_id($id)
    {
        $this->db->select("*");
        $this->db->where('id',$id);
        $this->db->from('customers');

        $query = $this->db->get();
        $result = $query->row_array();
        return $result;
    }/* get_data_by_id Ends*/


}