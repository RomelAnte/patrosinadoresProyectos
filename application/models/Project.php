<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Project extends CI_Model {
        function __construct(){
            parent::__construct();
        }

        function getData(){
            $listProject = $this -> db -> get('projects');
            if($listProject -> num_rows() > 0){
                return $listProject -> result();
            }
            else{
                return false;
            }
        }
        
        function insert($data){
            $this -> db -> insert('projects', $data);
        }

        function update($data, $id){
            $this->db->where('ProjectID', $id);
            $this->db->update('projects', $data);
        }
        

        function queryForId($id){
            $this -> db -> where ('ProjectID', $id);
            $project = $this -> db -> get('projects');
            if($project -> num_rows() > 0){
                return $project -> row();
            }else{
                return false;
            }
        }

        function delete($id){
            $this -> db -> where ('ProjectID', $id);
            return $this -> db -> delete('projects');
        }
    }
?>