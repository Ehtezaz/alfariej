<?php
/**
 * Created by PhpStorm.
 * User: Ehtezaz
 * Date: 5/7/2018
 * Time: 1:28 PM
 */

class Canvasjs_model extends CI_Model
{   /* Constructor Starts*/
    public function __construct()
    {
        parent::__construct();
    }/* Constructor Ends*/

    public function get_data()
    {
//        $this->db->select("*");
//        $this->db->from('fruits');
        $query = $this->db->get('fruits');
        if($query->num_rows() > 0)
        {
            return $query->result_array();;
        }
        else
        {
            return 0;
        }
    }/* get_data_by_name Ends*/

}