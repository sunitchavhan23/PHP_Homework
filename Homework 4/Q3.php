<?php
    class Student{
        public $id;
        public $name;
        public $grade;

        public function __construct($id,$name,$grade){
            $this->id=$id;
            $this->name=$name;
            $this->grade=$grade;
        }

        function displayDetails(){
            echo "$this->id"."<br>";
            echo "$this->name"."<br>";
            echo "$this->grade";
        }
    }

    $student=new Student(23,"SUNIT","A+");
    $student->displayDetails();

?>