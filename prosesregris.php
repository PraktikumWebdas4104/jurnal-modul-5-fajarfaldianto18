if (isset($_POST['kirim'])) {
		$nim = $_POST['nim'];
		$nama = $_POST['nama'];
		$email = $_POST['email'];

		if (strlen($nim)==10) {
				if (strlen($nama)<25) {
					if (strpos($email, "@gmail.com")) {
						$qry = mysqli_query($conn, "INSERT INTO `data_mhs`(`nim`, `nama`, `email`)  
									VALUES  ('$nim', '$nama', '$email')");
						
						echo "---Berhasil----";
					}else{
						echo "-----Gagal-----";
					}
			}else{
				echo "-----Gagal------";
			}
			}else{
				echo "------Gagal------";
			}
	
	}		
?>
