<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Homes extends CI_Controller{
        public function __construct(){
            parent::__construct();
        }

        public function index(){
            $this -> load -> view('header');
            $this -> load -> view('Homes/index');
            $this -> load -> view('footer');
        }
    }
?>