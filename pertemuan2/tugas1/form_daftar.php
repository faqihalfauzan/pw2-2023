<!-- Task 1
	Rapihkan dan buatlah form agar bisa mengirim data
	Gunakan form request POST
-->
<!DOCTYPE html>
<html>
<head>
	<title>Form Pendaftaran</title>
	<!-- Load Bootstrap CSS from CDN -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>

	<div>
		
		<form method = "POST" action = "hasil_daftar.php"class=" sform-horizontal w-75 mt-5 mx-auto p-4 borderhasdow-m">
		<h1>Form Pendaftaran</h1>
		<div class="form-group row mb-3">
				<label for="nomor" class="col-4 col-form-label">Nim </label>
				<input name= "nomor" type="text" class="form-control" id="nomor" placeholder="masukan Nim anda? "  required>
			</div>
			<div class="form-group row mb-3">
				<label for="nama_lengkap" class="col-4 col-form-label">Nama Lengkap</label>
				<input name= "nama_lengkap" type="text" class="form-control" id="nama_lengkap"  placeholder="masukan nama lengkap?" required>
			</div>
			<div class="form-group row mb-3">
				<label for="email" class="col-4 col-form-label">Email</label>
				<input name= "email" type="email" class="form-control" id="email"  placeholder="isi email dengan benar?" required>
			</div>
			<div class="form-group row mb-3">
				<label for="alamat" class="col-4 col-form-label">Alamat</label>
				<textarea name= "alamat" class="form-control" id="alamat"  placeholder="masukan alamat yang lengkap?" required></textarea>
			</div>
			<div class="form-group row mb-3">
				<label for="telepon" class="col-4 col-form-label">Telepon</label>
				<input name= "telepon" type="tel" class="form-control" id="telepon"  placeholder="masukan no telephone?" required>
			</div>
			<button type="submit" name="sukses" value="Submit" class="btn btn-primary">Submit</button>
		</form>
	</div>
</body>
</html>