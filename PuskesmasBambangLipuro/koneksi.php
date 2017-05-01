<?php
error_reporting(E_ALL ^ E_DEPRECATED);
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "inventaris_bambanglipuro";

$kon = mysqli_connect($host, $user, $pass);
	if(!$kon) die("Gagal terkoneksi ke database");
$hasil = mysqli_select_db($kon, $dbname);
	if(!$hasil){
		$hasil = mysqli_query($kon, "CREATE DATABASE $dbname");
		if(!$hasil)
			die ("Gagal membuat database");
		else
			$hasil = mysqli_select_db($kon, $dbname);
			if(!$hasil) die("Gagal koneksi database");
	}

$kibA = "CREATE TABLE IF NOT EXISTS kiba (
		  no int(11) DEFAULT NULL,
		  jenis_barang varchar(30) NOT NULL,
		  kode_barang int(10) NOT NULL PRIMARY KEY,
		  no_register int(3) NOT NULL,
		  luas varchar(10) NOT NULL,
		  tahun_pengadaan int(4) NOT NULL,
		  letak_alamat varchar(30) NOT NULL,
		  status_hak varchar(30) NOT NULL,
		  tgl_sertifikat date NOT NULL,
		  no_sertifikat int(20) NOT NULL,
		  penggunaan varchar(30) NOT NULL,
		  asal_usul varchar(30) NOT NULL,
		  harga int(12) NOT NULL,
		  ket varchar(30) NOT NULL
		) ENGINE=InnoDB DEFAULT CHARSET=latin1";
mysqli_query($kon, $kibA) or die("Gagal membuat table KIB A");
?>