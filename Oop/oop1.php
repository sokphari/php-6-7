<?php
    //data member 
    //constructure
    //method
    class User{
        //data member
        private $name;
        private $gender;
        private $email;
        private $password;
        public function __construct($name,$gender,$email,$password){
            $this->name = $name;
            $this->gender = $gender;
            $this->email = $email;
            $this->password = $password;
            
        }
        public function Display(){
            echo $this->name;
            echo $this->gender;
            echo $this->email;
            echo $this->password;

        }
        
    }
    $user = new User("sokphari","male","sokphari123@gmail.com","12345");
    echo $user->Display();
?>