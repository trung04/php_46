<?php
require_once 'CRUD.php';
$obj= new database();
if(isset($_GET['id'])){
  $id=$_GET['id'];
  $obj->delete($id);
}
if(isset($_POST['submit'])){
  $obj->insert($_POST);
}
if(isset($_POST['update'])){
  $obj->update($_POST);
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
</head>

<body>
    <?php
  if(isset($_GET['add_id'])){
    $add_id=$_GET['add_id'];
    $blackList=$obj->getUserById($add_id); 
  ?>
    <form method="post">
        <label for="full_name">Họ Tên</label>
        <input type="text" name="full_name" value="<?php echo $blackList['full_name'];?>" />
        <label for="age">Tuổi</label>
        <input type="text" name="age" value="<?php echo $blackList['age'];?>" />
        <select name="province_id">
            <?php 
          $data=$obj->getProvince();
          foreach($data as $key){
          ?>
            <option value="<?php echo $key['id']?>" name="province_id"><?php echo $key['name']?></option>
            <?php
          }
          ?>
        </select>
        <input type="hidden" name="hid" value="<?php echo $blackList['id'];?>" />
        <button type="submit" name="update">Update</button>
        <?php
  }
  else{
  ?>
        <form method="post">
            <label for="full_name">Họ Tên</label>
            <input type="text" name="full_name" />
            <label for="age">Tuổi</label>
            <input type="text" name="age" />
            <select name="province_id">
                <?php 
          $data=$obj->getProvince();
          foreach($data as $key){
          ?>
                <option value="<?php echo $key['id']?>" name="province_id"><?php echo $key['name']?></option>
                <?php
          }
          ?>
            </select>
            <button type="submit" name="submit">submit</button>
        </form>
        <?php
  }
    
    ?>
        <br>
        <h1>Danh sách thông tin người dùng</h1>
        <table border="1">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>full_name</th>
                    <th>age</th>
                    <th>Province</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
          $dataUser=$obj->getData();
          foreach($dataUser as $key){
            ?>
                <tr>
                    <td><?php echo $key['user_id']?></td>
                    <td><?php echo $key['full_name']?></td>
                    <td><?php echo $key['age']?></td>
                    <td><?php echo $key['name']?></td>
                    <td>
                        <a href="index.php?id=<?php echo $key['user_id'];?>"
                            onclick="return confirm ('bạn đã chắc chưa :)')">Xóa</a>
                        <a href="index.php?add_id=<?php echo $key['user_id']; ?>">Update</a>
                    </td>
                    < </tr>


                        <?php
          }
          ?>
            </tbody>





        </table>
</body>

</html>