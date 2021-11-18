<?php
include_once "./dao/sestem_dao.php";
include_once "./dao/taikhoan.php";
function dangky()
{
  
    if (isset($_POST['dangki']) && ($_POST['dangki'])) {
        $fullname = $_POST['fullname'];
        $password = $_POST['password'];
        $email = $_POST['email'];
        $address = $_POST['address'];
        $phone_number = $_POST['phone_number'];
      insert_taikhoan($fullname,$password,$email,$address,$phone_number);
     
    }
    account_render('homepage/dangky.php', compact('fullname','password','email','address','phone_number'));
}
