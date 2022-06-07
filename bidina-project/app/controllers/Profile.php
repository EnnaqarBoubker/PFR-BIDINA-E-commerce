<?php 

    class Profile extends Controller{

        public function __construct(){
            $this -> userModel = $this -> model('User');
        }

        public function profile(){

            $data = [
              'title' => 'formulaire Edite product',
            ];
      
            $this -> view('profile/profile', $data);

            $data['getdata'] = $this -> userModel -> findUserByEmailAndReturnUserData($_SESSION['user-email']);
          }
    }
