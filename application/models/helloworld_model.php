<?php
class Helloworld_model extends CI_Model {
 
    function Helloworld_model()
    {
            
        // Call the Model constructor
        // parent::Model();
             


    } 


    function getData()
        {

            //Query the data table for every record and row
             
            $query = $this->db->query("SELECT * FROM data;");

            //echo print_r($query);
           // $query = $this->db->query("data"); 
             
            if ($query->num_rows() > 0)
            {

                /*foreach ($query->result() as $row)
                {
                        echo $row->title; 
                        echo $row->text;
                }
                */
                
                 return $query->result(); 
               // echo print_r($query->result());
                //show_error('Database is empty!');
            }else{
                 
                return $query->result();
            }
            
        }
 
}
?>