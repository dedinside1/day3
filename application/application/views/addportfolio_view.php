<h1>Портфолио</h1>
<p>
<table class="table table-bordered">
Все проекты в следующей таблице являются вымышленными, поэтому даже не пытайтесь перейти по приведенным ссылкам.
<tr><td>id</td><td>Год</td><td>Проект</td><td>Описание</td></tr>
<?php
	foreach($data as $row)
	{
		echo '<tr><td>'.$row['id'].'</td><td>'.$row['Year'].'</td><td>'.$row['Site'].'</td><td>'.$row['Description'].'</td></tr>';
	}
	if ($_SESSION['login']=='admin') {
		echo '<form method="post" class="form-signin">
    <input type="text" name="Year" class="form-control" placeholder="Year" ><br>
    <input type="text" name="Site" class="form-control" placeholder="Site" ><br>
    <input type="text" name="Description" class="form-control" placeholder="Description" ><br>
    <button name="submitadd" class="btn btn-lg btn-primary btn-block" type="sumbit">Добавить</button>
    </form>';

	}
?>
</table>

</p>
