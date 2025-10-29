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
           echo "
            <h2>$this->name</h2><br>
            <h2>$this->gender</h2><br>
            <h2>$this->email</h2><br>
            <h2>$this->password</h2>
            ";
        }
    }
    // $user = new Userr($name,$gender,$email,$password);
?>