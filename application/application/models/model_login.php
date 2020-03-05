<?php

class Model_Login extends Model
{
  public function Login($login, $password){

    $sql="SELECT * FROM users WHERE login='$login' and password='$password'";
    $result = mysqli_query($this->link, $sql) or die('__________ERROR___________');
    $count = mysqli_num_rows($result);

    if ($count == 1) {
      $_SESSION['login'] = $login;
      return true;
    }

    return false;
}
}

 ?>
