<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Sponsors extends CI_Controller{
        public function __construct(){
            parent::__construct();

            $this -> load -> model('Sponsor');
        }

        public function index(){
            $data['sponsors'] = $this -> Sponsor -> getData();

            $this -> load -> view('header');
            $this -> load -> view('Sponsors/index', $data);
            $this -> load -> view('footer');
        }

        public function add(){
            $this -> load -> view('header');
            $this -> load -> view('Sponsors/newSponsor');
            $this -> load -> view('footer');
        }

        public function save(){
            $data = array(
                'Name' => $this -> input -> POST('name'),
                'Contact' => $this -> input -> POST('contact'),
                'Email' => $this -> input -> POST('email'),
                'Phone' => $this -> input -> POST('phone')
            );	
            $this -> Sponsor -> insert($data);
            redirect('Sponsors/index');
        }

        public function getRegisterById($id){
            $data['sponsor'] = $this -> Sponsor -> queryForId($id);

            $this -> load -> view('header');
            $this -> load -> view('Sponsors/updateSponsor', $data);
            $this -> load -> view('footer');
        }

        public function update(){
            $data = array(
                'Name' => $this -> input -> POST('name'),
                'Contact' => $this -> input -> POST('contact'),
                'Email' => $this -> input -> POST('email'),
                'Phone' => $this -> input -> POST('phone')
            );

            $id = $this-> input -> POST('id');

            $this -> Sponsor -> update($data, $id);
            redirect('Sponsors/index');
        }

        public function delete($id){
            if ($this -> Sponsor -> delete($id)){
                redirect('Sponsors/index');
            }
            else{
                echo "Error al eliminar";
            }
        }
    }
?>