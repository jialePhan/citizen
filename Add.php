<?php
	include('config/db_connect.php');
	if(isset($_POST['submit'])){
			$namapenuh = mysqli_real_escape_string($con, $_POST['namapenuh']);
			$ic = mysqli_real_escape_string($con, $_POST['ic']);
			$jantina = mysqli_real_escape_string($con, $_POST['jantina']);
			$alamat = mysqli_real_escape_string($con, $_POST['alamat']);
			$kediaman = mysqli_real_escape_string($con, $_POST['kediaman']);
			$kampung = mysqli_real_escape_string($con, $_POST['kampung']);
			$handphone = mysqli_real_escape_string($con, $_POST['handphone']);
			$tel = mysqli_real_escape_string($con, $_POST['tel']);
			$hasrat = mysqli_real_escape_string($con, $_POST['hasrat']);
			$ya = mysqli_real_escape_string($con, $_POST['ya']);
			$solat = mysqli_real_escape_string($con, $_POST['solat']);
			$zon = mysqli_real_escape_string($con,$_POST['zon']);
			$kerja = mysqli_real_escape_string($con, $_POST['kerja']);
			$status = mysqli_real_escape_string($con, $_POST['status']);
			$a3 = mysqli_real_escape_string($con, $_POST['a3']);
			$mahir = mysqli_real_escape_string($con, $_POST['mahir']);
			$namaIS = mysqli_real_escape_string($con, $_POST['namaIS']);
			$kerjaIS = mysqli_real_escape_string($con, $_POST['kerjaIS']);
			$ais3 = mysqli_real_escape_string($con, $_POST['ais3']);
			$bantuan = mysqli_real_escape_string($con, $_POST['yamb']);
			$jbantuan = mysqli_real_escape_string($con, $_POST['jb']);
			$tem = mysqli_real_escape_string($con, $_POST['tem']);
			$bil = mysqli_real_escape_string($con, $_POST['bil']);
			$bilno1 = mysqli_real_escape_string($con, $_POST['bilno1']);
			$namaAnak1 = mysqli_real_escape_string($con, $_POST['namaAnak1']);
			$umur1 = mysqli_real_escape_string($con, $_POST['umur1']);
			$sekolah1 = mysqli_real_escape_string($con, $_POST['sekolah1']);
			$bilno2 = mysqli_real_escape_string($con, $_POST['bilno2']);
			$namaAnak2 = mysqli_real_escape_string($con, $_POST['namaAnak2']);
			$umur2 = mysqli_real_escape_string($con, $_POST['umur2']);
			$sekolah2 = mysqli_real_escape_string($con, $_POST['sekolah2']);
			$bilno3 = mysqli_real_escape_string($con, $_POST['bilno3']);
			$namaAnak3 = mysqli_real_escape_string($con, $_POST['namaAnak3']);
			$umur3 = mysqli_real_escape_string($con, $_POST['umur3']);
			$sekolah3 = mysqli_real_escape_string($con, $_POST['sekolah3']);
			$bilno4 = mysqli_real_escape_string($con, $_POST['bilno4']);
			$namaAnak4 = mysqli_real_escape_string($con, $_POST['namaAnak4']);
			$umur4 = mysqli_real_escape_string($con, $_POST['umur4']);
			$sekolah4 = mysqli_real_escape_string($con, $_POST['sekolah4']);
			$bilno5 = mysqli_real_escape_string($con, $_POST['bilno5']);
			$namaAnak5 = mysqli_real_escape_string($con, $_POST['namaAnak5']);
			$umur5 = mysqli_real_escape_string($con, $_POST['umur5']);
			$sekolah5 = mysqli_real_escape_string($con, $_POST['sekolah5']);
			$bilno6 = mysqli_real_escape_string($con, $_POST['bilno6']);
			$namaAnak6 = mysqli_real_escape_string($con, $_POST['namaAnak6']);
			$umur6 = mysqli_real_escape_string($con, $_POST['umur6']);
			$sekolah6 = mysqli_real_escape_string($con, $_POST['sekolah6']);
			$bilno7 = mysqli_real_escape_string($con, $_POST['bilno7']);
			$namaAnak7 = mysqli_real_escape_string($con, $_POST['namaAnak7']);
			$umur7 = mysqli_real_escape_string($con, $_POST['umur7']);
			$sekolah7 = mysqli_real_escape_string($con, $_POST['sekolah7']);
			$bilno8 = mysqli_real_escape_string($con, $_POST['bilno8']);
			$namaAnak8 = mysqli_real_escape_string($con, $_POST['namaAnak8']);
			$umur8 = mysqli_real_escape_string($con, $_POST['umur8']);
			$sekolah8 = mysqli_real_escape_string($con, $_POST['sekolah8']);
			$bilno9 = mysqli_real_escape_string($con, $_POST['bilno9']);
			$namaAnak9 = mysqli_real_escape_string($con, $_POST['namaAnak9']);
			$umur9 = mysqli_real_escape_string($con, $_POST['umur9']);
			$sekolah9 = mysqli_real_escape_string($con, $_POST['sekolah9']);
			$sql="INSERT INTO maklumat(ic,nama_penuh,jantina,alamat,kediaman,nama_kampung,no_hp,no_t,hasrat,ahli_khairat,solat_jumaat,nama_zon,pekerjaan,status_diri,pendapatan,kemahiran_diri,nama_suami_isteri,pekerjaan_suami_isteri,pendapatan_suami_isteri,bil_anak,menerima_bantuan,jenis_bantuan,tempoh,no1,nama1,umur1,sekolah_kolej_universiti1,no2,nama2,umur2,sekolah_kolej_universiti2,no3,nama3,umur3,sekolah_kolej_universiti3,no4,nama4,umur4,sekolah_kolej_universiti4,no5,nama5,umur5,sekolah_kolej_universiti5,no6,nama6,umur6,sekolah_kolej_universiti6,no7,nama7,umur7,sekolah_kolej_universiti7,no8,nama8,umur8,sekolah_kolej_universiti8,no9,nama9,umur9,sekolah_kolej_universiti9) VALUES ('$ic','$namapenuh','$jantina','$alamat','$kediaman','$kampung','$handphone','$tel','$hasrat','$ya','$solat','$zon','$kerja','$status','$a3','$mahir','$namaIS','$kerjaIS','$ais3','$bil','$bantuan','$jbantuan','$tem','$bilno1','$namaAnak1','$umur1','$sekolah1','$bilno2','$namaAnak2','$umur2','$sekolah2','$bilno3','$namaAnak3','$umur3','$sekolah3','$bilno4','$namaAnak4','$umur4','$sekolah4','$bilno5','$namaAnak5','$umur5','$sekolah5','$bilno6','$namaAnak6','$umur6','$sekolah6','$bilno7','$namaAnak7','$umur7','$sekolah7','$bilno8','$namaAnak8','$umur8','$sekolah8','$bilno9','$namaAnak9','$umur9','$sekolah9')";
if(mysqli_query($con,$sql)){
				header('Location: index.php');
			}else{
				echo 'query error '.mysqli_error($con);
			}
		
			
		}
		
			
?>

<!DOCTYPE html>
<html lang="en">

<?php include('header.php'); ?>
<li class="nav-item">
    <a class="nav-link px-3" href="index.php">Home</a>
  </li>
  <li class="nav-item">
    <a class="nav-link active px-3" href="Add.php" >Add</a>
  </li>
  <li class="nav-item">
    <a class="nav-link px-3" href="Search.php">View</a>
  </li>
</ul>
</div>
</div>
</nav>

	<div class="container py-5">
		<form id="registration" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
			 <h2 class="pb-3 text-white">Maklumat Diri</h2>
	  		<div class="form-row">
				<div class="form-group col-md-6">
    				<label for="name" class="text-white">Nama Penuh</label>
    				<input type="text" class="form-control border border-primary" id="name" placeholder="Masukkan Nama anda" name="namapenuh">
  				</div>
  				<div class="form-group col-md-6">
    				<label for="IC" class="text-white">No. Kad Pengenalan</label>
    				<input type="text" class="form-control" name="ic" id="IC" placeholder="Masukkan IC No. anda" required>
  				</div>	
			</div>
			
		<div class="form-row">
			<div class="form-group col-md-6">
					<label class="text-white">Jantina</label>
						<div class="py-1">
     					<div class="custom-control custom-radio custom-control-inline">
  							<input type="radio" id="Lelaki" name="jantina" class="custom-control-input" value="Lelaki">
  							<label class="custom-control-label text-white" for="Lelaki">Lelaki</label>
						</div>
						<div class="custom-control custom-radio custom-control-inline">
  							<input type="radio" id="Perempuan" name="jantina" class="custom-control-input" value="Perempuan">
  							<label class="custom-control-label text-white" for="Perempuan">Perempuan</label>
						</div>
						</div>
				</div>
			<div class="form-group col-md-6">
      				<label for="Address" class="text-white">Alamat</label>
     				<input type="text" class="form-control" id="Address" placeholder="Masukkan Alamat anda" name="alamat">
    		</div>
		</div>
			
		<div class="form-row">
			<div class="form-group col-md-6">
   				<label for="Kediaman" class="text-white">Kediaman</label>
    			<select class="form-control" id="Kediaman" name="kediaman">
					<option value="" hidden>Sila pilih satu</option>
     		 		<option value="Rumah Sendiri">Rumah Sendiri</option>
      				<option value="Sewa">Sewa</option>
      				<option value="Rumah Ibu/Bapa">Rumah Ibu/Bapa</option>
    			</select>
 	 		</div>
			<div class="form-group col-md-6">
					<label for="Kampung" class="text-white">Nama Panggilan Kampung</label>
     				<input type="text" class="form-control" id="Kampung" placeholder="Masukkan Nama Panggilan Kampung anda" name="kampung">
			</div>
		</div>
			<div class="form-row">
				<div class="form-group col-md-6">
      				<label for="Handphone" class="text-white">No. HP</label>
     				<input type="text" class="form-control" id="Handphone" placeholder="Masukkan No. Handphone anda" name="handphone">
    			</div>
				<div class="form-group col-md-6">
      				<label for="Tel" class="text-white">No. Tel Rumah</label>
     				<input type="text" class="form-control" name="tel" id="Tel" placeholder="Masukkan No. Telefon Rumah anda ">
    			</div>
			</div>
		<div class="form-row">
			<div class="form-group col-md-6">
					<label class="text-white">Berhasrat Untuk</label>
					<div class="py-1">
     					<div class="custom-control custom-radio custom-control-inline">
  							<input type="radio" id="sini" name="hasrat" class="custom-control-input" value="Menetap di sini">
  							<label class="custom-control-label text-white" for="sini">Menetap di sini</label>
						</div>
						<div class="custom-control custom-radio custom-control-inline">
  							<input type="radio" id="pindah" name="hasrat" class="custom-control-input" value="Berpindah">
  							<label class="custom-control-label text-white" for="pindah">Berpindah</label>
						</div>
					</div>
			</div>
					<div class="form-group col-md-6">
					<label class="text-white">Ahli Khairat Kematian Masjid Abidin Mukim Sg Laka</label>
					<div class="py-1">
     					<div class="custom-control custom-radio custom-control-inline">
  							<input type="radio" id="Ya" name="ya" class="custom-control-input" value="Ya">
  							<label class="custom-control-label text-white" for="Ya">Ya</label>
						</div>
						<div class="custom-control custom-radio custom-control-inline">
  							<input type="radio" id="Tidak" name="ya" class="custom-control-input" value="Tidak">
  							<label class="custom-control-label text-white" for="Tidak">Tidak</label>
						</div>
					</div>
					</div>
		</div>
		<div class="form-row">
				<div class="form-group col-md-6">
    				<label for="Solat" class="text-white">Solat Jumaat di</label>
    				<input type="text" class="form-control" id="Solat" name="solat" placeholder="Masukkan Tempat Solat anda">
  				</div>
  				<div class="form-group col-md-6">
    				<label for="Zon" class="text-white">Nama zon dalam khariah</label>
    				<input type="text" class="form-control" id="Zon" name="zon" placeholder="Masukkan Nama Zon dalam Khariah anda">
  				</div>
		</div>
		<div class="form-row">
			<div class="form-group col-md-6">
    				<label for="Kerja" class="text-white">Pekerjaan</label>
    				<input type="text" class="form-control" id="Kerja" name="kerja" placeholder="Masukkan Pekerjaan anda">
  				</div>
			<div class="form-group col-md-6">
   				<label for="Status" class="text-white">Status</label>
    			<select class="form-control" id="Status" name="status">
					<option value="" hidden>Sila pilih satu</option>
     		 		<option value="Bujang" id="Bujang">Bujang</option>
      				<option value="Berkahwin" id="Berkahwin">Berkahwin</option>
      				<option value="OKU" id="OKU">OKU</option>
					<option value="Anak Yatim" id="AY">Anak Yatim</option>
      				<option value="Ibu/Bapa Tunggal" id="IBT">Ibu/Bapa Tunggal</option>
    			</select>
 	 		</div>
	  </div>
			<div class="form-row">
				<div class="form-group col-md-6">
					<label class="text-white">Pendapatan (RM)</label>
					<div class="py-1">
     					<div class="custom-control custom-radio custom-control-inline">
  							<input type="radio" id="A3" name="a3" class="custom-control-input" value="Atas RM 3,000">
  							<label class="custom-control-label text-white" for="A3">Atas RM 3000</label>
						</div>
						<div class="custom-control custom-radio custom-control-inline">
  							<input type="radio" id="B3" name="a3" class="custom-control-input" value="Bawah RM 3,000">
  							<label class="custom-control-label text-white" for="B3">Bawah RM 3000</label>
						</div>
					</div>
			</div>
			<div class="form-group col-md-6">
    				<label for="Mahir" class="text-white">Kemahiran Diri</label>
    				<input type="text" class="form-control" id="Mahir" name="mahir" placeholder="Masukkan Kemahiran anda">
  				</div>
			</div>
	<h2 class="py-3 text-white" >Maklumat Ahli Keluarga</h2>
		<div class="form-row">
	  		<div class="form-group col-md-6">
    				<label for="NamaIS" class="text-white">Nama Isteri/Suami</label>
    				<input type="text" class="form-control" id="NamaIS" name="namaIS" placeholder="Masukkan Nama Isteri/Suami anda">
  				</div>
			<div class="form-group col-md-6">
    				<label for="PekerjaanIS" class="text-white">Pekerjaan Isteri/Suami</label>
    				<input type="text" class="form-control" id="PekerjaanIS" name="kerjaIS" placeholder="Masukkan Pekerjaan Isteri/Suami">
  				</div>
	  </div>
	  <div class="form-row">
	  	<div class="form-group col-md-6">
					<label class="text-white">Pendapatan (RM)</label>
					<div class="py-1">
     					<div class="custom-control custom-radio custom-control-inline">
  							<input type="radio" id="AIS3" name="ais3" class="custom-control-input" value="Atas RM 3,000">
  							<label class="custom-control-label text-white" for="AIS3">Atas RM 3000</label>
						</div>
						<div class="custom-control custom-radio custom-control-inline">
  							<input type="radio" id="BIS3" name="ais3" class="custom-control-input" value="Bawah RM 3,000">
  							<label class="custom-control-label text-white" for="BIS3">Bawah RM 3000</label>
						</div>
					</div>
			</div>
		  <div class="form-group col-md-6">
					<label class="text-white">Menerima Bantuan (Untuk Anak)</label>
					<div class="py-1">
     					<div class="custom-control custom-radio custom-control-inline">
  							<input type="radio" id="Yamb" name="yamb" class="custom-control-input"  value="Ya">
  							<label class="custom-control-label text-white" for="Yamb" >Ya</label>
						</div>
						<div class="custom-control custom-radio custom-control-inline">
  							<input type="radio" id="Tmb" name="yamb" class="custom-control-input" value="Tidak">
  							<label class="custom-control-label text-white" for="Tmb">Tidak</label>
						</div>
					</div>
			</div>
	  </div>

				<div class="form-row">
				<div class="form-group col-md-6">
    				<label for="JB" class="text-white">Jenis Bantuan</label>
    				<input type="text" class="form-control" id="JB" name="jb" placeholder="Masukkan Jenis Bantuan" >
  				</div>
  				<div class="form-group col-md-6">
    				<label for="Tem" class="text-white">Tempoh</label>
    				<input type="text" class="form-control" id="Tem" name="tem" placeholder="Masukkan Tempoh" >
  				</div>
				</div>

			 
			<div class="form-row">
				<div class="form-group col-md-6 mb-5">
    				<label for="BilAnak" class="text-white">Bil. Anak</label>
    				<input type="text" class="form-control" id="BilAnak" name="bil" placeholder="Masukkan Bilangan Anak anda">
					</div>
			</div>
				<h2 class="text-white">Senarai Anak</h2>	  
				<div class="form-row">
					<div class="form-group col-md-1">
						<label for="BilNo" class="text-white">No.</label>
						<input type="text" class="form-control-plaintext text-white" id="BilNo1" name="bilno1" value="1" readonly>
					</div>
					<div class="form-group col-md-5">
						<label for="Nama" class="text-white">Nama</label>
						<input type="text" class="form-control" id="NamaAnak1" name="namaAnak1" placeholder="Masukkan Nama Anak Anda">
					</div>
					<div class="form-group col-md-1">
						<label for="Umur" class="text-white">Umur</label>
						<input type="text" class="form-control" id="Umur1" name="umur1" placeholder="Age">
					</div>
					<div class="form-group col-md-5">
						<label for="Sekolah" class="text-white">Sekolah/Kolej/Universiti</label>
						<input type="text" class="form-control" id="Sekolah1" name="sekolah1" placeholder="Masukkan Nama Sekolah/Kolej/Universiti Anak Anda">
					</div>
		 		</div>
				<div class="form-row">
					<div class="form-group col-md-1">
						<label for="BilNo" class="text-white">No.</label>
						<input type="text" class="form-control-plaintext text-white" id="BilNo2" name="bilno2" value="2" readonly>
					</div>
					<div class="form-group col-md-5">
						<label for="Nama" class="text-white">Nama</label>
						<input type="text" class="form-control" id="NamaAnak2" name="namaAnak2" placeholder="Masukkan Nama Anak Anda">
					</div>
					<div class="form-group col-md-1">
						<label for="Umur" class="text-white">Umur</label>
						<input type="text" class="form-control" id="Umur2" name="umur2" placeholder="Age">
					</div>
					<div class="form-group col-md-5">
						<label for="Sekolah" class="text-white">Sekolah/Kolej/Universiti</label>
						<input type="text" class="form-control" id="Sekolah2" name="sekolah2" placeholder="Masukkan Nama Sekolah/Kolej/Universiti Anak Anda">
					</div>
		 		</div>
				<div class="form-row">
					<div class="form-group col-md-1">
						<label for="BilNo" class="text-white">No.</label>
						<input type="text" class="form-control-plaintext text-white" id="BilNo3" name="bilno3" value="3" readonly>
					</div>
					<div class="form-group col-md-5">
						<label for="Nama" class="text-white">Nama</label>
						<input type="text" class="form-control" id="NamaAnak3" name="namaAnak3" placeholder="Masukkan Nama Anak Anda">
					</div>
					<div class="form-group col-md-1">
						<label for="Umur" class="text-white">Umur</label>
						<input type="text" class="form-control" id="Umur3" name="umur3" placeholder="Age">
					</div>
					<div class="form-group col-md-5">
						<label for="Sekolah" class="text-white">Sekolah/Kolej/Universiti</label>
						<input type="text" class="form-control" id="Sekolah3" name="sekolah3" placeholder="Masukkan Nama Sekolah/Kolej/Universiti Anak Anda">
					</div>
		 		</div>
				<div class="form-row">
					<div class="form-group col-md-1">
						<label for="BilNo" class="text-white">No.</label>
						<input type="text" class="form-control-plaintext text-white" id="BilNo4" name="bilno4" value="4" readonly>
					</div>
					<div class="form-group col-md-5">
						<label for="Nama" class="text-white">Nama</label>
						<input type="text" class="form-control" id="NamaAnak4" name="namaAnak4" placeholder="Masukkan Nama Anak Anda">
					</div>
					<div class="form-group col-md-1">
						<label for="Umur" class="text-white">Umur</label>
						<input type="text" class="form-control" id="Umur4" name="umur4" placeholder="Age">
					</div>
					<div class="form-group col-md-5">
						<label for="Sekolah" class="text-white">Sekolah/Kolej/Universiti</label>
						<input type="text" class="form-control" id="Sekolah4" name="sekolah4" placeholder="Masukkan Nama Sekolah/Kolej/Universiti Anak Anda">
					</div>
		 		</div>
				<div class="form-row">
					<div class="form-group col-md-1">
						<label for="BilNo" class="text-white">No.</label>
						<input type="text" class="form-control-plaintext text-white" id="BilNo5" name="bilno5" value="5" readonly>
					</div>
					<div class="form-group col-md-5">
						<label for="Nama" class="text-white">Nama</label>
						<input type="text" class="form-control" id="NamaAnak5" name="namaAnak5" placeholder="Masukkan Nama Anak Anda">
					</div>
					<div class="form-group col-md-1">
						<label for="Umur" class="text-white">Umur</label>
						<input type="text" class="form-control" id="Umur5" name="umur5" placeholder="Age">
					</div>
					<div class="form-group col-md-5">
						<label for="Sekolah" class="text-white">Sekolah/Kolej/Universiti</label>
						<input type="text" class="form-control" id="Sekolah5" name="sekolah5" placeholder="Masukkan Nama Sekolah/Kolej/Universiti Anak Anda">
					</div>
		 		</div>
				<div class="form-row">
					<div class="form-group col-md-1">
						<label for="BilNo" class="text-white">No.</label>
						<input type="text" class="form-control-plaintext text-white" id="BilNo6" name="bilno6" value="6" readonly>
					</div>
					<div class="form-group col-md-5">
						<label for="Nama" class="text-white">Nama</label>
						<input type="text" class="form-control" id="NamaAnak6" name="namaAnak6" placeholder="Masukkan Nama Anak Anda">
					</div>
					<div class="form-group col-md-1">
						<label for="Umur" class="text-white">Umur</label>
						<input type="text" class="form-control" id="Umur6" name="umur6" placeholder="Age">
					</div>
					<div class="form-group col-md-5">
						<label for="Sekolah" class="text-white">Sekolah/Kolej/Universiti</label>
						<input type="text" class="form-control" id="Sekolah6" name="sekolah6" placeholder="Masukkan Nama Sekolah/Kolej/Universiti Anak Anda">
					</div>
		 		</div>
				<div class="form-row">
					<div class="form-group col-md-1">
						<label for="BilNo" class="text-white">No.</label>
						<input type="text" class="form-control-plaintext text-white" id="BilNo7" name="bilno7" value="7" readonly>
					</div>
					<div class="form-group col-md-5">
						<label for="Nama" class="text-white">Nama</label>
						<input type="text" class="form-control" id="NamaAnak7" name="namaAnak7" placeholder="Masukkan Nama Anak Anda">
					</div>
					<div class="form-group col-md-1">
						<label for="Umur" class="text-white">Umur</label>
						<input type="text" class="form-control" id="Umur7" name="umur7" placeholder="Age">
					</div>
					<div class="form-group col-md-5">
						<label for="Sekolah" class="text-white">Sekolah/Kolej/Universiti</label>
						<input type="text" class="form-control" id="Sekolah7" name="sekolah7" placeholder="Masukkan Nama Sekolah/Kolej/Universiti Anak Anda">
					</div>
		 		</div>
				<div class="form-row">
					<div class="form-group col-md-1">
						<label for="BilNo" class="text-white">No.</label>
						<input type="text" class="form-control-plaintext text-white" id="BilNo8" name="bilno8" value="8" readonly>
					</div>
					<div class="form-group col-md-5">
						<label for="Nama" class="text-white">Nama</label>
						<input type="text" class="form-control" id="NamaAnak8" name="namaAnak8" placeholder="Masukkan Nama Anak Anda">
						<div class="invalid-feedback">Must be a valid name</div>
					</div>
					<div class="form-group col-md-1">
						<label for="Umur" class="text-white">Umur</label>
						<input type="text" class="form-control" id="Umur8" name="umur8" placeholder="Age">
						<div class="invalid-feedback">Must be a valid number (E.g. 10)</div>
					</div>
					<div class="form-group col-md-5">
						<label for="Sekolah" class="text-white">Sekolah/Kolej/Universiti</label>
						<input type="text" class="form-control" id="Sekolah8" name="sekolah8" placeholder="Masukkan Nama Sekolah/Kolej/Universiti Anak Anda">
					</div>
		 		</div>
				<div class="form-row">
					<div class="form-group col-md-1">
						<label for="BilNo" class="text-white">No.</label>
						<input type="text" class="form-control-plaintext text-white" id="BilNo9" name="bilno9" value="9" readonly>
					</div>
					<div class="form-group col-md-5">
						<label for="Nama" class="text-white">Nama</label>
						<input type="text" class="form-control" id="NamaAnak9" name="namaAnak9" placeholder="Masukkan Nama Anak Anda">
					</div>
					<div class="form-group col-md-1">
						<label for="Umur" class="text-white">Umur</label>
						<input type="text" class="form-control" id="Umur9" name="umur9" placeholder="Age">
					</div>
					<div class="form-group col-md-5">
						<label for="Sekolah" class="text-white">Sekolah/Kolej/Universiti</label>
						<input type="text" class="form-control" id="Sekolah9" name="sekolah9" placeholder="Masukkan Nama Sekolah/Kolej/Universiti Anak Anda" >
					</div>
		 		</div>
		
	<button type="button" id="Add" class="btn btn-primary add" name="button" style="width: 100px;margin-bottom: 50px; margin-top: 20px;" data-toggle="modal" data-target="#Modaladd">Add</button>
<div class="modal fade" id="Modaladd" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabelAdd" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabelAdd">Confirmation Message</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Do you want to add a new information?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
        <input type="submit" id="submit" name="submit" class="btn btn-primary" value="Yes">
      </div>
    </div>
  </div>
</div>
			</div>

		</form>
	</div>

	<script src="js/jquery-3.3.1.min.js"></script>

	<!-- Include all compiled plugins (below), or include individual files as needed -->
	
	<script src="js/popper.min.js"></script> 
	<script src="js/bootstrap-4.3.1.js"></script>
	<script src="js/myJS.js"></script>
	<script src="js/AddpageButton.js"></script>


<?php include('footer.php'); ?>
	
</html>