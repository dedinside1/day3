<?php
class Model_Admin extends Model
{

  public function LodinAdmin($login, $password){
		$sql="SELECT * FROM user WHERE login='$login' and password='$password'";
    $result = mysqli_query($this->link, $sql) or die('__________ERROR___________');
    $count = mysqli_num_rows($result);

    if ($count == 1) {
      $_SESSION['login'] = $login;
    }
    else{
      $fsmg= 'Ошибка';
      echo "не залогинился";
    }
    return $result, $_SESSION['login'];
}
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
    public static function UpdateInfo ($id, $Year, $Site, $Description){

        $sql = "UPDATE portfolio SET Year='$Year' and Site='$Site' and Description='$Description' WHERE id='$id'";
        $result = mysqli_query($this->link, $sql) or die('__________ERROR___________');
        return $result;
    }

    public static function UpdateInfo ($id){
        $sql = "DELETE FROM portfolio WHERE id='$id'";
        $result = mysqli_query($this->link, $sql) or die('__________ERROR___________');
        return $result;
    }
}


 ?>
