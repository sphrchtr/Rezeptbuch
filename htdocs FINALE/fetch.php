<style>
table {
		border-collapse: collapse;
		width: 100%;
}
th, td {
		padding: 8px;
		text-align: left;
		border-bottom: 1px solid #ddd;
		}
		tr:hover {
				background-color:#f5f5f5;
		}
</style>

<?php
$connect = mysqli_connect("localhost", "root", "", "rezeptbuch");
$output = '';
if(isset($_POST["query"]))
{
	$search = mysqli_real_escape_string($connect, $_POST["query"]);
	$query = "
	SELECT * FROM rezepte
	WHERE id LIKE '%".$search."%'
	OR namerecipe LIKE '%".$search."%'
	OR cathegory1 LIKE '%".$search."%'
	OR cathegory2 LIKE '%".$search."%'
	OR cathegory3 LIKE '%".$search."%'
	OR source LIKE '%".$search."%'
	OR time LIKE '%".$search."%'
	OR difficulty LIKE '%".$search."%'
	";
}
else
{
	$query = "
	SELECT * FROM rezepte ORDER BY id";
}
$result = mysqli_query($connect, $query);
if(mysqli_num_rows($result) > 0)
{
	$output .= '<div class="">
					<table class="">
						<tr>
							<th>Name</th>
							<th>Kategorie1</th>
							<th>Kategorie2</th>
							<th>Kategorie3</th>
							<th>Zeit</th>
							<th>Schwierigkeitsgrad</th>
							<th>Quelle</th>
						</tr>';
	while($row = mysqli_fetch_array($result))
	{
		$output .= '
			<tr>
				<td>'.$row["namerecipe"].'</td>
				<td>'.$row["cathegory1"].'</td>
				<td>'.$row["cathegory2"].'</td>
				<td>'.$row["cathegory3"].'</td>
				<td>'.$row["time"].'</td>
				<td>'.$row["difficulty"].'</td>
				<td>'.$row["source"].'</td>
                <td><a href="includes/view.php?id='.$row["ID"].'">Anzeigen</td>
                <td><a href="includes/edit.php?id='. $row["ID"].'">Bearbeiten</td>
                <td><a href="includes/delete.php?id='. $row["ID"].'">Löschen</td>
			</tr>
		';
	}
	echo $output;
}
else
{
	echo 'Data Not Found';
}
?>
