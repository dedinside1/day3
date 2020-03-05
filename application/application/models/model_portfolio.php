<?php
class Model_Portfolio extends Model
{

	public function get_data()
	{
		$sql = "SELECT * FROM portfolio";
		$result = mysqli_query($this->link, $sql);
		return $result;

}
}
