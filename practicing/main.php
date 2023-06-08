<?php
require_once 'Human.php';
$trung = new human("Nguyễn Thành Trung","19","71",'174');
// $trung -> name ="Nguyễn Thành Trung";
// $trung -> age="19";
// $trung -> address="Hưng  Yên";
$trung ->settName("Nguyễn Văn Trung"); 
// echo $trung->address;
echo $trung ->eat();
echo $trung ->hangout();
echo $trung ->doing();
echo $trung ->getName();

require_once 'Student.php';
$bob = new student("BOB","19","71","174");
$bob->eat();
$bob->settName("Nguyễn Văn Bob");
$bob->doing();
$bob->getName();
$bob->study();
$bob->test();
echo student::$hihi;
student::haha();











?>