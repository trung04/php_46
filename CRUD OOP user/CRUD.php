<?php
class database{
    var $localHost="localhost";
    var $userName="root";
    private $password="";
    var $database="php_46";
    protected $conn;
    public function __construct()
    {
        $this->connect();
    }

    public function connect()
    {
        $this->conn=new mysqli($this->localHost,$this->userName,$this->password,$this->database);
        if($this->conn->connect_error){
            echo "kết nối thất bại";
        }
    }
    //lấy province từ bảng provinces 
    public function getProvince()
    {
        $sql="SELECT * FROM provinces";
        $result=$this->conn->query($sql);
        if($result->num_rows>0){
            while($row=$result->fetch_assoc()){
                $data[]=$row;
            }
            return $data;
        }
    }
    //lấy thông dữ liệu
    public function getData()
    {
        $sql="SELECT users.id as user_id,users.full_name,users.age,provinces.id as province_id,provinces.name FROM users INNER JOIN provinces on users.province_id=provinces.id";
        $result=$this->conn->query($sql);
        if($result->num_rows>0){
            while($row=$result->fetch_assoc()){
                $data[]=$row;
            }
            return $data;
        }
    }
    // xóa dữ liệu 
    public function delete($id)
    {
        $sql="DELETE FROM users where id='$id'";
        $result=$this->conn->query($sql);
    }
    // nhập dữ liệu
    public function insert($post)
    {
        $name=$_POST['full_name'];
        $age=$_POST['age'];
        $provinceId=$post['province_id'];
        $sql="INSERT INTO users(full_name,age,province_id) VALUES ('".$name."','".$age."','".$provinceId."')";
        $result=$this->conn->query($sql);
    }
    //lấy thông tin của người dùng bằng id
    public function getUserById($id)
    {
        $sql="SELECT * FROM users where id='$id'";
        $result=$this->conn->query($sql);
        if($result->num_rows==1){
            $row=$result->fetch_assoc();
            return $row;
        }
    }
    // update thong tin của người dùng
    public function update($post){
        $name=$_POST['full_name'];
        $age=$_POST['age'];
        $provinceId=$_POST['province_id'];
        $id=$_POST['hid'];
        $sql="UPDATE users set full_name='".$name."',age='".$age."',province_id='".$provinceId."' where id='$id'";
        $result=$this->conn->query($sql);
        if($result){
            header('location:index.php');
        }

    }
    
    


}




?>