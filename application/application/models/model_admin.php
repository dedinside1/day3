<?php
class Model_Admin extends Model
{
  public static function InsertInfo($Year, $Site, $Description)
    {
        $sql = "INSERT INTO portfolio (Year, Site, Description) VALUES ('$Year', '$Site', '$Description')";
        $result = mysqli_query($this->link, $sql) or die('__________ERROR___________');
// var_dump()
        if($result){
          $sm = "Данные записанные";
        }
        else{
          $fs = "Ошибка записи";
        }
        return $result;
    }

}
