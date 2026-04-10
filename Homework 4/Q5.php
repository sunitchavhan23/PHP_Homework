<?php
interface CourseActions {
    public function enroll();
    public function drop();
    public function completeCourse();
}
class OnlineCourse implements CourseActions {
    public function enroll() {
        echo "Enrolled in online course<br>";
    }
    public function drop() {
        echo "Dropped online course<br>";
    }
    public function completeCourse() {
        echo "Completed online course<br>";
    }
}
class InPersonCourse implements CourseActions {
    public function enroll() {
        echo "Enrolled in in-person course<br>";
    }
    public function drop() {
        echo "Dropped in-person course<br>";
    }
    public function completeCourse() {
        echo "Completed in-person course<br>";
    }
}

$online = new OnlineCourse();
$online->enroll();
$online->completeCourse();
echo "<br>";
$offline = new InPersonCourse();
$offline->enroll();
$offline->drop();
$offline->completeCourse();

?>
