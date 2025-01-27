<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Projects extends CI_Controller{
        public function __construct(){
            parent::__construct();

            $this -> load -> model('Project');
        }

        public function index(){
            $data['projects'] = $this -> Project -> getData();

            $this -> load -> view('header');
            $this -> load -> view('Projects/index', $data);
            $this -> load -> view('footer');
        }

        public function add(){
            $this -> load -> view('header');
            $this -> load -> view('Projects/newProject');
            $this -> load -> view('footer');
        }	 	 	 	 	

        public function save(){
            $data = array(
                'Name' => $this -> input -> POST('name'),
                'Description' => $this -> input -> POST('description'),
                'Responsible' => $this -> input -> POST('responsible'),
                'StartDate' => $this -> input -> POST('startDate'),
                'EndDate' => $this -> input -> POST('endDate')
            );	
            $this -> Project -> insert($data);
            redirect('Projects/index');
        }

        public function getRegisterById($id){
            $data['project'] = $this -> Project -> queryForId($id);

            $this -> load -> view('header');
            $this -> load -> view('Projects/updateProject', $data);
            $this -> load -> view('footer');
        }

        public function update(){
            $data = array(
                'Name' => $this -> input -> POST('name'),
                'Description' => $this -> input -> POST('description'),
                'Responsible' => $this -> input -> POST('responsible'),
                'StartDate' => $this -> input -> POST('startDate'),
                'EndDate' => $this -> input -> POST('endDate')
            );

            $id = $this-> input -> POST('id');

            $this -> Project -> update($data, $id);
            redirect('Projects/index');
        }

        public function delete($id){
            if ($this -> Project -> delete($id)){
                redirect('Projects/index');
            }
            else{
                echo "Error al eliminar";
            }
        }
    }
?>