<form method="POST">
	komentar : <input type="text" name="komentar"> $nbsp;
	<input type="submit" name="submit" value="cek">

</form>

<?php
	if (isset($_post['submit'])) {
		$komentar=$_post['komentar'];

		if(str_word_count($komentar)>==5){
			echo $komentar;
		}else if(str_word_count($komentar)<5){
			echo"error,kata kurang dari 5";
		}

	}

?>
