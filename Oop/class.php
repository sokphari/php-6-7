<?php
   class Userr{
        protected $name;
        protected $gender;
        protected $email;
        protected $password;
        public function __construct($name,$gender,$email,$password){
            $this->name = $name;
            $this->gender = $gender;
            $this->email = $email;
            $this->password = $password;
        }
        public function OutputData(){
           echo $this->name; echo "<br>";
           echo $this->gender; echo "<br>";
           echo $this->email; echo "<br>";
           echo $this->password;
        }
    }
    // $user = new Userr($name,$gender,$email,$password);
?>