<!DOCTYPE html>
<html>
<head>
	<title>Home MVC</title>
	<link rel="stylesheet" href="<?= $GLOBALS['path'] ?>/css/style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
<body>
	<?php foreach ($data['users'] as $user): ?>
		<?php $jenkel =  $user['jenkel']; ?>
		<div class="container my-5">
			<div class="shadow card">
				<div class="shadow card-body">
					<h3>Detail User</h3>
					<form action="save" method="POST">
						<div class="form-group">
							<label>Nama</label>
							<input type="text" name="nama" class="form-control" aria-describedby="emailHelp" placeholder="Masukkan nama" value="<?php echo $user['nama']; ?>" readonly>
						</div>
						<div class="form-group">
							<label>Jenkel</label>
							<select name="jenkel" class="form-control" required readonly>
								<option value="">Pilih jenkel</option>
								<option value="L" <?php echo $jenkel == "L" ? 'selected' : '' ?> >Laki-laki</option>
								<option value="P" <?php echo $jenkel == "P" ? 'selected' : '' ?> >Perempuan</option>
							</select>
						</div>
						<a href="../" class="btn btn-outline-primary btn-sm">Back</a>
					</form>
				</div>
			</div>
		</div>
	<?php endforeach; ?>
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>