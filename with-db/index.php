	<?php
		include_once("connect.php");
		$result = mysqli_query($mysqli, "SELECT * FROM tbl_kompetensimp ORDER BY kategori ASC;");
	?>

	<html>
	<head>	
		<title>Homepage</title>
	</head>

	<body>

		<table width='80%' border=0>

		<tr bgcolor='#CCCCCC'>
			<td>No.</td>
			<td>Kategori</td>
			<td>Kompetensi</td>
			<td>Uji Kompetensi</td>
			<td>Nilai</td>
			<td>Waktu Pengerjaan</td>
		</tr>
		<?php
		while($res = mysqli_fetch_array($result)) {		
			echo "<tr>";
		    echo "<td>".$res['id_matapelajaran']."</td>";
			echo "<td>".$res['kategori']."</td>";
			echo "<td>".$res['penilaian_kompetensi']."</td>";
			echo "<td>".$res['keterangan']."</td>";
			echo "<td>".$res['nilai']."</td>";
			echo "<td>".$res['waktu_pengerjaan']."</td>";

			echo "<td><a href=\"edit.php?id=$res[id]\">Edit</a> | <a href=\"delete.php?id=$res[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";
		}
		?>
		</table>
	</body>
	</html>