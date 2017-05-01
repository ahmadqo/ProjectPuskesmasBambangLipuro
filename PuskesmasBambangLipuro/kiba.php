<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
	  padding:30px;
	  background-color:yellow;
	}
    .row.content {height: 450px}
    .sidenav {
      padding-top: 20px;
      background-color: #f1f1f1;
      height: 100%;
    }
	.footer{
		padding:15px;
	}
	.text-left{
		padding-left:20px;
	}
	#dialog{
		width:300px;
		height:30px;
	}
	#dialog_pendek{
		width:150px;
		height:30px;
	}
	#tgl{
		width:70px;
		height:30px;
	}
	#tahun{
		width:100px;
		height:30px;
	}
	#konten table{
	margin:5px 0px;
	border:none;
	clear:both;
	}
	#konten tr,td{
		border:none;
		padding:2px;
	}
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height:auto;} 
    }
	#menu_ver {
		font-weight: 600;
		width: 200px; }
	#menu_ver ul, li {
		list-style: none;
		margin: 0;
		padding: 0; 
	}
	#menu_ver ul li.hover,
	#menu_ver ul li:hover { position: relative; z-index: 599; }
	#menu_ver ul ul{
		visibility: hidden;
		position: absolute;
		top: 100%;
		left: 0;
		z-index: 598;
	}
	#menu_ver ul li:hover > ul { visibility: visible; }
	#menu_ver ul ul { top: 0; left: 100%; }
	#menu_ver span, #menu_ver a {
		display: inline-block;
		font-family: Arial, Helvetica, sans-serif;
		font-size: 12px;
		text-decoration: none; 
	}
	#menu_ver li:hover, #menu_ver li.active { background: #5FD367; }
	#menu_ver a {
		color: blue;
		line-height: 100%;
		padding: 16px 8px 16px 28px;
		width: 164px;
	}
	#menu_ver ul ul li {
		background: yellow;
		border-bottom: 1px solid #5FD367; 
	}
	#menu_ver ul ul li {
		background: green;
		border-bottom: 1px solid #5FD367; 
	}
  </style>
</head>
<body>

<nav class="navbar">
  <div class="container-fluid">
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
    </div>
  </div>
</nav>
  
<div class="container-fluid text-center">    
  <div class="row content">
    <div class="col-sm-2 sidenav">
		<div id='menu_ver'>
		<ul>
			<li><a href='#'><span>Menu Utama</span></a></li>
			<li><a href='#'><span>Kartu Inventaris Barang</span></a>
				<ul>
					<li><a href='#'><span>KIB A (Tanah)</span></a></li>
					<li><a href='#'><span>KIB B (Barang)</span></a></li>
					<li><a href='#'><span>KIB B (Alat)</span></a></li>
					<li><a href='#'><span>KIB C (Gedung Dan Bangunan)</span></a></li>
					<li><a href='#'><span>KIB D (Jalan, Irigasi, Dan Jaringan)</span></a></li>
					<li><a href='#'><span>KIB E (Aset Tetap Lainnya)</span></a></li>
					<li><a href='#'><span>KIB F (Konstruksi Dalam Pengerjaan)</span></a></li>
				</ul>
			</li>
			<li><a href='#'><span>Buku Inventaris</span></a></li>
			<li><a href='#'><span>Daftar Penambahan/Pengurangan Aset Tetap</span></a></li>
		</ul>
		</div>
    </div>
	<div class="col-sm-8">
		<div class="col-sm-8 text-left"> 
			<h4 align="center"><b>KARTU INVENTARIS BARANG (KIB) A</b></h4>
			<h4 align="center"><b>TANAH</b></h4>
			<b>NO. KODE LOKASI 12.12.01.07.02.00.14<br/>
			SATUAN KERJA PUSKESMAS BAMBANGLIPURO</b><br/><br/>
			<form role="form" class="form-horizontal">
			<table>
				<tr>
					<td>Jenis/Nama Barang</td>
					<td><input type="text" name="nama_barang" id="dialog" class="form-control"></td>
				</tr>
				<tr>
					<td><label>NOMOR</label></td>
					<td></td>
				</tr>
				<tr>
					<td>Register</td>
					<td><input type="text" name="no_register" id="dialog" class="form-control"></td>
				</tr>
				<tr>
					<td>Luas (M2)</td>
					<td><input type="text" name="luas" id="dialog_pendek" class="form-control"></td>
				</tr>
				<tr>
					<td>Tahun Pengadaan</td>
					<td><input type="text" name="tahun_pengadaan" id="dialog_pendek" class="form-control"></td>
				</tr>
				<tr>
					<td>Letak/Alamat</td>
					<td><input type="text" name="letak" id="dialog" class="form-control"></td>
				</tr>
				<tr>
					<td><label>STATUS TANAH</label></td>
					<td></td>
				</tr>
				<tr>
					<td>Hak</td>
					<td><input type="text" name="hak" id="dialog_pendek" class="form-control"></td>
				</tr>
				<tr>
					<td>Tanggal Sertifikat</td>
					<td>
						<select name="tgl" id="tgl"">
							<?php
							for($tgl=1; $tgl<=30; $tgl++){
								$t = str_pad($tgl,2,"0",STR_PAD_LEFT);
								echo "<option value='$t'> $t </option>";
							}
							?>
						</select>
						<select name="bulan" id="tgl"">
							<?php
							for($bulan=1; $bulan<=12; $bulan++){
								$bln = str_pad($bulan,2,"0",STR_PAD_LEFT);
								echo "<option value='$bln'> $bln </option>";
							}
							?>
						</select>
						<select name="tahun" id="tahun">
							<?php
							$tahun_sekarang = date("Y");
							$tahun_awal = $tahun_sekarang-20;
							$tahun_akhir = $tahun_sekarang+10;
							for($tahun=$tahun_akhir; $tahun>=$tahun_awal; $tahun--){
								echo "<option value='$tahun'>$tahun</option>";
							}
							?>
						</select>
					</td>
				</tr>
				<tr>
					<td>Nomor Sertifikat</td>
					<td><input type="text" name="no_sertifikat" id="dialog" class="form-control"></td>
				</tr>
				<tr>
					<td>Penggunaan</td>
					<td><input type="text" name="penggunaan" id="dialog" class="form-control"></td>
				</tr>
				<tr>
					<td>Asal Usul</td>
					<td><input type="text" name="asal_usul" id="dialog" class="form-control"></td>
				</tr>
				<tr>
					<td>Harga (Rp)</td>
					<td><input type="text" name="harga" id="dialog_pendek" class="form-control"></td>
				</tr>
				<tr>
					<td>Keterangan</td>
					<td><input type="text" name="keterangan" id="dialog" class="form-control"></td>
				</tr>
			</table><br/>
			<button type="submit" class="btn btn-primary">Insert Data</button>
			<button type="reset" class="btn btn-danger">Reset</button> 
		</form> 
		<!--<div class="col-sm-2 sidenav">
		  <div class="well">
			<p>ADS</p>
		  </div>
		  <div class="well">
			<p>ADS</p>
		  </div>
		</div>-->
	  </div>
	</div>
</div>
</div>
<div class="footer">

</div>
</body>
</html>
