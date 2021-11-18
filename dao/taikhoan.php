<?php
function insert_taikhoan($fullname,$password,$email,$address,$phone_number)
{
    $sql = " INSERT INTO user (fullname,password,email,address,phone_number)
    values ('$fullname','$password','$email','$address','$phone_number')";
    pdo_execute($sql);
}

?>
  