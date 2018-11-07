<?php
/**
 * Created by PhpStorm.
 * User: Ehtezaz
 * Date: 3/9/2018
 * Time: 12:27 PM
 */
class Home_model extends CI_Model
{   /* Constructor Starts*/
    public function __construct()
    {
        parent::__construct();
    }/* Constructor Ends*/

    public function get_data_by_name($admin_email)
    {
        $this->db->select("*");
        $this->db->where('admin_email',$admin_email);
        $this->db->from('admin');

        $query = $this->db->get();
        if($query->num_rows() == 1)
        {
            return $query->row_array();
        }
        else
        {
            return 0;
        }
    }/* get_data_by_name Ends*/

}