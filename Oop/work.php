<?php
    include ("interface.php");
    include ("Userr.php");
    class Work extends Userr implements Tax{
        //data member 
        protected $position;
        protected $salary;

        //constructure
        public function __construct($name, $gender, $email, $password,$position,$salary){
            // parent::__construct($name,$gender,$email,$password);
            $this->name = $name;
            $this->gender = $gender;
            $this->email = $email;
            $this->password = $password;
            $this->salary = $salary;
            $this->position = $position;

        }
        //method
        public function Display(){
            parent::OutputData();
            echo"
                <h2>Salary:$this->salary</h2>
                <h2>Position:$this->position</h2>
            ";
            
        }
        public function tax(){
            return $this->salary*0.1;
        }
        public function income(){
            return $this->salary - $this->tax();
        }
    }
    $work = new Work("Thearo","male","vichai@gmail.com","123456","Web developer","1200");
    $work->Display();
    echo "This is your Salary :" . $work->income();
?>
