<?php

    class DashboardAdmin extends Controller{

        public function __construct(){
            # code...
        }


        public function dashAdm(){

            $data = [
              'title' => 'dashAdmin',
            ];
      
            $this -> view('dashboardAdmin/dashAdm', $data);
          }
        public function dashProd(){
      
            $data = [
              'title' => 'dashproduct',
            ];
      
            $this -> view('dashboardAdmin/dashProd', $data);
          }
        public function dashAdmUse(){
      
            $data = [
              'title' => 'dashboard Admin User',
            ];
      
            $this -> view('dashboardAdmin/dashAdmUse', $data);
          }
        public function addProd(){
      
            $data = [
              'title' => 'formulaire add product',
            ];
      
            $this -> view('dashboardAdmin/addProd', $data);
          }
        public function editeProd(){
      
            $data = [
              'title' => 'formulaire Edite product',
            ];
      
            $this -> view('dashboardAdmin/editeProd', $data);
          }
    }