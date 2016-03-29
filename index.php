<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<title>Cek Domain</title>
</head>
<body>
	<div class="container">
		<div class="row">
			
			<div class="col-md-12">
				<form method="post" action="">
					<div class="form-group">
						<label>Cek Ketersediaan Domain</label>
						<input type="hidden" name="token"></input>
						<input type="hidden" value="true" ></input>
						<input placeholder="Masukkan Domain Anda" type="text" name="kolom_domain" class="form-control"></input>
						<button  type="submit" class="btn btn-warning" name="cek">CEK</button><br>	
						<div class="cekbox">		
							<input type="checkbox" name="pilihan" value=".com">.com</input>
							<input type="checkbox" name="pilihan" value=".net">.net</input>
							<input type="checkbox" name="pilihan" value=".org">.org</input>
						</div>
					</div>
				</form>
			</div>
			
		</div>

		<?php 

		if(isset($_POST['cek'])){
			$domain_name = "$_POST[kolom_domain]"."$_POST[pilihan]";
			$host = @gethostbynamel("$domain_name");
			if(empty($host)){
				echo "<div align='center' style='color:green;'> Domain $domain_name <b>Tersedia</b> anda bisa membelinya ";
			}else{
				echo "<div align='center' style='color:red;'>Domain $domain_name <b>Tidak Tersedia</b>, coba masukkan domain lain </div>";
			}
		}

		

		?>
	</div>
</body>
</html>