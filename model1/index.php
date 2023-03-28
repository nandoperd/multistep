 <!DOCTYPE html>
 <html lang="en">
 <head>
  <meta charset="UTF-8">
  <!-- link bootstrap -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <style type="text/css">
	#regiration_form fieldset:not(:first-of-type) {
		display: none;
	}
  </style>
  <title>Model 1</title>
</head>
<body>
  <div class="container">
    <h1></h1>
	<div class="progress">
		<div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
	</div>
	
	<form id="regiration_form" novalidate action="action.php"  method="post">
	<fieldset>
		<h2>Langkah 1: Buat Akun</h2>
		<div class="form-group">
		<label for="email">Email</label>
		<input type="email" class="form-control" id="email" name="data[email]" placeholder="Email">
	  </div>
	  <div class="form-group">
		<label for="exampleInputPassword1">Password</label>
		<input type="password" class="form-control" id="password" placeholder="Password">
	  </div>
		<input type="button" name="data[password]" class="next btn btn-info" value="Next" />
	</fieldset>
	<fieldset>
		<h2> Langkah 2: Data Personal</h2>
		<div class="form-group">
		<label for="namaD">Nama Depan</label>
		<input type="text" class="form-control" name="data[namaD]" id="namaD" placeholder="Nama Depan">
	  </div>
	  <div class="form-group">
		<label for="namaB">Nama Belakang</label>
		<input type="text" class="form-control" name="data[namaB]" id="namaB" placeholder="Nama Belakang">
	  </div>
		<input type="button" name="previous" class="previous btn btn-default" value="Previous" />
		<input type="button" name="next" class="next btn btn-info" value="Next" />
	</fieldset>
	<fieldset>
		<h2>Langkah 3: Informasi Kontak</h2>
		<div class="form-group">
		<label for="hp">Nomor HP</label>
		<input type="text" class="form-control" id="hp" name="data[hp]" placeholder="Nomor HP">
	  </div>
	  <div class="form-group">
		<label for="alamat">Alamat</label>
		<textarea  class="form-control" name="data[alamat]" placeholder="Alamat"></textarea>
	  </div>
		<input type="button" name="previous" class="previous btn btn-default" value="Previous" />
		<input type="submit" name="submit" class="submit btn btn-success" value="Submit" id="submit_data" />
	</fieldset>
	</form>
  </div>
</body>
</html>
<script type="text/javascript">
$(document).ready(function(){
	var current = 1,current_step,next_step,steps;
	steps = $("fieldset").length;
	$(".next").click(function(){
		current_step = $(this).parent();
		next_step = $(this).parent().next();
		next_step.show();
		current_step.hide();
		setProgressBar(++current);
	});
	$(".previous").click(function(){
		current_step = $(this).parent();
		next_step = $(this).parent().prev();
		next_step.show();
		current_step.hide();
		setProgressBar(--current);
	});
	setProgressBar(current);
	// Change progress bar action
	function setProgressBar(curStep){
		var percent = parseFloat(100 / steps) * curStep;
		percent = percent.toFixed();
		$(".progress-bar")
			.css("width",percent+"%")
			.html(percent+"%");		
	}
});
</script>