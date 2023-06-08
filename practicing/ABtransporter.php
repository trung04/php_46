<?php
abstract class ABtransporter{
    private $transporterType;
    private $transporterName;
    public function getTransporterType(){
        return $this->transporterType;
    }
    public function setTransporterType($transporterType){
        return $this->transporterType=$transporterType;
    }
    public function getTransporterName()
    {
        return $this->transporterName;
    }
    public function setTranSporterName($transporterName){
        return $this->transporterName=$transporterName;
    }
    public function start(){
        echo $this->transporterName." bắt đầu chạy";
    }
    public abstract function stop();

}





?>