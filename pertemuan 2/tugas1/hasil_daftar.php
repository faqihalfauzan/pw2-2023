
<!DOCTYPE html>
<html>
<head>
	<title>Data Pendaftar</title>
	<!-- Load Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<div class="form-horizontal w-75 mt-5 mx-auto p-4 border shadow-sm">
		<h2>Data Pendaftar</h2>
		<table class="table">
			<thead>
				<tr>
					<th>Nim</th>
					<th>Nama Lengkap</th>
					<th>Email</th>
					<th>Alamat</th>
					<th>Telepon</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>0110222152</td>
					<td>Faqih Al Fauzan</td>
					<td>faqihalfauzan550@gmail.com</td>
					<td>Bogor</td>
					<td>081318079109</td>
				</tr>
				<tr>
					<td>0110326662</td>
					<td>Rul</td>
					<td>rul@gmail.com</td>
					<td>Bogor</td>
					<td>085644329576</td>
				</tr>
				<tr>
					<td>0110223826</td>
					<td>Al Fauz</td>
					<td>Al Fauz550@gmail.com</td>
					<td>Banten</td>
					<td>081219875159</td>
				</tr>

				<?php
				  /* Task 2
				    Tangkap dan tampilkan data dari form_daftar.
						Berikan error handling
				  */
				 
				  if(isset($_POST['sukses'])){
					//Variable untuk menampung data
			   $nomor = $_POST['nomor'];
			   $nama_lengkap= $_POST['nama_lengkap'];
			   $email = $_POST['email'];
			   $alamat = $_POST['alamat'];
			   $telepon = $_POST['telepon'];
			  
		   
			   //Tampilkan data dari variable
			   	echo '<tr><td>' . $nomor;
			  	echo '<td> ' . $nama_lengkap;
			   	echo '<td> ' . $email ;
			   	echo '<td> ' . $alamat;
			   	echo '<td> ' . $telepon;
				echo '</td></tr>';
			   }
		   
?>
				

			</tbody>
		</table>
	</div>
</body>
</html>