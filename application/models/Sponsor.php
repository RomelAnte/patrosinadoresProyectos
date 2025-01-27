<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Sponsor extends CI_Model {
        function __construct(){
            parent::__construct();
        }

        function getData(){
            $listSponsor = $this -> db -> get('sponsor');
            if($listSponsor -> num_rows() > 0){
                return $listSponsor -> result();
            }
            else{
                return false;
            }
        }

        function insert($data){
            $this -> db -> insert('sponsor', $data);
        }

        function update($data, $id){
            $this->db->where('IDSponsor', $id);
            $this->db->update('sponsor', $data);
        }
        

        function queryForId($id){
            $this -> db -> where ('IDSponsor', $id);
            $sponsor= $this -> db -> get('sponsor');
            if($sponsor -> num_rows() > 0){
                return $sponsor->row();
            }else{
                return false;
            }
        }

        function delete($id){
            $this -> db -> where ('IDSponsor', $id);
            return $this -> db -> delete('sponsor');
        }
    }
?>