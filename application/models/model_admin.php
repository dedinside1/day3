<?php

class Model_Admin extends Model
{

  function LodinAdmin($login, $password)
  {
		$sql = "SELECT * FROM users WHERE login = '$login' AND password = '$password'";
    $result = mysqli_query($this->link, $sql) or die('__________ERROR___________');
    $count = mysqli_num_rows($result);
    
    if ($count == 1) {
      $_SESSION['login'] = $login;
    }
    else{
      $fsmg= 'Ошибка';
    }
    return $result;
}


  public static function InsertInfo($Year, $Site, $Description)
    {
        $sql = "INSERT INTO portfolio (Year, Site, Description) VALUES ('$Year', '$Site', '$Description')";
        $result = mysqli_query($this->link, $sql) or die('__________ERROR___________');

        if($result){
          $sm = "Данные записанные";
        }
        else{
          $fs = "Ошибка записи";
        }
        return $result;
    }
}


 ?>
