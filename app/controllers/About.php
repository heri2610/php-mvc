<?php

class About extends Controller{
    public function index(){
        $data['judul']= 'about';
         $this->view('template/header', $data);
         $this->view('about/index');
         $this->view('template/footer');
    } 
}