<!DOCTYPE html>
<html>
<head>
	<title>17 Mei | CRUD</title>
</head>
<body>
	<a href="175-tambahbuku.php">Tambah Buku</a>

	<?php 
		include 'fungsi/koneksi.php';

		$sql = "SELECT * FROM buku";
		$result = mysqli_query($koneksi, $sql);
		if (!$result) {
			echo "ERROR";
		}
	?>

	<table border="1">
		<thead>
			<td>ID BUKU</td>
			<td>JUDUL</td>
			<td>PENERBIT</td>
			<td>TAHUN</td>
			<td>PENULIS</td>
			<td>AKSI</td>
		</thead>
		<tbody>

			<?php 
				while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
			?>

			<tr>
				<td><?php echo $row['id_buku']; ?></td>
				<td><?php echo $row['nama_buku']; ?></td>
				<td><?php echo $row['penerbit']; ?></td>
				<td><?php echo $row['tahun']; ?></td>
				<td><?php echo $row['penulis']; ?></td>
				<td><a href="fungsi/delete.php?id=<?php echo $row['id_buku'];?>">Hapus</a></td>
			</tr>

			<?php 
				}
			?>

		</tbody>
	</table>
</body>
</html>