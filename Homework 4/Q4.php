<?php
    abstract class StudentRecord{
        abstract public function calculateGrade();
    }

    class UnderGraduateStudent extends StudentRecord{
        public function calculateGrade(){
            $assignments=70;
            $exams=80;
            $grade=($assignments+$exams)/2;
            echo "Undergraduate grade: ". $grade."<br>";
        }
    }

    class GraduateStudent extends StudentRecord{
        public function calculateGrade(){
            $research=90;
            $exams=80;
            $grade=($research+$exams)/2;
            echo "Graduate grade: ". $grade."<br>";
        }
    }

    $ug=new UnderGraduateStudent();
    $ug->calculateGrade();
    $g=new GraduateStudent();
    $g->calculateGrade();
?>