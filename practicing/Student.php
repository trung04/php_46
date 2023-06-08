<?php
require_once 'human.php';
class student extends human{
    static $hihi = "Luan";
    static function haha()
    {
        echo "haha";
    }
        protected $studentId;
    private $studentClassName;
    public function getStudentClassName()
    {
        return $this->studentClassName;
    }
    function study(){
        echo $this->name." study";
    }
    function test(){
        $this ->study();
    }

}







?>